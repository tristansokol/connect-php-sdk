# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The transaction&#39;s unique ID. | [optional] 
**location_id** | **string** | The ID of the transaction&#39;s associated location. | [optional] 
**created_at** | **string** | The time when the transaction was created, in RFC 3339 format. | [optional] 
**tenders** | [**\SquareConnect\Model\Tender[]**](Tender.md) | Descriptions of the tenders used to pay for the transaction. | [optional] 
**refunds** | [**\SquareConnect\Model\Refund[]**](Refund.md) | An array of any refunds associated with the transaction. | [optional] 
**reference_id** | **string** | If the transaction was created with the **Charge** endpoint, this value is the same as the value provided as the &#x60;reference_id&#x60; parameter in the request to that endpoint. | [optional] 
**product** | **string** | The product that processed the transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


