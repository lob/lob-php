# OpenAPI\Client\BillingGroupsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingGroupCreate()**](BillingGroupsApi.md#billingGroupCreate) | **POST** /billing_groups | create
[**billingGroupRetrieve()**](BillingGroupsApi.md#billingGroupRetrieve) | **GET** /billing_groups/{bg_id} | get
[**billingGroupUpdate()**](BillingGroupsApi.md#billingGroupUpdate) | **POST** /billing_groups/{bg_id} | update
[**billingGroupsList()**](BillingGroupsApi.md#billingGroupsList) | **GET** /billing_groups | list


## `billingGroupCreate()`

```php
billingGroupCreate($billing_group_editable): \OpenAPI\Client\Model\BillingGroup
```

create

Creates a new billing_group with the provided properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BillingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_group_editable = new \OpenAPI\Client\Model\BillingGroupEditable(); // \OpenAPI\Client\Model\BillingGroupEditable

try {
    $result = $apiInstance->billingGroupCreate($billing_group_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingGroupsApi->billingGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_group_editable** | [**\OpenAPI\Client\Model\BillingGroupEditable**](../Model/BillingGroupEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\BillingGroup**](../Model/BillingGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingGroupRetrieve()`

```php
billingGroupRetrieve($bg_id): \OpenAPI\Client\Model\BillingGroup
```

get

Retrieves the details of an existing billing_group. You need only supply the unique billing_group identifier that was returned upon billing_group creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BillingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bg_id = 'bg_id_example'; // string | id of the billing_group

try {
    $result = $apiInstance->billingGroupRetrieve($bg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingGroupsApi->billingGroupRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bg_id** | **string**| id of the billing_group |

### Return type

[**\OpenAPI\Client\Model\BillingGroup**](../Model/BillingGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingGroupUpdate()`

```php
billingGroupUpdate($bg_id, $billing_group_editable): \OpenAPI\Client\Model\BillingGroup
```

update

Updates all editable attributes of the billing_group with the given id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BillingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bg_id = 'bg_id_example'; // string | id of the billing_group
$billing_group_editable = new \OpenAPI\Client\Model\BillingGroupEditable(); // \OpenAPI\Client\Model\BillingGroupEditable

try {
    $result = $apiInstance->billingGroupUpdate($bg_id, $billing_group_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingGroupsApi->billingGroupUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bg_id** | **string**| id of the billing_group |
 **billing_group_editable** | [**\OpenAPI\Client\Model\BillingGroupEditable**](../Model/BillingGroupEditable.md)|  |

### Return type

[**\OpenAPI\Client\Model\BillingGroup**](../Model/BillingGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingGroupsList()`

```php
billingGroupsList($limit, $offset, $include, $date_created, $date_modified, $sort_by): \OpenAPI\Client\Model\BillingGroupList
```

list

Returns a list of your billing_groups. The billing_groups are returned sorted by creation date, with the most recently created billing_groups appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BillingGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | How many results to return.
$offset = 0; // int | An integer that designates the offset at which to begin returning results. Defaults to 0.
$include = array('include_example'); // string[] | Request that the response include the total count by specifying `include[]=total_count`.
$date_created = array('key' => new \DateTime("2013-10-20T19:20:30+01:00")); // array<string,\DateTime> | Filter by date created.
$date_modified = array('key' => 'date_modified_example'); // array<string,string> | Filter by date modified.
$sort_by = new \OpenAPI\Client\Model\SortBy5(); // SortBy5 | Sorts items by ascending or descending dates. Use either `date_created` or `send_date`, not both.

try {
    $result = $apiInstance->billingGroupsList($limit, $offset, $include, $date_created, $date_modified, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingGroupsApi->billingGroupsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **offset** | **int**| An integer that designates the offset at which to begin returning results. Defaults to 0. | [optional] [default to 0]
 **include** | [**string[]**](../Model/string.md)| Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. | [optional]
 **date_created** | [**array<string,\DateTime>**](../Model/\DateTime.md)| Filter by date created. | [optional]
 **date_modified** | [**array<string,string>**](../Model/string.md)| Filter by date modified. | [optional]
 **sort_by** | [**SortBy5**](../Model/.md)| Sorts items by ascending or descending dates. Use either &#x60;date_created&#x60; or &#x60;send_date&#x60;, not both. | [optional]

### Return type

[**\OpenAPI\Client\Model\BillingGroupList**](../Model/BillingGroupList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
