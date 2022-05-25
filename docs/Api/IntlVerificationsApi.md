# OpenAPI\Client\IntlVerificationsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkIntlVerifications()**](IntlVerificationsApi.md#bulkIntlVerifications) | **POST** /bulk/intl_verifications | verifyBulk
[**intlVerification()**](IntlVerificationsApi.md#intlVerification) | **POST** /intl_verifications | verifySingle


## `bulkIntlVerifications()`

```php
bulkIntlVerifications($intl_verifications_payload): \OpenAPI\Client\Model\IntlVerifications
```

verifyBulk

Verify a list of international (except US or US territories) address with a live API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IntlVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intl_verifications_payload = new \OpenAPI\Client\Model\IntlVerificationsPayload(); // \OpenAPI\Client\Model\IntlVerificationsPayload

try {
    $result = $apiInstance->bulkIntlVerifications($intl_verifications_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntlVerificationsApi->bulkIntlVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intl_verifications_payload** | [**\OpenAPI\Client\Model\IntlVerificationsPayload**](../Model/IntlVerificationsPayload.md)|  |

### Return type

[**\OpenAPI\Client\Model\IntlVerifications**](../Model/IntlVerifications.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `intlVerification()`

```php
intlVerification($intl_verification_writable, $x_lang_output): \OpenAPI\Client\Model\IntlVerification
```

verifySingle

Verify an international (except US or US territories) address with a live API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IntlVerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intl_verification_writable = new \OpenAPI\Client\Model\IntlVerificationWritable(); // \OpenAPI\Client\Model\IntlVerificationWritable
$x_lang_output = 'x_lang_output_example'; // string | * `native` - Translate response to the native language of the country in the request * `match` - match the response to the language in the request  Default response is in English.

try {
    $result = $apiInstance->intlVerification($intl_verification_writable, $x_lang_output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntlVerificationsApi->intlVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intl_verification_writable** | [**\OpenAPI\Client\Model\IntlVerificationWritable**](../Model/IntlVerificationWritable.md)|  |
 **x_lang_output** | **string**| * &#x60;native&#x60; - Translate response to the native language of the country in the request * &#x60;match&#x60; - match the response to the language in the request  Default response is in English. | [optional]

### Return type

[**\OpenAPI\Client\Model\IntlVerification**](../Model/IntlVerification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
