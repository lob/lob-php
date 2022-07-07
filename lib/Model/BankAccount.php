<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'bank_account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'routing_number' => 'string',
        'account_number' => 'string',
        'account_type' => 'string',
        'signatory' => 'string',
        'metadata' => 'array<string,string>',
        'id' => 'string',
        'signature_url' => 'string',
        'bank_name' => 'string',
        'verified' => 'bool',
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
        'description' => null,
        'routing_number' => null,
        'account_number' => null,
        'account_type' => null,
        'signatory' => null,
        'metadata' => null,
        'id' => null,
        'signature_url' => null,
        'bank_name' => null,
        'verified' => null,
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
        'description' => 'description',
        'routing_number' => 'routing_number',
        'account_number' => 'account_number',
        'account_type' => 'account_type',
        'signatory' => 'signatory',
        'metadata' => 'metadata',
        'id' => 'id',
        'signature_url' => 'signature_url',
        'bank_name' => 'bank_name',
        'verified' => 'verified',
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
        'description' => 'setDescription',
        'routing_number' => 'setRoutingNumber',
        'account_number' => 'setAccountNumber',
        'account_type' => 'setAccountType',
        'signatory' => 'setSignatory',
        'metadata' => 'setMetadata',
        'id' => 'setId',
        'signature_url' => 'setSignatureUrl',
        'bank_name' => 'setBankName',
        'verified' => 'setVerified',
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
        'description' => 'getDescription',
        'routing_number' => 'getRoutingNumber',
        'account_number' => 'getAccountNumber',
        'account_type' => 'getAccountType',
        'signatory' => 'getSignatory',
        'metadata' => 'getMetadata',
        'id' => 'getId',
        'signature_url' => 'getSignatureUrl',
        'bank_name' => 'getBankName',
        'verified' => 'getVerified',
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

    const ACCOUNT_TYPE_COMPANY = 'company';
    const ACCOUNT_TYPE_INDIVIDUAL = 'individual';
    const OBJECT_BANK_ACCOUNT = 'bank_account';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_COMPANY,
            self::ACCOUNT_TYPE_INDIVIDUAL,
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
            self::OBJECT_BANK_ACCOUNT,
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
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['signatory'] = $data['signatory'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['signature_url'] = $data['signature_url'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['verified'] = $data['verified'] ?? null;
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['routing_number'] === null) {
            $invalidProperties[] = "'routing_number' can't be null";
        }
        if ((mb_strlen($this->container['routing_number']) > 9)) {
            $invalidProperties[] = "invalid value for 'routing_number', the character length must be smaller than or equal to 9.";
        }

        if ((mb_strlen($this->container['routing_number']) < 9)) {
            $invalidProperties[] = "invalid value for 'routing_number', the character length must be bigger than or equal to 9.";
        }

        if ($this->container['account_number'] === null) {
            $invalidProperties[] = "'account_number' can't be null";
        }
        if ((mb_strlen($this->container['account_number']) > 17)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 17.";
        }

        if ($this->container['account_type'] === null) {
            $invalidProperties[] = "'account_type' can't be null";
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['signatory'] === null) {
            $invalidProperties[] = "'signatory' can't be null";
        }
        if ((mb_strlen($this->container['signatory']) > 30)) {
            $invalidProperties[] = "invalid value for 'signatory', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (strpos($this->getId(), "fakeId") === False && !preg_match("/^bank_[a-zA-Z0-9]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^bank_[a-zA-Z0-9]+$/.";
        }

        if (!is_null($this->container['signature_url']) && !preg_match("/^https:\/\/lob-assets\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $this->container['signature_url'])) {
            $invalidProperties[] = "invalid value for 'signature_url', must be conform to the pattern /^https:\/\/lob-assets\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.";
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
            throw new \InvalidArgumentException('invalid length for $description when calling BankAccount., must be smaller than or equal to 255.');
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
        if (strpos($this->getId(), "fakeId") === False && (mb_strlen($routing_number) > 9)) {
            throw new \InvalidArgumentException('invalid length for $routing_number when calling BankAccount., must be smaller than or equal to 9.');
        }
        if (strpos($this->getId(), "fakeId") === False && (mb_strlen($routing_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for $routing_number when calling BankAccount., must be bigger than or equal to 9.');
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
        if (strpos($this->getId(), "fakeId") === False && (mb_strlen($account_number) > 17)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling BankAccount., must be smaller than or equal to 17.');
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }


    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type The type of entity that holds the account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }

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
        if (strpos($this->getId(), "fakeId") === False && (mb_strlen($signatory) > 30)) {
            throw new \InvalidArgumentException('invalid length for $signatory when calling BankAccount., must be smaller than or equal to 30.');
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


        $this->container['metadata'] = $metadata;

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
     * @param string $id Unique identifier prefixed with `bank_`.
     *
     * @return self
     */
    public function setId($id)
    {

        if (strpos($this->getId(), "fakeId") === False && (!preg_match("/^bank_[a-zA-Z0-9]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling BankAccount., must conform to the pattern /^bank_[a-zA-Z0-9]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets signature_url
     *
     * @return string|null
     */
    public function getSignatureUrl()
    {
        return $this->container['signature_url'];
    }

    /**
     * Sets signature_url
     *
     * @param string|null $signature_url A signed link to the signature image. will be generated.
     *
     * @return self
     */
    public function setSignatureUrl($signature_url)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($signature_url) && (!preg_match("/^https:\/\/lob-assets\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $signature_url))) {
            throw new \InvalidArgumentException("invalid value for $signature_url when calling BankAccount., must conform to the pattern /^https:\/\/lob-assets\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.");
        }

        $this->container['signature_url'] = $signature_url;

        return $this;
    }


    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name The name of the bank based on the provided routing number, e.g. `JPMORGAN CHASE BANK`.
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }


    /**
     * Gets verified
     *
     * @return bool|null
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool|null $verified A bank account must be verified before a check can be created.
     *
     * @return self
     */
    public function setVerified($verified)
    {
        $this->container['verified'] = $verified;

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
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        $allowedValues = $this->getObjectAllowableValues();
        if (!in_array($object, $allowedValues, true)) {
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


