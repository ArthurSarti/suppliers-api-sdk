# UpdateInventoryCountryValuesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | IsoAlpha2 code the offer relates to | 
**price** | **float** | Supplier price | 
**freight_costs** | **float** | Freight costs | [optional] 
**handling_costs** | **float** | Handling costs | 
**return_shipping_costs** | **float** | Return shipping Cost | [optional] 
**delivery_min_time** | **int** | Minimal Delivery Time | 
**delivery_max_time** | **int** | Maximum Delivery Time | 
**reverse_charge** | **int** | Reverse charge. If unknown use &#39;0&#39; as value. | 
**currency** | **string** | Currency | [optional] 
**carrier** | [**\SMS\Suppliers\Model\v2\Carrier**](Carrier.md) |  | [optional] 
**carrier_service** | [**\SMS\Suppliers\Model\v2\CarrierService**](CarrierService.md) |  | [optional] 

[[Back to Model list]](../../../README.md#documentation-for-models) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../README.md)


