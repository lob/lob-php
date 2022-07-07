<?php
/**
 * UsVerificationsWritable
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
 * UsVerificationsWritable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UsVerificationsWritable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'us_verifications_writable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'recipient' => 'string',
        'primary_line' => 'string',
        'secondary_line' => 'string',
        'urbanization' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'recipient' => null,
        'primary_line' => null,
        'secondary_line' => null,
        'urbanization' => null,
        'city' => null,
        'state' => null,
        'zip_code' => null
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
        'address' => 'address',
        'recipient' => 'recipient',
        'primary_line' => 'primary_line',
        'secondary_line' => 'secondary_line',
        'urbanization' => 'urbanization',
        'city' => 'city',
        'state' => 'state',
        'zip_code' => 'zip_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'recipient' => 'setRecipient',
        'primary_line' => 'setPrimaryLine',
        'secondary_line' => 'setSecondaryLine',
        'urbanization' => 'setUrbanization',
        'city' => 'setCity',
        'state' => 'setState',
        'zip_code' => 'setZipCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'recipient' => 'getRecipient',
        'primary_line' => 'getPrimaryLine',
        'secondary_line' => 'getSecondaryLine',
        'urbanization' => 'getUrbanization',
        'city' => 'getCity',
        'state' => 'getState',
        'zip_code' => 'getZipCode'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['primary_line'] = $data['primary_line'] ?? null;
        $this->container['secondary_line'] = $data['secondary_line'] ?? null;
        $this->container['urbanization'] = $data['urbanization'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['zip_code'] = $data['zip_code'] ?? null;
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
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 500)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['recipient']) && (mb_strlen($this->container['recipient']) > 500)) {
                $invalidProperties[] = "invalid value for 'recipient', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['primary_line']) && (mb_strlen($this->container['primary_line']) > 500)) {
                $invalidProperties[] = "invalid value for 'primary_line', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['secondary_line']) && (mb_strlen($this->container['secondary_line']) > 500)) {
                $invalidProperties[] = "invalid value for 'secondary_line', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['urbanization']) && (mb_strlen($this->container['urbanization']) > 500)) {
                $invalidProperties[] = "invalid value for 'urbanization', the character length must be smaller than or equal to 500.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
                $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 50)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 50.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['zip_code']) && !preg_match("/^\\d{5}((-)?\\d{4})?$/", $this->container['zip_code'])) {
                $invalidProperties[] = "invalid value for 'zip_code', must be conform to the pattern /^\\d{5}((-)?\\d{4})?$/.";
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address The entire address in one string (e.g., \"210 King Street 94107\"). _Does not support a recipient and will error when other payload parameters are provided._
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address) && (mb_strlen($address) > 500)) {
                throw new \InvalidArgumentException('invalid length for $address when calling UsVerificationsWritable., must be smaller than or equal to 500.');
            }

        }
        $this->container['address'] = $address;

        return $this;
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
                throw new \InvalidArgumentException('invalid length for $recipient when calling UsVerificationsWritable., must be smaller than or equal to 500.');
            }

        }
        $this->container['recipient'] = $recipient;

        return $this;
    }


    /**
     * Gets primary_line
     *
     * @return string|null
     */
    public function getPrimaryLine()
    {
        return $this->container['primary_line'];
    }

    /**
     * Sets primary_line
     *
     * @param string|null $primary_line The primary delivery line (usually the street address) of the address. Combination of the following applicable `components`: * `primary_number` * `street_predirection` * `street_name` * `street_suffix` * `street_postdirection` * `secondary_designator` * `secondary_number` * `pmb_designator` * `pmb_number`
     *
     * @return self
     */
    public function setPrimaryLine($primary_line)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($primary_line) && (mb_strlen($primary_line) > 500)) {
                throw new \InvalidArgumentException('invalid length for $primary_line when calling UsVerificationsWritable., must be smaller than or equal to 500.');
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
                throw new \InvalidArgumentException('invalid length for $secondary_line when calling UsVerificationsWritable., must be smaller than or equal to 500.');
            }

        }
        $this->container['secondary_line'] = $secondary_line;

        return $this;
    }


    /**
     * Gets urbanization
     *
     * @return string|null
     */
    public function getUrbanization()
    {
        return $this->container['urbanization'];
    }

    /**
     * Sets urbanization
     *
     * @param string|null $urbanization Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development within a city. See [USPS documentation](https://pe.usps.com/text/pub28/28api_008.htm#:~:text=I51.,-4%20Urbanizations&text=In%20Puerto%20Rico%2C%20identical%20street,placed%20before%20the%20urbanization%20name.) for clarification.
     *
     * @return self
     */
    public function setUrbanization($urbanization)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($urbanization) && (mb_strlen($urbanization) > 500)) {
                throw new \InvalidArgumentException('invalid length for $urbanization when calling UsVerificationsWritable., must be smaller than or equal to 500.');
            }

        }
        $this->container['urbanization'] = $urbanization;

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
                throw new \InvalidArgumentException('invalid length for $city when calling UsVerificationsWritable., must be smaller than or equal to 200.');
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
     * @param string|null $state The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2:US) two letter code or subdivision name for the state. `city` and `state` are required if no `zip_code` is passed.
     *
     * @return self
     */
    public function setState($state)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($state) && (mb_strlen($state) > 50)) {
                throw new \InvalidArgumentException('invalid length for $state when calling UsVerificationsWritable., must be smaller than or equal to 50.');
            }

        }
        $this->container['state'] = $state;

        return $this;
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
     * @param string|null $zip_code Required if `city` and `state` are not passed in. If included, must be formatted as a US ZIP or ZIP+4 (e.g. `94107`, `941072282`, `94107-2282`).
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {

            if (!is_null($zip_code) && (!preg_match("/^\\d{5}((-)?\\d{4})?$/", $zip_code))) {
                throw new \InvalidArgumentException("invalid value for $zip_code when calling UsVerificationsWritable., must conform to the pattern /^\\d{5}((-)?\\d{4})?$/.");
            }

        }
        $this->container['zip_code'] = $zip_code;

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


