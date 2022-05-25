# OpenAPI\Client\AddressesApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressCreate()**](AddressesApi.md#addressCreate) | **POST** /addresses | create
[**addressDelete()**](AddressesApi.md#addressDelete) | **DELETE** /addresses/{adr_id} | delete
[**addressRetrieve()**](AddressesApi.md#addressRetrieve) | **GET** /addresses/{adr_id} | get
[**addressesList()**](AddressesApi.md#addressesList) | **GET** /addresses | list


## `addressCreate()`

```php
addressCreate($address_editable): \OpenAPI\Client\Model\Address
```

create

Creates a new address given information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_editable = new \OpenAPI\Client\Model\AddressEditable(); // \OpenAPI\Client\Model\AddressEditable

try {
    $result = $apiInstance->addressCreate($address_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_editable** | [**\OpenAPI\Client\Model\AddressEditable**](../Model/AddressEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressDelete()`

```php
addressDelete($adr_id): \OpenAPI\Client\Model\AddressDeletion
```

delete

Deletes the details of an existing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adr_id = 'adr_id_example'; // string | id of the address

try {
    $result = $apiInstance->addressDelete($adr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adr_id** | **string**| id of the address |

### Return type

[**\OpenAPI\Client\Model\AddressDeletion**](../Model/AddressDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressRetrieve()`

```php
addressRetrieve($adr_id): \OpenAPI\Client\Model\Address
```

get

Retrieves the details of an existing address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adr_id = 'adr_id_example'; // string | id of the address

try {
    $result = $apiInstance->addressRetrieve($adr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adr_id** | **string**| id of the address |

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressesList()`

```php
addressesList($limit, $before, $after, $include, $date_created, $metadata): \OpenAPI\Client\Model\AddressList
```

list

Returns a list of your addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | How many results to return.
$before = 'before_example'; // string | A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the `previous_url` field in the return response.
$after = 'after_example'; // string | A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the `next_url` field in the return response.
$include = array('include_example'); // string[] | Request that the response include the total count by specifying `include[]=total_count`.
$date_created = array('key' => 'date_created_example'); // array<string,string> | Filter by date created.
$metadata = array('key' => 'metadata_example'); // array<string,string> | Filter by metadata key-value pair`.

try {
    $result = $apiInstance->addressesList($limit, $before, $after, $include, $date_created, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **before** | **string**| A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. | [optional]
 **after** | **string**| A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. | [optional]
 **include** | [**string[]**](../Model/string.md)| Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. | [optional]
 **date_created** | [**array<string,string>**](../Model/string.md)| Filter by date created. | [optional]
 **metadata** | [**array<string,string>**](../Model/string.md)| Filter by metadata key-value pair&#x60;. | [optional]

### Return type

[**\OpenAPI\Client\Model\AddressList**](../Model/AddressList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
