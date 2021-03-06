<?php
/**
 * OAuthApi
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 3.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 *  Copyright 2016 Square, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\Configuration;
use \SquareConnect\ObjectSerializer;

/**
 * OAuthApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */
class OAuthApi
{

    /**
     * API Client
     * @var \SquareConnect\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SquareConnect\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SquareConnect\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://connect.squareup.com');
        }

        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     *
     * @return \SquareConnect\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     *
     * @param \SquareConnect\ApiClient $apiClient set the API client
     *
     * @return OAuthApi
     */
    public function setApiClient(\SquareConnect\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAccessToken
     *
     * Exchange an Authorization code for an Access Token
     *
     * @param \SquareConnect\Model\AccessTokenRequest $access_token_request An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\AccessTokenResponse
     */
    public function getAccessToken($access_token_request)
     {
        list($response) = $this->getAccessTokenWithHttpInfo($access_token_request);
        return $response;
    }


    /**
     * Operation getAccessTokenWithHttpInfo
     *
     * Exchange an Authorization code for an Access Token
     *
     * @param \SquareConnect\Model\AccessTokenRequest $access_token_request An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\AccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccessTokenWithHttpInfo($access_token_request)
    {
        // verify the required parameter 'access_token_request' is set
        if ($access_token_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token_request when calling getAccessToken');
        }
        // parse inputs
        $resourcePath = "/oauth2/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
  
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($access_token_request)) {
            $_tempBody = $access_token_request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\AccessTokenResponse',
                '/oauth2/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\AccessTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\AccessTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation renewToken
     *
     * Renew your Access Token.
     *
     * @param string $application_id Your Application ID. (required)
     * @param \SquareConnect\Model\AccessTokenRenewRequest $access_token_renew_request An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\AccessTokenResponse
     */
    public function renewToken($application_id, $access_token_renew_request)
     {
        list($response) = $this->renewTokenWithHttpInfo($application_id, $access_token_renew_request);
        return $response;
    }


    /**
     * Operation renewTokenWithHttpInfo
     *
     * Renew your Access Token.
     *
     * @param string $application_id Your Application ID. (required)
     * @param \SquareConnect\Model\AccessTokenRenewRequest $access_token_renew_request An object containing the fields to POST for the request.  See the corresponding object definition for field details. (required)
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\AccessTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function renewTokenWithHttpInfo($application_id, $access_token_renew_request)
    {
        // verify the required parameter 'application_id' is set
        if ($application_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $application_id when calling renewToken');
        }
        // verify the required parameter 'access_token_renew_request' is set
        if ($access_token_renew_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token_renew_request when calling renewToken');
        }
        // parse inputs
        $resourcePath = "/oauth2/clients/{application_id}/access-token/renew";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);
  
        // path params
        if ($application_id !== null) {
            $resourcePath = str_replace(
                "{" . "application_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($application_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($access_token_renew_request)) {
            $_tempBody = $access_token_renew_request;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\AccessTokenResponse',
                '/oauth2/clients/{application_id}/access-token/renew'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\AccessTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\AccessTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
