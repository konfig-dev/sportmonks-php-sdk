<?php
/**
 * SportSeasonsSearchResponseDataInner
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
 * SportSeasonsSearchResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportSeasonsSearchResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportSeasonsSearchResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'sport_id' => 'float',
        'league_id' => 'float',
        'tie_breaker_rule_id' => 'float',
        'name' => 'string',
        'finished' => 'bool',
        'pending' => 'bool',
        'is_current' => 'bool',
        'starting_at' => 'string',
        'ending_at' => 'string',
        'standings_recalculated_at' => 'string'
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
        'league_id' => null,
        'tie_breaker_rule_id' => null,
        'name' => null,
        'finished' => null,
        'pending' => null,
        'is_current' => null,
        'starting_at' => null,
        'ending_at' => null,
        'standings_recalculated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'sport_id' => false,
		'league_id' => false,
		'tie_breaker_rule_id' => false,
		'name' => false,
		'finished' => false,
		'pending' => false,
		'is_current' => false,
		'starting_at' => false,
		'ending_at' => true,
		'standings_recalculated_at' => false
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
        'league_id' => 'league_id',
        'tie_breaker_rule_id' => 'tie_breaker_rule_id',
        'name' => 'name',
        'finished' => 'finished',
        'pending' => 'pending',
        'is_current' => 'is_current',
        'starting_at' => 'starting_at',
        'ending_at' => 'ending_at',
        'standings_recalculated_at' => 'standings_recalculated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sport_id' => 'setSportId',
        'league_id' => 'setLeagueId',
        'tie_breaker_rule_id' => 'setTieBreakerRuleId',
        'name' => 'setName',
        'finished' => 'setFinished',
        'pending' => 'setPending',
        'is_current' => 'setIsCurrent',
        'starting_at' => 'setStartingAt',
        'ending_at' => 'setEndingAt',
        'standings_recalculated_at' => 'setStandingsRecalculatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sport_id' => 'getSportId',
        'league_id' => 'getLeagueId',
        'tie_breaker_rule_id' => 'getTieBreakerRuleId',
        'name' => 'getName',
        'finished' => 'getFinished',
        'pending' => 'getPending',
        'is_current' => 'getIsCurrent',
        'starting_at' => 'getStartingAt',
        'ending_at' => 'getEndingAt',
        'standings_recalculated_at' => 'getStandingsRecalculatedAt'
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
        $this->setIfExists('league_id', $data ?? [], null);
        $this->setIfExists('tie_breaker_rule_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('finished', $data ?? [], null);
        $this->setIfExists('pending', $data ?? [], null);
        $this->setIfExists('is_current', $data ?? [], null);
        $this->setIfExists('starting_at', $data ?? [], null);
        $this->setIfExists('ending_at', $data ?? [], null);
        $this->setIfExists('standings_recalculated_at', $data ?? [], null);
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
     * Gets league_id
     *
     * @return float|null
     */
    public function getLeagueId()
    {
        return $this->container['league_id'];
    }

    /**
     * Sets league_id
     *
     * @param float|null $league_id league_id
     *
     * @return self
     */
    public function setLeagueId($league_id)
    {

        if (is_null($league_id)) {
            throw new \InvalidArgumentException('non-nullable league_id cannot be null');
        }

        $this->container['league_id'] = $league_id;

        return $this;
    }

    /**
     * Gets tie_breaker_rule_id
     *
     * @return float|null
     */
    public function getTieBreakerRuleId()
    {
        return $this->container['tie_breaker_rule_id'];
    }

    /**
     * Sets tie_breaker_rule_id
     *
     * @param float|null $tie_breaker_rule_id tie_breaker_rule_id
     *
     * @return self
     */
    public function setTieBreakerRuleId($tie_breaker_rule_id)
    {

        if (is_null($tie_breaker_rule_id)) {
            throw new \InvalidArgumentException('non-nullable tie_breaker_rule_id cannot be null');
        }

        $this->container['tie_breaker_rule_id'] = $tie_breaker_rule_id;

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
     * Gets finished
     *
     * @return bool|null
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param bool|null $finished finished
     *
     * @return self
     */
    public function setFinished($finished)
    {

        if (is_null($finished)) {
            throw new \InvalidArgumentException('non-nullable finished cannot be null');
        }

        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return bool|null
     */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param bool|null $pending pending
     *
     * @return self
     */
    public function setPending($pending)
    {

        if (is_null($pending)) {
            throw new \InvalidArgumentException('non-nullable pending cannot be null');
        }

        $this->container['pending'] = $pending;

        return $this;
    }

    /**
     * Gets is_current
     *
     * @return bool|null
     */
    public function getIsCurrent()
    {
        return $this->container['is_current'];
    }

    /**
     * Sets is_current
     *
     * @param bool|null $is_current is_current
     *
     * @return self
     */
    public function setIsCurrent($is_current)
    {

        if (is_null($is_current)) {
            throw new \InvalidArgumentException('non-nullable is_current cannot be null');
        }

        $this->container['is_current'] = $is_current;

        return $this;
    }

    /**
     * Gets starting_at
     *
     * @return string|null
     */
    public function getStartingAt()
    {
        return $this->container['starting_at'];
    }

    /**
     * Sets starting_at
     *
     * @param string|null $starting_at starting_at
     *
     * @return self
     */
    public function setStartingAt($starting_at)
    {

        if (is_null($starting_at)) {
            throw new \InvalidArgumentException('non-nullable starting_at cannot be null');
        }

        $this->container['starting_at'] = $starting_at;

        return $this;
    }

    /**
     * Gets ending_at
     *
     * @return string|null
     */
    public function getEndingAt()
    {
        return $this->container['ending_at'];
    }

    /**
     * Sets ending_at
     *
     * @param string|null $ending_at ending_at
     *
     * @return self
     */
    public function setEndingAt($ending_at)
    {

        if (is_null($ending_at)) {
            array_push($this->openAPINullablesSetToNull, 'ending_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ending_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ending_at'] = $ending_at;

        return $this;
    }

    /**
     * Gets standings_recalculated_at
     *
     * @return string|null
     */
    public function getStandingsRecalculatedAt()
    {
        return $this->container['standings_recalculated_at'];
    }

    /**
     * Sets standings_recalculated_at
     *
     * @param string|null $standings_recalculated_at standings_recalculated_at
     *
     * @return self
     */
    public function setStandingsRecalculatedAt($standings_recalculated_at)
    {

        if (is_null($standings_recalculated_at)) {
            throw new \InvalidArgumentException('non-nullable standings_recalculated_at cannot be null');
        }

        $this->container['standings_recalculated_at'] = $standings_recalculated_at;

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


