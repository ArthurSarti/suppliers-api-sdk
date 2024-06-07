<?php
/**
 * CreateInventoryCountryValuesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * This documentation describes SMS Suppliers API. To be able use this API you should have an api-key and api-username
 *
 * Contact: sms.tech@kaufland-online.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Model\v2;

use \ArrayAccess;
use \SMS\Suppliers\ObjectSerializer;

/**
 * CreateInventoryCountryValuesRequest Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateInventoryCountryValuesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateInventoryCountryValuesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'price' => 'float',
        'freight_costs' => 'float',
        'handling_costs' => 'float',
        'return_shipping_costs' => 'float',
        'delivery_min_time' => 'int',
        'delivery_max_time' => 'int',
        'reverse_charge' => 'int',
        'currency' => 'string',
        'carrier' => 'object',
        'carrier_service' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'price' => 'float',
        'freight_costs' => 'float',
        'handling_costs' => 'float',
        'return_shipping_costs' => 'float',
        'delivery_min_time' => 'int64',
        'delivery_max_time' => 'int64',
        'reverse_charge' => null,
        'currency' => null,
        'carrier' => null,
        'carrier_service' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country' => 'country',
        'price' => 'price',
        'freight_costs' => 'freight_costs',
        'handling_costs' => 'handling_costs',
        'return_shipping_costs' => 'return_shipping_costs',
        'delivery_min_time' => 'delivery_min_time',
        'delivery_max_time' => 'delivery_max_time',
        'reverse_charge' => 'reverse_charge',
        'currency' => 'currency',
        'carrier' => 'carrier',
        'carrier_service' => 'carrier_service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'price' => 'setPrice',
        'freight_costs' => 'setFreightCosts',
        'handling_costs' => 'setHandlingCosts',
        'return_shipping_costs' => 'setReturnShippingCosts',
        'delivery_min_time' => 'setDeliveryMinTime',
        'delivery_max_time' => 'setDeliveryMaxTime',
        'reverse_charge' => 'setReverseCharge',
        'currency' => 'setCurrency',
        'carrier' => 'setCarrier',
        'carrier_service' => 'setCarrierService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'price' => 'getPrice',
        'freight_costs' => 'getFreightCosts',
        'handling_costs' => 'getHandlingCosts',
        'return_shipping_costs' => 'getReturnShippingCosts',
        'delivery_min_time' => 'getDeliveryMinTime',
        'delivery_max_time' => 'getDeliveryMaxTime',
        'reverse_charge' => 'getReverseCharge',
        'currency' => 'getCurrency',
        'carrier' => 'getCarrier',
        'carrier_service' => 'getCarrierService'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['freight_costs'] = isset($data['freight_costs']) ? $data['freight_costs'] : null;
        $this->container['handling_costs'] = isset($data['handling_costs']) ? $data['handling_costs'] : null;
        $this->container['return_shipping_costs'] = isset($data['return_shipping_costs']) ? $data['return_shipping_costs'] : null;
        $this->container['delivery_min_time'] = isset($data['delivery_min_time']) ? $data['delivery_min_time'] : null;
        $this->container['delivery_max_time'] = isset($data['delivery_max_time']) ? $data['delivery_max_time'] : null;
        $this->container['reverse_charge'] = isset($data['reverse_charge']) ? $data['reverse_charge'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['carrier_service'] = isset($data['carrier_service']) ? $data['carrier_service'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['handling_costs'] === null) {
            $invalidProperties[] = "'handling_costs' can't be null";
        }
        if ($this->container['delivery_min_time'] === null) {
            $invalidProperties[] = "'delivery_min_time' can't be null";
        }
        if ($this->container['delivery_max_time'] === null) {
            $invalidProperties[] = "'delivery_max_time' can't be null";
        }
        if ($this->container['reverse_charge'] === null) {
            $invalidProperties[] = "'reverse_charge' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country IsoAlpha2 code the offer relates to
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Supplier price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets freight_costs
     *
     * @return float
     */
    public function getFreightCosts()
    {
        return $this->container['freight_costs'];
    }

    /**
     * Sets freight_costs
     *
     * @param float $freight_costs Freight costs
     *
     * @return $this
     */
    public function setFreightCosts($freight_costs)
    {
        $this->container['freight_costs'] = $freight_costs;

        return $this;
    }

    /**
     * Gets handling_costs
     *
     * @return float
     */
    public function getHandlingCosts()
    {
        return $this->container['handling_costs'];
    }

    /**
     * Sets handling_costs
     *
     * @param float $handling_costs Handling costs
     *
     * @return $this
     */
    public function setHandlingCosts($handling_costs)
    {
        $this->container['handling_costs'] = $handling_costs;

        return $this;
    }

    /**
     * Gets return_shipping_costs
     *
     * @return float
     */
    public function getReturnShippingCosts()
    {
        return $this->container['return_shipping_costs'];
    }

    /**
     * Sets return_shipping_costs
     *
     * @param float $return_shipping_costs Return shipping Cost
     *
     * @return $this
     */
    public function setReturnShippingCosts($return_shipping_costs)
    {
        $this->container['return_shipping_costs'] = $return_shipping_costs;

        return $this;
    }

    /**
     * Gets delivery_min_time
     *
     * @return int
     */
    public function getDeliveryMinTime()
    {
        return $this->container['delivery_min_time'];
    }

    /**
     * Sets delivery_min_time
     *
     * @param int $delivery_min_time Minimal Delivery Time
     *
     * @return $this
     */
    public function setDeliveryMinTime($delivery_min_time)
    {
        $this->container['delivery_min_time'] = $delivery_min_time;

        return $this;
    }

    /**
     * Gets delivery_max_time
     *
     * @return int
     */
    public function getDeliveryMaxTime()
    {
        return $this->container['delivery_max_time'];
    }

    /**
     * Sets delivery_max_time
     *
     * @param int $delivery_max_time Maximum Delivery Time
     *
     * @return $this
     */
    public function setDeliveryMaxTime($delivery_max_time)
    {
        $this->container['delivery_max_time'] = $delivery_max_time;

        return $this;
    }

    /**
     * Gets reverse_charge
     *
     * @return int
     */
    public function getReverseCharge()
    {
        return $this->container['reverse_charge'];
    }

    /**
     * Sets reverse_charge
     *
     * @param int $reverse_charge Reverse charge. If unknown use '0' as value.
     *
     * @return $this
     */
    public function setReverseCharge($reverse_charge)
    {
        $this->container['reverse_charge'] = $reverse_charge;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return object
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param object $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets carrier_service
     *
     * @return object
     */
    public function getCarrierService()
    {
        return $this->container['carrier_service'];
    }

    /**
     * Sets carrier_service
     *
     * @param object $carrier_service carrier_service
     *
     * @return $this
     */
    public function setCarrierService($carrier_service)
    {
        $this->container['carrier_service'] = $carrier_service;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


