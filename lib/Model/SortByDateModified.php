<?php
/**
 * SortByDateModified
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
 * SortByDateModified Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SortByDateModified implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'sort_by_date_modified';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_created' => 'string',
        'date_modified' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_created' => null,
        'date_modified' => null
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
        'date_created' => 'date_created',
        'date_modified' => 'date_modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified'
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

    const DATE_CREATED_ASC = 'asc';
    const DATE_CREATED_DESC = 'desc';
    const DATE_MODIFIED_ASC = 'asc';
    const DATE_MODIFIED_DESC = 'desc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateCreatedAllowableValues()
    {
        return [
            self::DATE_CREATED_ASC,
            self::DATE_CREATED_DESC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateModifiedAllowableValues()
    {
        return [
            self::DATE_MODIFIED_ASC,
            self::DATE_MODIFIED_DESC,
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
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDateCreatedAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['date_created']) && !in_array($this->container['date_created'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'date_created', must be one of '%s'",
                    $this->container['date_created'],
                    implode("', '", $allowedValues)
                );
            }
        }

        $allowedValues = $this->getDateModifiedAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['date_modified']) && !in_array($this->container['date_modified'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'date_modified', must be one of '%s'",
                    $this->container['date_modified'],
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
     * Gets date_created
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string|null $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $allowedValues = $this->getDateCreatedAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($date_created) && !in_array($date_created, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'date_created', must be one of '%s'",
                        $date_created,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['date_created'] = $date_created;

        return $this;
    }


    /**
     * Gets date_modified
     *
     * @return string|null
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param string|null $date_modified date_modified
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        $allowedValues = $this->getDateModifiedAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($date_modified) && !in_array($date_modified, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'date_modified', must be one of '%s'",
                        $date_modified,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['date_modified'] = $date_modified;

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


