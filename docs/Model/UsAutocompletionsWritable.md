# # UsAutocompletionsWritable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_prefix** | **string** | Only accepts numbers and street names in an alphanumeric format. |
**city** | **string** | An optional city input used to filter suggestions. Case insensitive and does not match partial abbreviations. | [optional]
**state** | **string** | An optional state input used to filter suggestions. Case insensitive and does not match partial abbreviations. | [optional]
**zip_code** | **string** | An optional ZIP Code input used to filter suggestions. Matches partial entries. | [optional]
**geo_ip_sort** | **bool** | If &#x60;true&#x60;, sort suggestions by proximity to the IP set in the &#x60;X-Forwarded-For&#x60; header. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
