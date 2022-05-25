# OpenAPI\Client\IntlAutocompletionsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**intlAutocompletion()**](IntlAutocompletionsApi.md#intlAutocompletion) | **POST** /intl_autocompletions | autocomplete


## `intlAutocompletion()`

```php
intlAutocompletion($intl_autocompletions_writable, $x_lang_output): \OpenAPI\Client\Model\IntlAutocompletions
```

autocomplete

Given an address prefix consisting of a partial primary line and country, as well as optional input of city, state, and zip code, this functionality returns up to 10 full International address suggestions. Not all of them will turn out to be valid addresses; they'll need to be [verified](#operation/intl_verification).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IntlAutocompletionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intl_autocompletions_writable = new \OpenAPI\Client\Model\IntlAutocompletionsWritable(); // \OpenAPI\Client\Model\IntlAutocompletionsWritable
$x_lang_output = 'x_lang_output_example'; // string | * `native` - Translate response to the native language of the country in the request * `match` - match the response to the language in the request  Default response is in English.

try {
    $result = $apiInstance->intlAutocompletion($intl_autocompletions_writable, $x_lang_output);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntlAutocompletionsApi->intlAutocompletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **intl_autocompletions_writable** | [**\OpenAPI\Client\Model\IntlAutocompletionsWritable**](../Model/IntlAutocompletionsWritable.md)|  |
 **x_lang_output** | **string**| * &#x60;native&#x60; - Translate response to the native language of the country in the request * &#x60;match&#x60; - match the response to the language in the request  Default response is in English. | [optional]

### Return type

[**\OpenAPI\Client\Model\IntlAutocompletions**](../Model/IntlAutocompletions.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
