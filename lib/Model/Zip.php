<?php
/**
 * Zip
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
 * Zip Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Zip implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'zip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'zip_code' => 'string',
        'id' => 'string',
        'cities' => '\OpenAPI\Client\Model\ZipLookupCity[]',
        'zip_code_type' => '\OpenAPI\Client\Model\ZipCodeType',
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
        'zip_code' => null,
        'id' => null,
        'cities' => null,
        'zip_code_type' => null,
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
        'zip_code' => 'zip_code',
        'id' => 'id',
        'cities' => 'cities',
        'zip_code_type' => 'zip_code_type',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'zip_code' => 'setZipCode',
        'id' => 'setId',
        'cities' => 'setCities',
        'zip_code_type' => 'setZipCodeType',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'zip_code' => 'getZipCode',
        'id' => 'getId',
        'cities' => 'getCities',
        'zip_code_type' => 'getZipCodeType',
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

    const OBJECT_US_ZIP_LOOKUP = 'us_zip_lookup';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_US_ZIP_LOOKUP,
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
        $this->container['zip_code'] = $data['zip_code'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['cities'] = $data['cities'] ?? null;
        $this->container['zip_code_type'] = $data['zip_code_type'] ?? null;
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
            if (!is_null($this->container['zip_code']) && !preg_match("/^\\d{5}$/", $this->container['zip_code'])) {
                $invalidProperties[] = "invalid value for 'zip_code', must be conform to the pattern /^\\d{5}$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['id'] === null) {
                $invalidProperties[] = "'id' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!preg_match("/^us_zip_[a-zA-Z0-9]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^us_zip_[a-zA-Z0-9]+$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['cities'] === null) {
                $invalidProperties[] = "'cities' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['zip_code_type'] === null) {
                $invalidProperties[] = "'zip_code_type' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['object'] === null) {
                $invalidProperties[] = "'object' can't be null";
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
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code A 5-digit ZIP code.
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if (!is_null($zip_code) && (!preg_match("/^\\d{5}$/", $zip_code))) {
                throw new \InvalidArgumentException("invalid value for $zip_code when calling Zip., must conform to the pattern /^\\d{5}$/.");
            }

        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier prefixed with `us_zip_`.
     *
     * @return self
     */
    public function setId($id)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if ((!preg_match("/^us_zip_[a-zA-Z0-9]+$/", $id))) {
                throw new \InvalidArgumentException("invalid value for $id when calling Zip., must conform to the pattern /^us_zip_[a-zA-Z0-9]+$/.");
            }

        }
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets cities
     *
     * @return \OpenAPI\Client\Model\ZipLookupCity[]
     */
    public function getCities()
    {
        return $this->container['cities'];
    }

    /**
     * Sets cities
     *
     * @param \OpenAPI\Client\Model\ZipLookupCity[] $cities An array of city objects containing valid cities for the `zip_code`. Multiple cities will be returned if more than one city is associated with the input ZIP code.
     *
     * @return self
     */
    public function setCities($cities)
    {
        $this->container['cities'] = [];
        if ($cities) {
            foreach ($cities as $point) {
                $deserializedData = ObjectSerializer::deserialize($point, '\OpenAPI\Client\Model\ZipLookupCity', []);
                
                array_push($this->container['cities'], $deserializedData);
            }
        }

        return $this;
    }


    /**
     * Gets zip_code_type
     *
     * @return \OpenAPI\Client\Model\ZipCodeType
     */
    public function getZipCodeType()
    {
        return $this->container['zip_code_type'];
    }

    /**
     * Sets zip_code_type
     *
     * @param \OpenAPI\Client\Model\ZipCodeType $zip_code_type zip_code_type
     *
     * @return self
     */
    public function setZipCodeType($zip_code_type)
    {
        $this->container['zip_code_type'] = $zip_code_type;

        return $this;
    }


    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        $allowedValues = $this->getObjectAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!in_array($object, $allowedValues, true)) {
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


