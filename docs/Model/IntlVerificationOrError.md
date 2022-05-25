# # IntlVerificationOrError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier prefixed with &#x60;intl_ver_&#x60;. | [optional]
**recipient** | **string** | The intended recipient, typically a person&#39;s or firm&#39;s name. | [optional]
**primary_line** | **string** |  | [optional]
**secondary_line** | **string** | The secondary delivery line of the address. This field is typically empty but may contain information if &#x60;primary_line&#x60; is too long. | [optional]
**last_line** | **string** |  | [optional]
**country** | **string** |  | [optional]
**coverage** | **string** |  | [optional]
**deliverability** | **string** |  | [optional]
**status** | **string** |  | [optional]
**components** | [**\OpenAPI\Client\Model\IntlComponents**](IntlComponents.md) |  | [optional]
**object** | **string** |  | [optional] [default to OBJECT_INTL_VERIFICATION]
**error** | [**\OpenAPI\Client\Model\BulkError**](BulkError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
