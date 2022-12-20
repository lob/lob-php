<?php
/**
 * BuckslipOrdersApi
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
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;
use OpenAPI\Client\Model\LobError;
use Jean85\PrettyVersions;

/**
 * BuckslipOrdersApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BuckslipOrdersApi
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
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  \OpenAPI\Client\Model\BuckslipOrderEditable $buckslip_order_editable buckslip_order_editable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\BuckslipOrder|\OpenAPI\Client\Model\LobError
     */
    public function create($buckslip_id, $buckslip_order_editable)
    {
        $response = $this->createWithHttpInfo($buckslip_id, $buckslip_order_editable);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * create
     *
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  \OpenAPI\Client\Model\BuckslipOrderEditable $buckslip_order_editable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\BuckslipOrder|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($buckslip_id, $buckslip_order_editable)
    {
        $request = $this->createRequest($buckslip_id, $buckslip_order_editable);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\BuckslipOrder', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'create'
     *
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  \OpenAPI\Client\Model\BuckslipOrderEditable $buckslip_order_editable (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($buckslip_id, $buckslip_order_editable)
    {
        // verify the required parameter 'buckslip_id' is set
        if ($buckslip_id === null || (is_array($buckslip_id) && count($buckslip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $buckslip_id when calling create'
            );
        }
        if (!preg_match("/^bck_[a-zA-Z0-9]+$/", $buckslip_id)) {
            throw new \InvalidArgumentException("invalid value for \"buckslip_id\" when calling BuckslipOrdersApi.create, must conform to the pattern /^bck_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'buckslip_order_editable' is set
        if ($buckslip_order_editable === null || (is_array($buckslip_order_editable) && count($buckslip_order_editable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $buckslip_order_editable when calling create'
            );
        }

        $resourcePath = '/buckslips/{buckslip_id}/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($buckslip_id !== null) {
            $resourcePath = str_replace(
                '{' . 'buckslip_id' . '}',
                ObjectSerializer::toPathValue($buckslip_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
        );

        // for model (json/xml)
        if (isset($buckslip_order_editable)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($buckslip_order_editable));
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
     * Operation get
     *
     * get
     *
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  int $offset An integer that designates the offset at which to begin returning results. Defaults to 0. (optional, default to 0)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\BuckslipOrdersList|\OpenAPI\Client\Model\LobError
     */
    public function get($buckslip_id, $limit = 10, $offset = 0)
    {
        $response = $this->getWithHttpInfo($buckslip_id, $limit, $offset);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * get
     *
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  int $offset An integer that designates the offset at which to begin returning results. Defaults to 0. (optional, default to 0)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\BuckslipOrdersList|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($buckslip_id, $limit = 10, $offset = 0)
    {
        $request = $this->getRequest($buckslip_id, $limit, $offset);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\BuckslipOrdersList', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'get'
     *
     * @param  string $buckslip_id The ID of the buckslip to which the buckslip orders belong. (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  int $offset An integer that designates the offset at which to begin returning results. Defaults to 0. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($buckslip_id, $limit = 10, $offset = 0)
    {
        // verify the required parameter 'buckslip_id' is set
        if ($buckslip_id === null || (is_array($buckslip_id) && count($buckslip_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $buckslip_id when calling get'
            );
        }
        if (!preg_match("/^bck_[a-zA-Z0-9]+$/", $buckslip_id)) {
            throw new \InvalidArgumentException("invalid value for \"buckslip_id\" when calling BuckslipOrdersApi.get, must conform to the pattern /^bck_[a-zA-Z0-9]+$/.");
        }

        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BuckslipOrdersApi.get, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling BuckslipOrdersApi.get, must be bigger than or equal to 1.');
        }


        $resourcePath = '/buckslips/{buckslip_id}/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $offset;
        }


        // path params
        if ($buckslip_id !== null) {
            $resourcePath = str_replace(
                '{' . 'buckslip_id' . '}',
                ObjectSerializer::toPathValue($buckslip_id),
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
