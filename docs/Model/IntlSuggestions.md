# # IntlSuggestions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary_number_range** | **string** | The primary number range of the address that identifies a building at street level. | [optional]
**primary_line** | **string** | The primary delivery line (usually the street address) of the address. Combination of the following applicable &#x60;components&#x60; (primary number &amp; secondary information may be missing or inaccurate): * &#x60;primary_number&#x60; * &#x60;street_predirection&#x60; * &#x60;street_name&#x60; * &#x60;street_suffix&#x60; * &#x60;street_postdirection&#x60; * &#x60;secondary_designator&#x60; * &#x60;secondary_number&#x60; * &#x60;pmb_designator&#x60; * &#x60;pmb_number&#x60; | [optional]
**city** | **string** |  | [optional]
**state** | **string** | The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) two letter code for the state. | [optional]
**country** | [**\OpenAPI\Client\Model\CountryExtended**](CountryExtended.md) |  | [optional]
**zip_code** | **string** | A 5-digit zip code. Left empty if a test key is used. | [optional]
**object** | **string** | Value is resource type. | [optional] [default to OBJECT_INTL_AUTOCOMPLETION]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
