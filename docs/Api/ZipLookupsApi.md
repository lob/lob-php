# OpenAPI\Client\ZipLookupsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zipLookup()**](ZipLookupsApi.md#zipLookup) | **POST** /us_zip_lookups | lookup


## `zipLookup()`

```php
zipLookup($zip_editable): \OpenAPI\Client\Model\Zip
```

lookup

Returns information about a ZIP code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ZipLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zip_editable = new \OpenAPI\Client\Model\ZipEditable(); // \OpenAPI\Client\Model\ZipEditable

try {
    $result = $apiInstance->zipLookup($zip_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZipLookupsApi->zipLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zip_editable** | [**\OpenAPI\Client\Model\ZipEditable**](../Model/ZipEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\Zip**](../Model/Zip.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
