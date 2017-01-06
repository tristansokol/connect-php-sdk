# SquareConnect\OAuthApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccessToken**](OAuthApi.md#getAccessToken) | **POST** /oauth2/token | Exchange an Authorization code for an Access Token
[**renewToken**](OAuthApi.md#renewToken) | **POST** /oauth2/clients/{application_id}/access-token/renew | Renew your Access Token.


# **getAccessToken**
> \SquareConnect\Model\AccessTokenResponse getAccessToken($access_token_request)

Exchange an Authorization code for an Access Token

Exchange an Authorization code for an Access Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\OAuthApi();
$access_token_request = new \SquareConnect\Model\AccessTokenRequest(); // \SquareConnect\Model\AccessTokenRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->getAccessToken($access_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token_request** | [**\SquareConnect\Model\AccessTokenRequest**](../Model/\SquareConnect\Model\AccessTokenRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewToken**
> \SquareConnect\Model\AccessTokenResponse renewToken($application_id, $access_token_renew_request)

Renew your Access Token.

Renew your Access Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\OAuthApi();
$application_id = "application_id_example"; // string | Your Application ID.
$access_token_renew_request = new \SquareConnect\Model\AccessTokenRenewRequest(); // \SquareConnect\Model\AccessTokenRenewRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->renewToken($application_id, $access_token_renew_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->renewToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| Your Application ID. |
 **access_token_renew_request** | [**\SquareConnect\Model\AccessTokenRenewRequest**](../Model/\SquareConnect\Model\AccessTokenRenewRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\AccessTokenResponse**](../Model/AccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

