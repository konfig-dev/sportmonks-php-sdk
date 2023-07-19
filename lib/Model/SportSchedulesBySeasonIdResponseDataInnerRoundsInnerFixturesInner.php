<?php
/**
 * SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInner
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
 * SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInner Class Doc Comment
 *
 * @category Class
 * @package  Sportmonks
 * @implements \ArrayAccess<string, mixed>
 */
class SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SportSchedulesBySeasonIdResponse_data_inner_rounds_inner_fixtures_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'sport_id' => 'float',
        'league_id' => 'float',
        'season_id' => 'float',
        'stage_id' => 'float',
        'group_id' => 'string',
        'aggregate_id' => 'string',
        'round_id' => 'float',
        'state_id' => 'float',
        'venue_id' => 'float',
        'name' => 'string',
        'home_score' => 'float',
        'away_score' => 'float',
        'starting_at' => 'string',
        'result_info' => 'string',
        'leg' => 'string',
        'details' => 'string',
        'length' => 'float',
        'placeholder' => 'bool',
        'last_processed_at' => 'string',
        'starting_at_timestamp' => 'float',
        'participants' => '\Sportmonks\Model\SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner[]'
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
        'season_id' => null,
        'stage_id' => null,
        'group_id' => null,
        'aggregate_id' => null,
        'round_id' => null,
        'state_id' => null,
        'venue_id' => null,
        'name' => null,
        'home_score' => null,
        'away_score' => null,
        'starting_at' => null,
        'result_info' => null,
        'leg' => null,
        'details' => null,
        'length' => null,
        'placeholder' => null,
        'last_processed_at' => null,
        'starting_at_timestamp' => null,
        'participants' => null
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
		'season_id' => false,
		'stage_id' => false,
		'group_id' => true,
		'aggregate_id' => true,
		'round_id' => false,
		'state_id' => false,
		'venue_id' => false,
		'name' => false,
		'home_score' => true,
		'away_score' => true,
		'starting_at' => false,
		'result_info' => true,
		'leg' => false,
		'details' => true,
		'length' => false,
		'placeholder' => false,
		'last_processed_at' => true,
		'starting_at_timestamp' => false,
		'participants' => false
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
        'season_id' => 'season_id',
        'stage_id' => 'stage_id',
        'group_id' => 'group_id',
        'aggregate_id' => 'aggregate_id',
        'round_id' => 'round_id',
        'state_id' => 'state_id',
        'venue_id' => 'venue_id',
        'name' => 'name',
        'home_score' => 'home_score',
        'away_score' => 'away_score',
        'starting_at' => 'starting_at',
        'result_info' => 'result_info',
        'leg' => 'leg',
        'details' => 'details',
        'length' => 'length',
        'placeholder' => 'placeholder',
        'last_processed_at' => 'last_processed_at',
        'starting_at_timestamp' => 'starting_at_timestamp',
        'participants' => 'participants'
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
        'season_id' => 'setSeasonId',
        'stage_id' => 'setStageId',
        'group_id' => 'setGroupId',
        'aggregate_id' => 'setAggregateId',
        'round_id' => 'setRoundId',
        'state_id' => 'setStateId',
        'venue_id' => 'setVenueId',
        'name' => 'setName',
        'home_score' => 'setHomeScore',
        'away_score' => 'setAwayScore',
        'starting_at' => 'setStartingAt',
        'result_info' => 'setResultInfo',
        'leg' => 'setLeg',
        'details' => 'setDetails',
        'length' => 'setLength',
        'placeholder' => 'setPlaceholder',
        'last_processed_at' => 'setLastProcessedAt',
        'starting_at_timestamp' => 'setStartingAtTimestamp',
        'participants' => 'setParticipants'
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
        'season_id' => 'getSeasonId',
        'stage_id' => 'getStageId',
        'group_id' => 'getGroupId',
        'aggregate_id' => 'getAggregateId',
        'round_id' => 'getRoundId',
        'state_id' => 'getStateId',
        'venue_id' => 'getVenueId',
        'name' => 'getName',
        'home_score' => 'getHomeScore',
        'away_score' => 'getAwayScore',
        'starting_at' => 'getStartingAt',
        'result_info' => 'getResultInfo',
        'leg' => 'getLeg',
        'details' => 'getDetails',
        'length' => 'getLength',
        'placeholder' => 'getPlaceholder',
        'last_processed_at' => 'getLastProcessedAt',
        'starting_at_timestamp' => 'getStartingAtTimestamp',
        'participants' => 'getParticipants'
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
        $this->setIfExists('season_id', $data ?? [], null);
        $this->setIfExists('stage_id', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('aggregate_id', $data ?? [], null);
        $this->setIfExists('round_id', $data ?? [], null);
        $this->setIfExists('state_id', $data ?? [], null);
        $this->setIfExists('venue_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('home_score', $data ?? [], null);
        $this->setIfExists('away_score', $data ?? [], null);
        $this->setIfExists('starting_at', $data ?? [], null);
        $this->setIfExists('result_info', $data ?? [], null);
        $this->setIfExists('leg', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('placeholder', $data ?? [], null);
        $this->setIfExists('last_processed_at', $data ?? [], null);
        $this->setIfExists('starting_at_timestamp', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
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
     * Gets season_id
     *
     * @return float|null
     */
    public function getSeasonId()
    {
        return $this->container['season_id'];
    }

    /**
     * Sets season_id
     *
     * @param float|null $season_id season_id
     *
     * @return self
     */
    public function setSeasonId($season_id)
    {

        if (is_null($season_id)) {
            throw new \InvalidArgumentException('non-nullable season_id cannot be null');
        }

        $this->container['season_id'] = $season_id;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return float|null
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param float|null $stage_id stage_id
     *
     * @return self
     */
    public function setStageId($stage_id)
    {

        if (is_null($stage_id)) {
            throw new \InvalidArgumentException('non-nullable stage_id cannot be null');
        }

        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {

        if (is_null($group_id)) {
            array_push($this->openAPINullablesSetToNull, 'group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets aggregate_id
     *
     * @return string|null
     */
    public function getAggregateId()
    {
        return $this->container['aggregate_id'];
    }

    /**
     * Sets aggregate_id
     *
     * @param string|null $aggregate_id aggregate_id
     *
     * @return self
     */
    public function setAggregateId($aggregate_id)
    {

        if (is_null($aggregate_id)) {
            array_push($this->openAPINullablesSetToNull, 'aggregate_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aggregate_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['aggregate_id'] = $aggregate_id;

        return $this;
    }

    /**
     * Gets round_id
     *
     * @return float|null
     */
    public function getRoundId()
    {
        return $this->container['round_id'];
    }

    /**
     * Sets round_id
     *
     * @param float|null $round_id round_id
     *
     * @return self
     */
    public function setRoundId($round_id)
    {

        if (is_null($round_id)) {
            throw new \InvalidArgumentException('non-nullable round_id cannot be null');
        }

        $this->container['round_id'] = $round_id;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return float|null
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param float|null $state_id state_id
     *
     * @return self
     */
    public function setStateId($state_id)
    {

        if (is_null($state_id)) {
            throw new \InvalidArgumentException('non-nullable state_id cannot be null');
        }

        $this->container['state_id'] = $state_id;

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
     * Gets home_score
     *
     * @return float|null
     */
    public function getHomeScore()
    {
        return $this->container['home_score'];
    }

    /**
     * Sets home_score
     *
     * @param float|null $home_score home_score
     *
     * @return self
     */
    public function setHomeScore($home_score)
    {

        if (is_null($home_score)) {
            array_push($this->openAPINullablesSetToNull, 'home_score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('home_score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['home_score'] = $home_score;

        return $this;
    }

    /**
     * Gets away_score
     *
     * @return float|null
     */
    public function getAwayScore()
    {
        return $this->container['away_score'];
    }

    /**
     * Sets away_score
     *
     * @param float|null $away_score away_score
     *
     * @return self
     */
    public function setAwayScore($away_score)
    {

        if (is_null($away_score)) {
            array_push($this->openAPINullablesSetToNull, 'away_score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('away_score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['away_score'] = $away_score;

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
     * Gets result_info
     *
     * @return string|null
     */
    public function getResultInfo()
    {
        return $this->container['result_info'];
    }

    /**
     * Sets result_info
     *
     * @param string|null $result_info result_info
     *
     * @return self
     */
    public function setResultInfo($result_info)
    {

        if (is_null($result_info)) {
            array_push($this->openAPINullablesSetToNull, 'result_info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('result_info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['result_info'] = $result_info;

        return $this;
    }

    /**
     * Gets leg
     *
     * @return string|null
     */
    public function getLeg()
    {
        return $this->container['leg'];
    }

    /**
     * Sets leg
     *
     * @param string|null $leg leg
     *
     * @return self
     */
    public function setLeg($leg)
    {

        if (is_null($leg)) {
            throw new \InvalidArgumentException('non-nullable leg cannot be null');
        }

        $this->container['leg'] = $leg;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {

        if (is_null($details)) {
            array_push($this->openAPINullablesSetToNull, 'details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {

        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }

        $this->container['length'] = $length;

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
     * Gets last_processed_at
     *
     * @return string|null
     */
    public function getLastProcessedAt()
    {
        return $this->container['last_processed_at'];
    }

    /**
     * Sets last_processed_at
     *
     * @param string|null $last_processed_at last_processed_at
     *
     * @return self
     */
    public function setLastProcessedAt($last_processed_at)
    {

        if (is_null($last_processed_at)) {
            array_push($this->openAPINullablesSetToNull, 'last_processed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_processed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['last_processed_at'] = $last_processed_at;

        return $this;
    }

    /**
     * Gets starting_at_timestamp
     *
     * @return float|null
     */
    public function getStartingAtTimestamp()
    {
        return $this->container['starting_at_timestamp'];
    }

    /**
     * Sets starting_at_timestamp
     *
     * @param float|null $starting_at_timestamp starting_at_timestamp
     *
     * @return self
     */
    public function setStartingAtTimestamp($starting_at_timestamp)
    {

        if (is_null($starting_at_timestamp)) {
            throw new \InvalidArgumentException('non-nullable starting_at_timestamp cannot be null');
        }

        $this->container['starting_at_timestamp'] = $starting_at_timestamp;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Sportmonks\Model\SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner[]|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Sportmonks\Model\SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner[]|null $participants participants
     *
     * @return self
     */
    public function setParticipants($participants)
    {

        if (is_null($participants)) {
            throw new \InvalidArgumentException('non-nullable participants cannot be null');
        }

        $this->container['participants'] = $participants;

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


