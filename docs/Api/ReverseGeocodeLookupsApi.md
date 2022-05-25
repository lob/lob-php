# OpenAPI\Client\ReverseGeocodeLookupsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**reverseGeocodeLookup()**](ReverseGeocodeLookupsApi.md#reverseGeocodeLookup) | **POST** /us_reverse_geocode_lookups | lookup


## `reverseGeocodeLookup()`

```php
reverseGeocodeLookup($location, $size): \OpenAPI\Client\Model\ReverseGeocode
```

lookup

Reverse geocode a valid US location with a live API key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReverseGeocodeLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location = new \OpenAPI\Client\Model\Location(); // \OpenAPI\Client\Model\Location
$size = 5; // int | Determines the number of locations returned. Possible values are between 1 and 50 and any number higher will be rounded down to 50. Default size is a list of 5 reverse geocoded locations.

try {
    $result = $apiInstance->reverseGeocodeLookup($location, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReverseGeocodeLookupsApi->reverseGeocodeLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location** | [**\OpenAPI\Client\Model\Location**](../Model/Location.md)|  |
 **size** | **int**| Determines the number of locations returned. Possible values are between 1 and 50 and any number higher will be rounded down to 50. Default size is a list of 5 reverse geocoded locations. | [optional] [default to 5]

### Return type

[**\OpenAPI\Client\Model\ReverseGeocode**](../Model/ReverseGeocode.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
