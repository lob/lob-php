<?php
/**
 * Template
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
 * Template Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Template implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'id' => 'string',
        'versions' => '\OpenAPI\Client\Model\TemplateVersion[]',
        'published_version' => '\OpenAPI\Client\Model\TemplateVersion',
        'object' => 'string',
        'metadata' => 'array<string,string>',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'deleted' => 'bool'
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
        'id' => null,
        'versions' => null,
        'published_version' => null,
        'object' => null,
        'metadata' => null,
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
        'deleted' => null
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
        'id' => 'id',
        'versions' => 'versions',
        'published_version' => 'published_version',
        'object' => 'object',
        'metadata' => 'metadata',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'id' => 'setId',
        'versions' => 'setVersions',
        'published_version' => 'setPublishedVersion',
        'object' => 'setObject',
        'metadata' => 'setMetadata',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'id' => 'getId',
        'versions' => 'getVersions',
        'published_version' => 'getPublishedVersion',
        'object' => 'getObject',
        'metadata' => 'getMetadata',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'deleted' => 'getDeleted'
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

    const OBJECT_TEMPLATE = 'template';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_TEMPLATE,
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['versions'] = $data['versions'] ?? null;
        $this->container['published_version'] = $data['published_version'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.";
            }

        }
        if ($this->container['versions'] === null) {
            $invalidProperties[] = "'versions' can't be null";
        }
        if ($this->container['published_version'] === null) {
            $invalidProperties[] = "'published_version' can't be null";
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
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
        if (strpos($this->getId(), "fakeId") === False && !is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Template., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

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
     * @param string $id Unique identifier prefixed with `tmpl_`. ID of a saved [HTML template](#section/HTML-Templates).
     *
     * @return self
     */
    public function setId($id)
    {

        if (strpos($this->getId(), "fakeId") === False && (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Template., must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets versions
     *
     * @return \OpenAPI\Client\Model\TemplateVersion[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \OpenAPI\Client\Model\TemplateVersion[] $versions An array of all non-deleted [version objects](#tag/Template-Versions) associated with the template.
     *
     * @return self
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = [];
        if ($versions) {
            foreach ($versions as $point) {
                $deserializedData = ObjectSerializer::deserialize($point, '\OpenAPI\Client\Model\TemplateVersion', []);
                
                array_push($this->container['versions'], $deserializedData);
            }
        }

        return $this;
    }


    /**
     * Gets published_version
     *
     * @return \OpenAPI\Client\Model\TemplateVersion
     */
    public function getPublishedVersion()
    {
        return $this->container['published_version'];
    }

    /**
     * Sets published_version
     *
     * @param \OpenAPI\Client\Model\TemplateVersion $published_version published_version
     *
     * @return self
     */
    public function setPublishedVersion($published_version)
    {
        $this->container['published_version'] = $published_version;

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


        $this->container['metadata'] = $metadata;

        return $this;
    }


    /**
     * Gets date_created
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime|null $date_created A timestamp in ISO 8601 format of the date the resource was created.
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }


    /**
     * Gets date_modified
     *
     * @return \DateTime|null
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime|null $date_modified A timestamp in ISO 8601 format of the date the resource was last modified.
     *
     * @return self
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }


    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted Only returned if the resource has been successfully deleted.
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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


