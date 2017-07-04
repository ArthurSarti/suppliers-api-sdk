<?php
/**
 * OrderUnitApi
 * PHP version 5
 *
 * @category Class
 * @package  Suppliers\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SMS API
 *
 * This documentation describes SMS API. To use this API you should have an api-key and api-username
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Suppliers\Api\Api;

use \Suppliers\Api\ApiClient;
use \Suppliers\Api\ApiException;
use \Suppliers\Api\Configuration;
use \Suppliers\Api\ObjectSerializer;

/**
 * OrderUnitApi Class Doc Comment
 *
 * @category Class
 * @package  Suppliers\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderUnitApi
{
    /**
     * API Client
     *
     * @var \Suppliers\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Suppliers\Api\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Suppliers\Api\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Suppliers\Api\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Suppliers\Api\ApiClient $apiClient set the API client
     *
     * @return OrderUnitApi
     */
    public function setApiClient(\Suppliers\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelOrderUnit
     *
     * Cancel an order unit
     *
     * @param string $id ID of order unit to cancel (required)
     * @param \Suppliers\Api\Model\CancelOrderUnitRequest $body Order unit that should be cancelled (required)
     * @throws \Suppliers\Api\ApiException on non-2xx response
     * @return void
     */
    public function cancelOrderUnit($id, $body)
    {
        list($response) = $this->cancelOrderUnitWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation cancelOrderUnitWithHttpInfo
     *
     * Cancel an order unit
     *
     * @param string $id ID of order unit to cancel (required)
     * @param \Suppliers\Api\Model\CancelOrderUnitRequest $body Order unit that should be cancelled (required)
     * @throws \Suppliers\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelOrderUnitWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling cancelOrderUnit');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling cancelOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/cancel";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/order-units/{id}/cancel'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Suppliers\Api\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendOrderUnit
     *
     * Send an order unit
     *
     * @param string $id ID of order unit to mark as sent (required)
     * @param \Suppliers\Api\Model\SendOrderUnitRequest $body Order unit that should be marked as sent (required)
     * @throws \Suppliers\Api\ApiException on non-2xx response
     * @return void
     */
    public function sendOrderUnit($id, $body)
    {
        list($response) = $this->sendOrderUnitWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation sendOrderUnitWithHttpInfo
     *
     * Send an order unit
     *
     * @param string $id ID of order unit to mark as sent (required)
     * @param \Suppliers\Api\Model\SendOrderUnitRequest $body Order unit that should be marked as sent (required)
     * @throws \Suppliers\Api\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendOrderUnitWithHttpInfo($id, $body)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling sendOrderUnit');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling sendOrderUnit');
        }
        // parse inputs
        $resourcePath = "/order-units/{id}/send";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-username');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-username'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/order-units/{id}/send'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Suppliers\Api\Model\BadRequestResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}