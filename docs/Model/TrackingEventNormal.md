# # TrackingEventNormal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | non-Certified postcards, self mailers, letters, and checks |
**name** | **string** | Name of tracking event (for normal postcards, self mailers, letters, and checks):    * &#x60;In Transit&#x60; - The mailpiece is being processed at the entry/origin facility.    * &#x60;In Local Area&#x60; - The mailpiece is being processed at the destination facility.    * &#x60;Processed for Delivery&#x60; - The mailpiece has been greenlit for     delivery at the recipient&#39;s nearest postal facility. The mailpiece     should reach the mailbox within 1 business day of this tracking     event.    * &#x60;Re-Routed&#x60; - The mailpiece is re-routed due to recipient change of     address, address errors, or USPS relabeling of barcode/ID tag     area.    * &#x60;Returned to Sender&#x60; - The mailpiece is being returned to sender due     to barcode, ID tag area, or address errors.    * &#x60;Mailed&#x60; - The mailpiece has been handed off to and accepted by USPS     and is en route. [More about     Mailed.](https://support.lob.com/hc/en-us/articles/360001724400-What-does-a-Mailed-tracking-event-mean-)     Note this data is only available in Enterprise editions of     Lob. [Contact Sales](https://lob.com/support/contact#contact) if     you want access to this feature.  [More about tracking](https://support.lob.com/hc/en-us/articles/115000097404-Can-I-track-my-mail-) |
**details** | **object** | Will be &#x60;null&#x60; for &#x60;type&#x3D;normal&#x60; events | [optional]
**location** | **string** | The zip code in which the scan event occurred. Null for &#x60;Mailed&#x60; events. | [optional]
**id** | **string** | Unique identifier prefixed with &#x60;evnt_&#x60;. | [optional]
**time** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date USPS registered the event. | [optional]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. | [optional]
**date_modified** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was last modified. | [optional]
**object** | **string** |  | [optional] [default to OBJECT_TRACKING_EVENT]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
