# CreateRefundRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idempotency_key** | **string** | A value you specify that uniquely identifies this refund among refunds you&#39;ve created for the tender.  If you&#39;re unsure whether a particular refund succeeded, you can reattempt it with the same idempotency key without worrying about duplicating the refund. | 
**tender_id** | **string** | The ID of the tender to refund. | 
**reason** | **string** | A description of the reason for the refund. | [optional] 
**amount_money** | [**\SquareConnect\Model\Money**](Money.md) | The amount of money to refund. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


