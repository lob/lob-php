# OpenAPI\Client\UsAutocompletionsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**usAutocompletion()**](UsAutocompletionsApi.md#usAutocompletion) | **POST** /us_autocompletions | autocomplete


## `usAutocompletion()`

```php
usAutocompletion($us_autocompletions_writable): \OpenAPI\Client\Model\UsAutocompletions
```

autocomplete

Given an address prefix consisting of a partial primary line, as well as optional input of city, state, and zip code, this functionality returns up to 10 full US address suggestions. Not all of them will turn out to be valid addresses; they'll need to be [verified](#operation/verification_us).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UsAutocompletionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$us_autocompletions_writable = new \OpenAPI\Client\Model\UsAutocompletionsWritable(); // \OpenAPI\Client\Model\UsAutocompletionsWritable

try {
    $result = $apiInstance->usAutocompletion($us_autocompletions_writable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsAutocompletionsApi->usAutocompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **us_autocompletions_writable** | [**\OpenAPI\Client\Model\UsAutocompletionsWritable**](../Model/UsAutocompletionsWritable.md)|  |

### Return type

[**\OpenAPI\Client\Model\UsAutocompletions**](../Model/UsAutocompletions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
