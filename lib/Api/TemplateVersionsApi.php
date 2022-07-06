<?php
/**
 * TemplateVersionsApi
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
 * TemplateVersionsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplateVersionsApi
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
                $v = is_bool($v) ? (int) $v : $v;
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
     * @param  string $tmpl_id The ID of the template the new version will be attached to (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionWritable $template_version_writable template_version_writable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError
     */
    public function create($tmpl_id, $template_version_writable)
    {
        $response = $this->createWithHttpInfo($tmpl_id, $template_version_writable);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * create
     *
     * @param  string $tmpl_id The ID of the template the new version will be attached to (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionWritable $template_version_writable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($tmpl_id, $template_version_writable)
    {
        $request = $this->createRequest($tmpl_id, $template_version_writable);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\TemplateVersion', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'create'
     *
     * @param  string $tmpl_id The ID of the template the new version will be attached to (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionWritable $template_version_writable (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createRequest($tmpl_id, $template_version_writable)
    {
        // verify the required parameter 'tmpl_id' is set
        if ($tmpl_id === null || (is_array($tmpl_id) && count($tmpl_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tmpl_id when calling create'
            );
        }
        if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $tmpl_id)) {
            throw new \InvalidArgumentException("invalid value for \"tmpl_id\" when calling TemplateVersionsApi.create, must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'template_version_writable' is set
        if ($template_version_writable === null || (is_array($template_version_writable) && count($template_version_writable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_version_writable when calling create'
            );
        }

        $resourcePath = '/templates/{tmpl_id}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($tmpl_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tmpl_id' . '}',
                ObjectSerializer::toPathValue($tmpl_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
        );

        // for model (json/xml)
        if (isset($template_version_writable)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($template_version_writable));
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
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\TemplateVersionDeletion|\OpenAPI\Client\Model\LobError
     */
    public function delete($tmpl_id, $vrsn_id)
    {
        $response = $this->deleteWithHttpInfo($tmpl_id, $vrsn_id);
        return $response;
    }

    /**
     * Operation deleteWithHttpInfo
     *
     * delete
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\TemplateVersionDeletion|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWithHttpInfo($tmpl_id, $vrsn_id)
    {
        $request = $this->deleteRequest($tmpl_id, $vrsn_id);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\TemplateVersionDeletion', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'delete'
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteRequest($tmpl_id, $vrsn_id)
    {
        // verify the required parameter 'tmpl_id' is set
        if ($tmpl_id === null || (is_array($tmpl_id) && count($tmpl_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tmpl_id when calling delete'
            );
        }
        if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $tmpl_id)) {
            throw new \InvalidArgumentException("invalid value for \"tmpl_id\" when calling TemplateVersionsApi.delete, must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'vrsn_id' is set
        if ($vrsn_id === null || (is_array($vrsn_id) && count($vrsn_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $vrsn_id when calling delete'
            );
        }
        if (!preg_match("/^vrsn_[a-zA-Z0-9]+$/", $vrsn_id)) {
            throw new \InvalidArgumentException("invalid value for \"vrsn_id\" when calling TemplateVersionsApi.delete, must conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/templates/{tmpl_id}/versions/{vrsn_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($tmpl_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tmpl_id' . '}',
                ObjectSerializer::toPathValue($tmpl_id),
                $resourcePath
            );
        }
        // path params
        if ($vrsn_id !== null) {
            $resourcePath = str_replace(
                '{' . 'vrsn_id' . '}',
                ObjectSerializer::toPathValue($vrsn_id),
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
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError
     */
    public function get($tmpl_id, $vrsn_id)
    {
        $response = $this->getWithHttpInfo($tmpl_id, $vrsn_id);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * get
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($tmpl_id, $vrsn_id)
    {
        $request = $this->getRequest($tmpl_id, $vrsn_id);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\TemplateVersion', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'get'
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($tmpl_id, $vrsn_id)
    {
        // verify the required parameter 'tmpl_id' is set
        if ($tmpl_id === null || (is_array($tmpl_id) && count($tmpl_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tmpl_id when calling get'
            );
        }
        if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $tmpl_id)) {
            throw new \InvalidArgumentException("invalid value for \"tmpl_id\" when calling TemplateVersionsApi.get, must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'vrsn_id' is set
        if ($vrsn_id === null || (is_array($vrsn_id) && count($vrsn_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $vrsn_id when calling get'
            );
        }
        if (!preg_match("/^vrsn_[a-zA-Z0-9]+$/", $vrsn_id)) {
            throw new \InvalidArgumentException("invalid value for \"vrsn_id\" when calling TemplateVersionsApi.get, must conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/templates/{tmpl_id}/versions/{vrsn_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($tmpl_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tmpl_id' . '}',
                ObjectSerializer::toPathValue($tmpl_id),
                $resourcePath
            );
        }
        // path params
        if ($vrsn_id !== null) {
            $resourcePath = str_replace(
                '{' . 'vrsn_id' . '}',
                ObjectSerializer::toPathValue($vrsn_id),
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
     * Operation update
     *
     * update
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionUpdatable $template_version_updatable template_version_updatable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError
     */
    public function update($tmpl_id, $vrsn_id, $template_version_updatable)
    {
        $response = $this->updateWithHttpInfo($tmpl_id, $vrsn_id, $template_version_updatable);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * update
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionUpdatable $template_version_updatable (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\TemplateVersion|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($tmpl_id, $vrsn_id, $template_version_updatable)
    {
        $request = $this->updateRequest($tmpl_id, $vrsn_id, $template_version_updatable);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\TemplateVersion', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'update'
     *
     * @param  string $tmpl_id The ID of the template to which the version belongs. (required)
     * @param  string $vrsn_id id of the template_version (required)
     * @param  \OpenAPI\Client\Model\TemplateVersionUpdatable $template_version_updatable (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateRequest($tmpl_id, $vrsn_id, $template_version_updatable)
    {
        // verify the required parameter 'tmpl_id' is set
        if ($tmpl_id === null || (is_array($tmpl_id) && count($tmpl_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tmpl_id when calling update'
            );
        }
        if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $tmpl_id)) {
            throw new \InvalidArgumentException("invalid value for \"tmpl_id\" when calling TemplateVersionsApi.update, must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'vrsn_id' is set
        if ($vrsn_id === null || (is_array($vrsn_id) && count($vrsn_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $vrsn_id when calling update'
            );
        }
        if (!preg_match("/^vrsn_[a-zA-Z0-9]+$/", $vrsn_id)) {
            throw new \InvalidArgumentException("invalid value for \"vrsn_id\" when calling TemplateVersionsApi.update, must conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.");
        }

        // verify the required parameter 'template_version_updatable' is set
        if ($template_version_updatable === null || (is_array($template_version_updatable) && count($template_version_updatable) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_version_updatable when calling update'
            );
        }

        $resourcePath = '/templates/{tmpl_id}/versions/{vrsn_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';



        // path params
        if ($tmpl_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tmpl_id' . '}',
                ObjectSerializer::toPathValue($tmpl_id),
                $resourcePath
            );
        }
        // path params
        if ($vrsn_id !== null) {
            $resourcePath = str_replace(
                '{' . 'vrsn_id' . '}',
                ObjectSerializer::toPathValue($vrsn_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json', 'application/x-www-form-urlencoded', 'multipart/form-data']
        );

        // for model (json/xml)
        if (isset($template_version_updatable)) {
            $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($template_version_updatable));
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
     * Operation list
     *
     * list
     *
     * @param  string $tmpl_id The ID of the template associated with the retrieved versions (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\TemplateVersionList|\OpenAPI\Client\Model\LobError
     */
    public function list($tmpl_id, $limit = 10, $before = null, $after = null, $include = null, $date_created = null)
    {
        $response = $this->listWithHttpInfo($tmpl_id, $limit, $before, $after, $include, $date_created);
        return $response;
    }

    /**
     * Operation listWithHttpInfo
     *
     * list
     *
     * @param  string $tmpl_id The ID of the template associated with the retrieved versions (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\TemplateVersionList|\OpenAPI\Client\Model\LobError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listWithHttpInfo($tmpl_id, $limit = 10, $before = null, $after = null, $include = null, $date_created = null)
    {
        $request = $this->listRequest($tmpl_id, $limit, $before, $after, $include, $date_created);

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
            return ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\TemplateVersionList', []);
            
        } catch (ApiException $e) {
            throw $e;
        }
    }

    /**
     * Create request for operation 'list'
     *
     * @param  string $tmpl_id The ID of the template associated with the retrieved versions (required)
     * @param  int $limit How many results to return. (optional, default to 10)
     * @param  string $before A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. (optional)
     * @param  string $after A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. (optional)
     * @param  string[] $include Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. (optional)
     * @param  array<string,string> $date_created Filter by date created. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listRequest($tmpl_id, $limit = 10, $before = null, $after = null, $include = null, $date_created = null)
    {
        // verify the required parameter 'tmpl_id' is set
        if ($tmpl_id === null || (is_array($tmpl_id) && count($tmpl_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tmpl_id when calling list'
            );
        }
        if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $tmpl_id)) {
            throw new \InvalidArgumentException("invalid value for \"tmpl_id\" when calling TemplateVersionsApi.list, must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        if ($limit !== null && $limit > 100) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TemplateVersionsApi.list, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling TemplateVersionsApi.list, must be bigger than or equal to 1.');
        }


        $resourcePath = '/templates/{tmpl_id}/versions';
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


        // path params
        if ($tmpl_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tmpl_id' . '}',
                ObjectSerializer::toPathValue($tmpl_id),
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