# Sportmonks\SportApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**coachById()**](SportApi.md#coachById) | **GET** /{version}/{sport}/coaches/{coachId} | By ID |
| [**coachesAll()**](SportApi.md#coachesAll) | **GET** /{version}/{sport}/coaches | All |
| [**coachesByCountryId()**](SportApi.md#coachesByCountryId) | **GET** /{version}/{sport}/coaches/countries/{countryId} | By Country ID |
| [**coachesLatest()**](SportApi.md#coachesLatest) | **GET** /{version}/{sport}/coaches/latest | Last updated |
| [**coachesSearch()**](SportApi.md#coachesSearch) | **GET** /{version}/{sport}/coaches/search/{name} | Search |
| [**commentariesAll()**](SportApi.md#commentariesAll) | **GET** /{version}/{sport}/commentaries | All |
| [**commentariesByFixtureId()**](SportApi.md#commentariesByFixtureId) | **GET** /{version}/{sport}/commentaries/fixtures/{fixtureId} | By Fixture ID |
| [**fixtureByDateRangeForTeam()**](SportApi.md#fixtureByDateRangeForTeam) | **GET** /{version}/{sport}/fixtures/between/{startDate}/{endDate}/{teamId} | By Date Range for Team |
| [**fixtureById()**](SportApi.md#fixtureById) | **GET** /{version}/{sport}/fixtures/{fixtureId} | Fixture ID |
| [**fixturesAll()**](SportApi.md#fixturesAll) | **GET** /{version}/{sport}/fixtures | All |
| [**fixturesByDate()**](SportApi.md#fixturesByDate) | **GET** /{version}/{sport}/fixtures/date/{date} | By Date |
| [**fixturesByDateRange()**](SportApi.md#fixturesByDateRange) | **GET** /{version}/{sport}/fixtures/between/{startDate}/{endDate} | By Date Range |
| [**fixturesByIds()**](SportApi.md#fixturesByIds) | **GET** /{version}/{sport}/fixtures/multi/{fixtureIds} | By IDs |
| [**fixturesHeadToHead()**](SportApi.md#fixturesHeadToHead) | **GET** /{version}/{sport}/fixtures/head-to-head/{firstTeam}/{secondTeam} | Head to Head |
| [**fixturesLatest()**](SportApi.md#fixturesLatest) | **GET** /{version}/{sport}/fixtures/latest | Last Updated |
| [**fixturesSearch()**](SportApi.md#fixturesSearch) | **GET** /{version}/{sport}/fixtures/search/{name} | Search |
| [**leagueById()**](SportApi.md#leagueById) | **GET** /{version}/{sport}/leagues/{leagueId} | By ID |
| [**leagueEnrichments()**](SportApi.md#leagueEnrichments) | **GET** /{version}/{sport}/leagues/{leagueId}/includes | Enrichments |
| [**leagueShirts()**](SportApi.md#leagueShirts) | **GET** /{version}/{sport}/leagues/{leagueId}/jerseys | Shirts By League ID |
| [**leaguesAll()**](SportApi.md#leaguesAll) | **GET** /{version}/{sport}/leagues | All |
| [**leaguesByCountryId()**](SportApi.md#leaguesByCountryId) | **GET** /{version}/{sport}/leagues/countries/{countryId} | By Country ID |
| [**leaguesByDate()**](SportApi.md#leaguesByDate) | **GET** /{version}/{sport}/leagues/date/{date} | By Date |
| [**leaguesByTeamId()**](SportApi.md#leaguesByTeamId) | **GET** /{version}/{sport}/teams/{teamId}/leagues | Leagues By Team ID |
| [**leaguesCurrentByTeamId()**](SportApi.md#leaguesCurrentByTeamId) | **GET** /{version}/{sport}/teams/{teamId}/leagues/current | Current Leagues By Team ID |
| [**leaguesLive()**](SportApi.md#leaguesLive) | **GET** /{version}/{sport}/leagues/live | Live |
| [**leaguesSearch()**](SportApi.md#leaguesSearch) | **GET** /{version}/{sport}/leagues/search/{name} | Search |
| [**livescoresAll()**](SportApi.md#livescoresAll) | **GET** /{version}/{sport}/livescores | All |
| [**livescoresAllInPlay()**](SportApi.md#livescoresAllInPlay) | **GET** /{version}/{sport}/livescores/inplay | All In-play |
| [**livescoresLatest()**](SportApi.md#livescoresLatest) | **GET** /{version}/{sport}/livescores/latest | Last Updated In-play |
| [**newsAllPostMatch()**](SportApi.md#newsAllPostMatch) | **GET** /{version}/{sport}/news/post-match | All Post Match |
| [**newsAllPreMatch()**](SportApi.md#newsAllPreMatch) | **GET** /{version}/{sport}/news/pre-match | All Pre-match |
| [**newsPostMatchBySeasonId()**](SportApi.md#newsPostMatchBySeasonId) | **GET** /{version}/{sport}/news/post-match/seasons/{seasonId} | Post Match by Season ID |
| [**newsPreMatchBySeasonId()**](SportApi.md#newsPreMatchBySeasonId) | **GET** /{version}/{sport}/news/pre-match/seasons/{seasonId} | Pre-match By Season ID |
| [**newsUpcomingPostMatch()**](SportApi.md#newsUpcomingPostMatch) | **GET** /{version}/{sport}/news/post-match/upcoming | Upcoming Post Match |
| [**newsUpcomingPreMatch()**](SportApi.md#newsUpcomingPreMatch) | **GET** /{version}/{sport}/news/pre-match/upcoming | Upcoming Pre-match |
| [**oddsAllInPlay()**](SportApi.md#oddsAllInPlay) | **GET** /{version}/{sport}/odds/inplay | All In-play |
| [**oddsAllPreMatch()**](SportApi.md#oddsAllPreMatch) | **GET** /{version}/{sport}/odds/pre-match | All Pre-match |
| [**oddsInPlayByFixtureAndBookmakerId()**](SportApi.md#oddsInPlayByFixtureAndBookmakerId) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId}/bookmakers/{bookmakerId} | In-play by Fixture and Bookmaker ID |
| [**oddsInPlayByFixtureAndMarketId()**](SportApi.md#oddsInPlayByFixtureAndMarketId) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId}/markets/{marketId} | In-play by Fixture and Market ID |
| [**oddsInPlayByFixtureId()**](SportApi.md#oddsInPlayByFixtureId) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId} | In-play by Fixture ID |
| [**oddsLatestInPlay()**](SportApi.md#oddsLatestInPlay) | **GET** /{version}/{sport}/odds/inplay/latest | Latest In-play |
| [**oddsLatestPreMatch()**](SportApi.md#oddsLatestPreMatch) | **GET** /{version}/{sport}/odds/pre-match/latest | Last Updated Pre-match |
| [**oddsPreMatchByFixtureAndBookmakerId()**](SportApi.md#oddsPreMatchByFixtureAndBookmakerId) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId}/bookmakers/{bookmakerId} | Pre-match by Fixture and Bookmaker ID |
| [**oddsPreMatchByFixtureAndMarketId()**](SportApi.md#oddsPreMatchByFixtureAndMarketId) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId}/markets/{marketId} | Pre-match by Fixture and Market ID |
| [**oddsPreMatchByFixtureId()**](SportApi.md#oddsPreMatchByFixtureId) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId} | Pre-match by Fixture ID |
| [**playerById()**](SportApi.md#playerById) | **GET** /{version}/{sport}/players/{playerId} | By ID |
| [**playersAll()**](SportApi.md#playersAll) | **GET** /{version}/{sport}/players | All |
| [**playersByCountryId()**](SportApi.md#playersByCountryId) | **GET** /{version}/{sport}/players/countries/{countryId} | By Country ID |
| [**playersLatest()**](SportApi.md#playersLatest) | **GET** /{version}/{sport}/players/latest | Latest Updated |
| [**playersSearch()**](SportApi.md#playersSearch) | **GET** /{version}/{sport}/players/search/{name} | Search |
| [**predictionsAll()**](SportApi.md#predictionsAll) | **GET** /{version}/{sport}/predictions/probabilities | All |
| [**predictionsAllValueBets()**](SportApi.md#predictionsAllValueBets) | **GET** /{version}/{sport}/predictions/value-bets | All Value Bets |
| [**predictionsByFixtureId()**](SportApi.md#predictionsByFixtureId) | **GET** /{version}/{sport}/predictions/probabilities/fixtures/{fixtureId} | By Fixture ID |
| [**predictionsValueBetsByFixtureId()**](SportApi.md#predictionsValueBetsByFixtureId) | **GET** /{version}/{sport}/predictions/value-bets/fixtures/{fixtureId} | Value Bets by Fixture ID |
| [**refereeById()**](SportApi.md#refereeById) | **GET** /{version}/{sport}/referees/{refereeId} | By ID |
| [**refereesAll()**](SportApi.md#refereesAll) | **GET** /{version}/{sport}/referees | All |
| [**refereesByCountryId()**](SportApi.md#refereesByCountryId) | **GET** /{version}/{sport}/referees/countries/{countryId} | By Country ID |
| [**refereesBySeasonId()**](SportApi.md#refereesBySeasonId) | **GET** /{version}/{sport}/referees/seasons/{seasonId} | By Season ID |
| [**refereesSearch()**](SportApi.md#refereesSearch) | **GET** /{version}/{sport}/referees/search/{name} | Search |
| [**rivalsAll()**](SportApi.md#rivalsAll) | **GET** /{version}/{sport}/rivals | All |
| [**rivalsByTeamId()**](SportApi.md#rivalsByTeamId) | **GET** /{version}/{sport}/rivals/teams/{teamId} | By Team ID |
| [**roundById()**](SportApi.md#roundById) | **GET** /{version}/{sport}/rounds/{roundId} | By ID |
| [**roundsAll()**](SportApi.md#roundsAll) | **GET** /{version}/{sport}/rounds | All |
| [**roundsBySeasonId()**](SportApi.md#roundsBySeasonId) | **GET** /{version}/{sport}/rounds/seasons/{seasonId} | Season ID |
| [**roundsSearch()**](SportApi.md#roundsSearch) | **GET** /{version}/{sport}/rounds/search/{name} | Search |
| [**schedulesBySeasonId()**](SportApi.md#schedulesBySeasonId) | **GET** /{version}/{sport}/schedules/seasons/{seasonId} | By Season ID |
| [**schedulesByTeamAndSeasonId()**](SportApi.md#schedulesByTeamAndSeasonId) | **GET** /{version}/{sport}/schedules/seasons/{seasonId}/teams/{teamId} | By Team and Season ID |
| [**schedulesByTeamId()**](SportApi.md#schedulesByTeamId) | **GET** /{version}/{sport}/schedules/teams/{teamId} | By Team ID |
| [**seasonById()**](SportApi.md#seasonById) | **GET** /{version}/{sport}/seasons/{seasonId} | By ID |
| [**seasonsAll()**](SportApi.md#seasonsAll) | **GET** /{version}/{sport}/seasons | All |
| [**seasonsByTeamId()**](SportApi.md#seasonsByTeamId) | **GET** /{version}/{sport}/seasons/teams/{teamId} | By Team ID |
| [**seasonsSearch()**](SportApi.md#seasonsSearch) | **GET** /{version}/{sport}/seasons/search/{name} | Search |
| [**squadsBySeasonAndTeamId()**](SportApi.md#squadsBySeasonAndTeamId) | **GET** /{version}/{sport}/squads/seasons/{seasonId}/teams/{teamId} | By Season and Team ID |
| [**squadsByTeamId()**](SportApi.md#squadsByTeamId) | **GET** /{version}/{sport}/squads/teams/{teamId} | By Team ID |
| [**stageById()**](SportApi.md#stageById) | **GET** /{version}/{sport}/stages/{stageId} | By ID |
| [**stagesAll()**](SportApi.md#stagesAll) | **GET** /{version}/{sport}/stages | All |
| [**stagesBySeasonId()**](SportApi.md#stagesBySeasonId) | **GET** /{version}/{sport}/stages/seasons/{seasonId} | By Season ID |
| [**stagesSearch()**](SportApi.md#stagesSearch) | **GET** /{version}/{sport}/stages/search/{name} | Search |
| [**standingCorrectionsBySeasonId()**](SportApi.md#standingCorrectionsBySeasonId) | **GET** /{version}/{sport}/standings/corrections/seasons/{seasonId} | Correction by Season ID |
| [**standingsAll()**](SportApi.md#standingsAll) | **GET** /{version}/{sport}/standings | All |
| [**standingsByRoundId()**](SportApi.md#standingsByRoundId) | **GET** /{version}/{sport}/standings/rounds/{roundId} | By Round ID |
| [**standingsBySeasonId()**](SportApi.md#standingsBySeasonId) | **GET** /{version}/{sport}/standings/seasons/{seasonId} | By Season ID |
| [**standingsLiveByLeagueId()**](SportApi.md#standingsLiveByLeagueId) | **GET** /{version}/{sport}/standings/live/leagues/{leagueId} | By League ID |
| [**stateById()**](SportApi.md#stateById) | **GET** /{version}/{sport}/states/{stateId} | By ID |
| [**statesBySport()**](SportApi.md#statesBySport) | **GET** /{version}/{sport}/states | By Sport |
| [**teamsAll()**](SportApi.md#teamsAll) | **GET** /{version}/{sport}/teams | All |
| [**teamsByCountryId()**](SportApi.md#teamsByCountryId) | **GET** /{version}/{sport}/teams/countries/{countryId} | By Country ID |
| [**teamsById()**](SportApi.md#teamsById) | **GET** /{version}/{sport}/teams/{teamId} | By ID |
| [**teamsBySeasonId()**](SportApi.md#teamsBySeasonId) | **GET** /{version}/{sport}/teams/seasons/{seasonId} | By Season ID |
| [**teamsSearch()**](SportApi.md#teamsSearch) | **GET** /{version}/{sport}/teams/search/{name} | Search |
| [**topScorersBySeasonId()**](SportApi.md#topScorersBySeasonId) | **GET** /{version}/{sport}/topscorers/seasons/{seasonId} | By Season ID |
| [**topScorersByStageId()**](SportApi.md#topScorersByStageId) | **GET** /{version}/{sport}/topscorers/stages/{stageId} | By Stage ID |
| [**tranfersByDateRange()**](SportApi.md#tranfersByDateRange) | **GET** /{version}/{sport}/transfers/between/{startDate}/{endDate} | By Date Range |
| [**transferById()**](SportApi.md#transferById) | **GET** /{version}/{sport}/transfers/{transferId} | By ID |
| [**transfersAll()**](SportApi.md#transfersAll) | **GET** /{version}/{sport}/transfers | All |
| [**transfersByPlayerId()**](SportApi.md#transfersByPlayerId) | **GET** /{version}/{sport}/transfers/players/{playerId} | By Player ID |
| [**transfersByTeamId()**](SportApi.md#transfersByTeamId) | **GET** /{version}/{sport}/transfers/teams/{teamId} | By Team ID |
| [**transfersLatest()**](SportApi.md#transfersLatest) | **GET** /{version}/{sport}/transfers/latest | Last Updated |
| [**tvStationById()**](SportApi.md#tvStationById) | **GET** /{version}/{sport}/tv-stations/{tvStationId} | By ID |
| [**tvStationsAll()**](SportApi.md#tvStationsAll) | **GET** /{version}/{sport}/tv-stations | All |
| [**tvStationsByFixtureId()**](SportApi.md#tvStationsByFixtureId) | **GET** /{version}/{sport}/tv-stations/fixtures/{fixtureId} | By Fixture ID |
| [**venueById()**](SportApi.md#venueById) | **GET** /{version}/{sport}/venues/{venueId} | By ID |
| [**venuesAll()**](SportApi.md#venuesAll) | **GET** /{version}/{sport}/venues | All |
| [**venuesBySeasonId()**](SportApi.md#venuesBySeasonId) | **GET** /{version}/{sport}/venues/seasons/{seasonId} | By Season ID |
| [**venuesSearch()**](SportApi.md#venuesSearch) | **GET** /{version}/{sport}/venues/search/{name} | Search |


## `coachById()`

```php
coachById($coach_id, $version, $sport): \Sportmonks\Model\SportCoachByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$coach_id = 171906; // The ID of the coach you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->coachById(
        coach_id: $coach_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->coachById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coach_id** | **int**| The ID of the coach you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCoachByIdResponse**](../Model/SportCoachByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coachesAll()`

```php
coachesAll($version, $sport): \Sportmonks\Model\SportCoachesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->coachesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->coachesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCoachesAllResponse**](../Model/SportCoachesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coachesByCountryId()`

```php
coachesByCountryId($country_id, $version, $sport): \Sportmonks\Model\SportCoachesByCountryIdResponse
```

By Country ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$country_id = 320; // The ID of the country you want to retrieve coaches from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->coachesByCountryId(
        country_id: $country_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->coachesByCountryId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve coaches from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCoachesByCountryIdResponse**](../Model/SportCoachesByCountryIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coachesLatest()`

```php
coachesLatest($version, $sport): \Sportmonks\Model\SportCoachesLatestResponse
```

Last updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->coachesLatest(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->coachesLatest: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCoachesLatestResponse**](../Model/SportCoachesLatestResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `coachesSearch()`

```php
coachesSearch($name, $version, $sport): \Sportmonks\Model\SportCoachesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "John"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->coachesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->coachesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCoachesSearchResponse**](../Model/SportCoachesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentariesAll()`

```php
commentariesAll($version, $sport): \Sportmonks\Model\SportCommentariesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->commentariesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->commentariesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCommentariesAllResponse**](../Model/SportCommentariesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commentariesByFixtureId()`

```php
commentariesByFixtureId($fixture_id, $version, $sport): \Sportmonks\Model\SportCommentariesByFixtureIdResponse
```

By Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 16808591; // The ID of the fixture you want to retrieve commentaries from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->commentariesByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->commentariesByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve commentaries from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportCommentariesByFixtureIdResponse**](../Model/SportCommentariesByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixtureByDateRangeForTeam()`

```php
fixtureByDateRangeForTeam($start_date, $end_date, $team_id, $version, $sport): \Sportmonks\Model\SportFixtureByDateRangeForTeamResponse
```

By Date Range for Team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$start_date = "maiores";
$end_date = "voluptates";
$team_id = "ut";
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixtureByDateRangeForTeam(
        start_date: $start_date, 
        end_date: $end_date, 
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixtureByDateRangeForTeam: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**|  | |
| **end_date** | **string**|  | |
| **team_id** | **string**|  | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixtureByDateRangeForTeamResponse**](../Model/SportFixtureByDateRangeForTeamResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixtureById()`

```php
fixtureById($fixture_id, $version, $sport): \Sportmonks\Model\SportFixtureByIdResponse
```

Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 18528480; // The ID of the fixture you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixtureById(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixtureById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixtureByIdResponse**](../Model/SportFixtureByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesAll()`

```php
fixturesAll($version, $sport): \Sportmonks\Model\SportFixturesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesAllResponse**](../Model/SportFixturesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesByDate()`

```php
fixturesByDate($date, $version, $sport): \Sportmonks\Model\SportFixturesByDateResponse
```

By Date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$date = "2022-07-24"; // The date you want to retrieve fixtures from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesByDate(
        date: $date, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesByDate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**| The date you want to retrieve fixtures from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesByDateResponse**](../Model/SportFixturesByDateResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesByDateRange()`

```php
fixturesByDateRange($start_date, $end_date, $version, $sport): \Sportmonks\Model\SportFixturesByDateRangeResponse
```

By Date Range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$start_date = "2022-07-17"; // The start date you want to retrieve fixtures from.
$end_date = "2022-07-25"; // The end date you want to retrieve fixtures from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesByDateRange(
        start_date: $start_date, 
        end_date: $end_date, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesByDateRange: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| The start date you want to retrieve fixtures from. | |
| **end_date** | **string**| The end date you want to retrieve fixtures from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesByDateRangeResponse**](../Model/SportFixturesByDateRangeResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesByIds()`

```php
fixturesByIds($fixture_ids, $version, $sport): \Sportmonks\Model\SportFixturesByIdsResponse
```

By IDs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_ids = "18528484%2C18531140"; // The IDs you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesByIds(
        fixture_ids: $fixture_ids, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesByIds: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_ids** | **string**| The IDs you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesByIdsResponse**](../Model/SportFixturesByIdsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesHeadToHead()`

```php
fixturesHeadToHead($first_team, $second_team, $version, $sport): \Sportmonks\Model\SportFixturesHeadToHeadResponse
```

Head to Head

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$first_team = 2650; // The ID of the first team retrieve fixtures from.
$second_team = 86; // The ID of the second team retrieve fixtures from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesHeadToHead(
        first_team: $first_team, 
        second_team: $second_team, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesHeadToHead: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **first_team** | **int**| The ID of the first team retrieve fixtures from. | |
| **second_team** | **int**| The ID of the second team retrieve fixtures from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesHeadToHeadResponse**](../Model/SportFixturesHeadToHeadResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesLatest()`

```php
fixturesLatest($version, $sport): string
```

Last Updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesLatest(
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesLatest: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**string**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesSearch()`

```php
fixturesSearch($name, $version, $sport): \Sportmonks\Model\SportFixturesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "havn"; // The name you want search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->fixturesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->fixturesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportFixturesSearchResponse**](../Model/SportFixturesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leagueById()`

```php
leagueById($league_id, $version, $sport): \Sportmonks\Model\SportLeagueByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$league_id = 271; // The ID of the league you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leagueById(
        league_id: $league_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leagueById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **league_id** | **int**| The ID of the league you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeagueByIdResponse**](../Model/SportLeagueByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leagueEnrichments()`

```php
leagueEnrichments($league_id, $version, $sport): object
```

Enrichments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$league_id = 271; // The ID of the league you want to retrieve enrichments from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leagueEnrichments(
        league_id: $league_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leagueEnrichments: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **league_id** | **int**| The ID of the league you want to retrieve enrichments from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leagueShirts()`

```php
leagueShirts($league_id, $version, $sport): object
```

Shirts By League ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$league_id = 271; // The ID of the league you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leagueShirts(
        league_id: $league_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leagueShirts: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **league_id** | **int**| The ID of the league you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesAll()`

```php
leaguesAll($version, $sport): \Sportmonks\Model\SportLeaguesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeaguesAllResponse**](../Model/SportLeaguesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesByCountryId()`

```php
leaguesByCountryId($country_id, $version, $sport): \Sportmonks\Model\SportLeaguesByCountryIdResponse
```

By Country ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$country_id = 320; // The ID of the country you want to retrieve leagues from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesByCountryId(
        country_id: $country_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesByCountryId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve leagues from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeaguesByCountryIdResponse**](../Model/SportLeaguesByCountryIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesByDate()`

```php
leaguesByDate($date, $version, $sport): \Sportmonks\Model\SportLeaguesByDateResponse
```

By Date

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$date = "2022-07-15"; // The date of fixtures you want to retrieve leagues from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesByDate(
        date: $date, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesByDate: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date** | **string**| The date of fixtures you want to retrieve leagues from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeaguesByDateResponse**](../Model/SportLeaguesByDateResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesByTeamId()`

```php
leaguesByTeamId($team_id, $version, $sport): object
```

Leagues By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 180; // The ID of the team you want to retrieve leagues from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve leagues from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesCurrentByTeamId()`

```php
leaguesCurrentByTeamId($team_id, $version, $sport): object
```

Current Leagues By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 180; // The ID of the team you want to retrieve current leagues from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesCurrentByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesCurrentByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve current leagues from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesLive()`

```php
leaguesLive($version, $sport): \Sportmonks\Model\SportLeaguesLiveResponse
```

Live

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesLive(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesLive: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeaguesLiveResponse**](../Model/SportLeaguesLiveResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaguesSearch()`

```php
leaguesSearch($name, $version, $sport): \Sportmonks\Model\SportLeaguesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Super"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->leaguesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->leaguesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLeaguesSearchResponse**](../Model/SportLeaguesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `livescoresAll()`

```php
livescoresAll($version, $sport): \Sportmonks\Model\SportLivescoresAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->livescoresAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->livescoresAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLivescoresAllResponse**](../Model/SportLivescoresAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `livescoresAllInPlay()`

```php
livescoresAllInPlay($version, $sport): \Sportmonks\Model\SportLivescoresAllInPlayResponse
```

All In-play

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->livescoresAllInPlay(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->livescoresAllInPlay: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLivescoresAllInPlayResponse**](../Model/SportLivescoresAllInPlayResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `livescoresLatest()`

```php
livescoresLatest($version, $sport): \Sportmonks\Model\SportLivescoresLatestResponse
```

Last Updated In-play

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->livescoresLatest(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->livescoresLatest: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportLivescoresLatestResponse**](../Model/SportLivescoresLatestResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsAllPostMatch()`

```php
newsAllPostMatch($version, $sport): string
```

All Post Match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsAllPostMatch(
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsAllPostMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**string**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsAllPreMatch()`

```php
newsAllPreMatch($version, $sport): \Sportmonks\Model\SportNewsAllPreMatchResponse
```

All Pre-match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsAllPreMatch(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsAllPreMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportNewsAllPreMatchResponse**](../Model/SportNewsAllPreMatchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsPostMatchBySeasonId()`

```php
newsPostMatchBySeasonId($season_id, $version, $sport): string
```

Post Match by Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve post-match news from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsPostMatchBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsPostMatchBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve post-match news from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**string**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsPreMatchBySeasonId()`

```php
newsPreMatchBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportNewsPreMatchBySeasonIdResponse
```

Pre-match By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19734; // The ID of the season you want to retrieve post-match news from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsPreMatchBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsPreMatchBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve post-match news from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportNewsPreMatchBySeasonIdResponse**](../Model/SportNewsPreMatchBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsUpcomingPostMatch()`

```php
newsUpcomingPostMatch($version, $sport): string
```

Upcoming Post Match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsUpcomingPostMatch(
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsUpcomingPostMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**string**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newsUpcomingPreMatch()`

```php
newsUpcomingPreMatch($version, $sport): \Sportmonks\Model\SportNewsUpcomingPreMatchResponse
```

Upcoming Pre-match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->newsUpcomingPreMatch(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->newsUpcomingPreMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportNewsUpcomingPreMatchResponse**](../Model/SportNewsUpcomingPreMatchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsAllInPlay()`

```php
oddsAllInPlay($version, $sport): \Sportmonks\Model\SportOddsAllInPlayResponse
```

All In-play

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsAllInPlay(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsAllInPlay: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsAllInPlayResponse**](../Model/SportOddsAllInPlayResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsAllPreMatch()`

```php
oddsAllPreMatch($version, $sport): \Sportmonks\Model\SportOddsAllPreMatchResponse
```

All Pre-match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsAllPreMatch(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsAllPreMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsAllPreMatchResponse**](../Model/SportOddsAllPreMatchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsInPlayByFixtureAndBookmakerId()`

```php
oddsInPlayByFixtureAndBookmakerId($fixture_id, $bookmaker_id, $version, $sport): object
```

In-play by Fixture and Bookmaker ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 18535046; // The ID of the fixture you want to retrieve in-play odds from.
$bookmaker_id = 6; // The ID of the bookmaker you want to retrieve in-play odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsInPlayByFixtureAndBookmakerId(
        fixture_id: $fixture_id, 
        bookmaker_id: $bookmaker_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsInPlayByFixtureAndBookmakerId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve in-play odds from. | |
| **bookmaker_id** | **int**| The ID of the bookmaker you want to retrieve in-play odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsInPlayByFixtureAndMarketId()`

```php
oddsInPlayByFixtureAndMarketId($fixture_id, $market_id, $version, $sport): object
```

In-play by Fixture and Market ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 233366; // The ID of the fixture you want to retrieve in-play odds from.
$market_id = 56; // The ID of the market you want to retrieve in-play odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsInPlayByFixtureAndMarketId(
        fixture_id: $fixture_id, 
        market_id: $market_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsInPlayByFixtureAndMarketId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve in-play odds from. | |
| **market_id** | **int**| The ID of the market you want to retrieve in-play odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsInPlayByFixtureId()`

```php
oddsInPlayByFixtureId($fixture_id, $version, $sport): \Sportmonks\Model\SportOddsInPlayByFixtureIdResponse
```

In-play by Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 18535046; // The ID of the fixture you want to retrieve in-play odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsInPlayByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsInPlayByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve in-play odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsInPlayByFixtureIdResponse**](../Model/SportOddsInPlayByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsLatestInPlay()`

```php
oddsLatestInPlay($version, $sport): object
```

Latest In-play

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsLatestInPlay(
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsLatestInPlay: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsLatestPreMatch()`

```php
oddsLatestPreMatch($version, $sport): object
```

Last Updated Pre-match

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsLatestPreMatch(
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsLatestPreMatch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsPreMatchByFixtureAndBookmakerId()`

```php
oddsPreMatchByFixtureAndBookmakerId($fixture_id, $bookmaker_id, $version, $sport): \Sportmonks\Model\SportOddsPreMatchByFixtureAndBookmakerIdResponse
```

Pre-match by Fixture and Bookmaker ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 233366; // The ID of the fixture you want to retrieve pre-match odds from.
$bookmaker_id = 6; // The ID of the bookmaker you want to retrieve pre-match odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsPreMatchByFixtureAndBookmakerId(
        fixture_id: $fixture_id, 
        bookmaker_id: $bookmaker_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsPreMatchByFixtureAndBookmakerId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve pre-match odds from. | |
| **bookmaker_id** | **int**| The ID of the bookmaker you want to retrieve pre-match odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsPreMatchByFixtureAndBookmakerIdResponse**](../Model/SportOddsPreMatchByFixtureAndBookmakerIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsPreMatchByFixtureAndMarketId()`

```php
oddsPreMatchByFixtureAndMarketId($fixture_id, $market_id, $version, $sport): \Sportmonks\Model\SportOddsPreMatchByFixtureAndMarketIdResponse
```

Pre-match by Fixture and Market ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 233366; // The ID of the fixture you want to retrieve pre-match odds from.
$market_id = 56; // The ID of the market you want to retrieve pre-match odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsPreMatchByFixtureAndMarketId(
        fixture_id: $fixture_id, 
        market_id: $market_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsPreMatchByFixtureAndMarketId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve pre-match odds from. | |
| **market_id** | **int**| The ID of the market you want to retrieve pre-match odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsPreMatchByFixtureAndMarketIdResponse**](../Model/SportOddsPreMatchByFixtureAndMarketIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oddsPreMatchByFixtureId()`

```php
oddsPreMatchByFixtureId($fixture_id, $version, $sport): \Sportmonks\Model\SportOddsPreMatchByFixtureIdResponse
```

Pre-match by Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 233366; // The ID of the fixture you want to retrieve pre-match odds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->oddsPreMatchByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->oddsPreMatchByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve pre-match odds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportOddsPreMatchByFixtureIdResponse**](../Model/SportOddsPreMatchByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playerById()`

```php
playerById($player_id, $version, $sport): \Sportmonks\Model\SportPlayerByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$player_id = 14; // The ID of the player you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->playerById(
        player_id: $player_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->playerById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **int**| The ID of the player you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPlayerByIdResponse**](../Model/SportPlayerByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playersAll()`

```php
playersAll($version, $sport): \Sportmonks\Model\SportPlayersAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->playersAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->playersAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPlayersAllResponse**](../Model/SportPlayersAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playersByCountryId()`

```php
playersByCountryId($country_id, $version, $sport): \Sportmonks\Model\SportPlayersByCountryIdResponse
```

By Country ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$country_id = 320; // The ID of the country you want to retrieve players from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->playersByCountryId(
        country_id: $country_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->playersByCountryId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve players from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPlayersByCountryIdResponse**](../Model/SportPlayersByCountryIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playersLatest()`

```php
playersLatest($version, $sport): \Sportmonks\Model\SportPlayersLatestResponse
```

Latest Updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->playersLatest(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->playersLatest: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPlayersLatestResponse**](../Model/SportPlayersLatestResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `playersSearch()`

```php
playersSearch($name, $version, $sport): \Sportmonks\Model\SportPlayersSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Agg"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->playersSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->playersSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPlayersSearchResponse**](../Model/SportPlayersSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictionsAll()`

```php
predictionsAll($version, $sport): \Sportmonks\Model\SportPredictionsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->predictionsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->predictionsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPredictionsAllResponse**](../Model/SportPredictionsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictionsAllValueBets()`

```php
predictionsAllValueBets($version, $sport): \Sportmonks\Model\SportPredictionsAllValueBetsResponse
```

All Value Bets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->predictionsAllValueBets(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->predictionsAllValueBets: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPredictionsAllValueBetsResponse**](../Model/SportPredictionsAllValueBetsResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictionsByFixtureId()`

```php
predictionsByFixtureId($fixture_id, $version, $sport): \Sportmonks\Model\SportPredictionsByFixtureIdResponse
```

By Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 16774022; // The ID of the fixture you want to retrieve predictions from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->predictionsByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->predictionsByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve predictions from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportPredictionsByFixtureIdResponse**](../Model/SportPredictionsByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictionsValueBetsByFixtureId()`

```php
predictionsValueBetsByFixtureId($fixture_id, $version, $sport): object
```

Value Bets by Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 18535050; // The ID of the fixture you want to retrieve value bets from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->predictionsValueBetsByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->predictionsValueBetsByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve value bets from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refereeById()`

```php
refereeById($referee_id, $version, $sport): \Sportmonks\Model\SportRefereeByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$referee_id = 11698; // The ID of the referee you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->refereeById(
        referee_id: $referee_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->refereeById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **referee_id** | **int**| The ID of the referee you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRefereeByIdResponse**](../Model/SportRefereeByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refereesAll()`

```php
refereesAll($version, $sport): \Sportmonks\Model\SportRefereesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->refereesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->refereesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRefereesAllResponse**](../Model/SportRefereesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refereesByCountryId()`

```php
refereesByCountryId($country_id, $version, $sport): \Sportmonks\Model\SportRefereesByCountryIdResponse
```

By Country ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$country_id = 320; // The ID of the country you want to retrieve referees from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->refereesByCountryId(
        country_id: $country_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->refereesByCountryId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve referees from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRefereesByCountryIdResponse**](../Model/SportRefereesByCountryIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refereesBySeasonId()`

```php
refereesBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportRefereesBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve referees from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->refereesBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->refereesBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve referees from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRefereesBySeasonIdResponse**](../Model/SportRefereesBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refereesSearch()`

```php
refereesSearch($name, $version, $sport): \Sportmonks\Model\SportRefereesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Munch"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->refereesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->refereesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRefereesSearchResponse**](../Model/SportRefereesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rivalsAll()`

```php
rivalsAll($version, $sport): \Sportmonks\Model\SportRivalsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->rivalsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->rivalsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRivalsAllResponse**](../Model/SportRivalsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rivalsByTeamId()`

```php
rivalsByTeamId($team_id, $version, $sport): \Sportmonks\Model\SportRivalsByTeamIdResponse
```

By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 53; // The ID of the team you want to retrieve rivals from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->rivalsByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->rivalsByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve rivals from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRivalsByTeamIdResponse**](../Model/SportRivalsByTeamIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roundById()`

```php
roundById($round_id, $version, $sport): \Sportmonks\Model\SportRoundByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$round_id = 23317; // The ID of the round you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->roundById(
        round_id: $round_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->roundById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **round_id** | **int**| The ID of the round you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRoundByIdResponse**](../Model/SportRoundByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roundsAll()`

```php
roundsAll($version, $sport): \Sportmonks\Model\SportRoundsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->roundsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->roundsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRoundsAllResponse**](../Model/SportRoundsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roundsBySeasonId()`

```php
roundsBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportRoundsBySeasonIdResponse
```

Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve rounds from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->roundsBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->roundsBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve rounds from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRoundsBySeasonIdResponse**](../Model/SportRoundsBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roundsSearch()`

```php
roundsSearch($name, $version, $sport): \Sportmonks\Model\SportRoundsSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = 2; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->roundsSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->roundsSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **int**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportRoundsSearchResponse**](../Model/SportRoundsSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schedulesBySeasonId()`

```php
schedulesBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportSchedulesBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686;
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->schedulesBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->schedulesBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**|  | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSchedulesBySeasonIdResponse**](../Model/SportSchedulesBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schedulesByTeamAndSeasonId()`

```php
schedulesByTeamAndSeasonId($season_id, $team_id, $version, $sport): \Sportmonks\Model\SportSchedulesByTeamAndSeasonIdResponse
```

By Team and Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve schedule from.
$team_id = 282; // The ID of the team you want to retrieve schedule from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->schedulesByTeamAndSeasonId(
        season_id: $season_id, 
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->schedulesByTeamAndSeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve schedule from. | |
| **team_id** | **int**| The ID of the team you want to retrieve schedule from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSchedulesByTeamAndSeasonIdResponse**](../Model/SportSchedulesByTeamAndSeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `schedulesByTeamId()`

```php
schedulesByTeamId($team_id, $version, $sport): \Sportmonks\Model\SportSchedulesByTeamIdResponse
```

By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 282; // The ID of the team you want to retrieve schedule from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->schedulesByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->schedulesByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve schedule from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSchedulesByTeamIdResponse**](../Model/SportSchedulesByTeamIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seasonById()`

```php
seasonById($season_id, $version, $sport): \Sportmonks\Model\SportSeasonByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->seasonById(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->seasonById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSeasonByIdResponse**](../Model/SportSeasonByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seasonsAll()`

```php
seasonsAll($version, $sport): \Sportmonks\Model\SportSeasonsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->seasonsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->seasonsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSeasonsAllResponse**](../Model/SportSeasonsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seasonsByTeamId()`

```php
seasonsByTeamId($team_id, $version, $sport): object
```

By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 282; // The ID of the team you want to retrieve seasons from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->seasonsByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->seasonsByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve seasons from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

**object**

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `seasonsSearch()`

```php
seasonsSearch($name, $version, $sport): \Sportmonks\Model\SportSeasonsSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = 2022; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->seasonsSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->seasonsSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **int**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSeasonsSearchResponse**](../Model/SportSeasonsSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `squadsBySeasonAndTeamId()`

```php
squadsBySeasonAndTeamId($season_id, $team_id, $version, $sport): \Sportmonks\Model\SportSquadsBySeasonAndTeamIdResponse
```

By Season and Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve squads from.
$team_id = 282; // The ID of the team you want to retrieve squads from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->squadsBySeasonAndTeamId(
        season_id: $season_id, 
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->squadsBySeasonAndTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve squads from. | |
| **team_id** | **int**| The ID of the team you want to retrieve squads from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSquadsBySeasonAndTeamIdResponse**](../Model/SportSquadsBySeasonAndTeamIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `squadsByTeamId()`

```php
squadsByTeamId($team_id, $version, $sport): \Sportmonks\Model\SportSquadsByTeamIdResponse
```

By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 282; // The ID of the team you want to retrieve squads from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->squadsByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->squadsByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve squads from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportSquadsByTeamIdResponse**](../Model/SportSquadsByTeamIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stageById()`

```php
stageById($stage_id, $version, $sport): \Sportmonks\Model\SportStageByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$stage_id = 1100; // The ID of the stage you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->stageById(
        stage_id: $stage_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->stageById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **int**| The ID of the stage you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStageByIdResponse**](../Model/SportStageByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stagesAll()`

```php
stagesAll($version, $sport): \Sportmonks\Model\SportStagesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->stagesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->stagesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStagesAllResponse**](../Model/SportStagesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stagesBySeasonId()`

```php
stagesBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportStagesBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve stages from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->stagesBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->stagesBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve stages from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStagesBySeasonIdResponse**](../Model/SportStagesBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stagesSearch()`

```php
stagesSearch($name, $version, $sport): \Sportmonks\Model\SportStagesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Championship"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->stagesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->stagesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStagesSearchResponse**](../Model/SportStagesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `standingCorrectionsBySeasonId()`

```php
standingCorrectionsBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportStandingCorrectionsBySeasonIdResponse
```

Correction by Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve standing corrections from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->standingCorrectionsBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->standingCorrectionsBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve standing corrections from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStandingCorrectionsBySeasonIdResponse**](../Model/SportStandingCorrectionsBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `standingsAll()`

```php
standingsAll($version, $sport): \Sportmonks\Model\SportStandingsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->standingsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->standingsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStandingsAllResponse**](../Model/SportStandingsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `standingsByRoundId()`

```php
standingsByRoundId($round_id, $version, $sport): \Sportmonks\Model\SportStandingsByRoundIdResponse
```

By Round ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$round_id = 23318; // The ID of the round you want to retrieve standing from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->standingsByRoundId(
        round_id: $round_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->standingsByRoundId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **round_id** | **int**| The ID of the round you want to retrieve standing from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStandingsByRoundIdResponse**](../Model/SportStandingsByRoundIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `standingsBySeasonId()`

```php
standingsBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportStandingsBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve standing from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->standingsBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->standingsBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve standing from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStandingsBySeasonIdResponse**](../Model/SportStandingsBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `standingsLiveByLeagueId()`

```php
standingsLiveByLeagueId($league_id, $version, $sport): \Sportmonks\Model\SportStandingsLiveByLeagueIdResponse
```

By League ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$league_id = 271; // The ID of the league you want to retrieve standings from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->standingsLiveByLeagueId(
        league_id: $league_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->standingsLiveByLeagueId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **league_id** | **int**| The ID of the league you want to retrieve standings from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStandingsLiveByLeagueIdResponse**](../Model/SportStandingsLiveByLeagueIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stateById()`

```php
stateById($state_id, $version, $sport): \Sportmonks\Model\SportStateByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$state_id = 1; // The ID of the state you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->stateById(
        state_id: $state_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->stateById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state_id** | **int**| The ID of the state you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStateByIdResponse**](../Model/SportStateByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statesBySport()`

```php
statesBySport($version, $sport): \Sportmonks\Model\SportStatesBySportResponse
```

By Sport

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->statesBySport(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->statesBySport: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportStatesBySportResponse**](../Model/SportStatesBySportResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsAll()`

```php
teamsAll($version, $sport): \Sportmonks\Model\SportTeamsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->teamsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->teamsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTeamsAllResponse**](../Model/SportTeamsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsByCountryId()`

```php
teamsByCountryId($country_id, $version, $sport): \Sportmonks\Model\SportTeamsByCountryIdResponse
```

By Country ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$country_id = 320; // The ID of the country you want to retrieve teams from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->teamsByCountryId(
        country_id: $country_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->teamsByCountryId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve teams from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTeamsByCountryIdResponse**](../Model/SportTeamsByCountryIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsById()`

```php
teamsById($team_id, $version, $sport): \Sportmonks\Model\SportTeamsByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 180; // The ID of the team you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->teamsById(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->teamsById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTeamsByIdResponse**](../Model/SportTeamsByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsBySeasonId()`

```php
teamsBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportTeamsBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve teams from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->teamsBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->teamsBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve teams from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTeamsBySeasonIdResponse**](../Model/SportTeamsBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teamsSearch()`

```php
teamsSearch($name, $version, $sport): \Sportmonks\Model\SportTeamsSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Hors"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->teamsSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->teamsSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTeamsSearchResponse**](../Model/SportTeamsSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topScorersBySeasonId()`

```php
topScorersBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportTopScorersBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve topscorers from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->topScorersBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->topScorersBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve topscorers from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTopScorersBySeasonIdResponse**](../Model/SportTopScorersBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topScorersByStageId()`

```php
topScorersByStageId($stage_id, $version, $sport): \Sportmonks\Model\SportTopScorersByStageIdResponse
```

By Stage ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$stage_id = 1100; // The ID of the stage you want to retrieve topscorers from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->topScorersByStageId(
        stage_id: $stage_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->topScorersByStageId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stage_id** | **int**| The ID of the stage you want to retrieve topscorers from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTopScorersByStageIdResponse**](../Model/SportTopScorersByStageIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tranfersByDateRange()`

```php
tranfersByDateRange($start_date, $end_date, $version, $sport): \Sportmonks\Model\SportTranfersByDateRangeResponse
```

By Date Range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$start_date = "2021-12-27"; // The start date you want to retrieve transfers from.
$end_date = "2021-12-30"; // The end date you want to retrieve transfers from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->tranfersByDateRange(
        start_date: $start_date, 
        end_date: $end_date, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->tranfersByDateRange: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_date** | **string**| The start date you want to retrieve transfers from. | |
| **end_date** | **string**| The end date you want to retrieve transfers from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTranfersByDateRangeResponse**](../Model/SportTranfersByDateRangeResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferById()`

```php
transferById($transfer_id, $version, $sport): \Sportmonks\Model\SportTransferByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$transfer_id = 1;
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->transferById(
        transfer_id: $transfer_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->transferById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_id** | **int**|  | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTransferByIdResponse**](../Model/SportTransferByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfersAll()`

```php
transfersAll($version, $sport): \Sportmonks\Model\SportTransfersAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->transfersAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->transfersAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTransfersAllResponse**](../Model/SportTransfersAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfersByPlayerId()`

```php
transfersByPlayerId($player_id, $version, $sport): \Sportmonks\Model\SportTransfersByPlayerIdResponse
```

By Player ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$player_id = 35659846; // The ID of the player you want to retrieve transfers from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->transfersByPlayerId(
        player_id: $player_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->transfersByPlayerId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **player_id** | **int**| The ID of the player you want to retrieve transfers from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTransfersByPlayerIdResponse**](../Model/SportTransfersByPlayerIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfersByTeamId()`

```php
transfersByTeamId($team_id, $version, $sport): \Sportmonks\Model\SportTransfersByTeamIdResponse
```

By Team ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$team_id = 3736; // The ID of the team you want to retrieve transfers from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->transfersByTeamId(
        team_id: $team_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->transfersByTeamId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **int**| The ID of the team you want to retrieve transfers from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTransfersByTeamIdResponse**](../Model/SportTransfersByTeamIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transfersLatest()`

```php
transfersLatest($version, $sport): \Sportmonks\Model\SportTransfersLatestResponse
```

Last Updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->transfersLatest(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->transfersLatest: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTransfersLatestResponse**](../Model/SportTransfersLatestResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tvStationById()`

```php
tvStationById($tv_station_id, $version, $sport): \Sportmonks\Model\SportTvStationByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$tv_station_id = 33; // The ID of the tv station you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->tvStationById(
        tv_station_id: $tv_station_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->tvStationById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tv_station_id** | **int**| The ID of the tv station you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTvStationByIdResponse**](../Model/SportTvStationByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tvStationsAll()`

```php
tvStationsAll($version, $sport): \Sportmonks\Model\SportTvStationsAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->tvStationsAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->tvStationsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTvStationsAllResponse**](../Model/SportTvStationsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tvStationsByFixtureId()`

```php
tvStationsByFixtureId($fixture_id, $version, $sport): \Sportmonks\Model\SportTvStationsByFixtureIdResponse
```

By Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 16808591; // The ID of the fixture you want to retrieve tv-stations from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->tvStationsByFixtureId(
        fixture_id: $fixture_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->tvStationsByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the fixture you want to retrieve tv-stations from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportTvStationsByFixtureIdResponse**](../Model/SportTvStationsByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `venueById()`

```php
venueById($venue_id, $version, $sport): \Sportmonks\Model\SportVenueByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$venue_id = 219; // The ID of the venue you want to retrieve.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->venueById(
        venue_id: $venue_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->venueById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **venue_id** | **int**| The ID of the venue you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportVenueByIdResponse**](../Model/SportVenueByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `venuesAll()`

```php
venuesAll($version, $sport): \Sportmonks\Model\SportVenuesAllResponse
```

All

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->venuesAll(
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->venuesAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportVenuesAllResponse**](../Model/SportVenuesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `venuesBySeasonId()`

```php
venuesBySeasonId($season_id, $version, $sport): \Sportmonks\Model\SportVenuesBySeasonIdResponse
```

By Season ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$season_id = 19686; // The ID of the season you want to retrieve venues from.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->venuesBySeasonId(
        season_id: $season_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->venuesBySeasonId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **season_id** | **int**| The ID of the season you want to retrieve venues from. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportVenuesBySeasonIdResponse**](../Model/SportVenuesBySeasonIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `venuesSearch()`

```php
venuesSearch($name, $version, $sport): \Sportmonks\Model\SportVenuesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$name = "Park"; // The name you want to search on.
$version = "v3"; // The version of the API.
$sport = "football"; // The sport you want retrieve entities from.

try {
    $result = $sportmonks->sport->venuesSearch(
        name: $name, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling SportApi->venuesSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on. | |
| **version** | **string**| The version of the API. | [optional] |
| **sport** | **string**| The sport you want retrieve entities from. | [optional] |

### Return type

[**\Sportmonks\Model\SportVenuesSearchResponse**](../Model/SportVenuesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
