<?php
/**
 * SportOddsPreMatchByFixtureAndMarketIdResponseDataInner
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
 * SportOddsPreMatchByFixtureAndMarketIdResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportOddsPreMatchByFixtureAndMarketIdResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportOddsPreMatchByFixtureAndMarketIdResponse_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'fixture_id' => 'float',
        'market_id' => 'float',
        'bookmaker_id' => 'float',
        'label' => 'string',
        'value' => 'string',
        'name' => 'string',
        'sort_order' => 'string',
        'market_description' => 'string',
        'probability' => 'string',
        'dp3' => 'string',
        'fractional' => 'string',
        'american' => 'string',
        'winning' => 'string',
        'stopped' => 'bool',
        'total' => 'string',
        'handicap' => 'string',
        'participants' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'original_label' => 'string',
        'latest_bookmaker_update' => 'string'
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
        'market_id' => null,
        'bookmaker_id' => null,
        'label' => null,
        'value' => null,
        'name' => null,
        'sort_order' => null,
        'market_description' => null,
        'probability' => null,
        'dp3' => null,
        'fractional' => null,
        'american' => null,
        'winning' => null,
        'stopped' => null,
        'total' => null,
        'handicap' => null,
        'participants' => null,
        'created_at' => null,
        'updated_at' => null,
        'original_label' => null,
        'latest_bookmaker_update' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'fixture_id' => false,
		'market_id' => false,
		'bookmaker_id' => false,
		'label' => false,
		'value' => false,
		'name' => false,
		'sort_order' => true,
		'market_description' => false,
		'probability' => false,
		'dp3' => false,
		'fractional' => false,
		'american' => false,
		'winning' => true,
		'stopped' => false,
		'total' => true,
		'handicap' => true,
		'participants' => true,
		'created_at' => false,
		'updated_at' => false,
		'original_label' => true,
		'latest_bookmaker_update' => false
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
        'market_id' => 'market_id',
        'bookmaker_id' => 'bookmaker_id',
        'label' => 'label',
        'value' => 'value',
        'name' => 'name',
        'sort_order' => 'sort_order',
        'market_description' => 'market_description',
        'probability' => 'probability',
        'dp3' => 'dp3',
        'fractional' => 'fractional',
        'american' => 'american',
        'winning' => 'winning',
        'stopped' => 'stopped',
        'total' => 'total',
        'handicap' => 'handicap',
        'participants' => 'participants',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'original_label' => 'original_label',
        'latest_bookmaker_update' => 'latest_bookmaker_update'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'fixture_id' => 'setFixtureId',
        'market_id' => 'setMarketId',
        'bookmaker_id' => 'setBookmakerId',
        'label' => 'setLabel',
        'value' => 'setValue',
        'name' => 'setName',
        'sort_order' => 'setSortOrder',
        'market_description' => 'setMarketDescription',
        'probability' => 'setProbability',
        'dp3' => 'setDp3',
        'fractional' => 'setFractional',
        'american' => 'setAmerican',
        'winning' => 'setWinning',
        'stopped' => 'setStopped',
        'total' => 'setTotal',
        'handicap' => 'setHandicap',
        'participants' => 'setParticipants',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'original_label' => 'setOriginalLabel',
        'latest_bookmaker_update' => 'setLatestBookmakerUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'fixture_id' => 'getFixtureId',
        'market_id' => 'getMarketId',
        'bookmaker_id' => 'getBookmakerId',
        'label' => 'getLabel',
        'value' => 'getValue',
        'name' => 'getName',
        'sort_order' => 'getSortOrder',
        'market_description' => 'getMarketDescription',
        'probability' => 'getProbability',
        'dp3' => 'getDp3',
        'fractional' => 'getFractional',
        'american' => 'getAmerican',
        'winning' => 'getWinning',
        'stopped' => 'getStopped',
        'total' => 'getTotal',
        'handicap' => 'getHandicap',
        'participants' => 'getParticipants',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'original_label' => 'getOriginalLabel',
        'latest_bookmaker_update' => 'getLatestBookmakerUpdate'
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
        $this->setIfExists('market_id', $data ?? [], null);
        $this->setIfExists('bookmaker_id', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('market_description', $data ?? [], null);
        $this->setIfExists('probability', $data ?? [], null);
        $this->setIfExists('dp3', $data ?? [], null);
        $this->setIfExists('fractional', $data ?? [], null);
        $this->setIfExists('american', $data ?? [], null);
        $this->setIfExists('winning', $data ?? [], null);
        $this->setIfExists('stopped', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('handicap', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('original_label', $data ?? [], null);
        $this->setIfExists('latest_bookmaker_update', $data ?? [], null);
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
     * Gets market_id
     *
     * @return float|null
     */
    public function getMarketId()
    {
        return $this->container['market_id'];
    }

    /**
     * Sets market_id
     *
     * @param float|null $market_id market_id
     *
     * @return self
     */
    public function setMarketId($market_id)
    {

        if (is_null($market_id)) {
            throw new \InvalidArgumentException('non-nullable market_id cannot be null');
        }

        $this->container['market_id'] = $market_id;

        return $this;
    }

    /**
     * Gets bookmaker_id
     *
     * @return float|null
     */
    public function getBookmakerId()
    {
        return $this->container['bookmaker_id'];
    }

    /**
     * Sets bookmaker_id
     *
     * @param float|null $bookmaker_id bookmaker_id
     *
     * @return self
     */
    public function setBookmakerId($bookmaker_id)
    {

        if (is_null($bookmaker_id)) {
            throw new \InvalidArgumentException('non-nullable bookmaker_id cannot be null');
        }

        $this->container['bookmaker_id'] = $bookmaker_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {

        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {

        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;

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
     * Gets sort_order
     *
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param string|null $sort_order sort_order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {

        if (is_null($sort_order)) {
            array_push($this->openAPINullablesSetToNull, 'sort_order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort_order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets market_description
     *
     * @return string|null
     */
    public function getMarketDescription()
    {
        return $this->container['market_description'];
    }

    /**
     * Sets market_description
     *
     * @param string|null $market_description market_description
     *
     * @return self
     */
    public function setMarketDescription($market_description)
    {

        if (is_null($market_description)) {
            throw new \InvalidArgumentException('non-nullable market_description cannot be null');
        }

        $this->container['market_description'] = $market_description;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return string|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param string|null $probability probability
     *
     * @return self
     */
    public function setProbability($probability)
    {

        if (is_null($probability)) {
            throw new \InvalidArgumentException('non-nullable probability cannot be null');
        }

        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets dp3
     *
     * @return string|null
     */
    public function getDp3()
    {
        return $this->container['dp3'];
    }

    /**
     * Sets dp3
     *
     * @param string|null $dp3 dp3
     *
     * @return self
     */
    public function setDp3($dp3)
    {

        if (is_null($dp3)) {
            throw new \InvalidArgumentException('non-nullable dp3 cannot be null');
        }

        $this->container['dp3'] = $dp3;

        return $this;
    }

    /**
     * Gets fractional
     *
     * @return string|null
     */
    public function getFractional()
    {
        return $this->container['fractional'];
    }

    /**
     * Sets fractional
     *
     * @param string|null $fractional fractional
     *
     * @return self
     */
    public function setFractional($fractional)
    {

        if (is_null($fractional)) {
            throw new \InvalidArgumentException('non-nullable fractional cannot be null');
        }

        $this->container['fractional'] = $fractional;

        return $this;
    }

    /**
     * Gets american
     *
     * @return string|null
     */
    public function getAmerican()
    {
        return $this->container['american'];
    }

    /**
     * Sets american
     *
     * @param string|null $american american
     *
     * @return self
     */
    public function setAmerican($american)
    {

        if (is_null($american)) {
            throw new \InvalidArgumentException('non-nullable american cannot be null');
        }

        $this->container['american'] = $american;

        return $this;
    }

    /**
     * Gets winning
     *
     * @return string|null
     */
    public function getWinning()
    {
        return $this->container['winning'];
    }

    /**
     * Sets winning
     *
     * @param string|null $winning winning
     *
     * @return self
     */
    public function setWinning($winning)
    {

        if (is_null($winning)) {
            array_push($this->openAPINullablesSetToNull, 'winning');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('winning', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['winning'] = $winning;

        return $this;
    }

    /**
     * Gets stopped
     *
     * @return bool|null
     */
    public function getStopped()
    {
        return $this->container['stopped'];
    }

    /**
     * Sets stopped
     *
     * @param bool|null $stopped stopped
     *
     * @return self
     */
    public function setStopped($stopped)
    {

        if (is_null($stopped)) {
            throw new \InvalidArgumentException('non-nullable stopped cannot be null');
        }

        $this->container['stopped'] = $stopped;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {

        if (is_null($total)) {
            array_push($this->openAPINullablesSetToNull, 'total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets handicap
     *
     * @return string|null
     */
    public function getHandicap()
    {
        return $this->container['handicap'];
    }

    /**
     * Sets handicap
     *
     * @param string|null $handicap handicap
     *
     * @return self
     */
    public function setHandicap($handicap)
    {

        if (is_null($handicap)) {
            array_push($this->openAPINullablesSetToNull, 'handicap');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('handicap', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['handicap'] = $handicap;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return string|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param string|null $participants participants
     *
     * @return self
     */
    public function setParticipants($participants)
    {

        if (is_null($participants)) {
            array_push($this->openAPINullablesSetToNull, 'participants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('participants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets original_label
     *
     * @return string|null
     */
    public function getOriginalLabel()
    {
        return $this->container['original_label'];
    }

    /**
     * Sets original_label
     *
     * @param string|null $original_label original_label
     *
     * @return self
     */
    public function setOriginalLabel($original_label)
    {

        if (is_null($original_label)) {
            array_push($this->openAPINullablesSetToNull, 'original_label');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original_label', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['original_label'] = $original_label;

        return $this;
    }

    /**
     * Gets latest_bookmaker_update
     *
     * @return string|null
     */
    public function getLatestBookmakerUpdate()
    {
        return $this->container['latest_bookmaker_update'];
    }

    /**
     * Sets latest_bookmaker_update
     *
     * @param string|null $latest_bookmaker_update latest_bookmaker_update
     *
     * @return self
     */
    public function setLatestBookmakerUpdate($latest_bookmaker_update)
    {

        if (is_null($latest_bookmaker_update)) {
            throw new \InvalidArgumentException('non-nullable latest_bookmaker_update cannot be null');
        }

        $this->container['latest_bookmaker_update'] = $latest_bookmaker_update;

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


