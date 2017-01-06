# V1CreateItemRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The item&#39;s ID. Must be unique among all entity IDs ever provided on behalf of the merchant. You can never reuse an ID. This value can include alphanumeric characters, dashes (-), and underscores (_). | [optional] 
**name** | **string** | The item&#39;s name. | 
**description** | **string** | The item&#39;s description. | [optional] 
**category_id** | **string** | The ID of the item&#39;s category, if any. | [optional] 
**color** | **string** | The action to perform on the order (COMPLETE, CANCEL, or REFUND). | [optional] 
**abbreviation** | **string** | The text of the item&#39;s display label in Square Register. Only up to the first five characters of the string are used. | [optional] 
**visibility** | **string** | Indicates whether the item is viewable from the merchant&#39;s online store (PUBLIC) or PRIVATE. | [optional] 
**available_online** | **string** | If true, the item can be added to shipping orders from the merchant&#39;s online store. | [optional] 
**available_for_pickup** | **string** | If true, the item can be added to pickup orders from the merchant&#39;s online store. | [optional] 
**variations** | [**\SquareConnect\Model\V1ItemVariation[]**](V1ItemVariation.md) | The item&#39;s variations. You must specify at least one variation. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


