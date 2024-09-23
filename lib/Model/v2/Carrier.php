<?php
/**
 * Carrier
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
use \SMS\Suppliers\ObjectSerializer;

/**
 * Carrier Class Doc Comment
 *
 * @category Class
 * @package  SMS\Suppliers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Carrier
{
    /**
     * Possible values of this enum
     */
    const AMAZON_LOGISTICS_DE_SWISHIP = 'amazon_logistics_de_swiship';
    const AUSTRIAN_POST = 'austrian_post';
    const _4PX = '4px';
    const BURSPED = 'bursped';
    const CARGOLINE = 'cargoline';
    const CARGO_INTERNATIONAL = 'cargo_international';
    const CHINA_POST = 'china_post';
    const CHRONOPOST = 'chronopost';
    const CORREOS = 'correos';
    const CHUKOU1_LOGISTICS = 'chukou1_logistics';
    const CZECH_POST = 'czech_post';
    const CNE_EXPRESS = 'cne_express';
    const DHL = 'dhl';
    const DHL_ECOMMERCE = 'dhl_ecommerce';
    const DHL_2_MH = 'dhl_2_mh';
    const DHL_EXPRESS = 'dhl_express';
    const DHL_FREIGHT = 'dhl_freight';
    const DHL_HONG_KONG = 'dhl_hong_kong';
    const DTL = 'dtl';
    const DSV = 'dsv';
    const DPD = 'dpd';
    const DPD_UK = 'dpd_uk';
    const DPDFRANCE = 'dpdfrance';
    const DPD_ROMANIA = 'dpd_romania';
    const DELIVERY_TO_STORE = 'delivery_to_store';
    const DEUTSCHE_POST = 'deutsche_post';
    const DACHSER = 'dachser';
    const EMONS = 'emons';
    const FEDEX = 'fedex';
    const FLYT_EXPRESS = 'flyt_express';
    const GLS = 'gls';
    const GLS_ITALY = 'gls_italy';
    const GEIS = 'geis';
    const GEL = 'gel';
    const HERMES = 'hermes';
    const HERMES_2_MH = 'hermes_2_mh';
    const HELLMANN = 'hellmann';
    const HONG_KONG_POST = 'hong_kong_post';
    const HUA_HAN_LOGISTICS = 'hua_han_logistics';
    const IDS_LOGISTIK = 'ids_logistik';
    const ILOXX = 'iloxx';
    const ILOXX_SPEDITION = 'iloxx_spedition';
    const JERSEY_POST = 'jersey_post';
    const KUEHNE_AND_NAGEL = 'kuehne_and_nagel';
    const LA_POSTE = 'la_poste';
    const RHENUS = 'rhenus';
    const OTHER = 'other';
    const OTHER_HAULER = 'other_hauler';
    const POST_ITALIANE = 'post_italiane';
    const POSTNL = 'postnl';
    const POSTNL_3S = 'postnl_3s';
    const PPL = 'ppl';
    const RABEN_GROUP = 'raben_group';
    const REDUR_SPAIN = 'redur_spain';
    const SCHENKER = 'schenker';
    const SEUR = 'seur';
    const SLOVAKIA_POST = 'slovakia_post';
    const SFC_SERVICE = 'sfc_service';
    const SPEDITION_GUETTLER = 'spedition_guettler';
    const TNT = 'tnt';
    const TRANS_FM = 'trans_fm';
    const TRANS_O_FLEX = 'trans-o-flex';
    const UPS = 'ups';
    const UBI_SMART_PARCEL = 'ubi_smart_parcel';
    const WANB_EXPRESS = 'wanb_express';
    const WINIT = 'winit';
    const WNDIRECT = 'wndirect';
    const YANWEN = 'yanwen';
    const YDH = 'ydh';
    const YUN_EXPRESS = 'yun_express';
    const ZUFALL = 'zufall';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_LOGISTICS_DE_SWISHIP,
            self::AUSTRIAN_POST,
            self::_4PX,
            self::BURSPED,
            self::CARGOLINE,
            self::CARGO_INTERNATIONAL,
            self::CHINA_POST,
            self::CHRONOPOST,
            self::CORREOS,
            self::CHUKOU1_LOGISTICS,
            self::CZECH_POST,
            self::CNE_EXPRESS,
            self::DHL,
            self::DHL_ECOMMERCE,
            self::DHL_2_MH,
            self::DHL_EXPRESS,
            self::DHL_FREIGHT,
            self::DHL_HONG_KONG,
            self::DTL,
            self::DSV,
            self::DPD,
            self::DPD_UK,
            self::DPDFRANCE,
            self::DPD_ROMANIA,
            self::DELIVERY_TO_STORE,
            self::DEUTSCHE_POST,
            self::DACHSER,
            self::EMONS,
            self::FEDEX,
            self::FLYT_EXPRESS,
            self::GLS,
            self::GLS_ITALY,
            self::GEIS,
            self::GEL,
            self::HERMES,
            self::HERMES_2_MH,
            self::HELLMANN,
            self::HONG_KONG_POST,
            self::HUA_HAN_LOGISTICS,
            self::IDS_LOGISTIK,
            self::ILOXX,
            self::ILOXX_SPEDITION,
            self::JERSEY_POST,
            self::KUEHNE_AND_NAGEL,
            self::LA_POSTE,
            self::RHENUS,
            self::OTHER,
            self::OTHER_HAULER,
            self::POST_ITALIANE,
            self::POSTNL,
            self::POSTNL_3S,
            self::PPL,
            self::RABEN_GROUP,
            self::REDUR_SPAIN,
            self::SCHENKER,
            self::SEUR,
            self::SLOVAKIA_POST,
            self::SFC_SERVICE,
            self::SPEDITION_GUETTLER,
            self::TNT,
            self::TRANS_FM,
            self::TRANS_O_FLEX,
            self::UPS,
            self::UBI_SMART_PARCEL,
            self::WANB_EXPRESS,
            self::WINIT,
            self::WNDIRECT,
            self::YANWEN,
            self::YDH,
            self::YUN_EXPRESS,
            self::ZUFALL,
        ];
    }
}


