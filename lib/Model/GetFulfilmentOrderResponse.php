<?php
/**
 * GetFulfilmentOrderResponse
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
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMS\Suppliers\Model;

use \ArrayAccess;
use \SMS\Suppliers\ObjectSerializer;

/**
 * GetFulfilmentOrderResponse Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetFulfilmentOrderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetFulfilmentOrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fulfilment_order_id' => 'int',
        'customer_order_id' => 'string',
        'created_at' => 'string',
        'units' => '\SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse[]',
        'shipment_data' => '\SMS\Suppliers\Model\ShipmentData[]',
        'shipment_address' => '\SMS\Suppliers\Model\ShipmentAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fulfilment_order_id' => null,
        'customer_order_id' => null,
        'created_at' => null,
        'units' => null,
        'shipment_data' => null,
        'shipment_address' => null
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
        'fulfilment_order_id' => 'fulfilment_order_id',
        'customer_order_id' => 'customer_order_id',
        'created_at' => 'created_at',
        'units' => 'units',
        'shipment_data' => 'shipment_data',
        'shipment_address' => 'shipment_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfilment_order_id' => 'setFulfilmentOrderId',
        'customer_order_id' => 'setCustomerOrderId',
        'created_at' => 'setCreatedAt',
        'units' => 'setUnits',
        'shipment_data' => 'setShipmentData',
        'shipment_address' => 'setShipmentAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfilment_order_id' => 'getFulfilmentOrderId',
        'customer_order_id' => 'getCustomerOrderId',
        'created_at' => 'getCreatedAt',
        'units' => 'getUnits',
        'shipment_data' => 'getShipmentData',
        'shipment_address' => 'getShipmentAddress'
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
        $this->container['fulfilment_order_id'] = isset($data['fulfilment_order_id']) ? $data['fulfilment_order_id'] : null;
        $this->container['customer_order_id'] = isset($data['customer_order_id']) ? $data['customer_order_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['shipment_data'] = isset($data['shipment_data']) ? $data['shipment_data'] : null;
        $this->container['shipment_address'] = isset($data['shipment_address']) ? $data['shipment_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fulfilment_order_id'] === null) {
            $invalidProperties[] = "'fulfilment_order_id' can't be null";
        }
        if ($this->container['customer_order_id'] === null) {
            $invalidProperties[] = "'customer_order_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
        if ($this->container['shipment_address'] === null) {
            $invalidProperties[] = "'shipment_address' can't be null";
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
     * Gets fulfilment_order_id
     *
     * @return int
     */
    public function getFulfilmentOrderId()
    {
        return $this->container['fulfilment_order_id'];
    }

    /**
     * Sets fulfilment_order_id
     *
     * @param int $fulfilment_order_id fulfilment_order_id
     *
     * @return $this
     */
    public function setFulfilmentOrderId($fulfilment_order_id)
    {
        $this->container['fulfilment_order_id'] = $fulfilment_order_id;

        return $this;
    }

    /**
     * Gets customer_order_id
     *
     * @return string
     */
    public function getCustomerOrderId()
    {
        return $this->container['customer_order_id'];
    }

    /**
     * Sets customer_order_id
     *
     * @param string $customer_order_id customer_order_id
     *
     * @return $this
     */
    public function setCustomerOrderId($customer_order_id)
    {
        $this->container['customer_order_id'] = $customer_order_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse[]
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \SMS\Suppliers\Model\GetFulfilmentOrderUnitResponse[] $units units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets shipment_data
     *
     * @return \SMS\Suppliers\Model\ShipmentData[]
     */
    public function getShipmentData()
    {
        return $this->container['shipment_data'];
    }

    /**
     * Sets shipment_data
     *
     * @param \SMS\Suppliers\Model\ShipmentData[] $shipment_data shipment_data
     *
     * @return $this
     */
    public function setShipmentData($shipment_data)
    {
        $this->container['shipment_data'] = $shipment_data;

        return $this;
    }

    /**
     * Gets shipment_address
     *
     * @return \SMS\Suppliers\Model\ShipmentAddress
     */
    public function getShipmentAddress()
    {
        return $this->container['shipment_address'];
    }

    /**
     * Sets shipment_address
     *
     * @param \SMS\Suppliers\Model\ShipmentAddress $shipment_address shipment_address
     *
     * @return $this
     */
    public function setShipmentAddress($shipment_address)
    {
        $this->container['shipment_address'] = $shipment_address;

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


