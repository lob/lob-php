# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier prefixed with &#x60;card_&#x60;. |
**url** | **string** | The signed link for the card. |
**auto_reorder** | **bool** | True if the cards should be auto-reordered. | [default to false]
**reorder_quantity** | **int** | The number of cards to be reordered. Only present when auto_reorder is True. | [optional]
**raw_url** | **string** | The raw URL of the card. | [optional]
**front_original_url** | **string** | The original URL of the front template. | [optional]
**back_original_url** | **string** | The original URL of the back template. | [optional]
**thumbnails** | [**\OpenAPI\Client\Model\Thumbnail[]**](Thumbnail.md) |  |
**available_quantity** | **int** | The available quantity of cards. | [default to 0]
**pending_quantity** | **int** | The pending quantity of cards. | [default to 0]
**status** | **string** |  | [optional]
**orientation** | **string** | The orientation of the card. | [optional] [default to ORIENTATION_HORIZONTAL]
**threshold_amount** | **int** | The threshold amount of the card | [default to 0]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. |
**date_modified** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was last modified. |
**deleted** | **bool** | Only returned if the resource has been successfully deleted. | [optional]
**object** | **string** | object | [default to OBJECT_CARD]
**description** | **string** | Description of the card. | [optional]
**size** | **string** | The size of the card | [default to SIZE__2_125X3_375]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
