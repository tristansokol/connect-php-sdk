# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique ID of the refund. | 
**location_id** | **string** | The ID of the refund&#39;s associated location. | 
**transaction_id** | **string** | The ID of the transaction refunded. | 
**tender_id** | **string** | The ID of the tender refunded. | 
**created_at** | **string** | The time when the refund was created, in RFC 3339 format. | [optional] 
**reason** | **string** | The reason for the refund being issued. | 
**amount_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of money refunded. | 
**status** | **string** |  | 
**processing_fee_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of processing fee refunded. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


