# # BankAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | An internal description that identifies this resource. Must be no longer than 255 characters. | [optional]
**routing_number** | **string** | Must be a [valid US routing number](https://www.frbservices.org/index.html). | [optional]
**account_number** | **string** |  | [optional]
**account_type** | **string** | The type of entity that holds the account. | [optional]
**signatory** | **string** | The signatory associated with your account. This name will be printed on checks created with this bank account. If you prefer to use a custom signature image on your checks instead, please create your bank account from the [Dashboard](https://dashboard.lob.com/#/login). | [optional]
**metadata** | **array<string,string>** | Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters &#x60;\&quot;&#x60; and &#x60;\\&#x60;. i.e. &#39;{\&quot;customer_id\&quot; : \&quot;NEWYORK2015\&quot;}&#39; Nested objects are not supported.  See [Metadata](#section/Metadata) for more information. | [optional]
**id** | **string** | Unique identifier prefixed with &#x60;bank_&#x60;. | [optional]
**signature_url** | **string** | A signed link to the signature image. will be generated. | [optional]
**bank_name** | **string** | The name of the bank based on the provided routing number, e.g. &#x60;JPMORGAN CHASE BANK&#x60;. | [optional]
**verified** | **bool** | A bank account must be verified before a check can be created. | [optional] [default to false]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was last modified. | [optional]
**deleted** | **bool** | Only returned if the resource has been successfully deleted. | [optional]
**object** | **string** |  | [optional] [default to OBJECT_BANK_ACCOUNT]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
