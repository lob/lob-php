# # Zip

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**zip_code** | **string** | A 5-digit ZIP code. | [optional]
**id** | **string** | Unique identifier prefixed with &#x60;us_zip_&#x60;. |
**cities** | [**\OpenAPI\Client\Model\ZipLookupCity[]**](ZipLookupCity.md) | An array of city objects containing valid cities for the &#x60;zip_code&#x60;. Multiple cities will be returned if more than one city is associated with the input ZIP code. |
**zip_code_type** | [**\OpenAPI\Client\Model\ZipCodeType**](ZipCodeType.md) |  |
**object** | **string** |  | [default to OBJECT_US_ZIP_LOOKUP]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
