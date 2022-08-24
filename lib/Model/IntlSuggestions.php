<?php
/**
 * IntlSuggestions
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IntlSuggestions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IntlSuggestions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'intl_suggestions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primary_number_range' => 'string',
        'primary_line' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => '\OpenAPI\Client\Model\CountryExtendedExpanded',
        'zip_code' => 'string',
        'object' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primary_number_range' => null,
        'primary_line' => null,
        'city' => null,
        'state' => null,
        'country' => null,
        'zip_code' => null,
        'object' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'primary_number_range' => 'primary_number_range',
        'primary_line' => 'primary_line',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country',
        'zip_code' => 'zip_code',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primary_number_range' => 'setPrimaryNumberRange',
        'primary_line' => 'setPrimaryLine',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry',
        'zip_code' => 'setZipCode',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primary_number_range' => 'getPrimaryNumberRange',
        'primary_line' => 'getPrimaryLine',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry',
        'zip_code' => 'getZipCode',
        'object' => 'getObject'
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
        return self::$openAPIModelName;
    }

    const COUNTRY_AD = 'AD';
    const COUNTRY_AE = 'AE';
    const COUNTRY_AF = 'AF';
    const COUNTRY_AG = 'AG';
    const COUNTRY_AI = 'AI';
    const COUNTRY_AL = 'AL';
    const COUNTRY_AN = 'AN';
    const COUNTRY_AO = 'AO';
    const COUNTRY_AQ = 'AQ';
    const COUNTRY_AR = 'AR';
    const COUNTRY_AT = 'AT';
    const COUNTRY_AU = 'AU';
    const COUNTRY_AW = 'AW';
    const COUNTRY_AZ = 'AZ';
    const COUNTRY_BA = 'BA';
    const COUNTRY_BB = 'BB';
    const COUNTRY_BD = 'BD';
    const COUNTRY_BE = 'BE';
    const COUNTRY_BF = 'BF';
    const COUNTRY_BG = 'BG';
    const COUNTRY_BH = 'BH';
    const COUNTRY_BI = 'BI';
    const COUNTRY_BJ = 'BJ';
    const COUNTRY_BM = 'BM';
    const COUNTRY_BN = 'BN';
    const COUNTRY_BO = 'BO';
    const COUNTRY_BQ = 'BQ';
    const COUNTRY_BR = 'BR';
    const COUNTRY_BS = 'BS';
    const COUNTRY_BT = 'BT';
    const COUNTRY_BW = 'BW';
    const COUNTRY_BY = 'BY';
    const COUNTRY_BZ = 'BZ';
    const COUNTRY_CA = 'CA';
    const COUNTRY_CD = 'CD';
    const COUNTRY_CG = 'CG';
    const COUNTRY_CH = 'CH';
    const COUNTRY_CI = 'CI';
    const COUNTRY_CK = 'CK';
    const COUNTRY_CL = 'CL';
    const COUNTRY_CM = 'CM';
    const COUNTRY_CN = 'CN';
    const COUNTRY_CO = 'CO';
    const COUNTRY_CR = 'CR';
    const COUNTRY_CS = 'CS';
    const COUNTRY_CU = 'CU';
    const COUNTRY_CV = 'CV';
    const COUNTRY_CW = 'CW';
    const COUNTRY_CY = 'CY';
    const COUNTRY_CZ = 'CZ';
    const COUNTRY_DE = 'DE';
    const COUNTRY_DJ = 'DJ';
    const COUNTRY_DK = 'DK';
    const COUNTRY_DM = 'DM';
    const COUNTRY__DO = 'DO';
    const COUNTRY_DZ = 'DZ';
    const COUNTRY_EC = 'EC';
    const COUNTRY_EE = 'EE';
    const COUNTRY_EG = 'EG';
    const COUNTRY_EH = 'EH';
    const COUNTRY_ER = 'ER';
    const COUNTRY_ES = 'ES';
    const COUNTRY_ET = 'ET';
    const COUNTRY_FI = 'FI';
    const COUNTRY_FJ = 'FJ';
    const COUNTRY_FK = 'FK';
    const COUNTRY_FO = 'FO';
    const COUNTRY_FR = 'FR';
    const COUNTRY_GA = 'GA';
    const COUNTRY_GB = 'GB';
    const COUNTRY_GD = 'GD';
    const COUNTRY_GE = 'GE';
    const COUNTRY_GH = 'GH';
    const COUNTRY_GI = 'GI';
    const COUNTRY_GL = 'GL';
    const COUNTRY_GM = 'GM';
    const COUNTRY_GN = 'GN';
    const COUNTRY_GQ = 'GQ';
    const COUNTRY_GR = 'GR';
    const COUNTRY_GS = 'GS';
    const COUNTRY_GT = 'GT';
    const COUNTRY_GW = 'GW';
    const COUNTRY_GY = 'GY';
    const COUNTRY_HK = 'HK';
    const COUNTRY_HN = 'HN';
    const COUNTRY_HR = 'HR';
    const COUNTRY_HT = 'HT';
    const COUNTRY_HU = 'HU';
    const COUNTRY_ID = 'ID';
    const COUNTRY_IE = 'IE';
    const COUNTRY_IL = 'IL';
    const COUNTRY_IN = 'IN';
    const COUNTRY_IO = 'IO';
    const COUNTRY_IQ = 'IQ';
    const COUNTRY_IR = 'IR';
    const COUNTRY_IS = 'IS';
    const COUNTRY_IT = 'IT';
    const COUNTRY_JM = 'JM';
    const COUNTRY_JO = 'JO';
    const COUNTRY_JP = 'JP';
    const COUNTRY_KE = 'KE';
    const COUNTRY_KG = 'KG';
    const COUNTRY_KH = 'KH';
    const COUNTRY_KI = 'KI';
    const COUNTRY_KM = 'KM';
    const COUNTRY_KN = 'KN';
    const COUNTRY_KP = 'KP';
    const COUNTRY_KR = 'KR';
    const COUNTRY_KW = 'KW';
    const COUNTRY_KY = 'KY';
    const COUNTRY_KZ = 'KZ';
    const COUNTRY_LA = 'LA';
    const COUNTRY_LB = 'LB';
    const COUNTRY_LC = 'LC';
    const COUNTRY_LI = 'LI';
    const COUNTRY_LK = 'LK';
    const COUNTRY_LR = 'LR';
    const COUNTRY_LS = 'LS';
    const COUNTRY_LT = 'LT';
    const COUNTRY_LU = 'LU';
    const COUNTRY_LV = 'LV';
    const COUNTRY_LY = 'LY';
    const COUNTRY_MA = 'MA';
    const COUNTRY_MC = 'MC';
    const COUNTRY_MD = 'MD';
    const COUNTRY_ME = 'ME';
    const COUNTRY_MG = 'MG';
    const COUNTRY_MK = 'MK';
    const COUNTRY_ML = 'ML';
    const COUNTRY_MM = 'MM';
    const COUNTRY_MN = 'MN';
    const COUNTRY_MO = 'MO';
    const COUNTRY_MR = 'MR';
    const COUNTRY_MS = 'MS';
    const COUNTRY_MT = 'MT';
    const COUNTRY_MU = 'MU';
    const COUNTRY_MV = 'MV';
    const COUNTRY_MW = 'MW';
    const COUNTRY_MX = 'MX';
    const COUNTRY_MY = 'MY';
    const COUNTRY_MZ = 'MZ';
    const COUNTRY_NA = 'NA';
    const COUNTRY_NE = 'NE';
    const COUNTRY_NF = 'NF';
    const COUNTRY_NG = 'NG';
    const COUNTRY_NI = 'NI';
    const COUNTRY_NL = 'NL';
    const COUNTRY_NO = 'NO';
    const COUNTRY_NP = 'NP';
    const COUNTRY_NR = 'NR';
    const COUNTRY_NU = 'NU';
    const COUNTRY_NZ = 'NZ';
    const COUNTRY_OM = 'OM';
    const COUNTRY_PA = 'PA';
    const COUNTRY_PE = 'PE';
    const COUNTRY_PG = 'PG';
    const COUNTRY_PH = 'PH';
    const COUNTRY_PK = 'PK';
    const COUNTRY_PL = 'PL';
    const COUNTRY_PN = 'PN';
    const COUNTRY_PT = 'PT';
    const COUNTRY_PY = 'PY';
    const COUNTRY_QA = 'QA';
    const COUNTRY_RO = 'RO';
    const COUNTRY_RS = 'RS';
    const COUNTRY_RU = 'RU';
    const COUNTRY_RW = 'RW';
    const COUNTRY_SA = 'SA';
    const COUNTRY_SB = 'SB';
    const COUNTRY_SC = 'SC';
    const COUNTRY_SD = 'SD';
    const COUNTRY_SE = 'SE';
    const COUNTRY_SG = 'SG';
    const COUNTRY_SH = 'SH';
    const COUNTRY_SI = 'SI';
    const COUNTRY_SK = 'SK';
    const COUNTRY_SL = 'SL';
    const COUNTRY_SM = 'SM';
    const COUNTRY_SN = 'SN';
    const COUNTRY_SO = 'SO';
    const COUNTRY_SR = 'SR';
    const COUNTRY_SS = 'SS';
    const COUNTRY_ST = 'ST';
    const COUNTRY_SV = 'SV';
    const COUNTRY_SX = 'SX';
    const COUNTRY_SY = 'SY';
    const COUNTRY_SZ = 'SZ';
    const COUNTRY_TC = 'TC';
    const COUNTRY_TD = 'TD';
    const COUNTRY_TG = 'TG';
    const COUNTRY_TH = 'TH';
    const COUNTRY_TJ = 'TJ';
    const COUNTRY_TK = 'TK';
    const COUNTRY_TL = 'TL';
    const COUNTRY_TM = 'TM';
    const COUNTRY_TN = 'TN';
    const COUNTRY_TO = 'TO';
    const COUNTRY_TR = 'TR';
    const COUNTRY_TT = 'TT';
    const COUNTRY_TV = 'TV';
    const COUNTRY_TW = 'TW';
    const COUNTRY_TZ = 'TZ';
    const COUNTRY_UA = 'UA';
    const COUNTRY_UG = 'UG';
    const COUNTRY_US = 'US';
    const COUNTRY_UY = 'UY';
    const COUNTRY_UZ = 'UZ';
    const COUNTRY_VA = 'VA';
    const COUNTRY_VC = 'VC';
    const COUNTRY_VE = 'VE';
    const COUNTRY_VG = 'VG';
    const COUNTRY_VN = 'VN';
    const COUNTRY_VU = 'VU';
    const COUNTRY_WS = 'WS';
    const COUNTRY_YE = 'YE';
    const COUNTRY_ZA = 'ZA';
    const COUNTRY_ZM = 'ZM';
    const COUNTRY_ZW = 'ZW';
    const OBJECT_INTL_AUTOCOMPLETION = 'intl_autocompletion';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountryAllowableValues()
    {
        return [
            self::COUNTRY_AD,
            self::COUNTRY_AE,
            self::COUNTRY_AF,
            self::COUNTRY_AG,
            self::COUNTRY_AI,
            self::COUNTRY_AL,
            self::COUNTRY_AN,
            self::COUNTRY_AO,
            self::COUNTRY_AQ,
            self::COUNTRY_AR,
            self::COUNTRY_AT,
            self::COUNTRY_AU,
            self::COUNTRY_AW,
            self::COUNTRY_AZ,
            self::COUNTRY_BA,
            self::COUNTRY_BB,
            self::COUNTRY_BD,
            self::COUNTRY_BE,
            self::COUNTRY_BF,
            self::COUNTRY_BG,
            self::COUNTRY_BH,
            self::COUNTRY_BI,
            self::COUNTRY_BJ,
            self::COUNTRY_BM,
            self::COUNTRY_BN,
            self::COUNTRY_BO,
            self::COUNTRY_BQ,
            self::COUNTRY_BR,
            self::COUNTRY_BS,
            self::COUNTRY_BT,
            self::COUNTRY_BW,
            self::COUNTRY_BY,
            self::COUNTRY_BZ,
            self::COUNTRY_CA,
            self::COUNTRY_CD,
            self::COUNTRY_CG,
            self::COUNTRY_CH,
            self::COUNTRY_CI,
            self::COUNTRY_CK,
            self::COUNTRY_CL,
            self::COUNTRY_CM,
            self::COUNTRY_CN,
            self::COUNTRY_CO,
            self::COUNTRY_CR,
            self::COUNTRY_CS,
            self::COUNTRY_CU,
            self::COUNTRY_CV,
            self::COUNTRY_CW,
            self::COUNTRY_CY,
            self::COUNTRY_CZ,
            self::COUNTRY_DE,
            self::COUNTRY_DJ,
            self::COUNTRY_DK,
            self::COUNTRY_DM,
            self::COUNTRY__DO,
            self::COUNTRY_DZ,
            self::COUNTRY_EC,
            self::COUNTRY_EE,
            self::COUNTRY_EG,
            self::COUNTRY_EH,
            self::COUNTRY_ER,
            self::COUNTRY_ES,
            self::COUNTRY_ET,
            self::COUNTRY_FI,
            self::COUNTRY_FJ,
            self::COUNTRY_FK,
            self::COUNTRY_FO,
            self::COUNTRY_FR,
            self::COUNTRY_GA,
            self::COUNTRY_GB,
            self::COUNTRY_GD,
            self::COUNTRY_GE,
            self::COUNTRY_GH,
            self::COUNTRY_GI,
            self::COUNTRY_GL,
            self::COUNTRY_GM,
            self::COUNTRY_GN,
            self::COUNTRY_GQ,
            self::COUNTRY_GR,
            self::COUNTRY_GS,
            self::COUNTRY_GT,
            self::COUNTRY_GW,
            self::COUNTRY_GY,
            self::COUNTRY_HK,
            self::COUNTRY_HN,
            self::COUNTRY_HR,
            self::COUNTRY_HT,
            self::COUNTRY_HU,
            self::COUNTRY_ID,
            self::COUNTRY_IE,
            self::COUNTRY_IL,
            self::COUNTRY_IN,
            self::COUNTRY_IO,
            self::COUNTRY_IQ,
            self::COUNTRY_IR,
            self::COUNTRY_IS,
            self::COUNTRY_IT,
            self::COUNTRY_JM,
            self::COUNTRY_JO,
            self::COUNTRY_JP,
            self::COUNTRY_KE,
            self::COUNTRY_KG,
            self::COUNTRY_KH,
            self::COUNTRY_KI,
            self::COUNTRY_KM,
            self::COUNTRY_KN,
            self::COUNTRY_KP,
            self::COUNTRY_KR,
            self::COUNTRY_KW,
            self::COUNTRY_KY,
            self::COUNTRY_KZ,
            self::COUNTRY_LA,
            self::COUNTRY_LB,
            self::COUNTRY_LC,
            self::COUNTRY_LI,
            self::COUNTRY_LK,
            self::COUNTRY_LR,
            self::COUNTRY_LS,
            self::COUNTRY_LT,
            self::COUNTRY_LU,
            self::COUNTRY_LV,
            self::COUNTRY_LY,
            self::COUNTRY_MA,
            self::COUNTRY_MC,
            self::COUNTRY_MD,
            self::COUNTRY_ME,
            self::COUNTRY_MG,
            self::COUNTRY_MK,
            self::COUNTRY_ML,
            self::COUNTRY_MM,
            self::COUNTRY_MN,
            self::COUNTRY_MO,
            self::COUNTRY_MR,
            self::COUNTRY_MS,
            self::COUNTRY_MT,
            self::COUNTRY_MU,
            self::COUNTRY_MV,
            self::COUNTRY_MW,
            self::COUNTRY_MX,
            self::COUNTRY_MY,
            self::COUNTRY_MZ,
            self::COUNTRY_NA,
            self::COUNTRY_NE,
            self::COUNTRY_NF,
            self::COUNTRY_NG,
            self::COUNTRY_NI,
            self::COUNTRY_NL,
            self::COUNTRY_NO,
            self::COUNTRY_NP,
            self::COUNTRY_NR,
            self::COUNTRY_NU,
            self::COUNTRY_NZ,
            self::COUNTRY_OM,
            self::COUNTRY_PA,
            self::COUNTRY_PE,
            self::COUNTRY_PG,
            self::COUNTRY_PH,
            self::COUNTRY_PK,
            self::COUNTRY_PL,
            self::COUNTRY_PN,
            self::COUNTRY_PT,
            self::COUNTRY_PY,
            self::COUNTRY_QA,
            self::COUNTRY_RO,
            self::COUNTRY_RS,
            self::COUNTRY_RU,
            self::COUNTRY_RW,
            self::COUNTRY_SA,
            self::COUNTRY_SB,
            self::COUNTRY_SC,
            self::COUNTRY_SD,
            self::COUNTRY_SE,
            self::COUNTRY_SG,
            self::COUNTRY_SH,
            self::COUNTRY_SI,
            self::COUNTRY_SK,
            self::COUNTRY_SL,
            self::COUNTRY_SM,
            self::COUNTRY_SN,
            self::COUNTRY_SO,
            self::COUNTRY_SR,
            self::COUNTRY_SS,
            self::COUNTRY_ST,
            self::COUNTRY_SV,
            self::COUNTRY_SX,
            self::COUNTRY_SY,
            self::COUNTRY_SZ,
            self::COUNTRY_TC,
            self::COUNTRY_TD,
            self::COUNTRY_TG,
            self::COUNTRY_TH,
            self::COUNTRY_TJ,
            self::COUNTRY_TK,
            self::COUNTRY_TL,
            self::COUNTRY_TM,
            self::COUNTRY_TN,
            self::COUNTRY_TO,
            self::COUNTRY_TR,
            self::COUNTRY_TT,
            self::COUNTRY_TV,
            self::COUNTRY_TW,
            self::COUNTRY_TZ,
            self::COUNTRY_UA,
            self::COUNTRY_UG,
            self::COUNTRY_US,
            self::COUNTRY_UY,
            self::COUNTRY_UZ,
            self::COUNTRY_VA,
            self::COUNTRY_VC,
            self::COUNTRY_VE,
            self::COUNTRY_VG,
            self::COUNTRY_VN,
            self::COUNTRY_VU,
            self::COUNTRY_WS,
            self::COUNTRY_YE,
            self::COUNTRY_ZA,
            self::COUNTRY_ZM,
            self::COUNTRY_ZW,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_INTL_AUTOCOMPLETION,
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
        $this->container['primary_number_range'] = $data['primary_number_range'] ?? null;
        $this->container['primary_line'] = $data['primary_line'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['primary_number_range'] === null) {
                $invalidProperties[] = "'primary_number_range' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['primary_line'] === null) {
                $invalidProperties[] = "'primary_line' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['city'] === null) {
                $invalidProperties[] = "'city' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ((mb_strlen($this->container['city']) > 200)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['state'] === null) {
                $invalidProperties[] = "'state' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['country'] === null) {
                $invalidProperties[] = "'country' can't be null";
            }
        }
        $allowedValues = $this->getCountryAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['country']) && !in_array($this->container['country'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'country', must be one of '%s'",
                    $this->container['country'],
                    implode("', '", $allowedValues)
                );
            }
        }

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['zip_code'] === null) {
                $invalidProperties[] = "'zip_code' can't be null";
            }
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'object', must be one of '%s'",
                    $this->container['object'],
                    implode("', '", $allowedValues)
                );
            }
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
     * Gets primary_number_range
     *
     * @return string
     */
    public function getPrimaryNumberRange()
    {
        return $this->container['primary_number_range'];
    }

    /**
     * Sets primary_number_range
     *
     * @param string $primary_number_range The primary number range of the address that identifies a building at street level.
     *
     * @return self
     */
    public function setPrimaryNumberRange($primary_number_range)
    {
        $this->container['primary_number_range'] = $primary_number_range;

        return $this;
    }


    /**
     * Gets primary_line
     *
     * @return string
     */
    public function getPrimaryLine()
    {
        return $this->container['primary_line'];
    }

    /**
     * Sets primary_line
     *
     * @param string $primary_line The primary delivery line (usually the street address) of the address. Combination of the following applicable `components` (primary number & secondary information may be missing or inaccurate): * `primary_number` * `street_predirection` * `street_name` * `street_suffix` * `street_postdirection` * `secondary_designator` * `secondary_number` * `pmb_designator` * `pmb_number`
     *
     * @return self
     */
    public function setPrimaryLine($primary_line)
    {
        $this->container['primary_line'] = $primary_line;

        return $this;
    }


    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ((mb_strlen($city) > 200)) {
                throw new \InvalidArgumentException('invalid length for $city when calling IntlSuggestions., must be smaller than or equal to 200.');
            }

        }
        $this->container['city'] = $city;

        return $this;
    }


    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) two letter code for the state.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets country
     *
     * @return \OpenAPI\Client\Model\CountryExtendedExpanded
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\CountryExtendedExpanded $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $allowedValues = $this->getCountryAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!in_array($country, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'country', must be one of '%s'",
                        $country,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['country'] = $country;

        return $this;
    }


    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code A 5-digit zip code. Left empty if a test key is used.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }


    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object Value is resource type.
     *
     * @return self
     */
    public function setObject($object)
    {
        $allowedValues = $this->getObjectAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($object) && !in_array($object, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'object', must be one of '%s'",
                        $object,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['object'] = $object;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


