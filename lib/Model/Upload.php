<?php
/**
 * Upload
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
 * Upload Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Upload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'upload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account_id' => 'string',
        'campaign_id' => 'string',
        'mode' => 'string',
        'failures_url' => 'string',
        'original_filename' => 'string',
        'state' => '\OpenAPI\Client\Model\UploadState',
        'total_mailpieces' => 'int',
        'failed_mailpieces' => 'int',
        'validated_mailpieces' => 'int',
        'bytes_processed' => 'int',
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
        'id' => null,
        'account_id' => null,
        'campaign_id' => null,
        'mode' => null,
        'failures_url' => null,
        'original_filename' => null,
        'state' => null,
        'total_mailpieces' => null,
        'failed_mailpieces' => null,
        'validated_mailpieces' => null,
        'bytes_processed' => null,
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
        'id' => 'id',
        'account_id' => 'accountId',
        'campaign_id' => 'campaignId',
        'mode' => 'mode',
        'failures_url' => 'failuresUrl',
        'original_filename' => 'originalFilename',
        'state' => 'state',
        'total_mailpieces' => 'totalMailpieces',
        'failed_mailpieces' => 'failedMailpieces',
        'validated_mailpieces' => 'validatedMailpieces',
        'bytes_processed' => 'bytesProcessed',
        'date_created' => 'dateCreated',
        'date_modified' => 'dateModified',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_id' => 'setAccountId',
        'campaign_id' => 'setCampaignId',
        'mode' => 'setMode',
        'failures_url' => 'setFailuresUrl',
        'original_filename' => 'setOriginalFilename',
        'state' => 'setState',
        'total_mailpieces' => 'setTotalMailpieces',
        'failed_mailpieces' => 'setFailedMailpieces',
        'validated_mailpieces' => 'setValidatedMailpieces',
        'bytes_processed' => 'setBytesProcessed',
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
        'id' => 'getId',
        'account_id' => 'getAccountId',
        'campaign_id' => 'getCampaignId',
        'mode' => 'getMode',
        'failures_url' => 'getFailuresUrl',
        'original_filename' => 'getOriginalFilename',
        'state' => 'getState',
        'total_mailpieces' => 'getTotalMailpieces',
        'failed_mailpieces' => 'getFailedMailpieces',
        'validated_mailpieces' => 'getValidatedMailpieces',
        'bytes_processed' => 'getBytesProcessed',
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

    const MODE_TEST = 'test';
    const MODE_LIVE = 'live';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_TEST,
            self::MODE_LIVE,
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['failures_url'] = $data['failures_url'] ?? null;
        $this->container['original_filename'] = $data['original_filename'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['total_mailpieces'] = $data['total_mailpieces'] ?? null;
        $this->container['failed_mailpieces'] = $data['failed_mailpieces'] ?? null;
        $this->container['validated_mailpieces'] = $data['validated_mailpieces'] ?? null;
        $this->container['bytes_processed'] = $data['bytes_processed'] ?? null;
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

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['id'] === null) {
                $invalidProperties[] = "'id' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!preg_match("/^upl_[a-zA-Z0-9]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^upl_[a-zA-Z0-9]+$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['account_id'] === null) {
                $invalidProperties[] = "'account_id' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['campaign_id'] === null) {
                $invalidProperties[] = "'campaign_id' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!preg_match("/^cmp_[a-zA-Z0-9]+$/", $this->container['campaign_id'])) {
                $invalidProperties[] = "invalid value for 'campaign_id', must be conform to the pattern /^cmp_[a-zA-Z0-9]+$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['mode'] === null) {
                $invalidProperties[] = "'mode' can't be null";
            }
        }
        $allowedValues = $this->getModeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'mode', must be one of '%s'",
                    $this->container['mode'],
                    implode("', '", $allowedValues)
                );
            }
        }

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['state'] === null) {
                $invalidProperties[] = "'state' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['total_mailpieces'] === null) {
                $invalidProperties[] = "'total_mailpieces' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['failed_mailpieces'] === null) {
                $invalidProperties[] = "'failed_mailpieces' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['validated_mailpieces'] === null) {
                $invalidProperties[] = "'validated_mailpieces' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['bytes_processed'] === null) {
                $invalidProperties[] = "'bytes_processed' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['date_created'] === null) {
                $invalidProperties[] = "'date_created' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['date_modified'] === null) {
                $invalidProperties[] = "'date_modified' can't be null";
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
     * @param string $id Unique identifier prefixed with `upl_`.
     *
     * @return self
     */
    public function setId($id)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if ((!preg_match("/^upl_[a-zA-Z0-9]+$/", $id))) {
                throw new \InvalidArgumentException("invalid value for $id when calling Upload., must conform to the pattern /^upl_[a-zA-Z0-9]+$/.");
            }

        }
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id Account ID that made the request
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }


    /**
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id Unique identifier prefixed with `cmp_`.
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if ((!preg_match("/^cmp_[a-zA-Z0-9]+$/", $campaign_id))) {
                throw new \InvalidArgumentException("invalid value for $campaign_id when calling Upload., must conform to the pattern /^cmp_[a-zA-Z0-9]+$/.");
            }

        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }


    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode The environment in which the mailpieces were created. Today, will only be `live`.
     *
     * @return self
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!in_array($mode, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'mode', must be one of '%s'",
                        $mode,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['mode'] = $mode;

        return $this;
    }


    /**
     * Gets failures_url
     *
     * @return string|null
     */
    public function getFailuresUrl()
    {
        return $this->container['failures_url'];
    }

    /**
     * Sets failures_url
     *
     * @param string|null $failures_url Url where your campaign mailpiece failures can be retrieved
     *
     * @return self
     */
    public function setFailuresUrl($failures_url)
    {
        $this->container['failures_url'] = $failures_url;

        return $this;
    }


    /**
     * Gets original_filename
     *
     * @return string|null
     */
    public function getOriginalFilename()
    {
        return $this->container['original_filename'];
    }

    /**
     * Sets original_filename
     *
     * @param string|null $original_filename Filename of the upload
     *
     * @return self
     */
    public function setOriginalFilename($original_filename)
    {
        $this->container['original_filename'] = $original_filename;

        return $this;
    }


    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\UploadState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\UploadState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets total_mailpieces
     *
     * @return int
     */
    public function getTotalMailpieces()
    {
        return $this->container['total_mailpieces'];
    }

    /**
     * Sets total_mailpieces
     *
     * @param int $total_mailpieces Total number of recipients for the campaign
     *
     * @return self
     */
    public function setTotalMailpieces($total_mailpieces)
    {
        $this->container['total_mailpieces'] = $total_mailpieces;

        return $this;
    }


    /**
     * Gets failed_mailpieces
     *
     * @return int
     */
    public function getFailedMailpieces()
    {
        return $this->container['failed_mailpieces'];
    }

    /**
     * Sets failed_mailpieces
     *
     * @param int $failed_mailpieces Number of mailpieces that failed to create
     *
     * @return self
     */
    public function setFailedMailpieces($failed_mailpieces)
    {
        $this->container['failed_mailpieces'] = $failed_mailpieces;

        return $this;
    }


    /**
     * Gets validated_mailpieces
     *
     * @return int
     */
    public function getValidatedMailpieces()
    {
        return $this->container['validated_mailpieces'];
    }

    /**
     * Sets validated_mailpieces
     *
     * @param int $validated_mailpieces Number of mailpieces that were successfully created
     *
     * @return self
     */
    public function setValidatedMailpieces($validated_mailpieces)
    {
        $this->container['validated_mailpieces'] = $validated_mailpieces;

        return $this;
    }


    /**
     * Gets bytes_processed
     *
     * @return int
     */
    public function getBytesProcessed()
    {
        return $this->container['bytes_processed'];
    }

    /**
     * Sets bytes_processed
     *
     * @param int $bytes_processed Number of bytes processed in your CSV
     *
     * @return self
     */
    public function setBytesProcessed($bytes_processed)
    {
        $this->container['bytes_processed'] = $bytes_processed;

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
     * @param \DateTime $date_created A timestamp in ISO 8601 format of the date the upload was created
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
     * @param \DateTime $date_modified A timestamp in ISO 8601 format of the date the upload was last modified
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

