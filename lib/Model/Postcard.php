<?php
/**
 * Postcard
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
 * Postcard Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Postcard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'postcard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'to' => '\OpenAPI\Client\Model\Address',
        'from' => '\OpenAPI\Client\Model\AddressDomesticExpanded',
        'carrier' => 'string',
        'thumbnails' => '\OpenAPI\Client\Model\Thumbnail[]',
        'size' => '\OpenAPI\Client\Model\PostcardSize',
        'expected_delivery_date' => '\DateTime',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'deleted' => 'bool',
        'front_template_id' => 'string',
        'back_template_id' => 'string',
        'front_template_version_id' => 'string',
        'back_template_version_id' => 'string',
        'tracking_events' => '\OpenAPI\Client\Model\TrackingEventNormal[]',
        'object' => 'string',
        'url' => 'string',
        'description' => 'string',
        'metadata' => 'array<string,string>',
        'mail_type' => '\OpenAPI\Client\Model\MailType',
        'merge_variables' => 'object',
        'send_date' => '\DateTime'
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
        'to' => null,
        'from' => null,
        'carrier' => null,
        'thumbnails' => null,
        'size' => null,
        'expected_delivery_date' => 'date',
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
        'deleted' => null,
        'front_template_id' => null,
        'back_template_id' => null,
        'front_template_version_id' => null,
        'back_template_version_id' => null,
        'tracking_events' => null,
        'object' => null,
        'url' => null,
        'description' => null,
        'metadata' => null,
        'mail_type' => null,
        'merge_variables' => null,
        'send_date' => 'date-time'
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
        'to' => 'to',
        'from' => 'from',
        'carrier' => 'carrier',
        'thumbnails' => 'thumbnails',
        'size' => 'size',
        'expected_delivery_date' => 'expected_delivery_date',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'deleted' => 'deleted',
        'front_template_id' => 'front_template_id',
        'back_template_id' => 'back_template_id',
        'front_template_version_id' => 'front_template_version_id',
        'back_template_version_id' => 'back_template_version_id',
        'tracking_events' => 'tracking_events',
        'object' => 'object',
        'url' => 'url',
        'description' => 'description',
        'metadata' => 'metadata',
        'mail_type' => 'mail_type',
        'merge_variables' => 'merge_variables',
        'send_date' => 'send_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'to' => 'setTo',
        'from' => 'setFrom',
        'carrier' => 'setCarrier',
        'thumbnails' => 'setThumbnails',
        'size' => 'setSize',
        'expected_delivery_date' => 'setExpectedDeliveryDate',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'deleted' => 'setDeleted',
        'front_template_id' => 'setFrontTemplateId',
        'back_template_id' => 'setBackTemplateId',
        'front_template_version_id' => 'setFrontTemplateVersionId',
        'back_template_version_id' => 'setBackTemplateVersionId',
        'tracking_events' => 'setTrackingEvents',
        'object' => 'setObject',
        'url' => 'setUrl',
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'mail_type' => 'setMailType',
        'merge_variables' => 'setMergeVariables',
        'send_date' => 'setSendDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'to' => 'getTo',
        'from' => 'getFrom',
        'carrier' => 'getCarrier',
        'thumbnails' => 'getThumbnails',
        'size' => 'getSize',
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'deleted' => 'getDeleted',
        'front_template_id' => 'getFrontTemplateId',
        'back_template_id' => 'getBackTemplateId',
        'front_template_version_id' => 'getFrontTemplateVersionId',
        'back_template_version_id' => 'getBackTemplateVersionId',
        'tracking_events' => 'getTrackingEvents',
        'object' => 'getObject',
        'url' => 'getUrl',
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
        'mail_type' => 'getMailType',
        'merge_variables' => 'getMergeVariables',
        'send_date' => 'getSendDate'
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

    const CARRIER_USPS = 'USPS';
    const OBJECT_POSTCARD = 'postcard';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_USPS,
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
            self::OBJECT_POSTCARD,
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
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['carrier'] = $data['carrier'] ?? null;
        $this->container['thumbnails'] = $data['thumbnails'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['expected_delivery_date'] = $data['expected_delivery_date'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['front_template_id'] = $data['front_template_id'] ?? null;
        $this->container['back_template_id'] = $data['back_template_id'] ?? null;
        $this->container['front_template_version_id'] = $data['front_template_version_id'] ?? null;
        $this->container['back_template_version_id'] = $data['back_template_version_id'] ?? null;
        $this->container['tracking_events'] = $data['tracking_events'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['mail_type'] = $data['mail_type'] ?? null;
        $this->container['merge_variables'] = $data['merge_variables'] ?? null;
        $this->container['send_date'] = $data['send_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !preg_match("/^psc_[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^psc_[a-zA-Z0-9]+$/.";
        }

        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($this->container['carrier']) && !in_array($this->container['carrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carrier', must be one of '%s'",
                $this->container['carrier'],
                implode("', '", $allowedValues)
            );
        }

        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !is_null($this->container['front_template_id']) && !preg_match("/^tmpl_[a-zA-Z0-9]+$/", $this->container['front_template_id'])) {
            $invalidProperties[] = "invalid value for 'front_template_id', must be conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.";
        }

        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !is_null($this->container['back_template_id']) && !preg_match("/^tmpl_[a-zA-Z0-9]+$/", $this->container['back_template_id'])) {
            $invalidProperties[] = "invalid value for 'back_template_id', must be conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.";
        }

        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !is_null($this->container['front_template_version_id']) && !preg_match("/^vrsn_[a-zA-Z0-9]+$/", $this->container['front_template_version_id'])) {
            $invalidProperties[] = "invalid value for 'front_template_version_id', must be conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.";
        }

        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !is_null($this->container['back_template_version_id']) && !preg_match("/^vrsn_[a-zA-Z0-9]+$/", $this->container['back_template_version_id'])) {
            $invalidProperties[] = "invalid value for 'back_template_version_id', must be conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.";
        }

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) && !preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $this->container['url'])) {
            $invalidProperties[] = "invalid value for 'url', must be conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.";
        }

        if (strpos($this->getId(), "fakeId") === False && !is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier prefixed with `psc_`.
     *
     * @return self
     */
    public function setId($id)
    {

        if (strpos($this->getId(), "fakeId") === False && (!preg_match("/^psc_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Postcard., must conform to the pattern /^psc_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets to
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \OpenAPI\Client\Model\Address|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }


    /**
     * Gets from
     *
     * @return \OpenAPI\Client\Model\AddressDomesticExpanded|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \OpenAPI\Client\Model\AddressDomesticExpanded|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }


    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier carrier
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($carrier) && !in_array($carrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carrier', must be one of '%s'",
                    $carrier,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['carrier'] = $carrier;

        return $this;
    }


    /**
     * Gets thumbnails
     *
     * @return \OpenAPI\Client\Model\Thumbnail[]|null
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \OpenAPI\Client\Model\Thumbnail[]|null $thumbnails thumbnails
     *
     * @return self
     */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = [];
        if ($thumbnails) {
            foreach ($thumbnails as $point) {
                $deserializedData = ObjectSerializer::deserialize($point, '\OpenAPI\Client\Model\Thumbnail', []);
                
                array_push($this->container['thumbnails'], $deserializedData);
            }
        }

        return $this;
    }


    /**
     * Gets size
     *
     * @return \OpenAPI\Client\Model\PostcardSize|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \OpenAPI\Client\Model\PostcardSize|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }


    /**
     * Gets expected_delivery_date
     *
     * @return \DateTime|null
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param \DateTime|null $expected_delivery_date A date in YYYY-MM-DD format of the mailpiece's expected delivery date based on its `send_date`.
     *
     * @return self
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

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
     * Gets front_template_id
     *
     * @return string|null
     */
    public function getFrontTemplateId()
    {
        return $this->container['front_template_id'];
    }

    /**
     * Sets front_template_id
     *
     * @param string|null $front_template_id The unique ID of the HTML template used for the front of the postcard.
     *
     * @return self
     */
    public function setFrontTemplateId($front_template_id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($front_template_id) && (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $front_template_id))) {
            throw new \InvalidArgumentException("invalid value for $front_template_id when calling Postcard., must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        $this->container['front_template_id'] = $front_template_id;

        return $this;
    }


    /**
     * Gets back_template_id
     *
     * @return string|null
     */
    public function getBackTemplateId()
    {
        return $this->container['back_template_id'];
    }

    /**
     * Sets back_template_id
     *
     * @param string|null $back_template_id The unique ID of the HTML template used for the back of the postcard.
     *
     * @return self
     */
    public function setBackTemplateId($back_template_id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($back_template_id) && (!preg_match("/^tmpl_[a-zA-Z0-9]+$/", $back_template_id))) {
            throw new \InvalidArgumentException("invalid value for $back_template_id when calling Postcard., must conform to the pattern /^tmpl_[a-zA-Z0-9]+$/.");
        }

        $this->container['back_template_id'] = $back_template_id;

        return $this;
    }


    /**
     * Gets front_template_version_id
     *
     * @return string|null
     */
    public function getFrontTemplateVersionId()
    {
        return $this->container['front_template_version_id'];
    }

    /**
     * Sets front_template_version_id
     *
     * @param string|null $front_template_version_id The unique ID of the specific version of the HTML template used for the front of the postcard.
     *
     * @return self
     */
    public function setFrontTemplateVersionId($front_template_version_id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($front_template_version_id) && (!preg_match("/^vrsn_[a-zA-Z0-9]+$/", $front_template_version_id))) {
            throw new \InvalidArgumentException("invalid value for $front_template_version_id when calling Postcard., must conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.");
        }

        $this->container['front_template_version_id'] = $front_template_version_id;

        return $this;
    }


    /**
     * Gets back_template_version_id
     *
     * @return string|null
     */
    public function getBackTemplateVersionId()
    {
        return $this->container['back_template_version_id'];
    }

    /**
     * Sets back_template_version_id
     *
     * @param string|null $back_template_version_id The unique ID of the specific version of the HTML template used for the back of the postcard.
     *
     * @return self
     */
    public function setBackTemplateVersionId($back_template_version_id)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($back_template_version_id) && (!preg_match("/^vrsn_[a-zA-Z0-9]+$/", $back_template_version_id))) {
            throw new \InvalidArgumentException("invalid value for $back_template_version_id when calling Postcard., must conform to the pattern /^vrsn_[a-zA-Z0-9]+$/.");
        }

        $this->container['back_template_version_id'] = $back_template_version_id;

        return $this;
    }


    /**
     * Gets tracking_events
     *
     * @return \OpenAPI\Client\Model\TrackingEventNormal[]|null
     */
    public function getTrackingEvents()
    {
        return $this->container['tracking_events'];
    }

    /**
     * Sets tracking_events
     *
     * @param \OpenAPI\Client\Model\TrackingEventNormal[]|null $tracking_events An array of tracking_event objects ordered by ascending `time`. Will not be populated for postcards created in test mode.
     *
     * @return self
     */
    public function setTrackingEvents($tracking_events)
    {
        $this->container['tracking_events'] = [];
        if ($tracking_events) {
            foreach ($tracking_events as $point) {
                $deserializedData = ObjectSerializer::deserialize($point, '\OpenAPI\Client\Model\TrackingEventNormal', []);
                
                array_push($this->container['tracking_events'], $deserializedData);
            }
        }

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (strpos($this->getId(), "fakeId") === False && (!preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $url))) {
            throw new \InvalidArgumentException("invalid value for $url when calling Postcard., must conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.");
        }

        $this->container['url'] = $url;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $description when calling Postcard., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

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
     * Gets mail_type
     *
     * @return \OpenAPI\Client\Model\MailType|null
     */
    public function getMailType()
    {
        return $this->container['mail_type'];
    }

    /**
     * Sets mail_type
     *
     * @param \OpenAPI\Client\Model\MailType|null $mail_type mail_type
     *
     * @return self
     */
    public function setMailType($mail_type)
    {
        $this->container['mail_type'] = $mail_type;

        return $this;
    }


    /**
     * Gets merge_variables
     *
     * @return object|null
     */
    public function getMergeVariables()
    {
        return $this->container['merge_variables'];
    }

    /**
     * Sets merge_variables
     *
     * @param object|null $merge_variables You can input a merge variable payload object to your template to render dynamic content. For example, if you have a template like: `{{variable_name}}`, pass in `{\"variable_name\": \"Harry\"}` to render `Harry`. `merge_variables` must be an object. Any type of value is accepted as long as the object is valid JSON; you can use `strings`, `numbers`, `booleans`, `arrays`, `objects`, or `null`. The max length of the object is 25,000 characters. If you call `JSON.stringify` on your object, it can be no longer than 25,000 characters. Your variable names cannot contain any whitespace or any of the following special characters: `!`, `\"`, `#`, `%`, `&`, `'`, `(`, `)`, `*`, `+`, `,`, `/`, `;`, `<`, `=`, `>`, `@`, `[`, `\\`, `]`, `^`, `` ` ``, `{`, `|`, `}`, `~`. More instructions can be found in [our guide to using html and merge variables](https://lob.com/resources/guides/general/using-html-and-merge-variables). Depending on your [Merge Variable strictness](https://dashboard.lob.com/#/settings/account) setting, if you define variables in your HTML but do not pass them here, you will either receive an error or the variable will render as an empty string.
     *
     * @return self
     */
    public function setMergeVariables($merge_variables)
    {


        $this->container['merge_variables'] = $merge_variables;

        return $this;
    }


    /**
     * Gets send_date
     *
     * @return \DateTime|null
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime|null $send_date A timestamp in ISO 8601 format which specifies a date after the current time and up to 180 days in the future to send the letter off for production. Setting a send date overrides the default [cancellation window](#section/Cancellation-Windows) applied to the mailpiece. Until the `send_date` has passed, the mailpiece can be canceled. If a date in the format `2017-11-01` is passed, it will evaluate to midnight UTC of that date (`2017-11-01T00:00:00.000Z`). If a datetime is passed, that exact time will be used. A `send_date` passed with no time zone will default to UTC, while a `send_date` passed with a time zone will be converted to UTC.
     *
     * @return self
     */
    public function setSendDate($send_date)
    {
        $this->container['send_date'] = $send_date;

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


