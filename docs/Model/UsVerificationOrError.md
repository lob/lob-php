# # UsVerificationOrError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier prefixed with &#x60;us_ver_&#x60;. | [optional]
**recipient** | **string** | The intended recipient, typically a person&#39;s or firm&#39;s name. | [optional]
**primary_line** | **string** | The primary delivery line (usually the street address) of the address. Combination of the following applicable &#x60;components&#x60;: * &#x60;primary_number&#x60; * &#x60;street_predirection&#x60; * &#x60;street_name&#x60; * &#x60;street_suffix&#x60; * &#x60;street_postdirection&#x60; * &#x60;secondary_designator&#x60; * &#x60;secondary_number&#x60; * &#x60;pmb_designator&#x60; * &#x60;pmb_number&#x60; | [optional]
**secondary_line** | **string** | The secondary delivery line of the address. This field is typically empty but may contain information if &#x60;primary_line&#x60; is too long. | [optional]
**urbanization** | **string** | Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development within a city. See [USPS documentation](https://pe.usps.com/text/pub28/28api_008.htm#:~:text&#x3D;I51.,-4%20Urbanizations&amp;text&#x3D;In%20Puerto%20Rico%2C%20identical%20street,placed%20before%20the%20urbanization%20name.) for clarification. | [optional]
**last_line** | **string** |  | [optional]
**deliverability** | **string** |  | [optional]
**components** | [**\OpenAPI\Client\Model\UsComponents**](UsComponents.md) |  | [optional]
**deliverability_analysis** | [**\OpenAPI\Client\Model\DeliverabilityAnalysis**](DeliverabilityAnalysis.md) |  | [optional]
**lob_confidence_score** | [**\OpenAPI\Client\Model\LobConfidenceScore**](LobConfidenceScore.md) |  | [optional]
**object** | **string** |  | [optional] [default to OBJECT_US_VERIFICATION]
**error** | [**\OpenAPI\Client\Model\BulkError**](BulkError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
