# # CardOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier prefixed with &#x60;co_&#x60;. | [optional]
**card_id** | **string** | Unique identifier prefixed with &#x60;card_&#x60;. | [optional]
**status** | **string** | The status of the card order. | [optional]
**inventory** | **float** | The inventory of the card order. | [optional] [default to 0]
**quantity_ordered** | **float** | The quantity of cards ordered | [optional] [default to 0]
**unit_price** | **float** | The unit price for the card order. | [optional] [default to 0]
**cancelled_reason** | **string** | The reason for cancellation. | [optional]
**availability_date** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. | [optional]
**expected_availability_date** | [**\DateTime**](\DateTime.md) | The fixed deadline for the cards to be printed. | [optional]
**date_created** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was created. |
**date_modified** | [**\DateTime**](\DateTime.md) | A timestamp in ISO 8601 format of the date the resource was last modified. |
**deleted** | **bool** | Only returned if the resource has been successfully deleted. | [optional]
**object** | **string** | Value is type of resource. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
