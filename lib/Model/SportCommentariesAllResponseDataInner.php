<?php
/**
 * SportCommentariesAllResponseDataInner
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
 * SportCommentariesAllResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportCommentariesAllResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportCommentariesAllResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'fixture_id' => 'float',
        'player_id' => 'string',
        'related_player_id' => 'string',
        'comment' => 'string',
        'minute' => 'float',
        'extra_minute' => 'string',
        'is_goal' => 'bool',
        'is_important' => 'bool',
        'order' => 'float'
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
        'fixture_id' => null,
        'player_id' => null,
        'related_player_id' => null,
        'comment' => null,
        'minute' => null,
        'extra_minute' => null,
        'is_goal' => null,
        'is_important' => null,
        'order' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'fixture_id' => false,
		'player_id' => true,
		'related_player_id' => true,
		'comment' => false,
		'minute' => false,
		'extra_minute' => true,
		'is_goal' => false,
		'is_important' => false,
		'order' => false
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
        'fixture_id' => 'fixture_id',
        'player_id' => 'player_id',
        'related_player_id' => 'related_player_id',
        'comment' => 'comment',
        'minute' => 'minute',
        'extra_minute' => 'extra_minute',
        'is_goal' => 'is_goal',
        'is_important' => 'is_important',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'fixture_id' => 'setFixtureId',
        'player_id' => 'setPlayerId',
        'related_player_id' => 'setRelatedPlayerId',
        'comment' => 'setComment',
        'minute' => 'setMinute',
        'extra_minute' => 'setExtraMinute',
        'is_goal' => 'setIsGoal',
        'is_important' => 'setIsImportant',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'fixture_id' => 'getFixtureId',
        'player_id' => 'getPlayerId',
        'related_player_id' => 'getRelatedPlayerId',
        'comment' => 'getComment',
        'minute' => 'getMinute',
        'extra_minute' => 'getExtraMinute',
        'is_goal' => 'getIsGoal',
        'is_important' => 'getIsImportant',
        'order' => 'getOrder'
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
        $this->setIfExists('fixture_id', $data ?? [], null);
        $this->setIfExists('player_id', $data ?? [], null);
        $this->setIfExists('related_player_id', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('minute', $data ?? [], null);
        $this->setIfExists('extra_minute', $data ?? [], null);
        $this->setIfExists('is_goal', $data ?? [], null);
        $this->setIfExists('is_important', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
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
     * Gets fixture_id
     *
     * @return float|null
     */
    public function getFixtureId()
    {
        return $this->container['fixture_id'];
    }

    /**
     * Sets fixture_id
     *
     * @param float|null $fixture_id fixture_id
     *
     * @return self
     */
    public function setFixtureId($fixture_id)
    {

        if (is_null($fixture_id)) {
            throw new \InvalidArgumentException('non-nullable fixture_id cannot be null');
        }

        $this->container['fixture_id'] = $fixture_id;

        return $this;
    }

    /**
     * Gets player_id
     *
     * @return string|null
     */
    public function getPlayerId()
    {
        return $this->container['player_id'];
    }

    /**
     * Sets player_id
     *
     * @param string|null $player_id player_id
     *
     * @return self
     */
    public function setPlayerId($player_id)
    {

        if (is_null($player_id)) {
            array_push($this->openAPINullablesSetToNull, 'player_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('player_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['player_id'] = $player_id;

        return $this;
    }

    /**
     * Gets related_player_id
     *
     * @return string|null
     */
    public function getRelatedPlayerId()
    {
        return $this->container['related_player_id'];
    }

    /**
     * Sets related_player_id
     *
     * @param string|null $related_player_id related_player_id
     *
     * @return self
     */
    public function setRelatedPlayerId($related_player_id)
    {

        if (is_null($related_player_id)) {
            array_push($this->openAPINullablesSetToNull, 'related_player_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_player_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['related_player_id'] = $related_player_id;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {

        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets minute
     *
     * @return float|null
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     * @param float|null $minute minute
     *
     * @return self
     */
    public function setMinute($minute)
    {

        if (is_null($minute)) {
            throw new \InvalidArgumentException('non-nullable minute cannot be null');
        }

        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets extra_minute
     *
     * @return string|null
     */
    public function getExtraMinute()
    {
        return $this->container['extra_minute'];
    }

    /**
     * Sets extra_minute
     *
     * @param string|null $extra_minute extra_minute
     *
     * @return self
     */
    public function setExtraMinute($extra_minute)
    {

        if (is_null($extra_minute)) {
            array_push($this->openAPINullablesSetToNull, 'extra_minute');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extra_minute', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['extra_minute'] = $extra_minute;

        return $this;
    }

    /**
     * Gets is_goal
     *
     * @return bool|null
     */
    public function getIsGoal()
    {
        return $this->container['is_goal'];
    }

    /**
     * Sets is_goal
     *
     * @param bool|null $is_goal is_goal
     *
     * @return self
     */
    public function setIsGoal($is_goal)
    {

        if (is_null($is_goal)) {
            throw new \InvalidArgumentException('non-nullable is_goal cannot be null');
        }

        $this->container['is_goal'] = $is_goal;

        return $this;
    }

    /**
     * Gets is_important
     *
     * @return bool|null
     */
    public function getIsImportant()
    {
        return $this->container['is_important'];
    }

    /**
     * Sets is_important
     *
     * @param bool|null $is_important is_important
     *
     * @return self
     */
    public function setIsImportant($is_important)
    {

        if (is_null($is_important)) {
            throw new \InvalidArgumentException('non-nullable is_important cannot be null');
        }

        $this->container['is_important'] = $is_important;

        return $this;
    }

    /**
     * Gets order
     *
     * @return float|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param float|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {

        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }

        $this->container['order'] = $order;

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


