# SquareConnect\RefundApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRefund**](RefundApi.md#createRefund) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/refund | CreateRefund
[**listRefunds**](RefundApi.md#listRefunds) | **GET** /v2/locations/{location_id}/refunds | ListRefunds


# **createRefund**
> \SquareConnect\Model\CreateRefundResponse createRefund($location_id, $transaction_id, $body)

CreateRefund

Initiates a refund for a previously charged tender.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: personal_access_token
SquareConnect\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SquareConnect\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SquareConnect\Api\RefundApi();
$location_id = "location_id_example"; // string | The ID of the original transaction's associated location.
$transaction_id = "transaction_id_example"; // string | 
$body = new \SquareConnect\Model\CreateRefundRequest(); // \SquareConnect\Model\CreateRefundRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createRefund($location_id, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the original transaction&#39;s associated location. |
 **transaction_id** | **string**|  |
 **body** | [**\SquareConnect\Model\CreateRefundRequest**](../Model/\SquareConnect\Model\CreateRefundRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateRefundResponse**](../Model/CreateRefundResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRefunds**
> \SquareConnect\Model\ListRefundsResponse listRefunds($location_id, $begin_time, $end_time, $sort_order, $cursor)

ListRefunds

Lists refunds for one of a business's locations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: personal_access_token
SquareConnect\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// SquareConnect\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new SquareConnect\Api\RefundApi();
$location_id = "location_id_example"; // string | The ID of the location to list refunds for.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in RFC 3339 format.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in RFC 3339 format.
$sort_order = "sort_order_example"; // string | The order in which results are listed in the response.
$cursor = "cursor_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->listRefunds($location_id, $begin_time, $end_time, $sort_order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->listRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list refunds for. |
 **begin_time** | **string**| The beginning of the requested reporting period, in RFC 3339 format. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in RFC 3339 format. | [optional]
 **sort_order** | **string**| The order in which results are listed in the response. | [optional]
 **cursor** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\ListRefundsResponse**](../Model/ListRefundsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

