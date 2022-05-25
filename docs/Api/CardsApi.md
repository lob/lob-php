# OpenAPI\Client\CardsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cardCreate()**](CardsApi.md#cardCreate) | **POST** /cards | create
[**cardDelete()**](CardsApi.md#cardDelete) | **DELETE** /cards/{card_id} | delete
[**cardRetrieve()**](CardsApi.md#cardRetrieve) | **GET** /cards/{card_id} | get
[**cardUpdate()**](CardsApi.md#cardUpdate) | **POST** /cards/{card_id} | update
[**cardsList()**](CardsApi.md#cardsList) | **GET** /cards | list


## `cardCreate()`

```php
cardCreate($card_editable): \OpenAPI\Client\Model\Card
```

create

Creates a new card given information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_editable = new \OpenAPI\Client\Model\CardEditable(); // \OpenAPI\Client\Model\CardEditable

try {
    $result = $apiInstance->cardCreate($card_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_editable** | [**\OpenAPI\Client\Model\CardEditable**](../Model/CardEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cardDelete()`

```php
cardDelete($card_id): \OpenAPI\Client\Model\CardDeletion
```

delete

Delete an existing card. You need only supply the unique identifier that was returned upon card creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = 'card_id_example'; // string | id of the card

try {
    $result = $apiInstance->cardDelete($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| id of the card |

### Return type

[**\OpenAPI\Client\Model\CardDeletion**](../Model/CardDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cardRetrieve()`

```php
cardRetrieve($card_id): \OpenAPI\Client\Model\Card
```

get

Retrieves the details of an existing card. You need only supply the unique customer identifier that was returned upon card creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = 'card_id_example'; // string | id of the card

try {
    $result = $apiInstance->cardRetrieve($card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| id of the card |

### Return type

[**\OpenAPI\Client\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cardUpdate()`

```php
cardUpdate($card_id, $card_updatable): \OpenAPI\Client\Model\Card
```

update

Update the details of an existing card. You need only supply the unique identifier that was returned upon card creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = 'card_id_example'; // string | id of the card
$card_updatable = new \OpenAPI\Client\Model\CardUpdatable(); // \OpenAPI\Client\Model\CardUpdatable

try {
    $result = $apiInstance->cardUpdate($card_id, $card_updatable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| id of the card |
 **card_updatable** | [**\OpenAPI\Client\Model\CardUpdatable**](../Model/CardUpdatable.md)|  |

### Return type

[**\OpenAPI\Client\Model\Card**](../Model/Card.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cardsList()`

```php
cardsList($limit, $before, $after, $sort_by): \OpenAPI\Client\Model\CardList
```

list

Returns a list of your cards. The cards are returned sorted by creation date, with the most recently created addresses appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | How many results to return.
$before = 'before_example'; // string | A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the `previous_url` field in the return response.
$after = 'after_example'; // string | A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the `next_url` field in the return response.
$sort_by = new \OpenAPI\Client\Model\SortBy5(); // SortBy5 | Sorts items by ascending or descending dates. Use either `date_created` or `send_date`, not both.

try {
    $result = $apiInstance->cardsList($limit, $before, $after, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->cardsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **before** | **string**| A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. | [optional]
 **after** | **string**| A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. | [optional]
 **sort_by** | [**SortBy5**](../Model/.md)| Sorts items by ascending or descending dates. Use either &#x60;date_created&#x60; or &#x60;send_date&#x60;, not both. | [optional]

### Return type

[**\OpenAPI\Client\Model\CardList**](../Model/CardList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
