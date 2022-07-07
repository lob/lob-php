<?php
/**
 * PostcardEditable
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
 * PostcardEditable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PostcardEditable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'postcard_editable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'from' => 'string',
        'size' => '\OpenAPI\Client\Model\PostcardSize',
        'description' => 'string',
        'metadata' => 'array<string,string>',
        'mail_type' => '\OpenAPI\Client\Model\MailType',
        'merge_variables' => 'object',
        'send_date' => '\DateTime',
        'front' => 'string',
        'back' => 'string',
        'billing_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'to' => null,
        'from' => null,
        'size' => null,
        'description' => null,
        'metadata' => null,
        'mail_type' => null,
        'merge_variables' => null,
        'send_date' => 'date-time',
        'front' => null,
        'back' => null,
        'billing_group_id' => null
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
        'to' => 'to',
        'from' => 'from',
        'size' => 'size',
        'description' => 'description',
        'metadata' => 'metadata',
        'mail_type' => 'mail_type',
        'merge_variables' => 'merge_variables',
        'send_date' => 'send_date',
        'front' => 'front',
        'back' => 'back',
        'billing_group_id' => 'billing_group_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'from' => 'setFrom',
        'size' => 'setSize',
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'mail_type' => 'setMailType',
        'merge_variables' => 'setMergeVariables',
        'send_date' => 'setSendDate',
        'front' => 'setFront',
        'back' => 'setBack',
        'billing_group_id' => 'setBillingGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'from' => 'getFrom',
        'size' => 'getSize',
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
        'mail_type' => 'getMailType',
        'merge_variables' => 'getMergeVariables',
        'send_date' => 'getSendDate',
        'front' => 'getFront',
        'back' => 'getBack',
        'billing_group_id' => 'getBillingGroupId'
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
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['mail_type'] = $data['mail_type'] ?? null;
        $this->container['merge_variables'] = $data['merge_variables'] ?? null;
        $this->container['send_date'] = $data['send_date'] ?? null;
        $this->container['front'] = $data['front'] ?? null;
        $this->container['back'] = $data['back'] ?? null;
        $this->container['billing_group_id'] = $data['billing_group_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if (strpos($this->getId(), "fakeId") === False && !is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['front'] === null) {
            $invalidProperties[] = "'front' can't be null";
        }
        if ($this->container['back'] === null) {
            $invalidProperties[] = "'back' can't be null";
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
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Must either be an address ID or an inline object with correct address parameters.
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
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Required if `to` address is international. Must either be an address ID or an inline object with correct address parameters.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
            throw new \InvalidArgumentException('invalid length for $description when calling PostcardEditable., must be smaller than or equal to 255.');
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
     * Gets front
     *
     * @return string
     */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
     * Sets front
     *
     * @param string $front The artwork to use as the front of your postcard.
     *
     * @return self
     */
    public function setFront($front)
    {
        $this->container['front'] = $front;

        return $this;
    }


    /**
     * Gets back
     *
     * @return string
     */
    public function getBack()
    {
        return $this->container['back'];
    }

    /**
     * Sets back
     *
     * @param string $back The artwork to use as the back of your postcard.
     *
     * @return self
     */
    public function setBack($back)
    {
        $this->container['back'] = $back;

        return $this;
    }


    /**
     * Gets billing_group_id
     *
     * @return string|null
     */
    public function getBillingGroupId()
    {
        return $this->container['billing_group_id'];
    }

    /**
     * Sets billing_group_id
     *
     * @param string|null $billing_group_id An optional string with the billing group ID to tag your usage with. Is used for billing purposes. Requires special activation to use. See [Billing Group API](https://lob.github.io/lob-openapi/#tag/Billing-Groups) for more information.
     *
     * @return self
     */
    public function setBillingGroupId($billing_group_id)
    {
        $this->container['billing_group_id'] = $billing_group_id;

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


