<?php
/**
 * UsVerificationOrError
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
 * UsVerificationOrError Class Doc Comment
 *
 * @category Class
 * @description A model used to represent an entry in a result list where the entry can either be a us_verification or an Error. The SDK will perform necessary casting into the correct corresponding type.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UsVerificationOrError implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'us_verification_or_error';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'recipient' => 'string',
        'primary_line' => 'string',
        'secondary_line' => 'string',
        'urbanization' => 'string',
        'last_line' => 'string',
        'deliverability' => 'string',
        'components' => '\OpenAPI\Client\Model\UsComponents',
        'deliverability_analysis' => '\OpenAPI\Client\Model\DeliverabilityAnalysis',
        'lob_confidence_score' => '\OpenAPI\Client\Model\LobConfidenceScore',
        'object' => 'string',
        'transient_id' => 'string',
        'error' => '\OpenAPI\Client\Model\BulkError'
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
        'recipient' => null,
        'primary_line' => null,
        'secondary_line' => null,
        'urbanization' => null,
        'last_line' => null,
        'deliverability' => null,
        'components' => null,
        'deliverability_analysis' => null,
        'lob_confidence_score' => null,
        'object' => null,
        'transient_id' => null,
        'error' => null
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
        'recipient' => 'recipient',
        'primary_line' => 'primary_line',
        'secondary_line' => 'secondary_line',
        'urbanization' => 'urbanization',
        'last_line' => 'last_line',
        'deliverability' => 'deliverability',
        'components' => 'components',
        'deliverability_analysis' => 'deliverability_analysis',
        'lob_confidence_score' => 'lob_confidence_score',
        'object' => 'object',
        'transient_id' => 'transient_id',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'recipient' => 'setRecipient',
        'primary_line' => 'setPrimaryLine',
        'secondary_line' => 'setSecondaryLine',
        'urbanization' => 'setUrbanization',
        'last_line' => 'setLastLine',
        'deliverability' => 'setDeliverability',
        'components' => 'setComponents',
        'deliverability_analysis' => 'setDeliverabilityAnalysis',
        'lob_confidence_score' => 'setLobConfidenceScore',
        'object' => 'setObject',
        'transient_id' => 'setTransientId',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'recipient' => 'getRecipient',
        'primary_line' => 'getPrimaryLine',
        'secondary_line' => 'getSecondaryLine',
        'urbanization' => 'getUrbanization',
        'last_line' => 'getLastLine',
        'deliverability' => 'getDeliverability',
        'components' => 'getComponents',
        'deliverability_analysis' => 'getDeliverabilityAnalysis',
        'lob_confidence_score' => 'getLobConfidenceScore',
        'object' => 'getObject',
        'transient_id' => 'getTransientId',
        'error' => 'getError'
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

    const DELIVERABILITY_DELIVERABLE = 'deliverable';
    const DELIVERABILITY_DELIVERABLE_UNNECESSARY_UNIT = 'deliverable_unnecessary_unit';
    const DELIVERABILITY_DELIVERABLE_INCORRECT_UNIT = 'deliverable_incorrect_unit';
    const DELIVERABILITY_DELIVERABLE_MISSING_UNIT = 'deliverable_missing_unit';
    const DELIVERABILITY_UNDELIVERABLE = 'undeliverable';
    const OBJECT_US_VERIFICATION = 'us_verification';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliverabilityAllowableValues()
    {
        return [
            self::DELIVERABILITY_DELIVERABLE,
            self::DELIVERABILITY_DELIVERABLE_UNNECESSARY_UNIT,
            self::DELIVERABILITY_DELIVERABLE_INCORRECT_UNIT,
            self::DELIVERABILITY_DELIVERABLE_MISSING_UNIT,
            self::DELIVERABILITY_UNDELIVERABLE,
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
            self::OBJECT_US_VERIFICATION,
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
        $this->container['recipient'] = $data['recipient'] ?? null;
        $this->container['primary_line'] = $data['primary_line'] ?? null;
        $this->container['secondary_line'] = $data['secondary_line'] ?? null;
        $this->container['urbanization'] = $data['urbanization'] ?? null;
        $this->container['last_line'] = $data['last_line'] ?? null;
        $this->container['deliverability'] = $data['deliverability'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['deliverability_analysis'] = $data['deliverability_analysis'] ?? null;
        $this->container['lob_confidence_score'] = $data['lob_confidence_score'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['transient_id'] = $data['transient_id'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
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
            if (!is_null($this->container['id']) && !preg_match("/^us_ver_[a-zA-Z0-9_]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^us_ver_[a-zA-Z0-9_]+$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['recipient']) && (mb_strlen($this->container['recipient']) > 500)) {
                $invalidProperties[] = "invalid value for 'recipient', the character length must be smaller than or equal to 500.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['primary_line']) && (mb_strlen($this->container['primary_line']) > 500)) {
                $invalidProperties[] = "invalid value for 'primary_line', the character length must be smaller than or equal to 500.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['secondary_line']) && (mb_strlen($this->container['secondary_line']) > 500)) {
                $invalidProperties[] = "invalid value for 'secondary_line', the character length must be smaller than or equal to 500.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['urbanization']) && (mb_strlen($this->container['urbanization']) > 500)) {
                $invalidProperties[] = "invalid value for 'urbanization', the character length must be smaller than or equal to 500.";
            }

        }
        $allowedValues = $this->getDeliverabilityAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['deliverability']) && !in_array($this->container['deliverability'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'deliverability', must be one of '%s'",
                    $this->container['deliverability'],
                    implode("', '", $allowedValues)
                );
            }
        }

        $allowedValues = $this->getObjectAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'object', must be one of '%s'",
                    $this->container['object'],
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
     * @param string|null $id Unique identifier prefixed with `us_ver_`.
     *
     * @return self
     */
    public function setId($id)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if (!is_null($id) && (!preg_match("/^us_ver_[a-zA-Z0-9_]+$/", $id))) {
                throw new \InvalidArgumentException("invalid value for $id when calling UsVerificationOrError., must conform to the pattern /^us_ver_[a-zA-Z0-9_]+$/.");
            }

        }
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets recipient
     *
     * @return string|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string|null $recipient The intended recipient, typically a person's or firm's name.
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($recipient) && (mb_strlen($recipient) > 500)) {
                throw new \InvalidArgumentException('invalid length for $recipient when calling UsVerificationOrError., must be smaller than or equal to 500.');
            }

        }
        $this->container['recipient'] = $recipient;

        return $this;
    }


    /**
     * Gets primary_line
     *
     * @return string|null
     */
    public function getPrimaryLine()
    {
        return $this->container['primary_line'];
    }

    /**
     * Sets primary_line
     *
     * @param string|null $primary_line The primary delivery line (usually the street address) of the address. Combination of the following applicable `components`: * `primary_number` * `street_predirection` * `street_name` * `street_suffix` * `street_postdirection` * `secondary_designator` * `secondary_number` * `pmb_designator` * `pmb_number`
     *
     * @return self
     */
    public function setPrimaryLine($primary_line)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($primary_line) && (mb_strlen($primary_line) > 500)) {
                throw new \InvalidArgumentException('invalid length for $primary_line when calling UsVerificationOrError., must be smaller than or equal to 500.');
            }

        }
        $this->container['primary_line'] = $primary_line;

        return $this;
    }


    /**
     * Gets secondary_line
     *
     * @return string|null
     */
    public function getSecondaryLine()
    {
        return $this->container['secondary_line'];
    }

    /**
     * Sets secondary_line
     *
     * @param string|null $secondary_line The secondary delivery line of the address. This field is typically empty but may contain information if `primary_line` is too long.
     *
     * @return self
     */
    public function setSecondaryLine($secondary_line)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($secondary_line) && (mb_strlen($secondary_line) > 500)) {
                throw new \InvalidArgumentException('invalid length for $secondary_line when calling UsVerificationOrError., must be smaller than or equal to 500.');
            }

        }
        $this->container['secondary_line'] = $secondary_line;

        return $this;
    }


    /**
     * Gets urbanization
     *
     * @return string|null
     */
    public function getUrbanization()
    {
        return $this->container['urbanization'];
    }

    /**
     * Sets urbanization
     *
     * @param string|null $urbanization Only present for addresses in Puerto Rico. An urbanization refers to an area, sector, or development within a city. See [USPS documentation](https://pe.usps.com/text/pub28/28api_008.htm#:~:text=I51.,-4%20Urbanizations&text=In%20Puerto%20Rico%2C%20identical%20street,placed%20before%20the%20urbanization%20name.) for clarification.
     *
     * @return self
     */
    public function setUrbanization($urbanization)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($urbanization) && (mb_strlen($urbanization) > 500)) {
                throw new \InvalidArgumentException('invalid length for $urbanization when calling UsVerificationOrError., must be smaller than or equal to 500.');
            }

        }
        $this->container['urbanization'] = $urbanization;

        return $this;
    }


    /**
     * Gets last_line
     *
     * @return string|null
     */
    public function getLastLine()
    {
        return $this->container['last_line'];
    }

    /**
     * Sets last_line
     *
     * @param string|null $last_line last_line
     *
     * @return self
     */
    public function setLastLine($last_line)
    {
        $this->container['last_line'] = $last_line;

        return $this;
    }


    /**
     * Gets deliverability
     *
     * @return string|null
     */
    public function getDeliverability()
    {
        return $this->container['deliverability'];
    }

    /**
     * Sets deliverability
     *
     * @param string|null $deliverability deliverability
     *
     * @return self
     */
    public function setDeliverability($deliverability)
    {
        $allowedValues = $this->getDeliverabilityAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($deliverability) && !in_array($deliverability, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'deliverability', must be one of '%s'",
                        $deliverability,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['deliverability'] = $deliverability;

        return $this;
    }


    /**
     * Gets components
     *
     * @return \OpenAPI\Client\Model\UsComponents|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \OpenAPI\Client\Model\UsComponents|null $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }


    /**
     * Gets deliverability_analysis
     *
     * @return \OpenAPI\Client\Model\DeliverabilityAnalysis|null
     */
    public function getDeliverabilityAnalysis()
    {
        return $this->container['deliverability_analysis'];
    }

    /**
     * Sets deliverability_analysis
     *
     * @param \OpenAPI\Client\Model\DeliverabilityAnalysis|null $deliverability_analysis deliverability_analysis
     *
     * @return self
     */
    public function setDeliverabilityAnalysis($deliverability_analysis)
    {
        $this->container['deliverability_analysis'] = $deliverability_analysis;

        return $this;
    }


    /**
     * Gets lob_confidence_score
     *
     * @return \OpenAPI\Client\Model\LobConfidenceScore|null
     */
    public function getLobConfidenceScore()
    {
        return $this->container['lob_confidence_score'];
    }

    /**
     * Sets lob_confidence_score
     *
     * @param \OpenAPI\Client\Model\LobConfidenceScore|null $lob_confidence_score lob_confidence_score
     *
     * @return self
     */
    public function setLobConfidenceScore($lob_confidence_score)
    {
        $this->container['lob_confidence_score'] = $lob_confidence_score;

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
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($object) && !in_array($object, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'object', must be one of '%s'",
                        $object,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['object'] = $object;

        return $this;
    }


    /**
     * Gets transient_id
     *
     * @return string|null
     */
    public function getTransientId()
    {
        return $this->container['transient_id'];
    }

    /**
     * Sets transient_id
     *
     * @param string|null $transient_id ID that is returned in the response body for the verification
     *
     * @return self
     */
    public function setTransientId($transient_id)
    {
        $this->container['transient_id'] = $transient_id;

        return $this;
    }


    /**
     * Gets error
     *
     * @return \OpenAPI\Client\Model\BulkError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \OpenAPI\Client\Model\BulkError|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


