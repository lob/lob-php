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
use Guzzle\Http\Client as HttpClient;
use Lob\Lob;
use Lob\ResourceInterface;
use Lob\Exception\AuthorizationException;
use Lob\Exception\InternalErrorException;
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

    public function retrieveList(array $query = array())
    {
        return $this->sendRequest(
            'GET',
            $this->lob->getVersion(),
            $this->resourceName(),
            $query,
            array()
        );
    }

    public function create(array $data)
    {
        return $this->sendRequest(
            'POST',
            $this->lob->getVersion(),
            $this->resourceName(),
            array(),
            $data
        );
    }

    public function retrieve($id)
    {
        return $this->sendRequest(
            'GET',
            $this->lob->getVersion(),
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

    protected function sendRequest($method, $version, $path, array $query, 
        array $body = null)
    {
        $path = '/'.$version.'/'.$path;
        $headers = array(
            'Accept' => 'application/json; charset=utf-8',
            'User-Agent' => 'lob-php-wrapper-v1',
        );
        $queryString = '';
        if (!empty($query)) {
            $queryString = '?'.http_build_query($query);
        }

        $client = new HttpClient('https://api.lob.com');
        $request = $client->createRequest($method, $path.$queryString, $headers);
        $request->setAuth($this->lob->getApiKey(), '');
        if ($body) {
            $request->setBody($body, 'application/x-www-form-urlencoded');
        }
        
        try {
            $response = $request->send();
        } catch(GuzzleException $e) {
            $responseErrorBody = strval($e->getResponse()->getBody());
            $errorMessage = $this->errorMessageFromJsonBody($responseErrorBody);
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401)
                throw new AuthorizationException('Unauthorized', 401);

            if ($statusCode === 404)
                throw new ResourceNotFoundException($errorMessage, 404);

            if ($statusCode === 422)
                throw new ValidationException($errorMessage, 422);

            if ($statusCode === 500)
                throw new InternalErrorException($errorMessage, 500);

            throw new UnexpectedErrorException('An Unexpected Error has occurred.');
        } catch (Exception $e) {
            throw new UnexpectedErrorException('An Unexpected Error has occurred.');
        }

        return $response->json();
    }

    protected function errorMessageFromJsonBody($body)
    {
        $response = json_decode($body, true);
        if (is_array($response) && array_key_exists('errors', $response)) {
            $error = reset($response['errors']);

            return $error['message'];
        }
        
        return 'An Internal Error has occurred';
    }
}