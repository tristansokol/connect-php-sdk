# SquareConnect\VBusinessManagementApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ListLocations**](VBusinessManagementApi.md#v1ListLocations) | **GET** /v1/me/locations | Provides details for a business&#39;s locations, including their IDs.
[**v1RetrieveBusiness**](VBusinessManagementApi.md#v1RetrieveBusiness) | **GET** /v1/me | Get a business&#39;s information.


# **v1ListLocations**
> \SquareConnect\Model\V1Merchant[] v1ListLocations()

Provides details for a business's locations, including their IDs.

Provides details for a business's locations, including their IDs.

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

$api_instance = new SquareConnect\Api\VBusinessManagementApi();

try {
    $result = $api_instance->v1ListLocations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VBusinessManagementApi->v1ListLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\V1Merchant[]**](../Model/V1Merchant.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1RetrieveBusiness**
> \SquareConnect\Model\V1Merchant v1RetrieveBusiness()

Get a business's information.

Get a business's information.

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

$api_instance = new SquareConnect\Api\VBusinessManagementApi();

try {
    $result = $api_instance->v1RetrieveBusiness();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VBusinessManagementApi->v1RetrieveBusiness: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SquareConnect\Model\V1Merchant**](../Model/V1Merchant.md)

### Authorization

[oauth2](../../README.md#oauth2), [personal_access_token](../../README.md#personal_access_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

