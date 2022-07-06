<?php
/**
 * TrackingEventNormal
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
 * TrackingEventNormal Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackingEventNormal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tracking_event_normal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'name' => 'string',
        'details' => 'object',
        'location' => 'string',
        'id' => 'string',
        'time' => '\DateTime',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
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
        'type' => null,
        'name' => null,
        'details' => null,
        'location' => null,
        'id' => null,
        'time' => 'date-time',
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
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
        'type' => 'type',
        'name' => 'name',
        'details' => 'details',
        'location' => 'location',
        'id' => 'id',
        'time' => 'time',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'details' => 'setDetails',
        'location' => 'setLocation',
        'id' => 'setId',
        'time' => 'setTime',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'details' => 'getDetails',
        'location' => 'getLocation',
        'id' => 'getId',
        'time' => 'getTime',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
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

    const TYPE_NORMAL = 'normal';
    const NAME_IN_TRANSIT = 'In Transit';
    const NAME_IN_LOCAL_AREA = 'In Local Area';
    const NAME_PROCESSED_FOR_DELIVERY = 'Processed for Delivery';
    const NAME_RE_ROUTED = 'Re-Routed';
    const NAME_RETURNED_TO_SENDER = 'Returned to Sender';
    const NAME_MAILED = 'Mailed';
    const DETAILS_NULL = 'null';
    const OBJECT_TRACKING_EVENT = 'tracking_event';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_IN_TRANSIT,
            self::NAME_IN_LOCAL_AREA,
            self::NAME_PROCESSED_FOR_DELIVERY,
            self::NAME_RE_ROUTED,
            self::NAME_RETURNED_TO_SENDER,
            self::NAME_MAILED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDetailsAllowableValues()
    {
        return [
            self::DETAILS_NULL,
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
            self::OBJECT_TRACKING_EVENT,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getNameAllowableValues();
        if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'name', must be one of '%s'",
                $this->container['name'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDetailsAllowableValues();
        if (!is_null($this->container['details']) && !in_array($this->container['details'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'details', must be one of '%s'",
                $this->container['details'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['id']) && !preg_match("/^evnt_[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^evnt_[a-zA-Z0-9]+$/.";
        }

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type non-Certified postcards, self mailers, letters, and checks
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;

        return $this;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of tracking event (for normal postcards, self mailers, letters, and checks):    * `In Transit` - The mailpiece is being processed at the entry/origin facility.    * `In Local Area` - The mailpiece is being processed at the destination facility.    * `Processed for Delivery` - The mailpiece has been greenlit for     delivery at the recipient's nearest postal facility. The mailpiece     should reach the mailbox within 1 business day of this tracking     event.    * `Re-Routed` - The mailpiece is re-routed due to recipient change of     address, address errors, or USPS relabeling of barcode/ID tag     area.    * `Returned to Sender` - The mailpiece is being returned to sender due     to barcode, ID tag area, or address errors.    * `Mailed` - The mailpiece has been handed off to and accepted by USPS     and is en route. [More about     Mailed.](https://support.lob.com/hc/en-us/articles/360001724400-What-does-a-Mailed-tracking-event-mean-)     Note this data is only available in Enterprise editions of     Lob. [Contact Sales](https://lob.com/support/contact#contact) if     you want access to this feature.  [More about tracking](https://support.lob.com/hc/en-us/articles/115000097404-Can-I-track-my-mail-)
     *
     * @return self
     */
    public function setName($name)
    {
        $allowedValues = $this->getNameAllowableValues();
        if (!in_array($name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'name', must be one of '%s'",
                    $name,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets details
     *
     * @return object|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param object|null $details Will be `null` for `type=normal` events
     *
     * @return self
     */
    public function setDetails($details)
    {
        $allowedValues = $this->getDetailsAllowableValues();
        if (!is_null($details) && !in_array($details, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'details', must be one of '%s'",
                    $details,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['details'] = $details;

        return $this;
    }


    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location The zip code in which the scan event occurred. Null for `Mailed` events.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier prefixed with `evnt_`.
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^evnt_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling TrackingEventNormal., must conform to the pattern /^evnt_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets time
     *
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime|null $time A timestamp in ISO 8601 format of the date USPS registered the event.
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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
     * @param string|null $object object
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

