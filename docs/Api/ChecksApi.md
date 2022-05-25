# OpenAPI\Client\ChecksApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCancel()**](ChecksApi.md#checkCancel) | **DELETE** /checks/{chk_id} | cancel
[**checkCreate()**](ChecksApi.md#checkCreate) | **POST** /checks | create
[**checkRetrieve()**](ChecksApi.md#checkRetrieve) | **GET** /checks/{chk_id} | get
[**checksList()**](ChecksApi.md#checksList) | **GET** /checks | list


## `checkCancel()`

```php
checkCancel($chk_id): \OpenAPI\Client\Model\CheckDeletion
```

cancel

Completely removes a check from production. This can only be done if the check has a `send_date` and the `send_date` has not yet passed. If the check is successfully canceled, you will not be charged for it. Read more on [cancellation windows](#section/Cancellation-Windows) and [scheduling](#section/Scheduled-Mailings). Scheduling and cancellation is a premium feature. Upgrade to the appropriate [Print & Mail Edition](https://dashboard.lob.com/#/settings/editions) to gain access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chk_id = 'chk_id_example'; // string | id of the check

try {
    $result = $apiInstance->checkCancel($chk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checkCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chk_id** | **string**| id of the check |

### Return type

[**\OpenAPI\Client\Model\CheckDeletion**](../Model/CheckDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkCreate()`

```php
checkCreate($check_editable, $idempotency_key): \OpenAPI\Client\Model\Check
```

create

Creates a new check with the provided properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_editable = new \OpenAPI\Client\Model\CheckEditable(); // \OpenAPI\Client\Model\CheckEditable
$idempotency_key = 'idempotency_key_example'; // string | A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our [implementation guide](https://www.lob.com/guides#idempotent_request).

try {
    $result = $apiInstance->checkCreate($check_editable, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checkCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_editable** | [**\OpenAPI\Client\Model\CheckEditable**](../Model/CheckEditable.md)|  |
 **idempotency_key** | **string**| A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our [implementation guide](https://www.lob.com/guides#idempotent_request). | [optional]

### Return type

[**\OpenAPI\Client\Model\Check**](../Model/Check.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkRetrieve()`

```php
checkRetrieve($chk_id): \OpenAPI\Client\Model\Check
```

get

Retrieves the details of an existing check. You need only supply the unique check identifier that was returned upon check creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ChecksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chk_id = 'chk_id_example'; // string | id of the check

try {
    $result = $apiInstance->checkRetrieve($chk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checkRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chk_id** | **string**| id of the check |

### Return type

[**\OpenAPI\Client\Model\Check**](../Model/Check.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checksList()`

```php
checksList($limit, $before, $after, $include, $date_created, $metadata, $scheduled, $send_date, $mail_type, $sort_by): \OpenAPI\Client\Model\CheckList
```

list

Returns a list of your checks. The checks are returned sorted by creation date, with the most recently created checks appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ChecksApi(
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
$scheduled = True; // bool | * `true` - only return orders (past or future) where `send_date` is greater than `date_created` * `false` - only return orders where `send_date` is equal to `date_created`
$send_date = array('key' => 'send_date_example'); // array<string,string> | Filter by date sent.
$mail_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MailType(); // \OpenAPI\Client\Model\MailType | A string designating the mail postage type: * `usps_first_class` - (default) * `usps_standard` - a [cheaper option](https://lob.com/pricing/print-mail#compare) which is less predictable and takes longer to deliver. `usps_standard` cannot be used with `4x6` postcards or for any postcards sent outside of the United States.
$sort_by = new \OpenAPI\Client\Model\SortBy5(); // SortBy5 | Sorts items by ascending or descending dates. Use either `date_created` or `send_date`, not both.

try {
    $result = $apiInstance->checksList($limit, $before, $after, $include, $date_created, $metadata, $scheduled, $send_date, $mail_type, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecksApi->checksList: ', $e->getMessage(), PHP_EOL;
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
 **scheduled** | **bool**| * &#x60;true&#x60; - only return orders (past or future) where &#x60;send_date&#x60; is greater than &#x60;date_created&#x60; * &#x60;false&#x60; - only return orders where &#x60;send_date&#x60; is equal to &#x60;date_created&#x60; | [optional]
 **send_date** | [**array<string,string>**](../Model/string.md)| Filter by date sent. | [optional]
 **mail_type** | [**\OpenAPI\Client\Model\MailType**](../Model/.md)| A string designating the mail postage type: * &#x60;usps_first_class&#x60; - (default) * &#x60;usps_standard&#x60; - a [cheaper option](https://lob.com/pricing/print-mail#compare) which is less predictable and takes longer to deliver. &#x60;usps_standard&#x60; cannot be used with &#x60;4x6&#x60; postcards or for any postcards sent outside of the United States. | [optional]
 **sort_by** | [**SortBy5**](../Model/.md)| Sorts items by ascending or descending dates. Use either &#x60;date_created&#x60; or &#x60;send_date&#x60;, not both. | [optional]

### Return type

[**\OpenAPI\Client\Model\CheckList**](../Model/CheckList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
