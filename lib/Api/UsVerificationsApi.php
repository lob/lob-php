<?php
/**
 * UsVerificationsApi
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
 * UsVerificationsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UsVerificationsApi
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
     * Operation verifyBulk
     *
     * verifyBulk
     *
     * @param  \OpenAPI\Client\Model\MultipleComponentsList $multiple_components_list multiple_components_list (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\UsVerifications|\OpenAPI\Client\Model\LobError
     */
    public function verifyBulk($multiple_components_list, $case = 'upper')
    {
        $response = $this->verifyBulkWithHttpInfo($multiple_components_list, $case);
        return $response;
    }

    /**
     * Operation verifyBulkWithHttpInfo
     *
     * verifyBulk
     *
     * @param  \OpenAPI\Client\Model\MultipleComponentsList $multiple_components_list (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\UsVerifications|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifyBulkWithHttpInfo($multiple_components_list, $case = 'upper')
    {
        $request = $this->verifyBulkRequest($multiple_components_list, $case);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\UsVerifications', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'verifyBulk'
     *
     * @param  \OpenAPI\Client\Model\MultipleComponentsList $multiple_components_list (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function verifyBulkRequest($multiple_components_list, $case = 'upper')
    {
        // verify the required parameter 'multiple_components_list' is set
        if ($multiple_components_list === null || (is_array($multiple_components_list) && count($multiple_components_list) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $multiple_components_list when calling verifyBulk'
            );
        }

        $resourcePath = '/bulk/us_verifications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($case !== null) {
            $queryParams['case'] = $case;
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
        );

        // for model (json/xml)
        if (isset($multiple_components_list)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($multiple_components_list));
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
     * Operation verifySingle
     *
     * verifySingle
     *
     * @param  \OpenAPI\Client\Model\UsVerificationsWritable $us_verifications_writable us_verifications_writable (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\UsVerification|\OpenAPI\Client\Model\LobError
     */
    public function verifySingle($us_verifications_writable, $case = 'upper')
    {
        $response = $this->verifySingleWithHttpInfo($us_verifications_writable, $case);
        return $response;
    }

    /**
     * Operation verifySingleWithHttpInfo
     *
     * verifySingle
     *
     * @param  \OpenAPI\Client\Model\UsVerificationsWritable $us_verifications_writable (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\UsVerification|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function verifySingleWithHttpInfo($us_verifications_writable, $case = 'upper')
    {
        $request = $this->verifySingleRequest($us_verifications_writable, $case);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\UsVerification', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'verifySingle'
     *
     * @param  \OpenAPI\Client\Model\UsVerificationsWritable $us_verifications_writable (required)
     * @param  string $case Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. (optional, default to 'upper')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function verifySingleRequest($us_verifications_writable, $case = 'upper')
    {
        // verify the required parameter 'us_verifications_writable' is set
        if ($us_verifications_writable === null || (is_array($us_verifications_writable) && count($us_verifications_writable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $us_verifications_writable when calling verifySingle'
            );
        }

        $resourcePath = '/us_verifications';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // query params
        if ($case !== null) {
            $queryParams['case'] = $case;
        }




        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
        );

        // for model (json/xml)
        if (isset($us_verifications_writable)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($us_verifications_writable));
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
