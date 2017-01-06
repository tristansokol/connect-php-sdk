<?php
/**
 * VBusinessManagementApi
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
 * VBusinessManagementApi Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */
class VBusinessManagementApi
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
     * @return VBusinessManagementApi
     */
    public function setApiClient(\SquareConnect\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1ListLocations
     *
     * Provides details for a business's locations, including their IDs.
     *
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\V1Merchant[]
     */
    public function v1ListLocations()
     {
        list($response) = $this->v1ListLocationsWithHttpInfo();
        return $response;
    }


    /**
     * Operation v1ListLocationsWithHttpInfo
     *
     * Provides details for a business's locations, including their IDs.
     *
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\V1Merchant[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1ListLocationsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/me/locations";
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

          
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\V1Merchant[]',
                '/v1/me/locations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\V1Merchant[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\V1Merchant[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1RetrieveBusiness
     *
     * Get a business's information.
     *
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return \SquareConnect\Model\V1Merchant
     */
    public function v1RetrieveBusiness()
     {
        list($response) = $this->v1RetrieveBusinessWithHttpInfo();
        return $response;
    }


    /**
     * Operation v1RetrieveBusinessWithHttpInfo
     *
     * Get a business's information.
     *
     * @throws \SquareConnect\ApiException on non-2xx response
     * @return array of \SquareConnect\Model\V1Merchant, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1RetrieveBusinessWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/me";
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

          
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SquareConnect\Model\V1Merchant',
                '/v1/me'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SquareConnect\Model\V1Merchant', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SquareConnect\Model\V1Merchant', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
