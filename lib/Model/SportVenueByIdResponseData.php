<?php
/**
 * SportVenueByIdResponseData
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
 * SportVenueByIdResponseData Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportVenueByIdResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportVenueByIdResponse_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'country_id' => 'float',
        'city_id' => 'float',
        'name' => 'string',
        'address' => 'string',
        'zipcode' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'capacity' => 'float',
        'image_path' => 'string',
        'city_name' => 'string',
        'surface' => 'string',
        'national_team' => 'bool'
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
        'country_id' => null,
        'city_id' => null,
        'name' => null,
        'address' => null,
        'zipcode' => null,
        'latitude' => null,
        'longitude' => null,
        'capacity' => null,
        'image_path' => null,
        'city_name' => null,
        'surface' => null,
        'national_team' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'country_id' => false,
		'city_id' => false,
		'name' => false,
		'address' => false,
		'zipcode' => true,
		'latitude' => false,
		'longitude' => false,
		'capacity' => false,
		'image_path' => false,
		'city_name' => false,
		'surface' => false,
		'national_team' => false
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
        'country_id' => 'country_id',
        'city_id' => 'city_id',
        'name' => 'name',
        'address' => 'address',
        'zipcode' => 'zipcode',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'capacity' => 'capacity',
        'image_path' => 'image_path',
        'city_name' => 'city_name',
        'surface' => 'surface',
        'national_team' => 'national_team'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'country_id' => 'setCountryId',
        'city_id' => 'setCityId',
        'name' => 'setName',
        'address' => 'setAddress',
        'zipcode' => 'setZipcode',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'capacity' => 'setCapacity',
        'image_path' => 'setImagePath',
        'city_name' => 'setCityName',
        'surface' => 'setSurface',
        'national_team' => 'setNationalTeam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'country_id' => 'getCountryId',
        'city_id' => 'getCityId',
        'name' => 'getName',
        'address' => 'getAddress',
        'zipcode' => 'getZipcode',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'capacity' => 'getCapacity',
        'image_path' => 'getImagePath',
        'city_name' => 'getCityName',
        'surface' => 'getSurface',
        'national_team' => 'getNationalTeam'
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
        $this->setIfExists('country_id', $data ?? [], null);
        $this->setIfExists('city_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('zipcode', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('capacity', $data ?? [], null);
        $this->setIfExists('image_path', $data ?? [], null);
        $this->setIfExists('city_name', $data ?? [], null);
        $this->setIfExists('surface', $data ?? [], null);
        $this->setIfExists('national_team', $data ?? [], null);
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
     * Gets city_id
     *
     * @return float|null
     */
    public function getCityId()
    {
        return $this->container['city_id'];
    }

    /**
     * Sets city_id
     *
     * @param float|null $city_id city_id
     *
     * @return self
     */
    public function setCityId($city_id)
    {

        if (is_null($city_id)) {
            throw new \InvalidArgumentException('non-nullable city_id cannot be null');
        }

        $this->container['city_id'] = $city_id;

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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {

        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {

        if (is_null($zipcode)) {
            array_push($this->openAPINullablesSetToNull, 'zipcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('zipcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {

        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {

        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return float|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param float|null $capacity capacity
     *
     * @return self
     */
    public function setCapacity($capacity)
    {

        if (is_null($capacity)) {
            throw new \InvalidArgumentException('non-nullable capacity cannot be null');
        }

        $this->container['capacity'] = $capacity;

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
     * Gets city_name
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['city_name'];
    }

    /**
     * Sets city_name
     *
     * @param string|null $city_name city_name
     *
     * @return self
     */
    public function setCityName($city_name)
    {

        if (is_null($city_name)) {
            throw new \InvalidArgumentException('non-nullable city_name cannot be null');
        }

        $this->container['city_name'] = $city_name;

        return $this;
    }

    /**
     * Gets surface
     *
     * @return string|null
     */
    public function getSurface()
    {
        return $this->container['surface'];
    }

    /**
     * Sets surface
     *
     * @param string|null $surface surface
     *
     * @return self
     */
    public function setSurface($surface)
    {

        if (is_null($surface)) {
            throw new \InvalidArgumentException('non-nullable surface cannot be null');
        }

        $this->container['surface'] = $surface;

        return $this;
    }

    /**
     * Gets national_team
     *
     * @return bool|null
     */
    public function getNationalTeam()
    {
        return $this->container['national_team'];
    }

    /**
     * Sets national_team
     *
     * @param bool|null $national_team national_team
     *
     * @return self
     */
    public function setNationalTeam($national_team)
    {

        if (is_null($national_team)) {
            throw new \InvalidArgumentException('non-nullable national_team cannot be null');
        }

        $this->container['national_team'] = $national_team;

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


