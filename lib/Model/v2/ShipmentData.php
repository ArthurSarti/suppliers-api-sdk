<?php
/**
 * ShipmentData
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

namespace SMS\Suppliers\Model\v2;

use \ArrayAccess;
use \SMS\Suppliers\ObjectSerializer;

/**
 * ShipmentData Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier' => 'string',
        'tracking_number' => 'string',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier' => null,
        'tracking_number' => null,
        'created_at' => null
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
        'carrier' => 'carrier',
        'tracking_number' => 'tracking_number',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier' => 'setCarrier',
        'tracking_number' => 'setTrackingNumber',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier' => 'getCarrier',
        'tracking_number' => 'getTrackingNumber',
        'created_at' => 'getCreatedAt'
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

    const CARRIER_AMAZON_LOGISTICS_DE_SWISHIP = 'amazon_logistics_de_swiship';
    const CARRIER_AUSTRIAN_POST = 'austrian_post';
    const CARRIER__4PX = '4px';
    const CARRIER_BURSPED = 'bursped';
    const CARRIER_CARGOLINE = 'cargoline';
    const CARRIER_CARGO_INTERNATIONAL = 'cargo_international';
    const CARRIER_CHINA_POST = 'china_post';
    const CARRIER_CHRONOPOST = 'chronopost';
    const CARRIER_CORREOS = 'correos';
    const CARRIER_CHUKOU1_LOGISTICS = 'chukou1_logistics';
    const CARRIER_CZECH_POST = 'czech_post';
    const CARRIER_CNE_EXPRESS = 'cne_express';
    const CARRIER_DHL = 'dhl';
    const CARRIER_DHL_ECOMMERCE = 'dhl_ecommerce';
    const CARRIER_DHL_2_MH = 'dhl_2_mh';
    const CARRIER_DHL_EXPRESS = 'dhl_express';
    const CARRIER_DHL_FREIGHT = 'dhl_freight';
    const CARRIER_DHL_HONG_KONG = 'dhl_hong_kong';
    const CARRIER_DTL = 'dtl';
    const CARRIER_DSV = 'dsv';
    const CARRIER_DPD = 'dpd';
    const CARRIER_DPD_UK = 'dpd_uk';
    const CARRIER_DPDFRANCE = 'dpdfrance';
    const CARRIER_DPD_ROMANIA = 'dpd_romania';
    const CARRIER_DELIVERY_TO_STORE = 'delivery_to_store';
    const CARRIER_DEUTSCHE_POST = 'deutsche_post';
    const CARRIER_DACHSER = 'dachser';
    const CARRIER_EMONS = 'emons';
    const CARRIER_FEDEX = 'fedex';
    const CARRIER_FLYT_EXPRESS = 'flyt_express';
    const CARRIER_GLS = 'gls';
    const CARRIER_GLS_ITALY = 'gls_italy';
    const CARRIER_GEIS = 'geis';
    const CARRIER_GEL = 'gel';
    const CARRIER_HERMES = 'hermes';
    const CARRIER_HERMES_2_MH = 'hermes_2_mh';
    const CARRIER_HELLMANN = 'hellmann';
    const CARRIER_HONG_KONG_POST = 'hong_kong_post';
    const CARRIER_HUA_HAN_LOGISTICS = 'hua_han_logistics';
    const CARRIER_IDS_LOGISTIK = 'ids_logistik';
    const CARRIER_ILOXX = 'iloxx';
    const CARRIER_ILOXX_SPEDITION = 'iloxx_spedition';
    const CARRIER_JERSEY_POST = 'jersey_post';
    const CARRIER_KUEHNE_AND_NAGEL = 'kuehne_and_nagel';
    const CARRIER_LA_POSTE = 'la_poste';
    const CARRIER_RHENUS = 'rhenus';
    const CARRIER_OTHER = 'other';
    const CARRIER_OTHER_HAULER = 'other_hauler';
    const CARRIER_POST_ITALIANE = 'post_italiane';
    const CARRIER_POSTNL = 'postnl';
    const CARRIER_POSTNL_3S = 'postnl_3s';
    const CARRIER_PPL = 'ppl';
    const CARRIER_RABEN_GROUP = 'raben_group';
    const CARRIER_REDUR_SPAIN = 'redur_spain';
    const CARRIER_SCHENKER = 'schenker';
    const CARRIER_SEUR = 'seur';
    const CARRIER_SLOVAKIA_POST = 'slovakia_post';
    const CARRIER_SFC_SERVICE = 'sfc_service';
    const CARRIER_SPEDITION_GUETTLER = 'spedition_guettler';
    const CARRIER_TNT = 'tnt';
    const CARRIER_TRANS_FM = 'trans_fm';
    const CARRIER_TRANS_O_FLEX = 'trans-o-flex';
    const CARRIER_UPS = 'ups';
    const CARRIER_UBI_SMART_PARCEL = 'ubi_smart_parcel';
    const CARRIER_WANB_EXPRESS = 'wanb_express';
    const CARRIER_WINIT = 'winit';
    const CARRIER_WNDIRECT = 'wndirect';
    const CARRIER_YANWEN = 'yanwen';
    const CARRIER_YDH = 'ydh';
    const CARRIER_YUN_EXPRESS = 'yun_express';
    const CARRIER_ZUFALL = 'zufall';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_AMAZON_LOGISTICS_DE_SWISHIP,
            self::CARRIER_AUSTRIAN_POST,
            self::CARRIER__4PX,
            self::CARRIER_BURSPED,
            self::CARRIER_CARGOLINE,
            self::CARRIER_CARGO_INTERNATIONAL,
            self::CARRIER_CHINA_POST,
            self::CARRIER_CHRONOPOST,
            self::CARRIER_CORREOS,
            self::CARRIER_CHUKOU1_LOGISTICS,
            self::CARRIER_CZECH_POST,
            self::CARRIER_CNE_EXPRESS,
            self::CARRIER_DHL,
            self::CARRIER_DHL_ECOMMERCE,
            self::CARRIER_DHL_2_MH,
            self::CARRIER_DHL_EXPRESS,
            self::CARRIER_DHL_FREIGHT,
            self::CARRIER_DHL_HONG_KONG,
            self::CARRIER_DTL,
            self::CARRIER_DSV,
            self::CARRIER_DPD,
            self::CARRIER_DPD_UK,
            self::CARRIER_DPDFRANCE,
            self::CARRIER_DPD_ROMANIA,
            self::CARRIER_DELIVERY_TO_STORE,
            self::CARRIER_DEUTSCHE_POST,
            self::CARRIER_DACHSER,
            self::CARRIER_EMONS,
            self::CARRIER_FEDEX,
            self::CARRIER_FLYT_EXPRESS,
            self::CARRIER_GLS,
            self::CARRIER_GLS_ITALY,
            self::CARRIER_GEIS,
            self::CARRIER_GEL,
            self::CARRIER_HERMES,
            self::CARRIER_HERMES_2_MH,
            self::CARRIER_HELLMANN,
            self::CARRIER_HONG_KONG_POST,
            self::CARRIER_HUA_HAN_LOGISTICS,
            self::CARRIER_IDS_LOGISTIK,
            self::CARRIER_ILOXX,
            self::CARRIER_ILOXX_SPEDITION,
            self::CARRIER_JERSEY_POST,
            self::CARRIER_KUEHNE_AND_NAGEL,
            self::CARRIER_LA_POSTE,
            self::CARRIER_RHENUS,
            self::CARRIER_OTHER,
            self::CARRIER_OTHER_HAULER,
            self::CARRIER_POST_ITALIANE,
            self::CARRIER_POSTNL,
            self::CARRIER_POSTNL_3S,
            self::CARRIER_PPL,
            self::CARRIER_RABEN_GROUP,
            self::CARRIER_REDUR_SPAIN,
            self::CARRIER_SCHENKER,
            self::CARRIER_SEUR,
            self::CARRIER_SLOVAKIA_POST,
            self::CARRIER_SFC_SERVICE,
            self::CARRIER_SPEDITION_GUETTLER,
            self::CARRIER_TNT,
            self::CARRIER_TRANS_FM,
            self::CARRIER_TRANS_O_FLEX,
            self::CARRIER_UPS,
            self::CARRIER_UBI_SMART_PARCEL,
            self::CARRIER_WANB_EXPRESS,
            self::CARRIER_WINIT,
            self::CARRIER_WNDIRECT,
            self::CARRIER_YANWEN,
            self::CARRIER_YDH,
            self::CARRIER_YUN_EXPRESS,
            self::CARRIER_ZUFALL,
        ];
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
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($this->container['carrier']) && !in_array($this->container['carrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'carrier', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($carrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'carrier', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number tracking_number
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

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


