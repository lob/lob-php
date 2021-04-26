<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ConnectException;
use Lob\Exception\AuthorizationException;
use Lob\Exception\ForbiddenException;
use Lob\Exception\InternalErrorException;
use Lob\Exception\NetworkErrorException;
use Lob\Exception\ResourceNotFoundException;
use Lob\Exception\UnexpectedErrorException;
use Lob\Exception\ValidationException;
use Lob\Exception\RateLimitException;

abstract class ResourceBase implements ResourceInterface
{
    protected $lob;

    protected $client;

    private static $file_parameters = array('front', 'back', 'file', 'check_bottom', 'attachment', 'inside', 'outside');

    public function __construct(Lob $lob)
    {
        $this->lob = $lob;
        $this->client = new Client(array('base_uri' => 'https://api.lob.com'));
    }

    public function all(array $query = array())
    {
        return $this->sendRequest(
            'GET',
            $this->resourceName(),
            $query
        );
    }

    public function create(array $data, array $headers = null)
    {
        if (array_key_exists('merge_variables', $data))
            $data['merge_variables'] = json_encode($data['merge_variables']);

        return $this->sendRequest(
            'POST',
            $this->resourceName(),
            array(),
            $data,
            $headers
        );
    }

    public function get($id)
    {
        return $this->sendRequest(
            'GET',
            $this->resourceName().'/'.strval($id)
        );
    }

    public function delete($id)
    {
        return $this->sendRequest(
            'DELETE',
            $this->resourceName().'/'.strval($id)
        );
    }

    protected function resourceName()
    {
        $class = explode('\\', strtolower(get_called_class()));

        return array_pop($class);
    }

    protected function sendRequest($method, $path, array $query = array(), array $body = null, array $headers = null)
    {
        $path = $this->getPath($path, $query);
        $options = $this->getOptions($body, $headers);

        try {
            $response = $this->client->request($method, $path, $options);
        } catch (ConnectException $e) {
            // @codeCoverageIgnoreStart
            throw new NetworkErrorException($e->getMessage());
            // @codeCoverageIgnoreEnd
        } catch (GuzzleException $e) {
            if (!$e->hasResponse()) {
                throw new UnexpectedErrorException('An Unexpected Error has occurred: ' . $e->getMessage());
            }

            $responseErrorBody = strval($e->getResponse()->getBody());
            $errorMessage = $this->errorMessageFromJsonBody($responseErrorBody);
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401)
                throw new AuthorizationException($errorMessage, 401);

            if ($statusCode === 403)
                throw new ForbiddenException($errorMessage, 403);

            if ($statusCode === 404)
                throw new ResourceNotFoundException($errorMessage, 404);

            if ($statusCode === 422)
                throw new ValidationException($errorMessage, 422);

            // @codeCoverageIgnoreStart
            if ($statusCode === 429)
                throw new RateLimitException($errorMessage, 429);

            if ($statusCode >= 500)
                throw new InternalErrorException($errorMessage, $statusCode);

            throw new UnexpectedErrorException('An Unexpected Error has occurred: ' . $e->getMessage());
        } catch (Exception $e) {
            throw new UnexpectedErrorException('An Unexpected Error has occurred: ' . $e->getMessage());
            // @codeCoverageIgnoreEnd
        }

        return json_decode($response->getBody(), true);
    }

    protected function getPath($path, array $query = array())
    {
        $path = '/v1/'.$path;
        $queryString = '';
        if (!empty($query)) {
            $queryString = '?'.http_build_query($query);
        }
        return $path.$queryString;
    }

    protected function getOptions(array $body = null, array $headers = null)
    {
        $options = array(
            'headers' => array(
                'Accept' => 'application/json; charset=utf-8',
                'User-Agent' => 'Lob/v1 PhpBindings/' . $this->lob->getClientVersion(),
            ),
            'auth' => array($this->lob->getApiKey(), '')
        );

        if ($headers) {
            $options['headers'] = array_merge($options['headers'], $headers);
        }

        if ($version = $this->lob->getVersion()) {
            $options['headers']['Lob-Version'] = $version;
        }

        if (!$body) {
            return $options;
        }

        $body = $this->stringifyBooleans($body);
        $files = array_filter($body, function ($element) {
            return (is_string($element) && strpos($element, '@') === 0);
        });

        if(!$files) {
            $options['form_params'] = $body;
            return $options;
        }

        $body = $this->flattenArray($body);
        $options['multipart'] = array();
        foreach($body as $key => $value) {
            $element = array(
                'name' => $key,
                'contents' => $value
            );

            if (in_array($key, self::$file_parameters) && (is_string($value) && strpos($value, '@') === 0)) {
                $element['contents'] = fopen(substr($value, 1), 'r');
            }

            $options['multipart'][] = $element;
        }

        return $options;
    }

    /*
     * Because guzzle uses http_build_query it will turn all booleans into '' and '1' for
     * false and true respectively. This function will turn all booleans into the string
     * literal 'false' and 'true'
     */
    protected function stringifyBooleans($body)
    {
        return array_map(function($value) {
            if (is_bool($value)) {
                return $value ? 'true' : 'false';
            } else if (is_array($value)) {
                return $this->stringifyBooleans($value);
            }
            return $value;
        }, $body);
    }

    /*
     * This method is needed because multipart guzzle requests cannot have nested data
     * This function will take:
     * array(
     *     'foo' => array(
     *         'bar' => 'baz'
     *     )
     * )
     * And convert it to:
     * array(
     *     'foo[bar]' => 'baz'
     * )
     */
    protected function flattenArray(array $body, $prefix = '')
    {
        $newBody = array();
        foreach ($body as $k => $v) {
            $key = (!strlen($prefix)) ? $k : "{$prefix}[{$k}]";
            if (is_array($v)) {
                $newBody += $this->flattenArray($v, $key);
            } else {
                $newBody[$key] = $v;
            }
        }
        return $newBody;
    }

    protected function errorMessageFromJsonBody($body)
    {
        $response = json_decode($body, true);
        if (is_array($response) && array_key_exists('error', $response)) {
            $error = $response['error'];

            return $error['message'];
        }
        // @codeCoverageIgnoreStart
        // Pokemon handling is tough to test... "Gotta catch em all!"
        return 'An Internal Error has occurred';
        // @codeCoverageIgnoreEnd
    }
}
