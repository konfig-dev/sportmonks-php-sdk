<?php
/**
 * CountriesAllResponseDataInner
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
 * CountriesAllResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class CountriesAllResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CountriesAllResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'continent_id' => 'float',
        'name' => 'string',
        'official_name' => 'string',
        'fifa_name' => 'string',
        'iso2' => 'string',
        'iso3' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'borders' => 'string[]',
        'image_path' => 'string'
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
        'continent_id' => null,
        'name' => null,
        'official_name' => null,
        'fifa_name' => null,
        'iso2' => null,
        'iso3' => null,
        'latitude' => null,
        'longitude' => null,
        'borders' => null,
        'image_path' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'continent_id' => false,
		'name' => false,
		'official_name' => false,
		'fifa_name' => true,
		'iso2' => false,
		'iso3' => false,
		'latitude' => true,
		'longitude' => true,
		'borders' => false,
		'image_path' => false
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
        'continent_id' => 'continent_id',
        'name' => 'name',
        'official_name' => 'official_name',
        'fifa_name' => 'fifa_name',
        'iso2' => 'iso2',
        'iso3' => 'iso3',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'borders' => 'borders',
        'image_path' => 'image_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'continent_id' => 'setContinentId',
        'name' => 'setName',
        'official_name' => 'setOfficialName',
        'fifa_name' => 'setFifaName',
        'iso2' => 'setIso2',
        'iso3' => 'setIso3',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'borders' => 'setBorders',
        'image_path' => 'setImagePath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'continent_id' => 'getContinentId',
        'name' => 'getName',
        'official_name' => 'getOfficialName',
        'fifa_name' => 'getFifaName',
        'iso2' => 'getIso2',
        'iso3' => 'getIso3',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'borders' => 'getBorders',
        'image_path' => 'getImagePath'
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
        $this->setIfExists('continent_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('official_name', $data ?? [], null);
        $this->setIfExists('fifa_name', $data ?? [], null);
        $this->setIfExists('iso2', $data ?? [], null);
        $this->setIfExists('iso3', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('borders', $data ?? [], null);
        $this->setIfExists('image_path', $data ?? [], null);
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
     * Gets continent_id
     *
     * @return float|null
     */
    public function getContinentId()
    {
        return $this->container['continent_id'];
    }

    /**
     * Sets continent_id
     *
     * @param float|null $continent_id continent_id
     *
     * @return self
     */
    public function setContinentId($continent_id)
    {

        if (is_null($continent_id)) {
            throw new \InvalidArgumentException('non-nullable continent_id cannot be null');
        }

        $this->container['continent_id'] = $continent_id;

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
     * Gets official_name
     *
     * @return string|null
     */
    public function getOfficialName()
    {
        return $this->container['official_name'];
    }

    /**
     * Sets official_name
     *
     * @param string|null $official_name official_name
     *
     * @return self
     */
    public function setOfficialName($official_name)
    {

        if (is_null($official_name)) {
            throw new \InvalidArgumentException('non-nullable official_name cannot be null');
        }

        $this->container['official_name'] = $official_name;

        return $this;
    }

    /**
     * Gets fifa_name
     *
     * @return string|null
     */
    public function getFifaName()
    {
        return $this->container['fifa_name'];
    }

    /**
     * Sets fifa_name
     *
     * @param string|null $fifa_name fifa_name
     *
     * @return self
     */
    public function setFifaName($fifa_name)
    {

        if (is_null($fifa_name)) {
            array_push($this->openAPINullablesSetToNull, 'fifa_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fifa_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['fifa_name'] = $fifa_name;

        return $this;
    }

    /**
     * Gets iso2
     *
     * @return string|null
     */
    public function getIso2()
    {
        return $this->container['iso2'];
    }

    /**
     * Sets iso2
     *
     * @param string|null $iso2 iso2
     *
     * @return self
     */
    public function setIso2($iso2)
    {

        if (is_null($iso2)) {
            throw new \InvalidArgumentException('non-nullable iso2 cannot be null');
        }

        $this->container['iso2'] = $iso2;

        return $this;
    }

    /**
     * Gets iso3
     *
     * @return string|null
     */
    public function getIso3()
    {
        return $this->container['iso3'];
    }

    /**
     * Sets iso3
     *
     * @param string|null $iso3 iso3
     *
     * @return self
     */
    public function setIso3($iso3)
    {

        if (is_null($iso3)) {
            throw new \InvalidArgumentException('non-nullable iso3 cannot be null');
        }

        $this->container['iso3'] = $iso3;

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
            array_push($this->openAPINullablesSetToNull, 'latitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('latitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'longitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('longitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets borders
     *
     * @return string[]|null
     */
    public function getBorders()
    {
        return $this->container['borders'];
    }

    /**
     * Sets borders
     *
     * @param string[]|null $borders borders
     *
     * @return self
     */
    public function setBorders($borders)
    {

        if (is_null($borders)) {
            throw new \InvalidArgumentException('non-nullable borders cannot be null');
        }

        $this->container['borders'] = $borders;

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


