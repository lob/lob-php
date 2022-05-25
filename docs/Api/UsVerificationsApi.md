# OpenAPI\Client\UsVerificationsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkUsVerifications()**](UsVerificationsApi.md#bulkUsVerifications) | **POST** /bulk/us_verifications | verifyBulk
[**usVerification()**](UsVerificationsApi.md#usVerification) | **POST** /us_verifications | verifySingle


## `bulkUsVerifications()`

```php
bulkUsVerifications($multiple_components_list, $case): \OpenAPI\Client\Model\UsVerifications
```

verifyBulk

Verify a list of US or US territory addresses with a live API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$multiple_components_list = new \OpenAPI\Client\Model\MultipleComponentsList(); // \OpenAPI\Client\Model\MultipleComponentsList
$case = 'upper'; // string | Casing of the verified address. Possible values are `upper` and `proper` for uppercased (e.g. \"PO BOX\") and proper-cased (e.g. \"PO Box\"), respectively.

try {
    $result = $apiInstance->bulkUsVerifications($multiple_components_list, $case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsVerificationsApi->bulkUsVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multiple_components_list** | [**\OpenAPI\Client\Model\MultipleComponentsList**](../Model/MultipleComponentsList.md)|  |
 **case** | **string**| Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. | [optional] [default to &#39;upper&#39;]

### Return type

[**\OpenAPI\Client\Model\UsVerifications**](../Model/UsVerifications.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usVerification()`

```php
usVerification($us_verifications_writable, $case): \OpenAPI\Client\Model\UsVerification
```

verifySingle

Verify a US or US territory address with a live API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$us_verifications_writable = new \OpenAPI\Client\Model\UsVerificationsWritable(); // \OpenAPI\Client\Model\UsVerificationsWritable
$case = 'upper'; // string | Casing of the verified address. Possible values are `upper` and `proper` for uppercased (e.g. \"PO BOX\") and proper-cased (e.g. \"PO Box\"), respectively.

try {
    $result = $apiInstance->usVerification($us_verifications_writable, $case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsVerificationsApi->usVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **us_verifications_writable** | [**\OpenAPI\Client\Model\UsVerificationsWritable**](../Model/UsVerificationsWritable.md)|  |
 **case** | **string**| Casing of the verified address. Possible values are &#x60;upper&#x60; and &#x60;proper&#x60; for uppercased (e.g. \&quot;PO BOX\&quot;) and proper-cased (e.g. \&quot;PO Box\&quot;), respectively. | [optional] [default to &#39;upper&#39;]

### Return type

[**\OpenAPI\Client\Model\UsVerification**](../Model/UsVerification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
