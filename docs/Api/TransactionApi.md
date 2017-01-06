# SquareConnect\TransactionApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**captureTransaction**](TransactionApi.md#captureTransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/capture | CaptureTransaction
[**charge**](TransactionApi.md#charge) | **POST** /v2/locations/{location_id}/transactions | Charge
[**listTransactions**](TransactionApi.md#listTransactions) | **GET** /v2/locations/{location_id}/transactions | ListTransactions
[**retrieveTransaction**](TransactionApi.md#retrieveTransaction) | **GET** /v2/locations/{location_id}/transactions/{transaction_id} | RetrieveTransaction
[**voidTransaction**](TransactionApi.md#voidTransaction) | **POST** /v2/locations/{location_id}/transactions/{transaction_id}/void | VoidTransaction


# **captureTransaction**
> \SquareConnect\Model\CaptureTransactionResponse captureTransaction($location_id, $transaction_id)

CaptureTransaction

Captures a transaction that was created with the **Charge** endpoint with a `delay_capture` value of `true`.

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

$api_instance = new SquareConnect\Api\TransactionApi();
$location_id = "location_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 

try {
    $result = $api_instance->captureTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->captureTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **transaction_id** | **string**|  |

### Return type

[**\SquareConnect\Model\CaptureTransactionResponse**](../Model/CaptureTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **charge**
> \SquareConnect\Model\ChargeResponse charge($location_id, $body)

Charge

Charges a card represented by a token.

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

$api_instance = new SquareConnect\Api\TransactionApi();
$location_id = "location_id_example"; // string | The ID of the location to associate the transaction with.
$body = new \SquareConnect\Model\ChargeRequest(); // \SquareConnect\Model\ChargeRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->charge($location_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->charge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to associate the transaction with. |
 **body** | [**\SquareConnect\Model\ChargeRequest**](../Model/\SquareConnect\Model\ChargeRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\ChargeResponse**](../Model/ChargeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTransactions**
> \SquareConnect\Model\ListTransactionsResponse listTransactions($location_id, $begin_time, $end_time, $sort_order, $cursor)

ListTransactions

Lists transactions for a particular location.  When making a request to this endpoint, your request body **must** include either the `cursor` parameter, or it must include both `begin_time` and `end_time` with an optional `sort_order`.

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

$api_instance = new SquareConnect\Api\TransactionApi();
$location_id = "location_id_example"; // string | The ID of the location to list transactions for.
$begin_time = "begin_time_example"; // string | The beginning of the requested reporting period, in RFC 3339 format.
$end_time = "end_time_example"; // string | The end of the requested reporting period, in RFC 3339 format.
$sort_order = "sort_order_example"; // string | The order in which results are listed in the response (`ASC` for chronological, `DESC` for reverse-chronological).
$cursor = "cursor_example"; // string | A pagination cursor to retrieve the next set of results for your original query to the endpoint.

try {
    $result = $api_instance->listTransactions($location_id, $begin_time, $end_time, $sort_order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| The ID of the location to list transactions for. |
 **begin_time** | **string**| The beginning of the requested reporting period, in RFC 3339 format. | [optional]
 **end_time** | **string**| The end of the requested reporting period, in RFC 3339 format. | [optional]
 **sort_order** | **string**| The order in which results are listed in the response (&#x60;ASC&#x60; for chronological, &#x60;DESC&#x60; for reverse-chronological). | [optional]
 **cursor** | **string**| A pagination cursor to retrieve the next set of results for your original query to the endpoint. | [optional]

### Return type

[**\SquareConnect\Model\ListTransactionsResponse**](../Model/ListTransactionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTransaction**
> \SquareConnect\Model\RetrieveTransactionResponse retrieveTransaction($location_id, $transaction_id)

RetrieveTransaction

Retrieves details for a single transaction.

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

$api_instance = new SquareConnect\Api\TransactionApi();
$location_id = "location_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 

try {
    $result = $api_instance->retrieveTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->retrieveTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **transaction_id** | **string**|  |

### Return type

[**\SquareConnect\Model\RetrieveTransactionResponse**](../Model/RetrieveTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voidTransaction**
> \SquareConnect\Model\VoidTransactionResponse voidTransaction($location_id, $transaction_id)

VoidTransaction

Cancels a transaction that was created with the **Charge** endpoint with a `delay_capture` value of `true`.

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

$api_instance = new SquareConnect\Api\TransactionApi();
$location_id = "location_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 

try {
    $result = $api_instance->voidTransaction($location_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->voidTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**|  |
 **transaction_id** | **string**|  |

### Return type

[**\SquareConnect\Model\VoidTransactionResponse**](../Model/VoidTransactionResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

