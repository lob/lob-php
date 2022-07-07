<?php
/**
 * LocationAnalysis
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
 * LocationAnalysis Class Doc Comment
 *
 * @category Class
 * @description A nested object containing a breakdown of the analysis of a reverse geocoded location.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LocationAnalysis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'location_analysis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'latitude' => 'float',
        'longitude' => 'float',
        'distance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'latitude' => 'float',
        'longitude' => 'float',
        'distance' => 'float'
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
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'distance' => 'distance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'distance' => 'setDistance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'distance' => 'getDistance'
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
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['distance'] = $data['distance'] ?? null;
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
            if ($this->container['latitude'] === null) {
                $invalidProperties[] = "'latitude' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (($this->container['latitude'] > 90)) {
                $invalidProperties[] = "invalid value for 'latitude', must be smaller than or equal to 90.";
            }

            if (($this->container['latitude'] < -90)) {
                $invalidProperties[] = "invalid value for 'latitude', must be bigger than or equal to -90.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['longitude'] === null) {
                $invalidProperties[] = "'longitude' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (($this->container['longitude'] > 180)) {
                $invalidProperties[] = "invalid value for 'longitude', must be smaller than or equal to 180.";
            }

            if (($this->container['longitude'] < -180)) {
                $invalidProperties[] = "invalid value for 'longitude', must be bigger than or equal to -180.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['distance'] === null) {
                $invalidProperties[] = "'distance' can't be null";
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
     * Gets latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float $latitude A positive or negative decimal indicating the geographic latitude of the address.
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {

            if (($latitude > 90)) {
                throw new \InvalidArgumentException('invalid value for $latitude when calling LocationAnalysis., must be smaller than or equal to 90.');
            }
            if (($latitude < -90)) {
                throw new \InvalidArgumentException('invalid value for $latitude when calling LocationAnalysis., must be bigger than or equal to -90.');
            }

        }
        $this->container['latitude'] = $latitude;

        return $this;
    }


    /**
     * Gets longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float $longitude A positive or negative decimal indicating the geographic longitude of the address.
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {

            if (($longitude > 180)) {
                throw new \InvalidArgumentException('invalid value for $longitude when calling LocationAnalysis., must be smaller than or equal to 180.');
            }
            if (($longitude < -180)) {
                throw new \InvalidArgumentException('invalid value for $longitude when calling LocationAnalysis., must be bigger than or equal to -180.');
            }

        }
        $this->container['longitude'] = $longitude;

        return $this;
    }


    /**
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance The distance from the input location to this exact zip code in miles.
     *
     * @return self
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

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


