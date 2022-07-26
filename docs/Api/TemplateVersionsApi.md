# OpenAPI\Client\TemplateVersionsApi

All URIs are relative to https://api.lob.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplateVersion()**](TemplateVersionsApi.md#createTemplateVersion) | **POST** /templates/{tmpl_id}/versions | create
[**templateVersionDelete()**](TemplateVersionsApi.md#templateVersionDelete) | **DELETE** /templates/{tmpl_id}/versions/{vrsn_id} | delete
[**templateVersionRetrieve()**](TemplateVersionsApi.md#templateVersionRetrieve) | **GET** /templates/{tmpl_id}/versions/{vrsn_id} | get
[**templateVersionUpdate()**](TemplateVersionsApi.md#templateVersionUpdate) | **POST** /templates/{tmpl_id}/versions/{vrsn_id} | update
[**templateVersionsList()**](TemplateVersionsApi.md#templateVersionsList) | **GET** /templates/{tmpl_id}/versions | list


## `createTemplateVersion()`

```php
createTemplateVersion($tmpl_id, $template_version_writable): \OpenAPI\Client\Model\TemplateVersion
```

create

Creates a new template version attached to the specified template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | The ID of the template the new version will be attached to
$template_version_writable = new \OpenAPI\Client\Model\TemplateVersionWritable(); // \OpenAPI\Client\Model\TemplateVersionWritable

try {
    $result = $apiInstance->createTemplateVersion($tmpl_id, $template_version_writable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->createTemplateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| The ID of the template the new version will be attached to |
 **template_version_writable** | [**\OpenAPI\Client\Model\TemplateVersionWritable**](../Model/TemplateVersionWritable.md)|  |

### Return type

[**\OpenAPI\Client\Model\TemplateVersion**](../Model/TemplateVersion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateVersionDelete()`

```php
templateVersionDelete($tmpl_id, $vrsn_id): \OpenAPI\Client\Model\TemplateVersionDeletion
```

delete

Permanently deletes a template version. A template's `published_version` can not be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | The ID of the template to which the version belongs.
$vrsn_id = 'vrsn_id_example'; // string | id of the template_version

try {
    $result = $apiInstance->templateVersionDelete($tmpl_id, $vrsn_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->templateVersionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| The ID of the template to which the version belongs. |
 **vrsn_id** | **string**| id of the template_version |

### Return type

[**\OpenAPI\Client\Model\TemplateVersionDeletion**](../Model/TemplateVersionDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateVersionRetrieve()`

```php
templateVersionRetrieve($tmpl_id, $vrsn_id): \OpenAPI\Client\Model\TemplateVersion
```

get

Retrieves the template version with the given template and version ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | The ID of the template to which the version belongs.
$vrsn_id = 'vrsn_id_example'; // string | id of the template_version

try {
    $result = $apiInstance->templateVersionRetrieve($tmpl_id, $vrsn_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->templateVersionRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| The ID of the template to which the version belongs. |
 **vrsn_id** | **string**| id of the template_version |

### Return type

[**\OpenAPI\Client\Model\TemplateVersion**](../Model/TemplateVersion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateVersionUpdate()`

```php
templateVersionUpdate($tmpl_id, $vrsn_id, $template_version_updatable): \OpenAPI\Client\Model\TemplateVersion
```

update

Updates the template version with the given template and version ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | The ID of the template to which the version belongs.
$vrsn_id = 'vrsn_id_example'; // string | id of the template_version
$template_version_updatable = new \OpenAPI\Client\Model\TemplateVersionUpdatable(); // \OpenAPI\Client\Model\TemplateVersionUpdatable

try {
    $result = $apiInstance->templateVersionUpdate($tmpl_id, $vrsn_id, $template_version_updatable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->templateVersionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| The ID of the template to which the version belongs. |
 **vrsn_id** | **string**| id of the template_version |
 **template_version_updatable** | [**\OpenAPI\Client\Model\TemplateVersionUpdatable**](../Model/TemplateVersionUpdatable.md)|  |

### Return type

[**\OpenAPI\Client\Model\TemplateVersion**](../Model/TemplateVersion.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateVersionsList()`

```php
templateVersionsList($tmpl_id, $limit, $before, $after, $include, $date_created): \OpenAPI\Client\Model\TemplateVersionList
```

list

Returns a list of template versions for the given template ID. The template versions are sorted by creation date, with the most recently created appearing first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TemplateVersionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmpl_id = 'tmpl_id_example'; // string | The ID of the template associated with the retrieved versions
$limit = 10; // int | How many results to return.
$before = 'before_example'; // string | A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the `previous_url` field in the return response.
$after = 'after_example'; // string | A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the `next_url` field in the return response.
$include = array('include_example'); // string[] | Request that the response include the total count by specifying `include[]=total_count`.
$date_created = array('key' => new \DateTime("2013-10-20T19:20:30+01:00")); // array<string,\DateTime> | Filter by date created.

try {
    $result = $apiInstance->templateVersionsList($tmpl_id, $limit, $before, $after, $include, $date_created);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateVersionsApi->templateVersionsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmpl_id** | **string**| The ID of the template associated with the retrieved versions |
 **limit** | **int**| How many results to return. | [optional] [default to 10]
 **before** | **string**| A reference to a list entry used for paginating to the previous set of entries. This field is pre-populated in the &#x60;previous_url&#x60; field in the return response. | [optional]
 **after** | **string**| A reference to a list entry used for paginating to the next set of entries. This field is pre-populated in the &#x60;next_url&#x60; field in the return response. | [optional]
 **include** | [**string[]**](../Model/string.md)| Request that the response include the total count by specifying &#x60;include[]&#x3D;total_count&#x60;. | [optional]
 **date_created** | [**array<string,\DateTime>**](../Model/\DateTime.md)| Filter by date created. | [optional]

### Return type

[**\OpenAPI\Client\Model\TemplateVersionList**](../Model/TemplateVersionList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
