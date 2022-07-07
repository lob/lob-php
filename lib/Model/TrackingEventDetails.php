<?php
/**
 * TrackingEventDetails
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
 * TrackingEventDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TrackingEventDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tracking_event_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event' => 'string',
        'description' => 'string',
        'notes' => 'string',
        'action_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event' => null,
        'description' => null,
        'notes' => null,
        'action_required' => null
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
        'event' => 'event',
        'description' => 'description',
        'notes' => 'notes',
        'action_required' => 'action_required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event' => 'setEvent',
        'description' => 'setDescription',
        'notes' => 'setNotes',
        'action_required' => 'setActionRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event' => 'getEvent',
        'description' => 'getDescription',
        'notes' => 'getNotes',
        'action_required' => 'getActionRequired'
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

    const EVENT_PACKAGE_ACCEPTED = 'package_accepted';
    const EVENT_PACKAGE_ARRIVED = 'package_arrived';
    const EVENT_PACKAGE_DEPARTED = 'package_departed';
    const EVENT_PACKAGE_PROCESSING = 'package_processing';
    const EVENT_PACKAGE_PROCESSED = 'package_processed';
    const EVENT_PACKAGE_IN_LOCAL_AREA = 'package_in_local_area';
    const EVENT_DELIVERY_SCHEDULED = 'delivery_scheduled';
    const EVENT_OUT_FOR_DELIVERY = 'out_for_delivery';
    const EVENT_PICKUP_AVAILABLE = 'pickup_available';
    const EVENT_DELIVERED = 'delivered';
    const EVENT_PACKAGE_FORWARDED = 'package_forwarded';
    const EVENT_RETURNED_TO_SENDER = 'returned_to_sender';
    const EVENT_ADDRESS_ISSUE = 'address_issue';
    const EVENT_CONTACT_CARRIER = 'contact_carrier';
    const EVENT_DELAYED = 'delayed';
    const EVENT_DELIVERY_ATTEMPTED = 'delivery_attempted';
    const EVENT_DELIVERY_RESCHEDULED = 'delivery_rescheduled';
    const EVENT_LOCATION_INACCESSIBLE = 'location_inaccessible';
    const EVENT_NOTICE_LEFT = 'notice_left';
    const EVENT_PACKAGE_DAMAGED = 'package_damaged';
    const EVENT_PACKAGE_DISPOSED = 'package_disposed';
    const EVENT_PACKAGE_HELD = 'package_held';
    const EVENT_PACKAGE_LOST = 'package_lost';
    const EVENT_PACKAGE_UNCLAIMED = 'package_unclaimed';
    const EVENT_PACKAGE_UNDELIVERABLE = 'package_undeliverable';
    const EVENT_RESCHEDULE_DELIVERY = 'reschedule_delivery';
    const EVENT_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_PACKAGE_ACCEPTED,
            self::EVENT_PACKAGE_ARRIVED,
            self::EVENT_PACKAGE_DEPARTED,
            self::EVENT_PACKAGE_PROCESSING,
            self::EVENT_PACKAGE_PROCESSED,
            self::EVENT_PACKAGE_IN_LOCAL_AREA,
            self::EVENT_DELIVERY_SCHEDULED,
            self::EVENT_OUT_FOR_DELIVERY,
            self::EVENT_PICKUP_AVAILABLE,
            self::EVENT_DELIVERED,
            self::EVENT_PACKAGE_FORWARDED,
            self::EVENT_RETURNED_TO_SENDER,
            self::EVENT_ADDRESS_ISSUE,
            self::EVENT_CONTACT_CARRIER,
            self::EVENT_DELAYED,
            self::EVENT_DELIVERY_ATTEMPTED,
            self::EVENT_DELIVERY_RESCHEDULED,
            self::EVENT_LOCATION_INACCESSIBLE,
            self::EVENT_NOTICE_LEFT,
            self::EVENT_PACKAGE_DAMAGED,
            self::EVENT_PACKAGE_DISPOSED,
            self::EVENT_PACKAGE_HELD,
            self::EVENT_PACKAGE_LOST,
            self::EVENT_PACKAGE_UNCLAIMED,
            self::EVENT_PACKAGE_UNDELIVERABLE,
            self::EVENT_RESCHEDULE_DELIVERY,
            self::EVENT_OTHER,
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
        $this->container['event'] = $data['event'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['action_required'] = $data['action_required'] ?? null;
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
            if ($this->container['event'] === null) {
                $invalidProperties[] = "'event' can't be null";
            }
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'event', must be one of '%s'",
                    $this->container['event'],
                    implode("', '", $allowedValues)
                );
            }
        }

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['description'] === null) {
                $invalidProperties[] = "'description' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['action_required'] === null) {
                $invalidProperties[] = "'action_required' can't be null";
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
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event Find the full table [here](#tag/Tracking-Events). A detailed substatus about the event: * `package_accepted` - Package has been accepted into the carrier network for delivery. * `package_arrived` - Package has arrived at an intermediate location in the carrier network. * `package_departed` - Package has departed from an intermediate location in the carrier network. * `package_processing` - Package is processing at an intermediate location in the carrier network. * `package_processed` - Package has been processed at an intermediate location. * `package_in_local_area` - Package is at a location near the end destination. * `delivery_scheduled` - Package is scheduled for delivery. * `out_for_delivery` - Package is out for delivery. * `pickup_available` - Package is available for pickup at carrier location. * `delivered` - Package has been delivered. * `package_forwarded` - Package has been forwarded. * `returned_to_sender` - Package is to be returned to sender. * `address_issue` - Address information is incorrect. Contact carrier to ensure delivery. * `contact_carrier` - Contact the carrier for more information. * `delayed` - Delivery of package is delayed. * `delivery_attempted` - Delivery of package has been attempted. Contact carrier to ensure delivery. * `delivery_rescheduled` - Delivery of package has been rescheduled. * `location_inaccessible` - Delivery location inaccessible to carrier. Contact carrier to ensure delivery. * `notice_left` - Carrier left notice during attempted delivery. Follow carrier instructions on notice. * `package_damaged` - Package has been damaged. Contact carrier for more details. * `package_disposed` - Package has been disposed. * `package_held` - Package held at carrier location. Contact carrier for more details. * `package_lost` - Package has been lost. Contact carrier for more details. * `package_unclaimed` - Package is unclaimed. * `package_undeliverable` - Package is not able to be delivered. * `reschedule_delivery` - Contact carrier to reschedule delivery. * `other` - Unrecognized carrier status.
     *
     * @return self
     */
    public function setEvent($event)
    {
        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['event'] = $event;

        return $this;
    }


    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description as listed in the description for event.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Event-specific notes from USPS about the tracking event.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }


    /**
     * Gets action_required
     *
     * @return bool
     */
    public function getActionRequired()
    {
        return $this->container['action_required'];
    }

    /**
     * Sets action_required
     *
     * @param bool $action_required `true` if action is required by the end recipient, `false` otherwise.
     *
     * @return self
     */
    public function setActionRequired($action_required)
    {
        $this->container['action_required'] = $action_required;

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


