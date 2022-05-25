# # TrackingEventCertified

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | a Certified letter tracking event | [optional]
**name** | **string** | Name of tracking event for Certified letters. Letters sent with USPS Certified Mail are fully tracked by USPS, therefore their tracking events have an additional details object with more detailed information about the tracking event. Some certified tracking event names have multiple meanings, noted in the list here. See the description of the details object for the full set of combined certified tracking event name meanings.    * &#x60;Mailed&#x60; - Package has been accepted into the carrier network for delivery.    * &#x60;In Transit&#x60; - Maps to four distinct stages of transit.    * &#x60;In Local Area&#x60; - Package is at a location near the end destination.    * &#x60;Processed for Delivery&#x60; - Maps to two distinct stages of delivery.    * &#x60;Pickup Available&#x60; - Package is available for pickup at carrier location.    * &#x60;Delivered&#x60; - Package has been delivered.    * &#x60;Re-Routed&#x60; - Package has been forwarded.    * &#x60;Returned to Sender&#x60; - Package is to be returned to sender.    * &#x60;Issue&#x60; - Maps to (at least) 15 possible issues, some of which are actionable. | [optional]
**details** | [**\OpenAPI\Client\Model\TrackingEventDetails**](TrackingEventDetails.md) |  | [optional]
**location** | **string** | The zip code in which the event occurred if it exists, otherwise will be the name of a Regional Distribution Center if it exists, otherwise will be null. | [optional]
**id** | **string** | Unique identifier prefixed with &#x60;evnt_&#x60;. | [optional]
**time** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date USPS registered the event. | [optional]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was last modified. | [optional]
**object** | **string** |  | [optional] [default to OBJECT_TRACKING_EVENT]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
