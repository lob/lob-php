# # Events

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier prefixed with &#x60;evt_&#x60;. | [optional]
**body** | **object** | The body of the associated resource as they were at the time of the event, i.e. the [postcard object](#operation/postcard_retrieve), [the letter object](#operation/letter_retrieve), [the check object](#operation/check_retrieve), [the address object](#operation/address_retrieve), or [the bank account object](#operation/bank_account_retrieve). For &#x60;.deleted&#x60; events, the body matches the response for the corresponding delete endpoint for that resource (e.g. the [postcard delete response](#operation/postcard_delete)). | [optional]
**reference_id** | **string** | Unique identifier of the related resource for the event. | [optional]
**event_type** | [**\OpenAPI\Client\Model\EventType**](EventType.md) |  | [optional]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. | [optional]
**object** | **string** | Value is resource type. | [optional] [default to OBJECT_EVENT]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
