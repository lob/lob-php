<?php
/**
 * AddressesApi
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;
use OpenAPI\Client\Model\LobError;
use Jean85\PrettyVersions;

/**
 * AddressesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddressesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    protected $customHeaders;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $customHeaders = [],
        $hostIndex = 0
    ) {
        $this->config = $config ?: new Configuration();
        $this->client = $client ?: new Client();
        $this->customHeaders = $customHeaders;
        $this->headerSelector = $selector ?: new HeaderSelector();

    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    private function modified_build(array $params, $encoding = PHP_QUERY_RFC3986): string
    {
        if (!$params) {
            return '';
        }

        if ($encoding === false) {
            $encoder = function (string $str): string {
                return $str;
            };
        } elseif ($encoding === PHP_QUERY_RFC3986) {
            $encoder = 'rawurlencode';
        } elseif ($encoding === PHP_QUERY_RFC1738) {
            $encoder = 'urlencode';
        } else {
            throw new \InvalidArgumentException('Invalid type');
        }

        $qs = '';
        foreach ($params as $k => $v) {
            $k = $encoder((string) $k);
            if (!is_array($v)) {
                $qs .= $k;
                if (is_bool($v)) {
                    $v = $v ? 'True' : 'False';
                }
                if (is_object($v)) {
                    $v = \GuzzleHttp\json_encode($v);
                }
                if ($v !== null) {
                    $qs .= '=' . $encoder((string) $v);
                }
                $qs .= '&';
            } else {
                foreach ($v as $kk=>$vv) {
                    $qs .= $k;
                    $vv = is_bool($vv) ? (int) $vv : $vv;
                    if ($vv !== null) {
                        $qs .= '[' . $kk . "]=" . $encoder((string) $vv);
                    }
                    $qs .= '&';
                }
            }
        }

        return $qs ? (string) substr($qs, 0, -1) : '';
    }

    /**
     * Operation create
     *
     * create
     *
     * @param  \OpenAPI\Client\Model\AddressEditable $address_editable address_editable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Address|\OpenAPI\Client\Model\LobError
     */
    public function create($address_editable)
    {
        $response = $this->createWithHttpInfo($address_editable);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * create
     *
     * @param  \OpenAPI\Client\Model\AddressEditable $address_editable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Address|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($address_editable)
    {
        $request = $this->createRequest($address_editable);

        try {
            $options = $this->createHttpClientOption();
            $requestError = null;
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $errorBody = json_decode($e->getResponse()->getBody()->getContents())->error;
                $requestError = new LobError();
                $requestError->setMessage(get_object_vars($errorBody)["message"]);
                $requestError->setStatusCode(get_object_vars($errorBody)["status_code"]);
                $requestError->setCode(get_object_vars($errorBody)["code"]);

                $exception = new ApiException($requestError->getMessage(), $requestError->getStatusCode(), null, null);
                throw $exception;
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            // This catches any non-successful status
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            
            // Since all non successes are thrown above, we can assume success
            $content = (string) $response->getBody();
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Address', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'create'
     *
     * @param  \OpenAPI\Client\Model\AddressEditable $address_editable (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($address_editable)
    {
        // verify the required parameter 'address_editable' is set
        if ($address_editable === null || (is_array($address_editable) && count($address_editable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address_editable when calling create'
            );
        }

        $resourcePath = '/addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';





        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($address_editable)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($address_editable));
        }

        $defaultHeaders = [];
        $version = PrettyVersions::getVersion('lob/lob-php')->getPrettyVersion();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = "lob/lob-php/$version";
        }

        $customHeaders = $this->headerSelector->customHeaders($this->customHeaders);

        $headers = array_merge(
            $customHeaders,
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = $this->modified_build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation delete
     *
     * delete
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\AddressDeletion|\OpenAPI\Client\Model\LobError
     */
    public function delete($adr_id)
    {
        $response = $this->deleteWithHttpInfo($adr_id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * delete
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\AddressDeletion|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($adr_id)
    {
        $request = $this->deleteRequest($adr_id);

        try {
            $options = $this->createHttpClientOption();
            $requestError = null;
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $errorBody = json_decode($e->getResponse()->getBody()->getContents())->error;
                $requestError = new LobError();
                $requestError->setMessage(get_object_vars($errorBody)["message"]);
                $requestError->setStatusCode(get_object_vars($errorBody)["status_code"]);
                $requestError->setCode(get_object_vars($errorBody)["code"]);

                $exception = new ApiException($requestError->getMessage(), $requestError->getStatusCode(), null, null);
                throw $exception;
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            // This catches any non-successful status
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            
            // Since all non successes are thrown above, we can assume success
            $content = (string) $response->getBody();
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\AddressDeletion', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'delete'
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteRequest($adr_id)
    {
        // verify the required parameter 'adr_id' is set
        if ($adr_id === null || (is_array($adr_id) && count($adr_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $adr_id when calling delete'
            );
        }
        if (!preg_match("/^adr_[a-zA-Z0-9]+$/", $adr_id)) {
            throw new \InvalidArgumentException("invalid value for \"adr_id\" when calling AddressesApi.delete, must conform to the pattern /^adr_[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/addresses/{adr_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($adr_id !== null) {
            $resourcePath = str_replace(
                '{' . 'adr_id' . '}',
                ObjectSerializer::toPathValue($adr_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            []
        );

        // for model (json/xml)


        $defaultHeaders = [];
        $version = PrettyVersions::getVersion('lob/lob-php')->getPrettyVersion();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = "lob/lob-php/$version";
        }

        $customHeaders = $this->headerSelector->customHeaders($this->customHeaders);

        $headers = array_merge(
            $customHeaders,
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = $this->modified_build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation get
     *
     * get
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Address|\OpenAPI\Client\Model\LobError
     */
    public function get($adr_id)
    {
        $response = $this->getWithHttpInfo($adr_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * get
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Address|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($adr_id)
    {
        $request = $this->getRequest($adr_id);

        try {
            $options = $this->createHttpClientOption();
            $requestError = null;
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $errorBody = json_decode($e->getResponse()->getBody()->getContents())->error;
                $requestError = new LobError();
                $requestError->setMessage(get_object_vars($errorBody)["message"]);
                $requestError->setStatusCode(get_object_vars($errorBody)["status_code"]);
                $requestError->setCode(get_object_vars($errorBody)["code"]);

                $exception = new ApiException($requestError->getMessage(), $requestError->getStatusCode(), null, null);
                throw $exception;
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            // This catches any non-successful status
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            
            // Since all non successes are thrown above, we can assume success
            $content = (string) $response->getBody();
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Address', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'get'
     *
     * @param  string $adr_id id of the address (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($adr_id)
    {
        // verify the required parameter 'adr_id' is set
        if ($adr_id === null || (is_array($adr_id) && count($adr_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $adr_id when calling get'
            );
        }
        if (!preg_match("/^adr_[a-zA-Z0-9]+$/", $adr_id)) {
            throw new \InvalidArgumentException("invalid value for \"adr_id\" when calling AddressesApi.get, must conform to the pattern /^adr_[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/addresses/{adr_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($adr_id !== null) {
            $resourcePath = str_replace(
                '{' . 'adr_id' . '}',
                ObjectSerializer::toPathValue($adr_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            []
        );

        // for model (json/xml)


        $defaultHeaders = [];
        $version = PrettyVersions::getVersion('lob/lob-php')->getPrettyVersion();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = "lob/lob-php/$version";
        }

        $customHeaders = $this->headerSelector->customHeaders($this->customHeaders);

        $headers = array_merge(
            $customHeaders,
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = $this->modified_build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation list
     *
     * list
     *
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     * @param  array<string,string> $metadata Filter by metadata key-value pair&#x60;. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\AddressList|\OpenAPI\Client\Model\LobError
     */
    public function list($limit = 10, $before = null, $after = null, $include = null, $date_created = null, $metadata = null)
    {
        $response = $this->listWithHttpInfo($limit, $before, $after, $include, $date_created, $metadata);
        return $response;
    }

    /**
     * Operation listWithHttpInfo
     *
     * list
     *
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     * @param  array<string,string> $metadata Filter by metadata key-value pair&#x60;. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\AddressList|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWithHttpInfo($limit = 10, $before = null, $after = null, $include = null, $date_created = null, $metadata = null)
    {
        $request = $this->listRequest($limit, $before, $after, $include, $date_created, $metadata);

        try {
            $options = $this->createHttpClientOption();
            $requestError = null;
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                $errorBody = json_decode($e->getResponse()->getBody()->getContents())->error;
                $requestError = new LobError();
                $requestError->setMessage(get_object_vars($errorBody)["message"]);
                $requestError->setStatusCode(get_object_vars($errorBody)["status_code"]);
                $requestError->setCode(get_object_vars($errorBody)["code"]);

                $exception = new ApiException($requestError->getMessage(), $requestError->getStatusCode(), null, null);
                throw $exception;
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            // This catches any non-successful status
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            
            // Since all non successes are thrown above, we can assume success
            $content = (string) $response->getBody();
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\AddressList', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'list'
     *
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     * @param  array<string,string> $metadata Filter by metadata key-value pair&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($limit = 10, $before = null, $after = null, $include = null, $date_created = null, $metadata = null)
    {
        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AddressesApi.list, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling AddressesApi.list, must be bigger than or equal to 1.');
        }

        if ($metadata !== null && strlen($metadata) > 500) {
            throw new \InvalidArgumentException('invalid length for "$metadata" when calling AddressesApi.list, must be smaller than or equal to 500.');
        }
        if ($metadata !== null && !preg_match("/[^\"\\\\]{0,500}/", $metadata)) {
            throw new \InvalidArgumentException("invalid value for \"metadata\" when calling AddressesApi.list, must conform to the pattern /[^\"\\\\]{0,500}/.");
        }


        $resourcePath = '/addresses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }
        // query params
        if ($before !== null) {
            $queryParams['before'] = $before;
        }
        // query params
        if ($after !== null) {
            $queryParams['after'] = $after;
        }
        // query params
        if ($include !== null) {
            $queryParams['include'] = $include;
        }
        // query params
        if ($date_created !== null) {
            $queryParams['date_created'] = $date_created;
        }
        // query params
        if ($metadata !== null) {
            $queryParams['metadata'] = $metadata;
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            []
        );

        // for model (json/xml)


        $defaultHeaders = [];
        $version = PrettyVersions::getVersion('lob/lob-php')->getPrettyVersion();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = "lob/lob-php/$version";
        }

        $customHeaders = $this->headerSelector->customHeaders($this->customHeaders);

        $headers = array_merge(
            $customHeaders,
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = $this->modified_build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = array(
            'headers' => array(
                'Accept' => 'application/json; charset=utf-8',
                'User-Agent' => 'Lob/v1 PhpBindings/' . 'TODO', // TODO
            ),
            'auth' => array($this->getConfig()->getApiKey('basic'), '')
        );
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
