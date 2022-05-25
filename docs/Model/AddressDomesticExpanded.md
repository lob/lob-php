# # AddressDomesticExpanded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | The building number, street name, street suffix, and any street directionals. For US addresses, the max length is 64 characters. | [optional]
**address_line2** | **string** | The suite or apartment number of the recipient address, if applicable. For US addresses, the max length is 64 characters. | [optional]
**address_city** | **string** |  | [optional]
**address_state** | **string** |  | [optional]
**address_zip** | **string** | Optional postal code. For US addresses, must be either 5 or 9 digits. | [optional]
**description** | **string** | An internal description that identifies this resource. Must be no longer than 255 characters. | [optional]
**name** | **string** | Either &#x60;name&#x60; or &#x60;company&#x60; is required, you may also add both. Must be no longer than 40 characters. If both &#x60;name&#x60; and &#x60;company&#x60; are provided, they will be printed on two separate lines above the rest of the address. | [optional]
**company** | **string** | Either &#x60;name&#x60; or &#x60;company&#x60; is required, you may also add both. | [optional]
**phone** | **string** | Must be no longer than 40 characters. | [optional]
**email** | **string** | Must be no longer than 100 characters. | [optional]
**address_country** | **string** | The country associated with this address. | [optional]
**metadata** | **array<string,string>** | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters &#x60;\&quot;&#x60; and &#x60;\\&#x60;. i.e. &#39;{\&quot;customer_id\&quot; : \&quot;NEWYORK2015\&quot;}&#39; Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
