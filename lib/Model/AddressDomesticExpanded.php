<?php
/**
 * AddressDomesticExpanded
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
 * AddressDomesticExpanded Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddressDomesticExpanded implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address_domestic_expanded';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_city' => 'string',
        'address_state' => 'string',
        'address_zip' => 'string',
        'description' => 'string',
        'name' => 'string',
        'company' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address_country' => 'string',
        'metadata' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'address_city' => null,
        'address_state' => null,
        'address_zip' => null,
        'description' => null,
        'name' => null,
        'company' => null,
        'phone' => null,
        'email' => null,
        'address_country' => null,
        'metadata' => null
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
        'address_line1' => 'address_line1',
        'address_line2' => 'address_line2',
        'address_city' => 'address_city',
        'address_state' => 'address_state',
        'address_zip' => 'address_zip',
        'description' => 'description',
        'name' => 'name',
        'company' => 'company',
        'phone' => 'phone',
        'email' => 'email',
        'address_country' => 'address_country',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_city' => 'setAddressCity',
        'address_state' => 'setAddressState',
        'address_zip' => 'setAddressZip',
        'description' => 'setDescription',
        'name' => 'setName',
        'company' => 'setCompany',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'address_country' => 'setAddressCountry',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_city' => 'getAddressCity',
        'address_state' => 'getAddressState',
        'address_zip' => 'getAddressZip',
        'description' => 'getDescription',
        'name' => 'getName',
        'company' => 'getCompany',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'address_country' => 'getAddressCountry',
        'metadata' => 'getMetadata'
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
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_city'] = $data['address_city'] ?? null;
        $this->container['address_state'] = $data['address_state'] ?? null;
        $this->container['address_zip'] = $data['address_zip'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['address_country'] = $data['address_country'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
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
            if (!is_null($this->container['address_line1']) && (mb_strlen($this->container['address_line1']) > 200)) {
                $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 200.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 200)) {
                $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 200.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['address_city']) && (mb_strlen($this->container['address_city']) > 200)) {
                $invalidProperties[] = "invalid value for 'address_city', the character length must be smaller than or equal to 200.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['address_state']) && (mb_strlen($this->container['address_state']) > 200)) {
                $invalidProperties[] = "invalid value for 'address_state', the character length must be smaller than or equal to 200.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['address_zip']) && (mb_strlen($this->container['address_zip']) > 40)) {
                $invalidProperties[] = "invalid value for 'address_zip', the character length must be smaller than or equal to 40.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 40)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 40)) {
                $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 40.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 40)) {
                $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 40.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($this->container['address_country']) && !preg_match("/UNITED STATES/", $this->container['address_country'])) {
                $invalidProperties[] = "invalid value for 'address_country', must be conform to the pattern /UNITED STATES/.";
            }

        }
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
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
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 The building number, street name, street suffix, and any street directionals. For US addresses, the max length is 64 characters.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address_line1) && (mb_strlen($address_line1) > 200)) {
                throw new \InvalidArgumentException('invalid length for $address_line1 when calling AddressDomesticExpanded., must be smaller than or equal to 200.');
            }

        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }


    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 The suite or apartment number of the recipient address, if applicable. For US addresses, the max length is 64 characters.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address_line2) && (mb_strlen($address_line2) > 200)) {
                throw new \InvalidArgumentException('invalid length for $address_line2 when calling AddressDomesticExpanded., must be smaller than or equal to 200.');
            }

        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }


    /**
     * Gets address_city
     *
     * @return string|null
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string|null $address_city address_city
     *
     * @return self
     */
    public function setAddressCity($address_city)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address_city) && (mb_strlen($address_city) > 200)) {
                throw new \InvalidArgumentException('invalid length for $address_city when calling AddressDomesticExpanded., must be smaller than or equal to 200.');
            }

        }
        $this->container['address_city'] = $address_city;

        return $this;
    }


    /**
     * Gets address_state
     *
     * @return string|null
     */
    public function getAddressState()
    {
        return $this->container['address_state'];
    }

    /**
     * Sets address_state
     *
     * @param string|null $address_state address_state
     *
     * @return self
     */
    public function setAddressState($address_state)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address_state) && (mb_strlen($address_state) > 200)) {
                throw new \InvalidArgumentException('invalid length for $address_state when calling AddressDomesticExpanded., must be smaller than or equal to 200.');
            }

        }
        $this->container['address_state'] = $address_state;

        return $this;
    }


    /**
     * Gets address_zip
     *
     * @return string|null
     */
    public function getAddressZip()
    {
        return $this->container['address_zip'];
    }

    /**
     * Sets address_zip
     *
     * @param string|null $address_zip Optional postal code. For US addresses, must be either 5 or 9 digits.
     *
     * @return self
     */
    public function setAddressZip($address_zip)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($address_zip) && (mb_strlen($address_zip) > 40)) {
                throw new \InvalidArgumentException('invalid length for $address_zip when calling AddressDomesticExpanded., must be smaller than or equal to 40.');
            }

        }
        $this->container['address_zip'] = $address_zip;

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
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($description) && (mb_strlen($description) > 255)) {
                throw new \InvalidArgumentException('invalid length for $description when calling AddressDomesticExpanded., must be smaller than or equal to 255.');
            }

        }
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Either `name` or `company` is required, you may also add both. Must be no longer than 40 characters. If both `name` and `company` are provided, they will be printed on two separate lines above the rest of the address.
     *
     * @return self
     */
    public function setName($name)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($name) && (mb_strlen($name) > 40)) {
                throw new \InvalidArgumentException('invalid length for $name when calling AddressDomesticExpanded., must be smaller than or equal to 40.');
            }

        }
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company Either `name` or `company` is required, you may also add both.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($company) && (mb_strlen($company) > 40)) {
                throw new \InvalidArgumentException('invalid length for $company when calling AddressDomesticExpanded., must be smaller than or equal to 40.');
            }

        }
        $this->container['company'] = $company;

        return $this;
    }


    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Must be no longer than 40 characters.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($phone) && (mb_strlen($phone) > 40)) {
                throw new \InvalidArgumentException('invalid length for $phone when calling AddressDomesticExpanded., must be smaller than or equal to 40.');
            }

        }
        $this->container['phone'] = $phone;

        return $this;
    }


    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Must be no longer than 100 characters.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {
            if (!is_null($email) && (mb_strlen($email) > 100)) {
                throw new \InvalidArgumentException('invalid length for $email when calling AddressDomesticExpanded., must be smaller than or equal to 100.');
            }

        }
        $this->container['email'] = $email;

        return $this;
    }


    /**
     * Gets address_country
     *
     * @return string|null
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string|null $address_country The country associated with this address.
     *
     * @return self
     */
    public function setAddressCountry($address_country)
    {
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {

            if (!is_null($address_country) && (!preg_match("/UNITED STATES/", $address_country))) {
                throw new \InvalidArgumentException("invalid value for $address_country when calling AddressDomesticExpanded., must conform to the pattern /UNITED STATES/.");
            }

        }
        $this->container['address_country'] = $address_country;

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
        if (!function_exists($this->getId()) || strpos($this->getId(), "fakeId") === False) {


        }
        $this->container['metadata'] = $metadata;

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


