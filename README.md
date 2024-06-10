# suppliers-api-sdk
This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API versions: 1.11.1 & 2.0.0
- Package version: 0.14.0
- Build package: com.kaufland.swagger.codegen.CustomPhpClientCodegen

## API versions

This SDK provides a way to communicate with both v1 AND v2 Suppliers APIs (see specific versions above).
By default, version 1 is used. To change it, please use `SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion($apiVersion)`
to set the API version (1 or 2) and make sure you then use the classes with the correct namespace to create your requests.
Using a class of the wrong version could cause unexpected behaviour.

Ex: `SMS\Suppliers\Api\InventoryApi` for version 1 and `SMS\Suppliers\Api\v2\InventoryApi` for version 2

Older implementations of this SDK don't need to be changed for version 1.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/hitmeister/suppliers-api-sdk.git"
    }
  ],
  "require": {
    "hitmeister/suppliers-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/suppliers-api-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:


```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: apiUsername
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKey('api-username', 'YOUR_PARAMETER_VALUE');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-username', 'Bearer');
// Set API version (1 or 2)
$config = SMS\Suppliers\Configuration::getDefaultConfiguration()->setApiVersion(1);

$apiInstance = new SMS\Suppliers\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | ID of inventory
$body = new \SMS\Suppliers\Model\CreateImportRequest(); // \SMS\Suppliers\Model\CreateImportRequest | Inventory import request which stores all the necessary info

try {
    $apiInstance->createImportRequest($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->createImportRequest: ', $e->getMessage(), PHP_EOL;
}

?>
```



## Documentation for API Version 1

### Endpoints

All URIs are relative to *https://sms.kaufland.de/api/v1/supplier*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryApi* | [**createImportRequest**](docs/Api/InventoryApi.md#createimportrequest) | **POST** /inventories/{id}/import-requests | Create new inventory import
*InventoryApi* | [**getInventory**](docs/Api/InventoryApi.md#getinventory) | **GET** /inventories/{id} | Find inventory by ID
*InventoryUnitApi* | [**createInventoryUnit**](docs/Api/InventoryUnitApi.md#createinventoryunit) | **POST** /inventory-units | Create new inventory unit
*InventoryUnitApi* | [**deleteInventoryUnit**](docs/Api/InventoryUnitApi.md#deleteinventoryunit) | **DELETE** /inventory-units/{id} | Delete inventory unit by supplier_item_id
*InventoryUnitApi* | [**getInventoryUnit**](docs/Api/InventoryUnitApi.md#getinventoryunit) | **GET** /inventory-units/{id} | Find inventory unit by supplier_item_id
*InventoryUnitApi* | [**getInventoryUnits**](docs/Api/InventoryUnitApi.md#getinventoryunits) | **GET** /inventory-units | Find all inventory units
*InventoryUnitApi* | [**updateInventoryUnit**](docs/Api/InventoryUnitApi.md#updateinventoryunit) | **PATCH** /inventory-units/{id} | Update inventory unit
*ItemMeasurementApi* | [**createItemMeasurement**](docs/Api/ItemMeasurementApi.md#createitemmeasurement) | **POST** /item-measurements | Create item-measurement by gtin (for crossdock &amp; wholesaler)
*ItemMeasurementApi* | [**getItemMeasurement**](docs/Api/ItemMeasurementApi.md#getitemmeasurement) | **GET** /item-measurements/{gtin} | Find item-measurement by gtin
*OrderApi* | [**confirmOrder**](docs/Api/OrderApi.md#confirmorder) | **POST** /orders/{id}/confirm | Confirm order
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /orders/{id} | Find order by ID
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /orders | Find all orders by given parameters
*OrderUnitApi* | [**cancelOrderUnit**](docs/Api/OrderUnitApi.md#cancelorderunit) | **POST** /order-units/{id}/cancel | Cancel an order unit
*OrderUnitApi* | [**getOrderUnit**](docs/Api/OrderUnitApi.md#getorderunit) | **GET** /order-units/{id} | Find order unit by ID
*OrderUnitApi* | [**pickOrderUnit**](docs/Api/OrderUnitApi.md#pickorderunit) | **POST** /order-units/{id}/pick | Change order unit status to &#39;picking&#39;
*OrderUnitApi* | [**sendOrderUnit**](docs/Api/OrderUnitApi.md#sendorderunit) | **POST** /order-units/{id}/send | Send an order unit
*OrderUnitApi* | [**updateOrderUnitShipment**](docs/Api/OrderUnitApi.md#updateorderunitshipment) | **POST** /order-units/{id}/shipment | Update shipment data of the order unit
*SubscriptionApi* | [**createSubscription**](docs/Api/SubscriptionApi.md#createsubscription) | **POST** /subscriptions | Create new subscription
*SubscriptionApi* | [**deleteSubscription**](docs/Api/SubscriptionApi.md#deletesubscription) | **DELETE** /subscriptions/{id} | Delete existing subscription
*SubscriptionApi* | [**updateSubscription**](docs/Api/SubscriptionApi.md#updatesubscription) | **PATCH** /subscriptions/{id} | Update existing subscription
*SubscriptionApi* | [**viewSubscription**](docs/Api/SubscriptionApi.md#viewsubscription) | **GET** /subscriptions/{id} | View existing subscription
*SubscriptionApi* | [**viewSubscriptions**](docs/Api/SubscriptionApi.md#viewsubscriptions) | **GET** /subscriptions | Get all existing subscriptions


### Models

 - [BadRequestResponse](docs/Model/BadRequestResponse.md)
 - [CancelOrderUnitRequest](docs/Model/CancelOrderUnitRequest.md)
 - [Carrier](docs/Model/Carrier.md)
 - [CarrierService](docs/Model/CarrierService.md)
 - [CreateImportRequest](docs/Model/CreateImportRequest.md)
 - [CreateInventoryUnitRequest](docs/Model/CreateInventoryUnitRequest.md)
 - [CreateInventoryUnitResponse](docs/Model/CreateInventoryUnitResponse.md)
 - [CreateItemMeasurementRequest](docs/Model/CreateItemMeasurementRequest.md)
 - [CreateSubscriptionRequest](docs/Model/CreateSubscriptionRequest.md)
 - [CreateSubscriptionResponse](docs/Model/CreateSubscriptionResponse.md)
 - [GetFulfilmentOrderResponse](docs/Model/GetFulfilmentOrderResponse.md)
 - [GetFulfilmentOrderUnitResponse](docs/Model/GetFulfilmentOrderUnitResponse.md)
 - [GetFulfilmentOrdersResponse](docs/Model/GetFulfilmentOrdersResponse.md)
 - [GetInventoryResponse](docs/Model/GetInventoryResponse.md)
 - [GetInventoryUnitResponse](docs/Model/GetInventoryUnitResponse.md)
 - [Item](docs/Model/Item.md)
 - [ItemMeasurementResponse](docs/Model/ItemMeasurementResponse.md)
 - [SendOrderUnitRequest](docs/Model/SendOrderUnitRequest.md)
 - [ShipmentAddress](docs/Model/ShipmentAddress.md)
 - [ShipmentData](docs/Model/ShipmentData.md)
 - [UpdateInventoryUnitRequest](docs/Model/UpdateInventoryUnitRequest.md)
 - [UpdateOrderUnitShipmentDataRequest](docs/Model/UpdateOrderUnitShipmentDataRequest.md)
 - [User](docs/Model/User.md)
 - [UpdateSubscriptionRequest](docs/Model/UpdateSubscriptionRequest.md)
 - [UpdateSubscriptionResponse](docs/Model/UpdateSubscriptionResponse.md)
 - [ViewSubscriptionResponse](docs/Model/ViewSubscriptionResponse.md)



## Documentation for API Version 2

### Endpoints

All URIs are relative to *https://sms.kaufland.de/api/v2/supplier*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryApi* | [**createImportRequest**](docs/Api/v2/InventoryApi.md#createimportrequest) | **POST** /inventories/{id}/import-requests | Create new inventory import
*InventoryApi* | [**getInventory**](docs/Api/v2/InventoryApi.md#getinventory) | **GET** /inventories/{id} | Find inventory by ID
*InventoryUnitApi* | [**createInventoryUnit**](docs/Api/v2/InventoryUnitApi.md#createinventoryunit) | **POST** /inventory-units | Create new inventory unit
*InventoryUnitApi* | [**deleteInventoryUnit**](docs/Api/v2/InventoryUnitApi.md#deleteinventoryunit) | **DELETE** /inventory-units/{id} | Delete inventory unit by supplier_item_id
*InventoryUnitApi* | [**getInventoryUnit**](docs/Api/v2/InventoryUnitApi.md#getinventoryunit) | **GET** /inventory-units/{id} | Find inventory unit by supplier_item_id
*InventoryUnitApi* | [**getInventoryUnits**](docs/Api/v2/InventoryUnitApi.md#getinventoryunits) | **GET** /inventory-units | Find all inventory units
*InventoryUnitApi* | [**updateInventoryUnit**](docs/Api/v2/InventoryUnitApi.md#updateinventoryunit) | **PATCH** /inventory-units/{id} | Update inventory unit
*ItemMeasurementApi* | [**createItemMeasurement**](docs/Api/v2/ItemMeasurementApi.md#createitemmeasurement) | **POST** /item-measurements | Create item-measurement by gtin (for crossdock &amp; wholesaler)
*ItemMeasurementApi* | [**getItemMeasurement**](docs/Api/v2/ItemMeasurementApi.md#getitemmeasurement) | **GET** /item-measurements/{gtin} | Find item-measurement by gtin
*OrderApi* | [**confirmOrder**](docs/Api/v2/OrderApi.md#confirmorder) | **POST** /orders/{id}/confirm | Confirm order
*OrderApi* | [**getOrder**](docs/Api/v2/OrderApi.md#getorder) | **GET** /orders/{id} | Find order by ID
*OrderApi* | [**getOrders**](docs/Api/v2/OrderApi.md#getorders) | **GET** /orders | Find all orders by given parameters
*OrderUnitApi* | [**cancelOrderUnit**](docs/Api/v2/OrderUnitApi.md#cancelorderunit) | **POST** /order-units/{id}/cancel | Cancel an order unit
*OrderUnitApi* | [**getOrderUnit**](docs/Api/v2/OrderUnitApi.md#getorderunit) | **GET** /order-units/{id} | Find order unit by ID
*OrderUnitApi* | [**pickOrderUnit**](docs/Api/v2/OrderUnitApi.md#pickorderunit) | **POST** /order-units/{id}/pick | Change order unit status to &#39;picking&#39;
*OrderUnitApi* | [**sendOrderUnit**](docs/Api/v2/OrderUnitApi.md#sendorderunit) | **POST** /order-units/{id}/send | Send an order unit
*OrderUnitApi* | [**updateOrderUnitShipment**](docs/Api/v2/OrderUnitApi.md#updateorderunitshipment) | **POST** /order-units/{id}/shipment | Update shipment data of the order unit
*SubscriptionApi* | [**createSubscription**](docs/Api/v2/SubscriptionApi.md#createsubscription) | **POST** /subscriptions | Create new subscription
*SubscriptionApi* | [**deleteSubscription**](docs/Api/v2/SubscriptionApi.md#deletesubscription) | **DELETE** /subscriptions/{id} | Delete existing subscription
*SubscriptionApi* | [**updateSubscription**](docs/Api/v2/SubscriptionApi.md#updatesubscription) | **PATCH** /subscriptions/{id} | Update existing subscription
*SubscriptionApi* | [**viewSubscription**](docs/Api/v2/SubscriptionApi.md#viewsubscription) | **GET** /subscriptions/{id} | View existing subscription
*SubscriptionApi* | [**viewSubscriptions**](docs/Api/v2/SubscriptionApi.md#viewsubscriptions) | **GET** /subscriptions | Get all existing subscriptions


### Models

 - [BadRequestResponse](docs/Model/v2/BadRequestResponse.md)
 - [CancelOrderUnitRequest](docs/Model/v2/CancelOrderUnitRequest.md)
 - [Carrier](docs/Model/v2/Carrier.md)
 - [CarrierService](docs/Model/v2/CarrierService.md)
 - [CreateImportRequest](docs/Model/v2/CreateImportRequest.md)
 - [CreateInventoryCountryValuesRequest](docs/Model/v2/CreateInventoryCountryValuesRequest.md)
 - [CreateInventoryUnitRequest](docs/Model/v2/CreateInventoryUnitRequest.md)
 - [CreateInventoryUnitResponse](docs/Model/v2/CreateInventoryUnitResponse.md)
 - [CreateItemMeasurementRequest](docs/Model/v2/CreateItemMeasurementRequest.md)
 - [CreateSubscriptionRequest](docs/Model/v2/CreateSubscriptionRequest.md)
 - [CreateSubscriptionResponse](docs/Model/v2/CreateSubscriptionResponse.md)
 - [GetFulfilmentOrderResponse](docs/Model/v2/GetFulfilmentOrderResponse.md)
 - [GetFulfilmentOrderUnitResponse](docs/Model/v2/GetFulfilmentOrderUnitResponse.md)
 - [GetFulfilmentOrdersResponse](docs/Model/v2/GetFulfilmentOrdersResponse.md)
 - [GetInventoryResponse](docs/Model/v2/GetInventoryResponse.md)
 - [GetInventoryUnitCountryValueResponse](docs/Model/v2/GetInventoryUnitCountryValueResponse.md)
 - [GetInventoryUnitResponse](docs/Model/v2/GetInventoryUnitResponse.md)
 - [Item](docs/Model/v2/Item.md)
 - [ItemMeasurementResponse](docs/Model/v2/ItemMeasurementResponse.md)
 - [SendOrderUnitRequest](docs/Model/v2/SendOrderUnitRequest.md)
 - [ShipmentAddress](docs/Model/v2/ShipmentAddress.md)
 - [ShipmentData](docs/Model/v2/ShipmentData.md)
 - [UpdateInventoryCountryValuesRequest](docs/Model/v2/UpdateInventoryCountryValuesRequest.md)
 - [UpdateInventoryUnitRequest](docs/Model/v2/UpdateInventoryUnitRequest.md)
 - [UpdateOrderUnitShipmentDataRequest](docs/Model/v2/UpdateOrderUnitShipmentDataRequest.md)
 - [User](docs/Model/v2/User.md)
 - [UpdateSubscriptionRequest](docs/Model/v2/UpdateSubscriptionRequest.md)
 - [UpdateSubscriptionResponse](docs/Model/v2/UpdateSubscriptionResponse.md)
 - [ViewSubscriptionResponse](docs/Model/v2/ViewSubscriptionResponse.md)



## Documentation For Authorization


## apiKey

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header

## apiUsername

- **Type**: API key
- **API key parameter name**: api-username
- **Location**: HTTP header


## Author

sms.tech@kaufland-online.com

