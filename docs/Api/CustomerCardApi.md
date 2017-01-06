# SquareConnect\CustomerCardApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerCard**](CustomerCardApi.md#createCustomerCard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
[**deleteCustomerCard**](CustomerCardApi.md#deleteCustomerCard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard


# **createCustomerCard**
> \SquareConnect\Model\CreateCustomerCardResponse createCustomerCard($customer_id, $body)

CreateCustomerCard

Adds a card on file to an existing customer.

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

$api_instance = new SquareConnect\Api\CustomerCardApi();
$customer_id = "customer_id_example"; // string | 
$body = new \SquareConnect\Model\CreateCustomerCardRequest(); // \SquareConnect\Model\CreateCustomerCardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCustomerCard($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCardApi->createCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **body** | [**\SquareConnect\Model\CreateCustomerCardRequest**](../Model/\SquareConnect\Model\CreateCustomerCardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerCardResponse**](../Model/CreateCustomerCardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerCard**
> \SquareConnect\Model\DeleteCustomerCardResponse deleteCustomerCard($customer_id, $card_id)

DeleteCustomerCard

Removes a card on file from a customer.

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

$api_instance = new SquareConnect\Api\CustomerCardApi();
$customer_id = "customer_id_example"; // string | 
$card_id = "card_id_example"; // string | 

try {
    $result = $api_instance->deleteCustomerCard($customer_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCardApi->deleteCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**|  |
 **card_id** | **string**|  |

### Return type

[**\SquareConnect\Model\DeleteCustomerCardResponse**](../Model/DeleteCustomerCardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

