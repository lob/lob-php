# OpenAPI\Client\BankAccountsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankAccountCreate()**](BankAccountsApi.md#bankAccountCreate) | **POST** /bank_accounts | create
[**bankAccountDelete()**](BankAccountsApi.md#bankAccountDelete) | **DELETE** /bank_accounts/{bank_id} | delete
[**bankAccountRetrieve()**](BankAccountsApi.md#bankAccountRetrieve) | **GET** /bank_accounts/{bank_id} | get
[**bankAccountVerify()**](BankAccountsApi.md#bankAccountVerify) | **POST** /bank_accounts/{bank_id}/verify | verify
[**bankAccountsList()**](BankAccountsApi.md#bankAccountsList) | **GET** /bank_accounts | list


## `bankAccountCreate()`

```php
bankAccountCreate($bank_account_writable): \OpenAPI\Client\Model\BankAccount
```

create

Creates a new bank account with the provided properties. Bank accounts created in live mode will need to be verified via micro deposits before being able to send live checks. The deposits will appear in the bank account in 2-3 business days and have the description \"VERIFICATION\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account_writable = new \OpenAPI\Client\Model\BankAccountWritable(); // \OpenAPI\Client\Model\BankAccountWritable

try {
    $result = $apiInstance->bankAccountCreate($bank_account_writable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_writable** | [**\OpenAPI\Client\Model\BankAccountWritable**](../Model/BankAccountWritable.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountDelete()`

```php
bankAccountDelete($bank_id): \OpenAPI\Client\Model\BankAccountDeletion
```

delete

Permanently deletes a bank account. It cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_id = 'bank_id_example'; // string | id of the bank account

try {
    $result = $apiInstance->bankAccountDelete($bank_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**| id of the bank account |

### Return type

[**\OpenAPI\Client\Model\BankAccountDeletion**](../Model/BankAccountDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountRetrieve()`

```php
bankAccountRetrieve($bank_id): \OpenAPI\Client\Model\BankAccount
```

get

Retrieves the details of an existing bank account. You need only supply the unique bank account identifier that was returned upon bank account creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_id = 'bank_id_example'; // string | id of the bank account

try {
    $result = $apiInstance->bankAccountRetrieve($bank_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**| id of the bank account |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountVerify()`

```php
bankAccountVerify($bank_id, $bank_account_verify): \OpenAPI\Client\Model\BankAccount
```

verify

Verify a bank account in order to create a check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_id = 'bank_id_example'; // string | id of the bank account to be verified
$bank_account_verify = new \OpenAPI\Client\Model\BankAccountVerify(); // \OpenAPI\Client\Model\BankAccountVerify

try {
    $result = $apiInstance->bankAccountVerify($bank_id, $bank_account_verify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_id** | **string**| id of the bank account to be verified |
 **bank_account_verify** | [**\OpenAPI\Client\Model\BankAccountVerify**](../Model/BankAccountVerify.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankAccountsList()`

```php
bankAccountsList($limit, $before, $after, $include, $date_created, $metadata): \OpenAPI\Client\Model\BankAccountList
```

list

Returns a list of your bank accounts. The bank accounts are returned sorted by creation date, with the most recently created bank accounts appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
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
    $result = $apiInstance->bankAccountsList($limit, $before, $after, $include, $date_created, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->bankAccountsList: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\BankAccountList**](../Model/BankAccountList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
