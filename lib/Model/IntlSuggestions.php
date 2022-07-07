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
        'country' => '\OpenAPI\Client\Model\CountryExtended',
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

    const OBJECT_INTL_AUTOCOMPLETION = 'intl_autocompletion';

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

        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['primary_number_range'] === null) {
                $invalidProperties[] = "'primary_number_range' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['primary_line'] === null) {
                $invalidProperties[] = "'primary_line' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['city'] === null) {
                $invalidProperties[] = "'city' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($this->container['city']) > 200)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['state'] === null) {
                $invalidProperties[] = "'state' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['country'] === null) {
                $invalidProperties[] = "'country' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['zip_code'] === null) {
                $invalidProperties[] = "'zip_code' can't be null";
            }
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
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
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
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
     * @return \OpenAPI\Client\Model\CountryExtended
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\Client\Model\CountryExtended $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
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
        if (!is_null($object) && !in_array($object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
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


