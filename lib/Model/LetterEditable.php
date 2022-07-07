<?php
/**
 * LetterEditable
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
 * LetterEditable Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LetterEditable implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'letter_editable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'metadata' => 'array<string,string>',
        'mail_type' => '\OpenAPI\Client\Model\MailType',
        'merge_variables' => 'object',
        'send_date' => '\DateTime',
        'color' => 'bool',
        'double_sided' => 'bool',
        'address_placement' => 'string',
        'return_envelope' => 'mixed',
        'perforated_page' => 'int',
        'custom_envelope' => '\OpenAPI\Client\Model\LetterEditableCustomEnvelope',
        'to' => 'string',
        'from' => 'string',
        'file' => 'string',
        'extra_service' => 'string',
        'cards' => 'string[]',
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
        'description' => null,
        'metadata' => null,
        'mail_type' => null,
        'merge_variables' => null,
        'send_date' => 'date-time',
        'color' => null,
        'double_sided' => null,
        'address_placement' => null,
        'return_envelope' => null,
        'perforated_page' => null,
        'custom_envelope' => null,
        'to' => null,
        'from' => null,
        'file' => null,
        'extra_service' => null,
        'cards' => null,
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
        'description' => 'description',
        'metadata' => 'metadata',
        'mail_type' => 'mail_type',
        'merge_variables' => 'merge_variables',
        'send_date' => 'send_date',
        'color' => 'color',
        'double_sided' => 'double_sided',
        'address_placement' => 'address_placement',
        'return_envelope' => 'return_envelope',
        'perforated_page' => 'perforated_page',
        'custom_envelope' => 'custom_envelope',
        'to' => 'to',
        'from' => 'from',
        'file' => 'file',
        'extra_service' => 'extra_service',
        'cards' => 'cards',
        'billing_group_id' => 'billing_group_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'metadata' => 'setMetadata',
        'mail_type' => 'setMailType',
        'merge_variables' => 'setMergeVariables',
        'send_date' => 'setSendDate',
        'color' => 'setColor',
        'double_sided' => 'setDoubleSided',
        'address_placement' => 'setAddressPlacement',
        'return_envelope' => 'setReturnEnvelope',
        'perforated_page' => 'setPerforatedPage',
        'custom_envelope' => 'setCustomEnvelope',
        'to' => 'setTo',
        'from' => 'setFrom',
        'file' => 'setFile',
        'extra_service' => 'setExtraService',
        'cards' => 'setCards',
        'billing_group_id' => 'setBillingGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'metadata' => 'getMetadata',
        'mail_type' => 'getMailType',
        'merge_variables' => 'getMergeVariables',
        'send_date' => 'getSendDate',
        'color' => 'getColor',
        'double_sided' => 'getDoubleSided',
        'address_placement' => 'getAddressPlacement',
        'return_envelope' => 'getReturnEnvelope',
        'perforated_page' => 'getPerforatedPage',
        'custom_envelope' => 'getCustomEnvelope',
        'to' => 'getTo',
        'from' => 'getFrom',
        'file' => 'getFile',
        'extra_service' => 'getExtraService',
        'cards' => 'getCards',
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

    const ADDRESS_PLACEMENT_TOP_FIRST_PAGE = 'top_first_page';
    const ADDRESS_PLACEMENT_INSERT_BLANK_PAGE = 'insert_blank_page';
    const ADDRESS_PLACEMENT_BOTTOM_FIRST_PAGE_CENTER = 'bottom_first_page_center';
    const ADDRESS_PLACEMENT_BOTTOM_FIRST_PAGE = 'bottom_first_page';
    const EXTRA_SERVICE_CERTIFIED = 'certified';
    const EXTRA_SERVICE_CERTIFIED_RETURN_RECEIPT = 'certified_return_receipt';
    const EXTRA_SERVICE_REGISTERED = 'registered';
    const EXTRA_SERVICE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressPlacementAllowableValues()
    {
        return [
            self::ADDRESS_PLACEMENT_TOP_FIRST_PAGE,
            self::ADDRESS_PLACEMENT_INSERT_BLANK_PAGE,
            self::ADDRESS_PLACEMENT_BOTTOM_FIRST_PAGE_CENTER,
            self::ADDRESS_PLACEMENT_BOTTOM_FIRST_PAGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExtraServiceAllowableValues()
    {
        return [
            self::EXTRA_SERVICE_CERTIFIED,
            self::EXTRA_SERVICE_CERTIFIED_RETURN_RECEIPT,
            self::EXTRA_SERVICE_REGISTERED,
            self::EXTRA_SERVICE_NULL,
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
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['mail_type'] = $data['mail_type'] ?? null;
        $this->container['merge_variables'] = $data['merge_variables'] ?? null;
        $this->container['send_date'] = $data['send_date'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['double_sided'] = $data['double_sided'] ?? null;
        $this->container['address_placement'] = $data['address_placement'] ?? null;
        $this->container['return_envelope'] = $data['return_envelope'] ?? null;
        $this->container['perforated_page'] = $data['perforated_page'] ?? null;
        $this->container['custom_envelope'] = $data['custom_envelope'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['extra_service'] = $data['extra_service'] ?? null;
        $this->container['cards'] = $data['cards'] ?? null;
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['color'] === null) {
            $invalidProperties[] = "'color' can't be null";
        }
        $allowedValues = $this->getAddressPlacementAllowableValues();
        if (!is_null($this->container['address_placement']) && !in_array($this->container['address_placement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'address_placement', must be one of '%s'",
                $this->container['address_placement'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        $allowedValues = $this->getExtraServiceAllowableValues();
        if (!is_null($this->container['extra_service']) && !in_array($this->container['extra_service'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'extra_service', must be one of '%s'",
                $this->container['extra_service'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['cards']) && (count($this->container['cards']) > 1)) {
            $invalidProperties[] = "invalid value for 'cards', number of items must be less than or equal to 1.";
        }

        if (!is_null($this->container['cards']) && (count($this->container['cards']) < 0)) {
            $invalidProperties[] = "invalid value for 'cards', number of items must be greater than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $description when calling LetterEditable., must be smaller than or equal to 255.');
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
     * Gets color
     *
     * @return bool
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param bool $color Set this key to `true` if you would like to print in color. Set to `false` if you would like to print in black and white.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }


    /**
     * Gets double_sided
     *
     * @return bool|null
     */
    public function getDoubleSided()
    {
        return $this->container['double_sided'];
    }

    /**
     * Sets double_sided
     *
     * @param bool|null $double_sided Set this attribute to `true` for double sided printing, or `false` for for single sided printing. Defaults to `true`.
     *
     * @return self
     */
    public function setDoubleSided($double_sided)
    {
        $this->container['double_sided'] = $double_sided;

        return $this;
    }


    /**
     * Gets address_placement
     *
     * @return string|null
     */
    public function getAddressPlacement()
    {
        return $this->container['address_placement'];
    }

    /**
     * Sets address_placement
     *
     * @param string|null $address_placement Specifies the location of the address information that will show through the double-window envelope. To see how this will impact your letter design, view our letter template.   * `top_first_page` - (default) print address information at the top of your provided first page   * `insert_blank_page` - insert a blank address page at the beginning of your file (you will be charged for the extra page)   * `bottom_first_page_center` - **(deprecation planned within a few months)** print address information at the bottom center of your provided first page   * `bottom_first_page` - print address information at the bottom of your provided first page
     *
     * @return self
     */
    public function setAddressPlacement($address_placement)
    {
        $allowedValues = $this->getAddressPlacementAllowableValues();
        if (!is_null($address_placement) && !in_array($address_placement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'address_placement', must be one of '%s'",
                    $address_placement,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['address_placement'] = $address_placement;

        return $this;
    }


    /**
     * Gets return_envelope
     *
     * @return mixed|null
     */
    public function getReturnEnvelope()
    {
        return $this->container['return_envelope'];
    }

    /**
     * Sets return_envelope
     *
     * @param mixed|null $return_envelope indicates if a return envelope is requested for the letter. The value corresponding to this field is by default a boolean. But if the account is signed up for custom return envelopes, the value is of type string and is `no_9_single_window` for a standard return envelope and a custom `return_envelope_id` for non-standard return envelopes.  To include a return envelope with your letter, set to `true` and specify the `perforated_page`. See [pricing](https://www.lob.com/pricing/print-mail#compare) for extra costs incurred.
     *
     * @return self
     */
    public function setReturnEnvelope($return_envelope)
    {
        $this->container['return_envelope'] = $return_envelope;

        return $this;
    }


    /**
     * Gets perforated_page
     *
     * @return int|null
     */
    public function getPerforatedPage()
    {
        return $this->container['perforated_page'];
    }

    /**
     * Sets perforated_page
     *
     * @param int|null $perforated_page Required if `return_envelope` is `true`. The number of the page that should be perforated for use with the return envelope. Must be greater than or equal to `1`. The blank page added by `address_placement=insert_blank_page` will be ignored when considering the perforated page number. To see how perforation will impact your letter design, view our [perforation guide](https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/letter_perf_template.pdf).
     *
     * @return self
     */
    public function setPerforatedPage($perforated_page)
    {
        $this->container['perforated_page'] = $perforated_page;

        return $this;
    }


    /**
     * Gets custom_envelope
     *
     * @return \OpenAPI\Client\Model\LetterEditableCustomEnvelope|null
     */
    public function getCustomEnvelope()
    {
        return $this->container['custom_envelope'];
    }

    /**
     * Sets custom_envelope
     *
     * @param \OpenAPI\Client\Model\LetterEditableCustomEnvelope|null $custom_envelope custom_envelope
     *
     * @return self
     */
    public function setCustomEnvelope($custom_envelope)
    {
        $this->container['custom_envelope'] = $custom_envelope;

        return $this;
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
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Must either be an address ID or an inline object with correct address parameters.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }


    /**
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file PDF file containing the letter's formatting.
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }


    /**
     * Gets extra_service
     *
     * @return string|null
     */
    public function getExtraService()
    {
        return $this->container['extra_service'];
    }

    /**
     * Sets extra_service
     *
     * @param string|null $extra_service Add an extra service to your letter:   * `certified` - track and confirm delivery for domestic destinations. An extra sheet (1 PDF page single-sided or 2 PDF pages double-sided) is added to the beginning of your letter for address and barcode information. See here for templates: [#10 envelope](https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/letter_certified_template.pdf) and [flat envelope](https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/letter_certified_flat_template.pdf) (used for letters over 6 pages single-sided or 12 pages double-sided). You will not be charged for this extra sheet.   * `certified_return_receipt` - request an electronic copy of the recipient's signature to prove delivery of your certified letter   * `registered` - provides tracking and confirmation for international addresses
     *
     * @return self
     */
    public function setExtraService($extra_service)
    {
        $allowedValues = $this->getExtraServiceAllowableValues();
        if (!is_null($extra_service) && !in_array($extra_service, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'extra_service', must be one of '%s'",
                    $extra_service,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['extra_service'] = $extra_service;

        return $this;
    }


    /**
     * Gets cards
     *
     * @return string[]|null
     */
    public function getCards()
    {
        return $this->container['cards'];
    }

    /**
     * Sets cards
     *
     * @param string[]|null $cards A single-element array containing an existing card id in a string format. See [cards](#tag/Cards) for more information.
     *
     * @return self
     */
    public function setCards($cards)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($cards) && (count($cards) > 1)) {
            throw new \InvalidArgumentException('invalid value for $cards when calling LetterEditable., number of items must be less than or equal to 1.');
        }
        if (strpos($this->getId(), "fakeId") === False && !is_null($cards) && (count($cards) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cards when calling LetterEditable., number of items must be greater than or equal to 0.');
        }
        $this->container['cards'] = [];
        if ($cards) {
            foreach ($cards as $point) {
                
                $deserializedData = (string) $point;
                array_push($this->container['cards'], $deserializedData);
            }
        }

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


