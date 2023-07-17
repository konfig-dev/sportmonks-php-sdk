<?php
/**
 * SportTeamsAllResponseDataInner
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
 * SportTeamsAllResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportTeamsAllResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportTeamsAllResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'sport_id' => 'float',
        'country_id' => 'float',
        'venue_id' => 'float',
        'gender' => 'string',
        'name' => 'string',
        'short_code' => 'string',
        'image_path' => 'string',
        'founded' => 'float',
        'type' => 'string',
        'placeholder' => 'bool',
        'last_played_at' => 'string'
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
        'venue_id' => null,
        'gender' => null,
        'name' => null,
        'short_code' => null,
        'image_path' => null,
        'founded' => null,
        'type' => null,
        'placeholder' => null,
        'last_played_at' => null
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
		'venue_id' => false,
		'gender' => false,
		'name' => false,
		'short_code' => true,
		'image_path' => false,
		'founded' => false,
		'type' => false,
		'placeholder' => false,
		'last_played_at' => false
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
        'venue_id' => 'venue_id',
        'gender' => 'gender',
        'name' => 'name',
        'short_code' => 'short_code',
        'image_path' => 'image_path',
        'founded' => 'founded',
        'type' => 'type',
        'placeholder' => 'placeholder',
        'last_played_at' => 'last_played_at'
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
        'venue_id' => 'setVenueId',
        'gender' => 'setGender',
        'name' => 'setName',
        'short_code' => 'setShortCode',
        'image_path' => 'setImagePath',
        'founded' => 'setFounded',
        'type' => 'setType',
        'placeholder' => 'setPlaceholder',
        'last_played_at' => 'setLastPlayedAt'
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
        'venue_id' => 'getVenueId',
        'gender' => 'getGender',
        'name' => 'getName',
        'short_code' => 'getShortCode',
        'image_path' => 'getImagePath',
        'founded' => 'getFounded',
        'type' => 'getType',
        'placeholder' => 'getPlaceholder',
        'last_played_at' => 'getLastPlayedAt'
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
        $this->setIfExists('venue_id', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('short_code', $data ?? [], null);
        $this->setIfExists('image_path', $data ?? [], null);
        $this->setIfExists('founded', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('last_played_at', $data ?? [], null);
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
     * Gets venue_id
     *
     * @return float|null
     */
    public function getVenueId()
    {
        return $this->container['venue_id'];
    }

    /**
     * Sets venue_id
     *
     * @param float|null $venue_id venue_id
     *
     * @return self
     */
    public function setVenueId($venue_id)
    {

        if (is_null($venue_id)) {
            throw new \InvalidArgumentException('non-nullable venue_id cannot be null');
        }

        $this->container['venue_id'] = $venue_id;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {

        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }

        $this->container['gender'] = $gender;

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
            array_push($this->openAPINullablesSetToNull, 'short_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('short_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * Gets founded
     *
     * @return float|null
     */
    public function getFounded()
    {
        return $this->container['founded'];
    }

    /**
     * Sets founded
     *
     * @param float|null $founded founded
     *
     * @return self
     */
    public function setFounded($founded)
    {

        if (is_null($founded)) {
            throw new \InvalidArgumentException('non-nullable founded cannot be null');
        }

        $this->container['founded'] = $founded;

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
     * Gets placeholder
     *
     * @return bool|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param bool|null $placeholder placeholder
     *
     * @return self
     */
    public function setPlaceholder($placeholder)
    {

        if (is_null($placeholder)) {
            throw new \InvalidArgumentException('non-nullable placeholder cannot be null');
        }

        $this->container['placeholder'] = $placeholder;

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


