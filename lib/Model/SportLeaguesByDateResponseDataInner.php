<?php
/**
 * SportLeaguesByDateResponseDataInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Sportmonks
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SportMonks
 *
 * Surpass the competition with superior sports data
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://konfigthis.com
 */


namespace Sportmonks\Model;

use \ArrayAccess;
use \Sportmonks\ObjectSerializer;

/**
 * SportLeaguesByDateResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportLeaguesByDateResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportLeaguesByDateResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'sport_id' => 'float',
        'country_id' => 'float',
        'name' => 'string',
        'active' => 'bool',
        'short_code' => 'string',
        'image_path' => 'string',
        'type' => 'string',
        'sub_type' => 'string',
        'last_played_at' => 'string',
        'category' => 'float',
        'has_jerseys' => 'bool'
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
        'sport_id' => null,
        'country_id' => null,
        'name' => null,
        'active' => null,
        'short_code' => null,
        'image_path' => null,
        'type' => null,
        'sub_type' => null,
        'last_played_at' => null,
        'category' => null,
        'has_jerseys' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'sport_id' => false,
		'country_id' => false,
		'name' => false,
		'active' => false,
		'short_code' => false,
		'image_path' => false,
		'type' => false,
		'sub_type' => false,
		'last_played_at' => false,
		'category' => false,
		'has_jerseys' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'sport_id' => 'sport_id',
        'country_id' => 'country_id',
        'name' => 'name',
        'active' => 'active',
        'short_code' => 'short_code',
        'image_path' => 'image_path',
        'type' => 'type',
        'sub_type' => 'sub_type',
        'last_played_at' => 'last_played_at',
        'category' => 'category',
        'has_jerseys' => 'has_jerseys'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sport_id' => 'setSportId',
        'country_id' => 'setCountryId',
        'name' => 'setName',
        'active' => 'setActive',
        'short_code' => 'setShortCode',
        'image_path' => 'setImagePath',
        'type' => 'setType',
        'sub_type' => 'setSubType',
        'last_played_at' => 'setLastPlayedAt',
        'category' => 'setCategory',
        'has_jerseys' => 'setHasJerseys'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sport_id' => 'getSportId',
        'country_id' => 'getCountryId',
        'name' => 'getName',
        'active' => 'getActive',
        'short_code' => 'getShortCode',
        'image_path' => 'getImagePath',
        'type' => 'getType',
        'sub_type' => 'getSubType',
        'last_played_at' => 'getLastPlayedAt',
        'category' => 'getCategory',
        'has_jerseys' => 'getHasJerseys'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('sport_id', $data ?? [], null);
        $this->setIfExists('country_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('short_code', $data ?? [], null);
        $this->setIfExists('image_path', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('sub_type', $data ?? [], null);
        $this->setIfExists('last_played_at', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('has_jerseys', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sport_id
     *
     * @return float|null
     */
    public function getSportId()
    {
        return $this->container['sport_id'];
    }

    /**
     * Sets sport_id
     *
     * @param float|null $sport_id sport_id
     *
     * @return self
     */
    public function setSportId($sport_id)
    {

        if (is_null($sport_id)) {
            throw new \InvalidArgumentException('non-nullable sport_id cannot be null');
        }

        $this->container['sport_id'] = $sport_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return float|null
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param float|null $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {

        if (is_null($country_id)) {
            throw new \InvalidArgumentException('non-nullable country_id cannot be null');
        }

        $this->container['country_id'] = $country_id;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {

        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }

        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets short_code
     *
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->container['short_code'];
    }

    /**
     * Sets short_code
     *
     * @param string|null $short_code short_code
     *
     * @return self
     */
    public function setShortCode($short_code)
    {

        if (is_null($short_code)) {
            throw new \InvalidArgumentException('non-nullable short_code cannot be null');
        }

        $this->container['short_code'] = $short_code;

        return $this;
    }

    /**
     * Gets image_path
     *
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string|null $image_path image_path
     *
     * @return self
     */
    public function setImagePath($image_path)
    {

        if (is_null($image_path)) {
            throw new \InvalidArgumentException('non-nullable image_path cannot be null');
        }

        $this->container['image_path'] = $image_path;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets sub_type
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param string|null $sub_type sub_type
     *
     * @return self
     */
    public function setSubType($sub_type)
    {

        if (is_null($sub_type)) {
            throw new \InvalidArgumentException('non-nullable sub_type cannot be null');
        }

        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets last_played_at
     *
     * @return string|null
     */
    public function getLastPlayedAt()
    {
        return $this->container['last_played_at'];
    }

    /**
     * Sets last_played_at
     *
     * @param string|null $last_played_at last_played_at
     *
     * @return self
     */
    public function setLastPlayedAt($last_played_at)
    {

        if (is_null($last_played_at)) {
            throw new \InvalidArgumentException('non-nullable last_played_at cannot be null');
        }

        $this->container['last_played_at'] = $last_played_at;

        return $this;
    }

    /**
     * Gets category
     *
     * @return float|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param float|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets has_jerseys
     *
     * @return bool|null
     */
    public function getHasJerseys()
    {
        return $this->container['has_jerseys'];
    }

    /**
     * Sets has_jerseys
     *
     * @param bool|null $has_jerseys has_jerseys
     *
     * @return self
     */
    public function setHasJerseys($has_jerseys)
    {

        if (is_null($has_jerseys)) {
            throw new \InvalidArgumentException('non-nullable has_jerseys cannot be null');
        }

        $this->container['has_jerseys'] = $has_jerseys;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
     *
     * @return void
     */
    public function offsetUnset($offset): void
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


