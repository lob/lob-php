<?php
/**
 * Thumbnail
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
 * Thumbnail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Thumbnail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'thumbnail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'small' => 'string',
        'medium' => 'string',
        'large' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'small' => null,
        'medium' => null,
        'large' => null
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
        'small' => 'small',
        'medium' => 'medium',
        'large' => 'large'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'small' => 'setSmall',
        'medium' => 'setMedium',
        'large' => 'setLarge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'small' => 'getSmall',
        'medium' => 'getMedium',
        'large' => 'getLarge'
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
        $this->container['small'] = $data['small'] ?? null;
        $this->container['medium'] = $data['medium'] ?? null;
        $this->container['large'] = $data['large'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['small']) && !preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $this->container['small'])) {
            $invalidProperties[] = "invalid value for 'small', must be conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.";
        }

        if (!is_null($this->container['medium']) && !preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $this->container['medium'])) {
            $invalidProperties[] = "invalid value for 'medium', must be conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.";
        }

        if (!is_null($this->container['large']) && !preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $this->container['large'])) {
            $invalidProperties[] = "invalid value for 'large', must be conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.";
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
     * Gets small
     *
     * @return string|null
     */
    public function getSmall()
    {
        return $this->container['small'];
    }

    /**
     * Sets small
     *
     * @param string|null $small A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     *
     * @return self
     */
    public function setSmall($small)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($small) && (!preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $small))) {
            throw new \InvalidArgumentException("invalid value for $small when calling Thumbnail., must conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.");
        }

        $this->container['small'] = $small;

        return $this;
    }


    /**
     * Gets medium
     *
     * @return string|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string|null $medium A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     *
     * @return self
     */
    public function setMedium($medium)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($medium) && (!preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $medium))) {
            throw new \InvalidArgumentException("invalid value for $medium when calling Thumbnail., must conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.");
        }

        $this->container['medium'] = $medium;

        return $this;
    }


    /**
     * Gets large
     *
     * @return string|null
     */
    public function getLarge()
    {
        return $this->container['large'];
    }

    /**
     * Sets large
     *
     * @param string|null $large A [signed link](#section/Asset-URLs) served over HTTPS. The link returned will expire in 30 days to prevent mis-sharing. Each time a GET request is initiated, a new signed URL will be generated.
     *
     * @return self
     */
    public function setLarge($large)
    {

        if (strpos($this->getId(), "fakeId") === False && !is_null($large) && (!preg_match("/^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/", $large))) {
            throw new \InvalidArgumentException("invalid value for $large when calling Thumbnail., must conform to the pattern /^https:\/\/(lob-assets|lob-assets-staging)\\.com\/(letters|postcards|bank-accounts|checks|self-mailers|cards)\/[a-z]{3,4}_[a-z0-9]{15,16}(\\.pdf|_thumb_[a-z]+_[0-9]+\\.png)\\?(version=[a-z0-9-]*&)?expires=[0-9]{10}&signature=[a-zA-Z0-9-_]+$/.");
        }

        $this->container['large'] = $large;

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


