<?php
/**
 * BankAccountWritable
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
 * BankAccountWritable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankAccountWritable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'bank_account_writable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'routing_number' => 'string',
        'account_number' => 'string',
        'account_type' => '\OpenAPI\Client\Model\BankTypeEnum',
        'signatory' => 'string',
        'metadata' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'routing_number' => null,
        'account_number' => null,
        'account_type' => null,
        'signatory' => null,
        'metadata' => null
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
        'description' => 'description',
        'routing_number' => 'routing_number',
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'signatory' => 'signatory',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'routing_number' => 'setRoutingNumber',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'signatory' => 'setSignatory',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'routing_number' => 'getRoutingNumber',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'signatory' => 'getSignatory',
        'metadata' => 'getMetadata'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['signatory'] = $data['signatory'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if ($this->container['routing_number'] === null) {
            $invalidProperties[] = "'routing_number' can't be null";
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($this->container['routing_number']) > 9)) {
                $invalidProperties[] = "invalid value for 'routing_number', the character length must be smaller than or equal to 9.";
            }

            if ((mb_strlen($this->container['routing_number']) < 9)) {
                $invalidProperties[] = "invalid value for 'routing_number', the character length must be bigger than or equal to 9.";
            }

        }
        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($this->container['account_number']) > 17)) {
                $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 17.";
            }

        }
        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        if ($this->container['signatory'] === null) {
            $invalidProperties[] = "'signatory' can't be null";
        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($this->container['signatory']) > 30)) {
                $invalidProperties[] = "invalid value for 'signatory', the character length must be smaller than or equal to 30.";
            }

        }
        if (!!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An internal description that identifies this resource. Must be no longer than 255 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($description) && (mb_strlen($description) > 255)) {
                throw new \InvalidArgumentException('invalid length for $description when calling BankAccountWritable., must be smaller than or equal to 255.');
            }

        }
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets routing_number
     *
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string $routing_number Must be a [valid US routing number](https://www.frbservices.org/index.html).
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($routing_number) > 9)) {
                throw new \InvalidArgumentException('invalid length for $routing_number when calling BankAccountWritable., must be smaller than or equal to 9.');
            }
            if ((mb_strlen($routing_number) < 9)) {
                throw new \InvalidArgumentException('invalid length for $routing_number when calling BankAccountWritable., must be bigger than or equal to 9.');
            }

        }
        $this->container['routing_number'] = $routing_number;

        return $this;
    }


    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($account_number) > 17)) {
                throw new \InvalidArgumentException('invalid length for $account_number when calling BankAccountWritable., must be smaller than or equal to 17.');
            }

        }
        $this->container['account_number'] = $account_number;

        return $this;
    }


    /**
     * Gets account_type
     *
     * @return \OpenAPI\Client\Model\BankTypeEnum
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param \OpenAPI\Client\Model\BankTypeEnum $account_type account_type
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }


    /**
     * Gets signatory
     *
     * @return string
     */
    public function getSignatory()
    {
        return $this->container['signatory'];
    }

    /**
     * Sets signatory
     *
     * @param string $signatory The signatory associated with your account. This name will be printed on checks created with this bank account. If you prefer to use a custom signature image on your checks instead, please create your bank account from the [Dashboard](https://dashboard.lob.com/#/login).
     *
     * @return self
     */
    public function setSignatory($signatory)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {
            if ((mb_strlen($signatory) > 30)) {
                throw new \InvalidArgumentException('invalid length for $signatory when calling BankAccountWritable., must be smaller than or equal to 30.');
            }

        }
        $this->container['signatory'] = $signatory;

        return $this;
    }


    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata Use metadata to store custom information for tagging and labeling back to your internal systems. Must be an object with up to 20 key-value pairs. Keys must be at most 40 characters and values must be at most 500 characters. Neither can contain the characters `\"` and `\\`. i.e. '{\"customer_id\" : \"NEWYORK2015\"}' Nested objects are not supported.  See [Metadata](#section/Metadata) for more information.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (!method_exists($this, 'getId') || strpos($this->getId(), "fakeId") === False) {


        }
        $this->container['metadata'] = $metadata;

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


