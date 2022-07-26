<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'url' => 'string',
        'auto_reorder' => 'bool',
        'reorder_quantity' => 'int',
        'raw_url' => 'string',
        'front_original_url' => 'string',
        'back_original_url' => 'string',
        'thumbnails' => '\OpenAPI\Client\Model\Thumbnail[]',
        'available_quantity' => 'int',
        'pending_quantity' => 'int',
        'status' => 'string',
        'orientation' => 'string',
        'threshold_amount' => 'int',
        'date_created' => '\DateTime',
        'date_modified' => '\DateTime',
        'deleted' => 'bool',
        'object' => 'string',
        'description' => 'string',
        'size' => 'string'
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
        'url' => 'uri',
        'auto_reorder' => null,
        'reorder_quantity' => null,
        'raw_url' => 'uri',
        'front_original_url' => 'uri',
        'back_original_url' => 'uri',
        'thumbnails' => null,
        'available_quantity' => null,
        'pending_quantity' => null,
        'status' => null,
        'orientation' => null,
        'threshold_amount' => null,
        'date_created' => 'date-time',
        'date_modified' => 'date-time',
        'deleted' => null,
        'object' => null,
        'description' => null,
        'size' => null
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
        'url' => 'url',
        'auto_reorder' => 'auto_reorder',
        'reorder_quantity' => 'reorder_quantity',
        'raw_url' => 'raw_url',
        'front_original_url' => 'front_original_url',
        'back_original_url' => 'back_original_url',
        'thumbnails' => 'thumbnails',
        'available_quantity' => 'available_quantity',
        'pending_quantity' => 'pending_quantity',
        'status' => 'status',
        'orientation' => 'orientation',
        'threshold_amount' => 'threshold_amount',
        'date_created' => 'date_created',
        'date_modified' => 'date_modified',
        'deleted' => 'deleted',
        'object' => 'object',
        'description' => 'description',
        'size' => 'size'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'auto_reorder' => 'setAutoReorder',
        'reorder_quantity' => 'setReorderQuantity',
        'raw_url' => 'setRawUrl',
        'front_original_url' => 'setFrontOriginalUrl',
        'back_original_url' => 'setBackOriginalUrl',
        'thumbnails' => 'setThumbnails',
        'available_quantity' => 'setAvailableQuantity',
        'pending_quantity' => 'setPendingQuantity',
        'status' => 'setStatus',
        'orientation' => 'setOrientation',
        'threshold_amount' => 'setThresholdAmount',
        'date_created' => 'setDateCreated',
        'date_modified' => 'setDateModified',
        'deleted' => 'setDeleted',
        'object' => 'setObject',
        'description' => 'setDescription',
        'size' => 'setSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'auto_reorder' => 'getAutoReorder',
        'reorder_quantity' => 'getReorderQuantity',
        'raw_url' => 'getRawUrl',
        'front_original_url' => 'getFrontOriginalUrl',
        'back_original_url' => 'getBackOriginalUrl',
        'thumbnails' => 'getThumbnails',
        'available_quantity' => 'getAvailableQuantity',
        'pending_quantity' => 'getPendingQuantity',
        'status' => 'getStatus',
        'orientation' => 'getOrientation',
        'threshold_amount' => 'getThresholdAmount',
        'date_created' => 'getDateCreated',
        'date_modified' => 'getDateModified',
        'deleted' => 'getDeleted',
        'object' => 'getObject',
        'description' => 'getDescription',
        'size' => 'getSize'
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

    const STATUS_PROCESSED = 'processed';
    const STATUS_RENDERED = 'rendered';
    const ORIENTATION_HORIZONTAL = 'horizontal';
    const ORIENTATION_VERTICAL = 'vertical';
    const OBJECT_CARD = 'card';
    const SIZE__3_375X2_125 = '3.375x2.125';
    const SIZE__2_125X3_375 = '2.125x3.375';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSED,
            self::STATUS_RENDERED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_HORIZONTAL,
            self::ORIENTATION_VERTICAL,
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
            self::OBJECT_CARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE__3_375X2_125,
            self::SIZE__2_125X3_375,
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['auto_reorder'] = $data['auto_reorder'] ?? null;
        $this->container['reorder_quantity'] = $data['reorder_quantity'] ?? null;
        $this->container['raw_url'] = $data['raw_url'] ?? null;
        $this->container['front_original_url'] = $data['front_original_url'] ?? null;
        $this->container['back_original_url'] = $data['back_original_url'] ?? null;
        $this->container['thumbnails'] = $data['thumbnails'] ?? null;
        $this->container['available_quantity'] = $data['available_quantity'] ?? null;
        $this->container['pending_quantity'] = $data['pending_quantity'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['orientation'] = $data['orientation'] ?? null;
        $this->container['threshold_amount'] = $data['threshold_amount'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_modified'] = $data['date_modified'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
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
            if (!preg_match("/^card_[a-zA-Z0-9]+$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^card_[a-zA-Z0-9]+$/.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['url'] === null) {
                $invalidProperties[] = "'url' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ((mb_strlen($this->container['url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2083.";
            }

            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['auto_reorder'] === null) {
                $invalidProperties[] = "'auto_reorder' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['raw_url']) && (mb_strlen($this->container['raw_url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'raw_url', the character length must be smaller than or equal to 2083.";
            }

            if (!is_null($this->container['raw_url']) && (mb_strlen($this->container['raw_url']) < 1)) {
                $invalidProperties[] = "invalid value for 'raw_url', the character length must be bigger than or equal to 1.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['front_original_url']) && (mb_strlen($this->container['front_original_url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'front_original_url', the character length must be smaller than or equal to 2083.";
            }

            if (!is_null($this->container['front_original_url']) && (mb_strlen($this->container['front_original_url']) < 1)) {
                $invalidProperties[] = "invalid value for 'front_original_url', the character length must be bigger than or equal to 1.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['back_original_url']) && (mb_strlen($this->container['back_original_url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'back_original_url', the character length must be smaller than or equal to 2083.";
            }

            if (!is_null($this->container['back_original_url']) && (mb_strlen($this->container['back_original_url']) < 1)) {
                $invalidProperties[] = "invalid value for 'back_original_url', the character length must be bigger than or equal to 1.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['thumbnails'] === null) {
                $invalidProperties[] = "'thumbnails' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['available_quantity'] === null) {
                $invalidProperties[] = "'available_quantity' can't be null";
            }
        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['pending_quantity'] === null) {
                $invalidProperties[] = "'pending_quantity' can't be null";
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'status', must be one of '%s'",
                    $this->container['status'],
                    implode("', '", $allowedValues)
                );
            }
        }

        $allowedValues = $this->getOrientationAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['orientation']) && !in_array($this->container['orientation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'orientation', must be one of '%s'",
                    $this->container['orientation'],
                    implode("', '", $allowedValues)
                );
            }
        }

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['threshold_amount'] === null) {
                $invalidProperties[] = "'threshold_amount' can't be null";
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
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['object'] === null) {
                $invalidProperties[] = "'object' can't be null";
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

        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }

        }
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ($this->container['size'] === null) {
                $invalidProperties[] = "'size' can't be null";
            }
        }
        $allowedValues = $this->getSizeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($this->container['size']) && !in_array($this->container['size'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                    "invalid value '%s' for 'size', must be one of '%s'",
                    $this->container['size'],
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier prefixed with `card_`.
     *
     * @return self
     */
    public function setId($id)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {

            if ((!preg_match("/^card_[a-zA-Z0-9]+$/", $id))) {
                throw new \InvalidArgumentException("invalid value for $id when calling Card., must conform to the pattern /^card_[a-zA-Z0-9]+$/.");
            }

        }
        $this->container['id'] = $id;

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
     * @param string $url The signed link for the card.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if ((mb_strlen($url) > 2083)) {
                throw new \InvalidArgumentException('invalid length for $url when calling Card., must be smaller than or equal to 2083.');
            }
            if ((mb_strlen($url) < 1)) {
                throw new \InvalidArgumentException('invalid length for $url when calling Card., must be bigger than or equal to 1.');
            }

        }
        $this->container['url'] = $url;

        return $this;
    }


    /**
     * Gets auto_reorder
     *
     * @return bool
     */
    public function getAutoReorder()
    {
        return $this->container['auto_reorder'];
    }

    /**
     * Sets auto_reorder
     *
     * @param bool $auto_reorder True if the cards should be auto-reordered.
     *
     * @return self
     */
    public function setAutoReorder($auto_reorder)
    {
        $this->container['auto_reorder'] = $auto_reorder;

        return $this;
    }


    /**
     * Gets reorder_quantity
     *
     * @return int|null
     */
    public function getReorderQuantity()
    {
        return $this->container['reorder_quantity'];
    }

    /**
     * Sets reorder_quantity
     *
     * @param int|null $reorder_quantity The number of cards to be reordered. Only present when auto_reorder is True.
     *
     * @return self
     */
    public function setReorderQuantity($reorder_quantity)
    {
        $this->container['reorder_quantity'] = $reorder_quantity;

        return $this;
    }


    /**
     * Gets raw_url
     *
     * @return string|null
     */
    public function getRawUrl()
    {
        return $this->container['raw_url'];
    }

    /**
     * Sets raw_url
     *
     * @param string|null $raw_url The raw URL of the card.
     *
     * @return self
     */
    public function setRawUrl($raw_url)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($raw_url) && (mb_strlen($raw_url) > 2083)) {
                throw new \InvalidArgumentException('invalid length for $raw_url when calling Card., must be smaller than or equal to 2083.');
            }
            if (!is_null($raw_url) && (mb_strlen($raw_url) < 1)) {
                throw new \InvalidArgumentException('invalid length for $raw_url when calling Card., must be bigger than or equal to 1.');
            }

        }
        $this->container['raw_url'] = $raw_url;

        return $this;
    }


    /**
     * Gets front_original_url
     *
     * @return string|null
     */
    public function getFrontOriginalUrl()
    {
        return $this->container['front_original_url'];
    }

    /**
     * Sets front_original_url
     *
     * @param string|null $front_original_url The original URL of the front template.
     *
     * @return self
     */
    public function setFrontOriginalUrl($front_original_url)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($front_original_url) && (mb_strlen($front_original_url) > 2083)) {
                throw new \InvalidArgumentException('invalid length for $front_original_url when calling Card., must be smaller than or equal to 2083.');
            }
            if (!is_null($front_original_url) && (mb_strlen($front_original_url) < 1)) {
                throw new \InvalidArgumentException('invalid length for $front_original_url when calling Card., must be bigger than or equal to 1.');
            }

        }
        $this->container['front_original_url'] = $front_original_url;

        return $this;
    }


    /**
     * Gets back_original_url
     *
     * @return string|null
     */
    public function getBackOriginalUrl()
    {
        return $this->container['back_original_url'];
    }

    /**
     * Sets back_original_url
     *
     * @param string|null $back_original_url The original URL of the back template.
     *
     * @return self
     */
    public function setBackOriginalUrl($back_original_url)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($back_original_url) && (mb_strlen($back_original_url) > 2083)) {
                throw new \InvalidArgumentException('invalid length for $back_original_url when calling Card., must be smaller than or equal to 2083.');
            }
            if (!is_null($back_original_url) && (mb_strlen($back_original_url) < 1)) {
                throw new \InvalidArgumentException('invalid length for $back_original_url when calling Card., must be bigger than or equal to 1.');
            }

        }
        $this->container['back_original_url'] = $back_original_url;

        return $this;
    }


    /**
     * Gets thumbnails
     *
     * @return \OpenAPI\Client\Model\Thumbnail[]
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \OpenAPI\Client\Model\Thumbnail[] $thumbnails thumbnails
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
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity The available quantity of cards.
     *
     * @return self
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }


    /**
     * Gets pending_quantity
     *
     * @return int
     */
    public function getPendingQuantity()
    {
        return $this->container['pending_quantity'];
    }

    /**
     * Sets pending_quantity
     *
     * @param int $pending_quantity The pending quantity of cards.
     *
     * @return self
     */
    public function setPendingQuantity($pending_quantity)
    {
        $this->container['pending_quantity'] = $pending_quantity;

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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($status) && !in_array($status, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'status', must be one of '%s'",
                        $status,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets orientation
     *
     * @return string|null
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param string|null $orientation The orientation of the card.
     *
     * @return self
     */
    public function setOrientation($orientation)
    {
        $allowedValues = $this->getOrientationAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($orientation) && !in_array($orientation, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'orientation', must be one of '%s'",
                        $orientation,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['orientation'] = $orientation;

        return $this;
    }


    /**
     * Gets threshold_amount
     *
     * @return int
     */
    public function getThresholdAmount()
    {
        return $this->container['threshold_amount'];
    }

    /**
     * Sets threshold_amount
     *
     * @param int $threshold_amount The threshold amount of the card
     *
     * @return self
     */
    public function setThresholdAmount($threshold_amount)
    {
        $this->container['threshold_amount'] = $threshold_amount;

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
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!in_array($object, $allowedValues, true)) {
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
     * @param string|null $description Description of the card.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!is_null($description) && (mb_strlen($description) > 255)) {
                throw new \InvalidArgumentException('invalid length for $description when calling Card., must be smaller than or equal to 255.');
            }

        }
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size The size of the card
     *
     * @return self
     */
    public function setSize($size)
    {
        $allowedValues = $this->getSizeAllowableValues();
        if (!method_exists($this, 'getId') || (!empty($this->getId()) && strpos($this->getId(), "fakeId") === False)) {
            if (!in_array($size, $allowedValues, true)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        "Invalid value '%s' for 'size', must be one of '%s'",
                        $size,
                        implode("', '", $allowedValues)
                    )
                );
            }
        }

        $this->container['size'] = $size;

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


