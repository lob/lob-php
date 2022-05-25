# OpenAPI\Client\CardOrdersApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardOrderCreate()**](CardOrdersApi.md#cardOrderCreate) | **POST** /cards/{card_id}/orders | create
[**cardOrdersRetrieve()**](CardOrdersApi.md#cardOrdersRetrieve) | **GET** /cards/{card_id}/orders | get


## `cardOrderCreate()`

```php
cardOrderCreate($card_id, $card_order_editable): \OpenAPI\Client\Model\CardOrder
```

create

Creates a new card order given information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = 'card_id_example'; // string | The ID of the card to which the card orders belong.
$card_order_editable = new \OpenAPI\Client\Model\CardOrderEditable(); // \OpenAPI\Client\Model\CardOrderEditable

try {
    $result = $apiInstance->cardOrderCreate($card_id, $card_order_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardOrdersApi->cardOrderCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| The ID of the card to which the card orders belong. |
 **card_order_editable** | [**\OpenAPI\Client\Model\CardOrderEditable**](../Model/CardOrderEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\CardOrder**](../Model/CardOrder.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cardOrdersRetrieve()`

```php
cardOrdersRetrieve($card_id, $limit, $offset): \OpenAPI\Client\Model\CardOrderList
```

get

Retrieves the card orders associated with the given card id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = 'card_id_example'; // string | The ID of the card to which the card orders belong.
$limit = 10; // int | How many results to return.
$offset = 0; // int | An integer that designates the offset at which to begin returning results. Defaults to 0.

try {
    $result = $apiInstance->cardOrdersRetrieve($card_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardOrdersApi->cardOrdersRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| The ID of the card to which the card orders belong. |
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **offset** | **int**| An integer that designates the offset at which to begin returning results. Defaults to 0. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\CardOrderList**](../Model/CardOrderList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
