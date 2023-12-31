<?php
/**
 * SportPredictionsAllValueBetsResponseDataInnerPredictions
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
 * SportPredictionsAllValueBetsResponseDataInnerPredictions Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportPredictionsAllValueBetsResponseDataInnerPredictions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportPredictionsAllValueBetsResponse_data_inner_predictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bet' => 'string',
        'fair_odd' => 'float',
        'odd' => 'float',
        'stake' => 'float',
        'is_value' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bet' => null,
        'fair_odd' => null,
        'odd' => null,
        'stake' => null,
        'is_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bet' => false,
		'fair_odd' => false,
		'odd' => false,
		'stake' => false,
		'is_value' => false
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
        'bet' => 'bet',
        'fair_odd' => 'fair_odd',
        'odd' => 'odd',
        'stake' => 'stake',
        'is_value' => 'is_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bet' => 'setBet',
        'fair_odd' => 'setFairOdd',
        'odd' => 'setOdd',
        'stake' => 'setStake',
        'is_value' => 'setIsValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bet' => 'getBet',
        'fair_odd' => 'getFairOdd',
        'odd' => 'getOdd',
        'stake' => 'getStake',
        'is_value' => 'getIsValue'
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
        $this->setIfExists('bet', $data ?? [], null);
        $this->setIfExists('fair_odd', $data ?? [], null);
        $this->setIfExists('odd', $data ?? [], null);
        $this->setIfExists('stake', $data ?? [], null);
        $this->setIfExists('is_value', $data ?? [], null);
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
     * Gets bet
     *
     * @return string|null
     */
    public function getBet()
    {
        return $this->container['bet'];
    }

    /**
     * Sets bet
     *
     * @param string|null $bet bet
     *
     * @return self
     */
    public function setBet($bet)
    {

        if (is_null($bet)) {
            throw new \InvalidArgumentException('non-nullable bet cannot be null');
        }

        $this->container['bet'] = $bet;

        return $this;
    }

    /**
     * Gets fair_odd
     *
     * @return float|null
     */
    public function getFairOdd()
    {
        return $this->container['fair_odd'];
    }

    /**
     * Sets fair_odd
     *
     * @param float|null $fair_odd fair_odd
     *
     * @return self
     */
    public function setFairOdd($fair_odd)
    {

        if (is_null($fair_odd)) {
            throw new \InvalidArgumentException('non-nullable fair_odd cannot be null');
        }

        $this->container['fair_odd'] = $fair_odd;

        return $this;
    }

    /**
     * Gets odd
     *
     * @return float|null
     */
    public function getOdd()
    {
        return $this->container['odd'];
    }

    /**
     * Sets odd
     *
     * @param float|null $odd odd
     *
     * @return self
     */
    public function setOdd($odd)
    {

        if (is_null($odd)) {
            throw new \InvalidArgumentException('non-nullable odd cannot be null');
        }

        $this->container['odd'] = $odd;

        return $this;
    }

    /**
     * Gets stake
     *
     * @return float|null
     */
    public function getStake()
    {
        return $this->container['stake'];
    }

    /**
     * Sets stake
     *
     * @param float|null $stake stake
     *
     * @return self
     */
    public function setStake($stake)
    {

        if (is_null($stake)) {
            throw new \InvalidArgumentException('non-nullable stake cannot be null');
        }

        $this->container['stake'] = $stake;

        return $this;
    }

    /**
     * Gets is_value
     *
     * @return bool|null
     */
    public function getIsValue()
    {
        return $this->container['is_value'];
    }

    /**
     * Sets is_value
     *
     * @param bool|null $is_value is_value
     *
     * @return self
     */
    public function setIsValue($is_value)
    {

        if (is_null($is_value)) {
            throw new \InvalidArgumentException('non-nullable is_value cannot be null');
        }

        $this->container['is_value'] = $is_value;

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


