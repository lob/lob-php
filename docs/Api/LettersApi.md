# OpenAPI\Client\LettersApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**letterCancel()**](LettersApi.md#letterCancel) | **DELETE** /letters/{ltr_id} | cancel
[**letterCreate()**](LettersApi.md#letterCreate) | **POST** /letters | create
[**letterRetrieve()**](LettersApi.md#letterRetrieve) | **GET** /letters/{ltr_id} | get
[**lettersList()**](LettersApi.md#lettersList) | **GET** /letters | list


## `letterCancel()`

```php
letterCancel($ltr_id): \OpenAPI\Client\Model\LetterDeletion
```

cancel

Completely removes a letter from production. This can only be done if the letter has a `send_date` and the `send_date` has not yet passed. If the letter is successfully canceled, you will not be charged for it. Read more on [cancellation windows](#section/Cancellation-Windows) and [scheduling](#section/Scheduled-Mailings). Scheduling and cancellation is a premium feature. Upgrade to the appropriate [Print & Mail Edition](https://dashboard.lob.com/#/settings/editions) to gain access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ltr_id = 'ltr_id_example'; // string | id of the letter

try {
    $result = $apiInstance->letterCancel($ltr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LettersApi->letterCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ltr_id** | **string**| id of the letter |

### Return type

[**\OpenAPI\Client\Model\LetterDeletion**](../Model/LetterDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `letterCreate()`

```php
letterCreate($letter_editable, $idempotency_key): \OpenAPI\Client\Model\Letter
```

create

Creates a new letter given information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$letter_editable = new \OpenAPI\Client\Model\LetterEditable(); // \OpenAPI\Client\Model\LetterEditable
$idempotency_key = 'idempotency_key_example'; // string | A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our [implementation guide](https://www.lob.com/guides#idempotent_request).

try {
    $result = $apiInstance->letterCreate($letter_editable, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LettersApi->letterCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **letter_editable** | [**\OpenAPI\Client\Model\LetterEditable**](../Model/LetterEditable.md)|  |
 **idempotency_key** | **string**| A string of no longer than 256 characters that uniquely identifies this resource. For more help integrating idempotency keys, refer to our [implementation guide](https://www.lob.com/guides#idempotent_request). | [optional]

### Return type

[**\OpenAPI\Client\Model\Letter**](../Model/Letter.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `letterRetrieve()`

```php
letterRetrieve($ltr_id): \OpenAPI\Client\Model\Letter
```

get

Retrieves the details of an existing letter. You need only supply the unique letter identifier that was returned upon letter creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ltr_id = 'ltr_id_example'; // string | id of the letter

try {
    $result = $apiInstance->letterRetrieve($ltr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LettersApi->letterRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ltr_id** | **string**| id of the letter |

### Return type

[**\OpenAPI\Client\Model\Letter**](../Model/Letter.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lettersList()`

```php
lettersList($limit, $before, $after, $include, $date_created, $metadata, $color, $scheduled, $send_date, $mail_type, $sort_by): \OpenAPI\Client\Model\LetterList
```

list

Returns a list of your letters. The letters are returned sorted by creation date, with the most recently created letters appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\LettersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | How many results to return.
$before = 'before_example'; // string | A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the `previous_url` field in the return response.
$after = 'after_example'; // string | A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the `next_url` field in the return response.
$include = array('include_example'); // string[] | Request that the response include the total count by specifying `include[]=total_count`.
$date_created = array('key' => new \DateTime("2013-10-20T19:20:30+01:00")); // array<string,\DateTime> | Filter by date created.
$metadata = array('key' => 'metadata_example'); // array<string,string> | Filter by metadata key-value pair`.
$color = True; // bool | Set to `true` to return only color letters. Set to `false` to return only black & white letters.
$scheduled = True; // bool | * `true` - only return orders (past or future) where `send_date` is greater than `date_created` * `false` - only return orders where `send_date` is equal to `date_created`
$send_date = array('key' => 'send_date_example'); // array<string,string> | Filter by date sent.
$mail_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MailType(); // \OpenAPI\Client\Model\MailType | A string designating the mail postage type: * `usps_first_class` - (default) * `usps_standard` - a [cheaper option](https://lob.com/pricing/print-mail#compare) which is less predictable and takes longer to deliver. `usps_standard` cannot be used with `4x6` postcards or for any postcards sent outside of the United States.
$sort_by = new \OpenAPI\Client\Model\SortBy5(); // SortBy5 | Sorts items by ascending or descending dates. Use either `date_created` or `send_date`, not both.

try {
    $result = $apiInstance->lettersList($limit, $before, $after, $include, $date_created, $metadata, $color, $scheduled, $send_date, $mail_type, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LettersApi->lettersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **before** | **string**| A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. | [optional]
 **after** | **string**| A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. | [optional]
 **include** | [**string[]**](../Model/string.md)| Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. | [optional]
 **date_created** | [**array<string,\DateTime>**](../Model/\DateTime.md)| Filter by date created. | [optional]
 **metadata** | [**array<string,string>**](../Model/string.md)| Filter by metadata key-value pair&#x60;. | [optional]
 **color** | **bool**| Set to &#x60;true&#x60; to return only color letters. Set to &#x60;false&#x60; to return only black &amp; white letters. | [optional]
 **scheduled** | **bool**| * &#x60;true&#x60; - only return orders (past or future) where &#x60;send_date&#x60; is greater than &#x60;date_created&#x60; * &#x60;false&#x60; - only return orders where &#x60;send_date&#x60; is equal to &#x60;date_created&#x60; | [optional]
 **send_date** | [**array<string,string>**](../Model/string.md)| Filter by date sent. | [optional]
 **mail_type** | [**\OpenAPI\Client\Model\MailType**](../Model/.md)| A string designating the mail postage type: * &#x60;usps_first_class&#x60; - (default) * &#x60;usps_standard&#x60; - a [cheaper option](https://lob.com/pricing/print-mail#compare) which is less predictable and takes longer to deliver. &#x60;usps_standard&#x60; cannot be used with &#x60;4x6&#x60; postcards or for any postcards sent outside of the United States. | [optional]
 **sort_by** | [**SortBy5**](../Model/.md)| Sorts items by ascending or descending dates. Use either &#x60;date_created&#x60; or &#x60;send_date&#x60;, not both. | [optional]

### Return type

[**\OpenAPI\Client\Model\LetterList**](../Model/LetterList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
