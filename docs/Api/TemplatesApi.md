# OpenAPI\Client\TemplatesApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplate()**](TemplatesApi.md#createTemplate) | **POST** /templates | create
[**templateDelete()**](TemplatesApi.md#templateDelete) | **DELETE** /templates/{tmpl_id} | delete
[**templateRetrieve()**](TemplatesApi.md#templateRetrieve) | **GET** /templates/{tmpl_id} | get
[**templateUpdate()**](TemplatesApi.md#templateUpdate) | **POST** /templates/{tmpl_id} | update
[**templatesList()**](TemplatesApi.md#templatesList) | **GET** /templates | list


## `createTemplate()`

```php
createTemplate($template_writable): \OpenAPI\Client\Model\Template
```

create

Creates a new template for use with the Print & Mail API. In Live mode, you can only have as many non-deleted templates as allotted in your current [Print & Mail Edition](https://dashboard.lob.com/#/settings/editions). If you attempt to create a template past your limit, you will receive a `403` error. There is no limit in Test mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_writable = new \OpenAPI\Client\Model\TemplateWritable(); // \OpenAPI\Client\Model\TemplateWritable

try {
    $result = $apiInstance->createTemplate($template_writable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_writable** | [**\OpenAPI\Client\Model\TemplateWritable**](../Model/TemplateWritable.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateDelete()`

```php
templateDelete($tmpl_id): \OpenAPI\Client\Model\TemplateDeletion
```

delete

Permanently deletes a template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | id of the template

try {
    $result = $apiInstance->templateDelete($tmpl_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| id of the template |

### Return type

[**\OpenAPI\Client\Model\TemplateDeletion**](../Model/TemplateDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateRetrieve()`

```php
templateRetrieve($tmpl_id): \OpenAPI\Client\Model\Template
```

get

Retrieves the details of an existing template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | id of the template

try {
    $result = $apiInstance->templateRetrieve($tmpl_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| id of the template |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateUpdate()`

```php
templateUpdate($tmpl_id, $template_update): \OpenAPI\Client\Model\Template
```

update

Updates the description and/or published version of the template with the given id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | id of the template
$template_update = new \OpenAPI\Client\Model\TemplateUpdate(); // \OpenAPI\Client\Model\TemplateUpdate

try {
    $result = $apiInstance->templateUpdate($tmpl_id, $template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templateUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| id of the template |
 **template_update** | [**\OpenAPI\Client\Model\TemplateUpdate**](../Model/TemplateUpdate.md)|  |

### Return type

[**\OpenAPI\Client\Model\Template**](../Model/Template.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesList()`

```php
templatesList($limit, $before, $after, $include, $date_created, $metadata): \OpenAPI\Client\Model\TemplateList
```

list

Returns a list of your templates. The templates are returned sorted by creation date, with the most recently created templates appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
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

try {
    $result = $apiInstance->templatesList($limit, $before, $after, $include, $date_created, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\TemplateList**](../Model/TemplateList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
