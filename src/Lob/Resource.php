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
use Guzzle\Common\Exception\GuzzleException;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Client as HttpClient;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Lob\Exception\AuthorizationException;
use Lob\Exception\InternalErrorException;
use Lob\Exception\NetworkErrorException;
use Lob\Exception\ResourceNotFoundException;
use Lob\Exception\UnexpectedErrorException;
use Lob\Exception\ValidationException;

abstract class Resource implements ResourceInterface
{
    protected $lob;

    public function __construct(Lob $lob)
    {
        $this->lob = $lob;
    }

    public function all(array $query = array(), $includeMeta = false)
    {
        $all = $this->sendRequest(
            'GET',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            $this->resourceName(),
            $query,
            array()
        );
        if ($includeMeta) {
            return $all;
        }

        return $all['data'];
    }

    public function create(array $data)
    {
        return $this->sendRequest(
            'POST',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            $this->resourceName(),
            array(),
            $data
        );
    }

    public function get($id)
    {
        return $this->sendRequest(
            'GET',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            $this->resourceName().'/'.strval($id),
            array(),
            array()
        );
    }

    public function delete($id)
    {
        return $this->sendRequest(
            'DELETE',
            $this->lob->getVersion(),
            $this->lob->getClientVersion(),
            $this->resourceName().'/'.strval($id),
            array(),
            array()
        );
    }

    protected function resourceName()
    {
        $class = explode('\\', strtolower(get_called_class()));

        return array_pop($class);
    }

    protected function sendRequest($method, $version, $clientVersion, $path,
        array $query, array $body = null)
    {
        $request = $this->prepareRequest($method, $version, $clientVersion,
          $path, $query, $body);

        try {
            $response = $request->send();
            //@codeCoverageIgnoreStart
            // There is no way to induce this error intentionally.
        } catch (CurlException $e) {
            throw new NetworkErrorException($e->getMessage());
            //@codeCoverageIgnoreEnd
        } catch (GuzzleException $e) {
            $responseErrorBody = strval($e->getResponse()->getBody());
            $errorMessage = $this->errorMessageFromJsonBody($responseErrorBody);
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401)
                throw new AuthorizationException('Unauthorized', 401);

            if ($method == 'GET' && ($statusCode === 404 || $statusCode === 422))
                throw new ResourceNotFoundException($errorMessage, 404);

            if ($method == 'POST' && $statusCode === 404)
                throw new ResourceNotFoundException($errorMessage, 404);

            if ($statusCode === 422)
                throw new ValidationException($errorMessage, 422);
            // @codeCoverageIgnoreStart
            // must induce serverside error to test this, so not testable
            if ($statusCode === 500)
                throw new InternalErrorException($errorMessage, 500);
            // @codeCoverageIgnoreEnd

            // @codeCoverageIgnoreStart
            // not possible to test this code because we don't return other status codes
            throw new UnexpectedErrorException('An Unexpected Error has occurred.');
        } catch (Exception $e) {
            throw new UnexpectedErrorException('An Unexpected Error has occurred.');
        }
            // @codeCoverageIgnoreEnd

        return $response->json();
    }

    protected function prepareRequest($method, $version, $clientVersion, $path, array $query,
        array $body = null)
    {
        $path = '/v1/'.$path;
        $headers = array(
            'Accept' => 'application/json; charset=utf-8',
            'User-Agent' => 'Lob/v1 PhpBindings/' . $clientVersion,
        );

        if ($version) {
            $headers['Lob-Version'] = $version;
        }

        $queryString = '';
        if (!empty($query)) {
            $queryString = '?'.http_build_query($query);
        }

        $client = new HttpClient('https://api.lob.com');

        foreach ($body as $key => $value) {
          if ($value === FALSE) {
            $body[$key] = 'false';
          }

          if ($value === TRUE) {
            $body[$key] = 'true';
          }
        }

        $request = $client->createRequest($method, $path.$queryString, $headers);
        $request->setAuth($this->lob->getApiKey(), '');
        if ($body) {
            $this->handleRequestBody($request, $body);
        }

        return $request;
    }

    protected function handleRequestBody(
        EntityEnclosingRequestInterface $request, array $data)
    {
        $files = array_filter($data, function ($element) {
            return (is_string($element) && strpos($element, '@') === 0);
        });

        $request->addPostFields($data);
        if ($files) {
            $request->addPostFiles($files);
        }
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
