<?php
/**
 * MultipleComponentsIntl
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
 * MultipleComponentsIntl Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MultipleComponentsIntl implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'multiple_components_intl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient' => 'string',
        'primary_line' => 'string',
        'secondary_line' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country' => '\OpenAPI\Client\Model\CountryExtended'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient' => null,
        'primary_line' => null,
        'secondary_line' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'country' => null
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
        'recipient' => 'recipient',
        'primary_line' => 'primary_line',
        'secondary_line' => 'secondary_line',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postal_code',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient' => 'setRecipient',
        'primary_line' => 'setPrimaryLine',
        'secondary_line' => 'setSecondaryLine',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient' => 'getRecipient',
        'primary_line' => 'getPrimaryLine',
        'secondary_line' => 'getSecondaryLine',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['primary_line'] = $data['primary_line'] ?? null;
        $this->container['secondary_line'] = $data['secondary_line'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
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
            if (!is_null($this->container['recipient']) && (mb_strlen($this->container['recipient']) > 500)) {
                $invalidProperties[] = "invalid value for 'recipient', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['primary_line'] === null) {
                $invalidProperties[] = "'primary_line' can't be null";
            }
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($this->container['primary_line']) > 200)) {
                $invalidProperties[] = "invalid value for 'primary_line', the character length must be smaller than or equal to 200.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['secondary_line']) && (mb_strlen($this->container['secondary_line']) > 500)) {
                $invalidProperties[] = "invalid value for 'secondary_line', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 12)) {
                $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 12.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ($this->container['country'] === null) {
                $invalidProperties[] = "'country' can't be null";
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
     * Gets recipient
     *
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string|null $recipient The intended recipient, typically a person's or firm's name.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($recipient) && (mb_strlen($recipient) > 500)) {
                throw new \InvalidArgumentException('invalid length for $recipient when calling MultipleComponentsIntl., must be smaller than or equal to 500.');
            }

        }
        $this->container['recipient'] = $recipient;

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
     * @param string $primary_line The primary delivery line (usually the street address) of the address.
     *
     * @return self
     */
    public function setPrimaryLine($primary_line)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($primary_line) > 200)) {
                throw new \InvalidArgumentException('invalid length for $primary_line when calling MultipleComponentsIntl., must be smaller than or equal to 200.');
            }

        }
        $this->container['primary_line'] = $primary_line;

        return $this;
    }


    /**
     * Gets secondary_line
     *
     * @return string|null
     */
    public function getSecondaryLine()
    {
        return $this->container['secondary_line'];
    }

    /**
     * Sets secondary_line
     *
     * @param string|null $secondary_line The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.
     *
     * @return self
     */
    public function setSecondaryLine($secondary_line)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($secondary_line) && (mb_strlen($secondary_line) > 500)) {
                throw new \InvalidArgumentException('invalid length for $secondary_line when calling MultipleComponentsIntl., must be smaller than or equal to 500.');
            }

        }
        $this->container['secondary_line'] = $secondary_line;

        return $this;
    }


    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($city) && (mb_strlen($city) > 200)) {
                throw new \InvalidArgumentException('invalid length for $city when calling MultipleComponentsIntl., must be smaller than or equal to 200.');
            }

        }
        $this->container['city'] = $city;

        return $this;
    }


    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The name of the state.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($postal_code) && (mb_strlen($postal_code) > 12)) {
                throw new \InvalidArgumentException('invalid length for $postal_code when calling MultipleComponentsIntl., must be smaller than or equal to 12.');
            }

        }
        $this->container['postal_code'] = $postal_code;

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


