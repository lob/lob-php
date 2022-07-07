<?php
/**
 * CardOrder
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
 * CardOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CardOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card_order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'card_id' => 'string',
        'status' => 'string',
        'inventory' => 'float',
        'quantity_ordered' => 'float',
        'unit_price' => 'float',
        'cancelled_reason' => 'string',
        'availability_date' => '\DateTime',
        'expected_availability_date' => '\DateTime',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'deleted' => 'bool',
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
        'id' => null,
        'card_id' => null,
        'status' => null,
        'inventory' => null,
        'quantity_ordered' => null,
        'unit_price' => null,
        'cancelled_reason' => null,
        'availability_date' => 'date-time',
        'expected_availability_date' => 'date-time',
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
        'deleted' => null,
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
        'id' => 'id',
        'card_id' => 'card_id',
        'status' => 'status',
        'inventory' => 'inventory',
        'quantity_ordered' => 'quantity_ordered',
        'unit_price' => 'unit_price',
        'cancelled_reason' => 'cancelled_reason',
        'availability_date' => 'availability_date',
        'expected_availability_date' => 'expected_availability_date',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'deleted' => 'deleted',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'card_id' => 'setCardId',
        'status' => 'setStatus',
        'inventory' => 'setInventory',
        'quantity_ordered' => 'setQuantityOrdered',
        'unit_price' => 'setUnitPrice',
        'cancelled_reason' => 'setCancelledReason',
        'availability_date' => 'setAvailabilityDate',
        'expected_availability_date' => 'setExpectedAvailabilityDate',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'deleted' => 'setDeleted',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'card_id' => 'getCardId',
        'status' => 'getStatus',
        'inventory' => 'getInventory',
        'quantity_ordered' => 'getQuantityOrdered',
        'unit_price' => 'getUnitPrice',
        'cancelled_reason' => 'getCancelledReason',
        'availability_date' => 'getAvailabilityDate',
        'expected_availability_date' => 'getExpectedAvailabilityDate',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'deleted' => 'getDeleted',
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

    const STATUS_PENDING = 'pending';
    const STATUS_PRINTING = 'printing';
    const STATUS_AVAILABLE = 'available';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DEPLETED = 'depleted';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_PRINTING,
            self::STATUS_AVAILABLE,
            self::STATUS_CANCELLED,
            self::STATUS_DEPLETED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['card_id'] = $data['card_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['inventory'] = $data['inventory'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['cancelled_reason'] = $data['cancelled_reason'] ?? null;
        $this->container['availability_date'] = $data['availability_date'] ?? null;
        $this->container['expected_availability_date'] = $data['expected_availability_date'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
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

        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['id']) && !preg_match("/^co_[a-zA-Z0-9]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^co_[a-zA-Z0-9]+$/.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['card_id']) && !preg_match("/^card_[a-zA-Z0-9]+$/", $this->container['card_id'])) {
                $invalidProperties[] = "invalid value for 'card_id', must be conform to the pattern /^card_[a-zA-Z0-9]+$/.";
            }

        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['date_modified'] === null) {
            $invalidProperties[] = "'date_modified' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
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
     * @param string|null $id Unique identifier prefixed with `co_`.
     *
     * @return self
     */
    public function setId($id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($id) && (!preg_match("/^co_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling CardOrder., must conform to the pattern /^co_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets card_id
     *
     * @return string|null
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string|null $card_id Unique identifier prefixed with `card_`.
     *
     * @return self
     */
    public function setCardId($card_id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($card_id) && (!preg_match("/^card_[a-zA-Z0-9]+$/", $card_id))) {
            throw new \InvalidArgumentException("invalid value for $card_id when calling CardOrder., must conform to the pattern /^card_[a-zA-Z0-9]+$/.");
        }

        $this->container['card_id'] = $card_id;

        return $this;
    }


    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the card order.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets inventory
     *
     * @return float|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param float|null $inventory The inventory of the card order.
     *
     * @return self
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }


    /**
     * Gets quantity_ordered
     *
     * @return float|null
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param float|null $quantity_ordered The quantity of cards ordered
     *
     * @return self
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }


    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price The unit price for the card order.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }


    /**
     * Gets cancelled_reason
     *
     * @return string|null
     */
    public function getCancelledReason()
    {
        return $this->container['cancelled_reason'];
    }

    /**
     * Sets cancelled_reason
     *
     * @param string|null $cancelled_reason The reason for cancellation.
     *
     * @return self
     */
    public function setCancelledReason($cancelled_reason)
    {
        $this->container['cancelled_reason'] = $cancelled_reason;

        return $this;
    }


    /**
     * Gets availability_date
     *
     * @return \DateTime|null
     */
    public function getAvailabilityDate()
    {
        return $this->container['availability_date'];
    }

    /**
     * Sets availability_date
     *
     * @param \DateTime|null $availability_date A timestamp in ISO 8601 format of the date the resource was created.
     *
     * @return self
     */
    public function setAvailabilityDate($availability_date)
    {
        $this->container['availability_date'] = $availability_date;

        return $this;
    }


    /**
     * Gets expected_availability_date
     *
     * @return \DateTime|null
     */
    public function getExpectedAvailabilityDate()
    {
        return $this->container['expected_availability_date'];
    }

    /**
     * Sets expected_availability_date
     *
     * @param \DateTime|null $expected_availability_date The fixed deadline for the cards to be printed.
     *
     * @return self
     */
    public function setExpectedAvailabilityDate($expected_availability_date)
    {
        $this->container['expected_availability_date'] = $expected_availability_date;

        return $this;
    }


    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created A timestamp in ISO 8601 format of the date the resource was created.
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
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime $date_modified A timestamp in ISO 8601 format of the date the resource was last modified.
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
     * @param string $object Value is type of resource.
     *
     * @return self
     */
    public function setObject($object)
    {
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


