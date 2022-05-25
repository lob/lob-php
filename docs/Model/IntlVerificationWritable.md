# # IntlVerificationWritable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient** | **string** | The intended recipient, typically a person&#39;s or firm&#39;s name. | [optional]
**primary_line** | **string** | The primary delivery line (usually the street address) of the address. | [optional]
**secondary_line** | **string** | The secondary delivery line of the address. This field is typically empty but may contain information if &#x60;primary_line&#x60; is too long. | [optional]
**city** | **string** |  | [optional]
**state** | **string** | The name of the state. | [optional]
**postal_code** | **string** | The postal code. | [optional]
**country** | [**\OpenAPI\Client\Model\CountryExtended**](CountryExtended.md) |  | [optional]
**address** | **string** | The entire address in one string (e.g., \&quot;370 Water St C1N 1C4\&quot;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
