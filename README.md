# sportmonks-php [Packagist](https://packagist.org/packages/konfig/sportmonks-php-sdk)

Surpass the competition with superior sports data


## Installation & Usage

### Requirements

This library requires `PHP ^8.0`

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/konfig-dev/sportmonks-php-sdk.git"
    }
  ],
  "require": {
    "konfig/sportmonks-php-sdk": "1.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sportmonks-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->cities->all(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CitiesApi->all: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sportmonks.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CitiesApi* | [**all**](docs/Api/CitiesApi.md#all) | **GET** /{version}/core/cities | All
*CitiesApi* | [**getById**](docs/Api/CitiesApi.md#getbyid) | **GET** /{version}/core/cities/{cityId} | By ID
*CitiesApi* | [**search**](docs/Api/CitiesApi.md#search) | **GET** /{version}/core/cities/search/{name} | Search
*ContinentsApi* | [**all**](docs/Api/ContinentsApi.md#all) | **GET** /{version}/core/continents | All
*ContinentsApi* | [**getById**](docs/Api/ContinentsApi.md#getbyid) | **GET** /{version}/core/continents/{continentId} | By ID
*CountriesApi* | [**all**](docs/Api/CountriesApi.md#all) | **GET** /{version}/core/countries | All
*CountriesApi* | [**getById**](docs/Api/CountriesApi.md#getbyid) | **GET** /{version}/core/countries/{countryId} | By ID
*CountriesApi* | [**search**](docs/Api/CountriesApi.md#search) | **GET** /{version}/core/countries/search/{name} | Search
*MyApi* | [**enrichments**](docs/Api/MyApi.md#enrichments) | **GET** /{version}/my/enrichments | All
*MyApi* | [**leagues**](docs/Api/MyApi.md#leagues) | **GET** /{version}/my/leagues | All
*MyApi* | [**resources**](docs/Api/MyApi.md#resources) | **GET** /{version}/my/resources | All
*OddsApi* | [**bookmakerById**](docs/Api/OddsApi.md#bookmakerbyid) | **GET** /{version}/odds/bookmakers/{bookmakerId} | By ID
*OddsApi* | [**bookmakersAll**](docs/Api/OddsApi.md#bookmakersall) | **GET** /{version}/odds/bookmakers | All
*OddsApi* | [**bookmakersByFixtureId**](docs/Api/OddsApi.md#bookmakersbyfixtureid) | **GET** /{version}/odds/bookmakers/fixtures/{fixtureId} | By Fixture ID
*OddsApi* | [**bookmakersMappingByFixtureId**](docs/Api/OddsApi.md#bookmakersmappingbyfixtureid) | **GET** /{version}/odds/bookmakers/fixtures/{fixtureId}/mapping | Mapping by Fixture ID
*OddsApi* | [**bookmakersSearch**](docs/Api/OddsApi.md#bookmakerssearch) | **GET** /{version}/odds/bookmakers/search/{name} | Search
*OddsApi* | [**fixturesUpcomingByMarketId**](docs/Api/OddsApi.md#fixturesupcomingbymarketid) | **GET** /{version}/{sport}/fixtures/upcoming/markets/{marketId} | Upcoming Fixtures by Market ID
*OddsApi* | [**marketById**](docs/Api/OddsApi.md#marketbyid) | **GET** /{version}/odds/markets/{marketId} | By ID
*OddsApi* | [**marketsAll**](docs/Api/OddsApi.md#marketsall) | **GET** /{version}/odds/markets | All
*OddsApi* | [**marketsSearch**](docs/Api/OddsApi.md#marketssearch) | **GET** /{version}/odds/markets/search/{name} | Search
*RegionsApi* | [**all**](docs/Api/RegionsApi.md#all) | **GET** /{version}/core/regions | All
*RegionsApi* | [**getById**](docs/Api/RegionsApi.md#getbyid) | **GET** /{version}/core/regions/{regionId} | By ID
*RegionsApi* | [**search**](docs/Api/RegionsApi.md#search) | **GET** /{version}/core/regions/search/{name} | Search
*SportApi* | [**coachById**](docs/Api/SportApi.md#coachbyid) | **GET** /{version}/{sport}/coaches/{coachId} | By ID
*SportApi* | [**coachesAll**](docs/Api/SportApi.md#coachesall) | **GET** /{version}/{sport}/coaches | All
*SportApi* | [**coachesByCountryId**](docs/Api/SportApi.md#coachesbycountryid) | **GET** /{version}/{sport}/coaches/countries/{countryId} | By Country ID
*SportApi* | [**coachesLatest**](docs/Api/SportApi.md#coacheslatest) | **GET** /{version}/{sport}/coaches/latest | Last updated
*SportApi* | [**coachesSearch**](docs/Api/SportApi.md#coachessearch) | **GET** /{version}/{sport}/coaches/search/{name} | Search
*SportApi* | [**commentariesAll**](docs/Api/SportApi.md#commentariesall) | **GET** /{version}/{sport}/commentaries | All
*SportApi* | [**commentariesByFixtureId**](docs/Api/SportApi.md#commentariesbyfixtureid) | **GET** /{version}/{sport}/commentaries/fixtures/{fixtureId} | By Fixture ID
*SportApi* | [**fixtureByDateRangeForTeam**](docs/Api/SportApi.md#fixturebydaterangeforteam) | **GET** /{version}/{sport}/fixtures/between/{startDate}/{endDate}/{teamId} | By Date Range for Team
*SportApi* | [**fixtureById**](docs/Api/SportApi.md#fixturebyid) | **GET** /{version}/{sport}/fixtures/{fixtureId} | Fixture ID
*SportApi* | [**fixturesAll**](docs/Api/SportApi.md#fixturesall) | **GET** /{version}/{sport}/fixtures | All
*SportApi* | [**fixturesByDate**](docs/Api/SportApi.md#fixturesbydate) | **GET** /{version}/{sport}/fixtures/date/{date} | By Date
*SportApi* | [**fixturesByDateRange**](docs/Api/SportApi.md#fixturesbydaterange) | **GET** /{version}/{sport}/fixtures/between/{startDate}/{endDate} | By Date Range
*SportApi* | [**fixturesByIds**](docs/Api/SportApi.md#fixturesbyids) | **GET** /{version}/{sport}/fixtures/multi/{fixtureIds} | By IDs
*SportApi* | [**fixturesHeadToHead**](docs/Api/SportApi.md#fixturesheadtohead) | **GET** /{version}/{sport}/fixtures/head-to-head/{firstTeam}/{secondTeam} | Head to Head
*SportApi* | [**fixturesLatest**](docs/Api/SportApi.md#fixtureslatest) | **GET** /{version}/{sport}/fixtures/latest | Last Updated
*SportApi* | [**fixturesSearch**](docs/Api/SportApi.md#fixturessearch) | **GET** /{version}/{sport}/fixtures/search/{name} | Search
*SportApi* | [**leagueById**](docs/Api/SportApi.md#leaguebyid) | **GET** /{version}/{sport}/leagues/{leagueId} | By ID
*SportApi* | [**leagueEnrichments**](docs/Api/SportApi.md#leagueenrichments) | **GET** /{version}/{sport}/leagues/{leagueId}/includes | Enrichments
*SportApi* | [**leagueShirts**](docs/Api/SportApi.md#leagueshirts) | **GET** /{version}/{sport}/leagues/{leagueId}/jerseys | Shirts By League ID
*SportApi* | [**leaguesAll**](docs/Api/SportApi.md#leaguesall) | **GET** /{version}/{sport}/leagues | All
*SportApi* | [**leaguesByCountryId**](docs/Api/SportApi.md#leaguesbycountryid) | **GET** /{version}/{sport}/leagues/countries/{countryId} | By Country ID
*SportApi* | [**leaguesByDate**](docs/Api/SportApi.md#leaguesbydate) | **GET** /{version}/{sport}/leagues/date/{date} | By Date
*SportApi* | [**leaguesByTeamId**](docs/Api/SportApi.md#leaguesbyteamid) | **GET** /{version}/{sport}/teams/{teamId}/leagues | Leagues By Team ID
*SportApi* | [**leaguesCurrentByTeamId**](docs/Api/SportApi.md#leaguescurrentbyteamid) | **GET** /{version}/{sport}/teams/{teamId}/leagues/current | Current Leagues By Team ID
*SportApi* | [**leaguesLive**](docs/Api/SportApi.md#leagueslive) | **GET** /{version}/{sport}/leagues/live | Live
*SportApi* | [**leaguesSearch**](docs/Api/SportApi.md#leaguessearch) | **GET** /{version}/{sport}/leagues/search/{name} | Search
*SportApi* | [**livescoresAll**](docs/Api/SportApi.md#livescoresall) | **GET** /{version}/{sport}/livescores | All
*SportApi* | [**livescoresAllInPlay**](docs/Api/SportApi.md#livescoresallinplay) | **GET** /{version}/{sport}/livescores/inplay | All In-play
*SportApi* | [**livescoresLatest**](docs/Api/SportApi.md#livescoreslatest) | **GET** /{version}/{sport}/livescores/latest | Last Updated In-play
*SportApi* | [**newsAllPostMatch**](docs/Api/SportApi.md#newsallpostmatch) | **GET** /{version}/{sport}/news/post-match | All Post Match
*SportApi* | [**newsAllPreMatch**](docs/Api/SportApi.md#newsallprematch) | **GET** /{version}/{sport}/news/pre-match | All Pre-match
*SportApi* | [**newsPostMatchBySeasonId**](docs/Api/SportApi.md#newspostmatchbyseasonid) | **GET** /{version}/{sport}/news/post-match/seasons/{seasonId} | Post Match by Season ID
*SportApi* | [**newsPreMatchBySeasonId**](docs/Api/SportApi.md#newsprematchbyseasonid) | **GET** /{version}/{sport}/news/pre-match/seasons/{seasonId} | Pre-match By Season ID
*SportApi* | [**newsUpcomingPostMatch**](docs/Api/SportApi.md#newsupcomingpostmatch) | **GET** /{version}/{sport}/news/post-match/upcoming | Upcoming Post Match
*SportApi* | [**newsUpcomingPreMatch**](docs/Api/SportApi.md#newsupcomingprematch) | **GET** /{version}/{sport}/news/pre-match/upcoming | Upcoming Pre-match
*SportApi* | [**oddsAllInPlay**](docs/Api/SportApi.md#oddsallinplay) | **GET** /{version}/{sport}/odds/inplay | All In-play
*SportApi* | [**oddsAllPreMatch**](docs/Api/SportApi.md#oddsallprematch) | **GET** /{version}/{sport}/odds/pre-match | All Pre-match
*SportApi* | [**oddsInPlayByFixtureAndBookmakerId**](docs/Api/SportApi.md#oddsinplaybyfixtureandbookmakerid) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId}/bookmakers/{bookmakerId} | In-play by Fixture and Bookmaker ID
*SportApi* | [**oddsInPlayByFixtureAndMarketId**](docs/Api/SportApi.md#oddsinplaybyfixtureandmarketid) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId}/markets/{marketId} | In-play by Fixture and Market ID
*SportApi* | [**oddsInPlayByFixtureId**](docs/Api/SportApi.md#oddsinplaybyfixtureid) | **GET** /{version}/{sport}/odds/inplay/fixtures/{fixtureId} | In-play by Fixture ID
*SportApi* | [**oddsLatestInPlay**](docs/Api/SportApi.md#oddslatestinplay) | **GET** /{version}/{sport}/odds/inplay/latest | Latest In-play
*SportApi* | [**oddsLatestPreMatch**](docs/Api/SportApi.md#oddslatestprematch) | **GET** /{version}/{sport}/odds/pre-match/latest | Last Updated Pre-match
*SportApi* | [**oddsPreMatchByFixtureAndBookmakerId**](docs/Api/SportApi.md#oddsprematchbyfixtureandbookmakerid) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId}/bookmakers/{bookmakerId} | Pre-match by Fixture and Bookmaker ID
*SportApi* | [**oddsPreMatchByFixtureAndMarketId**](docs/Api/SportApi.md#oddsprematchbyfixtureandmarketid) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId}/markets/{marketId} | Pre-match by Fixture and Market ID
*SportApi* | [**oddsPreMatchByFixtureId**](docs/Api/SportApi.md#oddsprematchbyfixtureid) | **GET** /{version}/{sport}/odds/pre-match/fixtures/{fixtureId} | Pre-match by Fixture ID
*SportApi* | [**playerById**](docs/Api/SportApi.md#playerbyid) | **GET** /{version}/{sport}/players/{playerId} | By ID
*SportApi* | [**playersAll**](docs/Api/SportApi.md#playersall) | **GET** /{version}/{sport}/players | All
*SportApi* | [**playersByCountryId**](docs/Api/SportApi.md#playersbycountryid) | **GET** /{version}/{sport}/players/countries/{countryId} | By Country ID
*SportApi* | [**playersLatest**](docs/Api/SportApi.md#playerslatest) | **GET** /{version}/{sport}/players/latest | Latest Updated
*SportApi* | [**playersSearch**](docs/Api/SportApi.md#playerssearch) | **GET** /{version}/{sport}/players/search/{name} | Search
*SportApi* | [**predictionsAll**](docs/Api/SportApi.md#predictionsall) | **GET** /{version}/{sport}/predictions/probabilities | All
*SportApi* | [**predictionsAllValueBets**](docs/Api/SportApi.md#predictionsallvaluebets) | **GET** /{version}/{sport}/predictions/value-bets | All Value Bets
*SportApi* | [**predictionsByFixtureId**](docs/Api/SportApi.md#predictionsbyfixtureid) | **GET** /{version}/{sport}/predictions/probabilities/fixtures/{fixtureId} | By Fixture ID
*SportApi* | [**predictionsValueBetsByFixtureId**](docs/Api/SportApi.md#predictionsvaluebetsbyfixtureid) | **GET** /{version}/{sport}/predictions/value-bets/fixtures/{fixtureId} | Value Bets by Fixture ID
*SportApi* | [**refereeById**](docs/Api/SportApi.md#refereebyid) | **GET** /{version}/{sport}/referees/{refereeId} | By ID
*SportApi* | [**refereesAll**](docs/Api/SportApi.md#refereesall) | **GET** /{version}/{sport}/referees | All
*SportApi* | [**refereesByCountryId**](docs/Api/SportApi.md#refereesbycountryid) | **GET** /{version}/{sport}/referees/countries/{countryId} | By Country ID
*SportApi* | [**refereesBySeasonId**](docs/Api/SportApi.md#refereesbyseasonid) | **GET** /{version}/{sport}/referees/seasons/{seasonId} | By Season ID
*SportApi* | [**refereesSearch**](docs/Api/SportApi.md#refereessearch) | **GET** /{version}/{sport}/referees/search/{name} | Search
*SportApi* | [**rivalsAll**](docs/Api/SportApi.md#rivalsall) | **GET** /{version}/{sport}/rivals | All
*SportApi* | [**rivalsByTeamId**](docs/Api/SportApi.md#rivalsbyteamid) | **GET** /{version}/{sport}/rivals/teams/{teamId} | By Team ID
*SportApi* | [**roundById**](docs/Api/SportApi.md#roundbyid) | **GET** /{version}/{sport}/rounds/{roundId} | By ID
*SportApi* | [**roundsAll**](docs/Api/SportApi.md#roundsall) | **GET** /{version}/{sport}/rounds | All
*SportApi* | [**roundsBySeasonId**](docs/Api/SportApi.md#roundsbyseasonid) | **GET** /{version}/{sport}/rounds/seasons/{seasonId} | Season ID
*SportApi* | [**roundsSearch**](docs/Api/SportApi.md#roundssearch) | **GET** /{version}/{sport}/rounds/search/{name} | Search
*SportApi* | [**schedulesBySeasonId**](docs/Api/SportApi.md#schedulesbyseasonid) | **GET** /{version}/{sport}/schedules/seasons/{seasonId} | By Season ID
*SportApi* | [**schedulesByTeamAndSeasonId**](docs/Api/SportApi.md#schedulesbyteamandseasonid) | **GET** /{version}/{sport}/schedules/seasons/{seasonId}/teams/{teamId} | By Team and Season ID
*SportApi* | [**schedulesByTeamId**](docs/Api/SportApi.md#schedulesbyteamid) | **GET** /{version}/{sport}/schedules/teams/{teamId} | By Team ID
*SportApi* | [**seasonById**](docs/Api/SportApi.md#seasonbyid) | **GET** /{version}/{sport}/seasons/{seasonId} | By ID
*SportApi* | [**seasonsAll**](docs/Api/SportApi.md#seasonsall) | **GET** /{version}/{sport}/seasons | All
*SportApi* | [**seasonsByTeamId**](docs/Api/SportApi.md#seasonsbyteamid) | **GET** /{version}/{sport}/seasons/teams/{teamId} | By Team ID
*SportApi* | [**seasonsSearch**](docs/Api/SportApi.md#seasonssearch) | **GET** /{version}/{sport}/seasons/search/{name} | Search
*SportApi* | [**squadsBySeasonAndTeamId**](docs/Api/SportApi.md#squadsbyseasonandteamid) | **GET** /{version}/{sport}/squads/seasons/{seasonId}/teams/{teamId} | By Season and Team ID
*SportApi* | [**squadsByTeamId**](docs/Api/SportApi.md#squadsbyteamid) | **GET** /{version}/{sport}/squads/teams/{teamId} | By Team ID
*SportApi* | [**stageById**](docs/Api/SportApi.md#stagebyid) | **GET** /{version}/{sport}/stages/{stageId} | By ID
*SportApi* | [**stagesAll**](docs/Api/SportApi.md#stagesall) | **GET** /{version}/{sport}/stages | All
*SportApi* | [**stagesBySeasonId**](docs/Api/SportApi.md#stagesbyseasonid) | **GET** /{version}/{sport}/stages/seasons/{seasonId} | By Season ID
*SportApi* | [**stagesSearch**](docs/Api/SportApi.md#stagessearch) | **GET** /{version}/{sport}/stages/search/{name} | Search
*SportApi* | [**standingCorrectionsBySeasonId**](docs/Api/SportApi.md#standingcorrectionsbyseasonid) | **GET** /{version}/{sport}/standings/corrections/seasons/{seasonId} | Correction by Season ID
*SportApi* | [**standingsAll**](docs/Api/SportApi.md#standingsall) | **GET** /{version}/{sport}/standings | All
*SportApi* | [**standingsByRoundId**](docs/Api/SportApi.md#standingsbyroundid) | **GET** /{version}/{sport}/standings/rounds/{roundId} | By Round ID
*SportApi* | [**standingsBySeasonId**](docs/Api/SportApi.md#standingsbyseasonid) | **GET** /{version}/{sport}/standings/seasons/{seasonId} | By Season ID
*SportApi* | [**standingsLiveByLeagueId**](docs/Api/SportApi.md#standingslivebyleagueid) | **GET** /{version}/{sport}/standings/live/leagues/{leagueId} | By League ID
*SportApi* | [**stateById**](docs/Api/SportApi.md#statebyid) | **GET** /{version}/{sport}/states/{stateId} | By ID
*SportApi* | [**statesBySport**](docs/Api/SportApi.md#statesbysport) | **GET** /{version}/{sport}/states | By Sport
*SportApi* | [**teamsAll**](docs/Api/SportApi.md#teamsall) | **GET** /{version}/{sport}/teams | All
*SportApi* | [**teamsByCountryId**](docs/Api/SportApi.md#teamsbycountryid) | **GET** /{version}/{sport}/teams/countries/{countryId} | By Country ID
*SportApi* | [**teamsById**](docs/Api/SportApi.md#teamsbyid) | **GET** /{version}/{sport}/teams/{teamId} | By ID
*SportApi* | [**teamsBySeasonId**](docs/Api/SportApi.md#teamsbyseasonid) | **GET** /{version}/{sport}/teams/seasons/{seasonId} | By Season ID
*SportApi* | [**teamsSearch**](docs/Api/SportApi.md#teamssearch) | **GET** /{version}/{sport}/teams/search/{name} | Search
*SportApi* | [**topScorersBySeasonId**](docs/Api/SportApi.md#topscorersbyseasonid) | **GET** /{version}/{sport}/topscorers/seasons/{seasonId} | By Season ID
*SportApi* | [**topScorersByStageId**](docs/Api/SportApi.md#topscorersbystageid) | **GET** /{version}/{sport}/topscorers/stages/{stageId} | By Stage ID
*SportApi* | [**tranfersByDateRange**](docs/Api/SportApi.md#tranfersbydaterange) | **GET** /{version}/{sport}/transfers/between/{startDate}/{endDate} | By Date Range
*SportApi* | [**transferById**](docs/Api/SportApi.md#transferbyid) | **GET** /{version}/{sport}/transfers/{transferId} | By ID
*SportApi* | [**transfersAll**](docs/Api/SportApi.md#transfersall) | **GET** /{version}/{sport}/transfers | All
*SportApi* | [**transfersByPlayerId**](docs/Api/SportApi.md#transfersbyplayerid) | **GET** /{version}/{sport}/transfers/players/{playerId} | By Player ID
*SportApi* | [**transfersByTeamId**](docs/Api/SportApi.md#transfersbyteamid) | **GET** /{version}/{sport}/transfers/teams/{teamId} | By Team ID
*SportApi* | [**transfersLatest**](docs/Api/SportApi.md#transferslatest) | **GET** /{version}/{sport}/transfers/latest | Last Updated
*SportApi* | [**tvStationById**](docs/Api/SportApi.md#tvstationbyid) | **GET** /{version}/{sport}/tv-stations/{tvStationId} | By ID
*SportApi* | [**tvStationsAll**](docs/Api/SportApi.md#tvstationsall) | **GET** /{version}/{sport}/tv-stations | All
*SportApi* | [**tvStationsByFixtureId**](docs/Api/SportApi.md#tvstationsbyfixtureid) | **GET** /{version}/{sport}/tv-stations/fixtures/{fixtureId} | By Fixture ID
*SportApi* | [**venueById**](docs/Api/SportApi.md#venuebyid) | **GET** /{version}/{sport}/venues/{venueId} | By ID
*SportApi* | [**venuesAll**](docs/Api/SportApi.md#venuesall) | **GET** /{version}/{sport}/venues | All
*SportApi* | [**venuesBySeasonId**](docs/Api/SportApi.md#venuesbyseasonid) | **GET** /{version}/{sport}/venues/seasons/{seasonId} | By Season ID
*SportApi* | [**venuesSearch**](docs/Api/SportApi.md#venuessearch) | **GET** /{version}/{sport}/venues/search/{name} | Search
*TypesApi* | [**all**](docs/Api/TypesApi.md#all) | **GET** /{version}/core/types | All
*TypesApi* | [**getById**](docs/Api/TypesApi.md#getbyid) | **GET** /{version}/core/types/{typeId} | By ID

## Models

- [CitiesAllResponse](docs/Model/CitiesAllResponse.md)
- [CitiesAllResponseDataInner](docs/Model/CitiesAllResponseDataInner.md)
- [CitiesAllResponsePagination](docs/Model/CitiesAllResponsePagination.md)
- [CitiesAllResponseRateLimit](docs/Model/CitiesAllResponseRateLimit.md)
- [CitiesAllResponseSubscriptionInner](docs/Model/CitiesAllResponseSubscriptionInner.md)
- [CitiesAllResponseSubscriptionInnerPlansInner](docs/Model/CitiesAllResponseSubscriptionInnerPlansInner.md)
- [CitiesGetByIdResponse](docs/Model/CitiesGetByIdResponse.md)
- [CitiesGetByIdResponseData](docs/Model/CitiesGetByIdResponseData.md)
- [CitiesGetByIdResponseRateLimit](docs/Model/CitiesGetByIdResponseRateLimit.md)
- [CitiesGetByIdResponseSubscriptionInner](docs/Model/CitiesGetByIdResponseSubscriptionInner.md)
- [CitiesGetByIdResponseSubscriptionInnerPlansInner](docs/Model/CitiesGetByIdResponseSubscriptionInnerPlansInner.md)
- [CitiesSearchResponse](docs/Model/CitiesSearchResponse.md)
- [CitiesSearchResponseDataInner](docs/Model/CitiesSearchResponseDataInner.md)
- [CitiesSearchResponsePagination](docs/Model/CitiesSearchResponsePagination.md)
- [CitiesSearchResponseRateLimit](docs/Model/CitiesSearchResponseRateLimit.md)
- [CitiesSearchResponseSubscriptionInner](docs/Model/CitiesSearchResponseSubscriptionInner.md)
- [CitiesSearchResponseSubscriptionInnerPlansInner](docs/Model/CitiesSearchResponseSubscriptionInnerPlansInner.md)
- [ContinentsAllResponse](docs/Model/ContinentsAllResponse.md)
- [ContinentsAllResponseDataInner](docs/Model/ContinentsAllResponseDataInner.md)
- [ContinentsAllResponsePagination](docs/Model/ContinentsAllResponsePagination.md)
- [ContinentsAllResponseRateLimit](docs/Model/ContinentsAllResponseRateLimit.md)
- [ContinentsAllResponseSubscriptionInner](docs/Model/ContinentsAllResponseSubscriptionInner.md)
- [ContinentsAllResponseSubscriptionInnerPlansInner](docs/Model/ContinentsAllResponseSubscriptionInnerPlansInner.md)
- [ContinentsGetByIdResponse](docs/Model/ContinentsGetByIdResponse.md)
- [ContinentsGetByIdResponseData](docs/Model/ContinentsGetByIdResponseData.md)
- [ContinentsGetByIdResponseRateLimit](docs/Model/ContinentsGetByIdResponseRateLimit.md)
- [ContinentsGetByIdResponseSubscriptionInner](docs/Model/ContinentsGetByIdResponseSubscriptionInner.md)
- [ContinentsGetByIdResponseSubscriptionInnerPlansInner](docs/Model/ContinentsGetByIdResponseSubscriptionInnerPlansInner.md)
- [CountriesAllResponse](docs/Model/CountriesAllResponse.md)
- [CountriesAllResponseDataInner](docs/Model/CountriesAllResponseDataInner.md)
- [CountriesAllResponsePagination](docs/Model/CountriesAllResponsePagination.md)
- [CountriesAllResponseRateLimit](docs/Model/CountriesAllResponseRateLimit.md)
- [CountriesAllResponseSubscriptionInner](docs/Model/CountriesAllResponseSubscriptionInner.md)
- [CountriesAllResponseSubscriptionInnerPlansInner](docs/Model/CountriesAllResponseSubscriptionInnerPlansInner.md)
- [CountriesGetByIdResponse](docs/Model/CountriesGetByIdResponse.md)
- [CountriesGetByIdResponseData](docs/Model/CountriesGetByIdResponseData.md)
- [CountriesGetByIdResponseRateLimit](docs/Model/CountriesGetByIdResponseRateLimit.md)
- [CountriesGetByIdResponseSubscriptionInner](docs/Model/CountriesGetByIdResponseSubscriptionInner.md)
- [CountriesGetByIdResponseSubscriptionInnerPlansInner](docs/Model/CountriesGetByIdResponseSubscriptionInnerPlansInner.md)
- [CountriesSearchResponse](docs/Model/CountriesSearchResponse.md)
- [CountriesSearchResponseDataInner](docs/Model/CountriesSearchResponseDataInner.md)
- [CountriesSearchResponsePagination](docs/Model/CountriesSearchResponsePagination.md)
- [CountriesSearchResponseRateLimit](docs/Model/CountriesSearchResponseRateLimit.md)
- [CountriesSearchResponseSubscriptionInner](docs/Model/CountriesSearchResponseSubscriptionInner.md)
- [CountriesSearchResponseSubscriptionInnerPlansInner](docs/Model/CountriesSearchResponseSubscriptionInnerPlansInner.md)
- [MyEnrichmentsResponse](docs/Model/MyEnrichmentsResponse.md)
- [MyEnrichmentsResponseDataInner](docs/Model/MyEnrichmentsResponseDataInner.md)
- [MyEnrichmentsResponseRateLimit](docs/Model/MyEnrichmentsResponseRateLimit.md)
- [MyEnrichmentsResponseSubscriptionInner](docs/Model/MyEnrichmentsResponseSubscriptionInner.md)
- [MyEnrichmentsResponseSubscriptionInnerPlansInner](docs/Model/MyEnrichmentsResponseSubscriptionInnerPlansInner.md)
- [MyLeaguesResponse](docs/Model/MyLeaguesResponse.md)
- [MyLeaguesResponseDataInner](docs/Model/MyLeaguesResponseDataInner.md)
- [MyLeaguesResponseDataInnerSport](docs/Model/MyLeaguesResponseDataInnerSport.md)
- [MyLeaguesResponseRateLimit](docs/Model/MyLeaguesResponseRateLimit.md)
- [MyLeaguesResponseSubscriptionInner](docs/Model/MyLeaguesResponseSubscriptionInner.md)
- [MyLeaguesResponseSubscriptionInnerPlansInner](docs/Model/MyLeaguesResponseSubscriptionInnerPlansInner.md)
- [MyResourcesResponse](docs/Model/MyResourcesResponse.md)
- [MyResourcesResponseDataInner](docs/Model/MyResourcesResponseDataInner.md)
- [MyResourcesResponseRateLimit](docs/Model/MyResourcesResponseRateLimit.md)
- [MyResourcesResponseSubscriptionInner](docs/Model/MyResourcesResponseSubscriptionInner.md)
- [MyResourcesResponseSubscriptionInnerPlansInner](docs/Model/MyResourcesResponseSubscriptionInnerPlansInner.md)
- [OddsBookmakerByIdResponse](docs/Model/OddsBookmakerByIdResponse.md)
- [OddsBookmakerByIdResponseData](docs/Model/OddsBookmakerByIdResponseData.md)
- [OddsBookmakerByIdResponseRateLimit](docs/Model/OddsBookmakerByIdResponseRateLimit.md)
- [OddsBookmakerByIdResponseSubscriptionInner](docs/Model/OddsBookmakerByIdResponseSubscriptionInner.md)
- [OddsBookmakerByIdResponseSubscriptionInnerPlansInner](docs/Model/OddsBookmakerByIdResponseSubscriptionInnerPlansInner.md)
- [OddsBookmakersAllResponse](docs/Model/OddsBookmakersAllResponse.md)
- [OddsBookmakersAllResponseDataInner](docs/Model/OddsBookmakersAllResponseDataInner.md)
- [OddsBookmakersAllResponsePagination](docs/Model/OddsBookmakersAllResponsePagination.md)
- [OddsBookmakersAllResponseRateLimit](docs/Model/OddsBookmakersAllResponseRateLimit.md)
- [OddsBookmakersAllResponseSubscriptionInner](docs/Model/OddsBookmakersAllResponseSubscriptionInner.md)
- [OddsBookmakersAllResponseSubscriptionInnerPlansInner](docs/Model/OddsBookmakersAllResponseSubscriptionInnerPlansInner.md)
- [OddsBookmakersByFixtureIdResponse](docs/Model/OddsBookmakersByFixtureIdResponse.md)
- [OddsBookmakersByFixtureIdResponseDataInner](docs/Model/OddsBookmakersByFixtureIdResponseDataInner.md)
- [OddsBookmakersByFixtureIdResponsePagination](docs/Model/OddsBookmakersByFixtureIdResponsePagination.md)
- [OddsBookmakersByFixtureIdResponseRateLimit](docs/Model/OddsBookmakersByFixtureIdResponseRateLimit.md)
- [OddsBookmakersByFixtureIdResponseSubscriptionInner](docs/Model/OddsBookmakersByFixtureIdResponseSubscriptionInner.md)
- [OddsBookmakersByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/OddsBookmakersByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [OddsBookmakersMappingByFixtureIdResponse](docs/Model/OddsBookmakersMappingByFixtureIdResponse.md)
- [OddsBookmakersMappingByFixtureIdResponseDataInner](docs/Model/OddsBookmakersMappingByFixtureIdResponseDataInner.md)
- [OddsBookmakersMappingByFixtureIdResponseRateLimit](docs/Model/OddsBookmakersMappingByFixtureIdResponseRateLimit.md)
- [OddsBookmakersMappingByFixtureIdResponseSubscriptionInner](docs/Model/OddsBookmakersMappingByFixtureIdResponseSubscriptionInner.md)
- [OddsBookmakersMappingByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/OddsBookmakersMappingByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [OddsBookmakersSearchResponse](docs/Model/OddsBookmakersSearchResponse.md)
- [OddsBookmakersSearchResponseDataInner](docs/Model/OddsBookmakersSearchResponseDataInner.md)
- [OddsBookmakersSearchResponsePagination](docs/Model/OddsBookmakersSearchResponsePagination.md)
- [OddsBookmakersSearchResponseRateLimit](docs/Model/OddsBookmakersSearchResponseRateLimit.md)
- [OddsBookmakersSearchResponseSubscriptionInner](docs/Model/OddsBookmakersSearchResponseSubscriptionInner.md)
- [OddsBookmakersSearchResponseSubscriptionInnerPlansInner](docs/Model/OddsBookmakersSearchResponseSubscriptionInnerPlansInner.md)
- [OddsFixturesUpcomingByMarketIdResponse](docs/Model/OddsFixturesUpcomingByMarketIdResponse.md)
- [OddsFixturesUpcomingByMarketIdResponseRateLimit](docs/Model/OddsFixturesUpcomingByMarketIdResponseRateLimit.md)
- [OddsFixturesUpcomingByMarketIdResponseSubscriptionInner](docs/Model/OddsFixturesUpcomingByMarketIdResponseSubscriptionInner.md)
- [OddsFixturesUpcomingByMarketIdResponseSubscriptionInnerPlansInner](docs/Model/OddsFixturesUpcomingByMarketIdResponseSubscriptionInnerPlansInner.md)
- [OddsMarketByIdResponse](docs/Model/OddsMarketByIdResponse.md)
- [OddsMarketByIdResponseData](docs/Model/OddsMarketByIdResponseData.md)
- [OddsMarketByIdResponseRateLimit](docs/Model/OddsMarketByIdResponseRateLimit.md)
- [OddsMarketByIdResponseSubscriptionInner](docs/Model/OddsMarketByIdResponseSubscriptionInner.md)
- [OddsMarketByIdResponseSubscriptionInnerPlansInner](docs/Model/OddsMarketByIdResponseSubscriptionInnerPlansInner.md)
- [OddsMarketsAllResponse](docs/Model/OddsMarketsAllResponse.md)
- [OddsMarketsAllResponseDataInner](docs/Model/OddsMarketsAllResponseDataInner.md)
- [OddsMarketsAllResponseDataInnerLegacyId](docs/Model/OddsMarketsAllResponseDataInnerLegacyId.md)
- [OddsMarketsAllResponsePagination](docs/Model/OddsMarketsAllResponsePagination.md)
- [OddsMarketsAllResponseRateLimit](docs/Model/OddsMarketsAllResponseRateLimit.md)
- [OddsMarketsAllResponseSubscriptionInner](docs/Model/OddsMarketsAllResponseSubscriptionInner.md)
- [OddsMarketsAllResponseSubscriptionInnerPlansInner](docs/Model/OddsMarketsAllResponseSubscriptionInnerPlansInner.md)
- [OddsMarketsSearchResponse](docs/Model/OddsMarketsSearchResponse.md)
- [OddsMarketsSearchResponseDataInner](docs/Model/OddsMarketsSearchResponseDataInner.md)
- [OddsMarketsSearchResponsePagination](docs/Model/OddsMarketsSearchResponsePagination.md)
- [OddsMarketsSearchResponseRateLimit](docs/Model/OddsMarketsSearchResponseRateLimit.md)
- [OddsMarketsSearchResponseSubscriptionInner](docs/Model/OddsMarketsSearchResponseSubscriptionInner.md)
- [OddsMarketsSearchResponseSubscriptionInnerPlansInner](docs/Model/OddsMarketsSearchResponseSubscriptionInnerPlansInner.md)
- [RegionsAllResponse](docs/Model/RegionsAllResponse.md)
- [RegionsAllResponseDataInner](docs/Model/RegionsAllResponseDataInner.md)
- [RegionsAllResponsePagination](docs/Model/RegionsAllResponsePagination.md)
- [RegionsAllResponseRateLimit](docs/Model/RegionsAllResponseRateLimit.md)
- [RegionsAllResponseSubscriptionInner](docs/Model/RegionsAllResponseSubscriptionInner.md)
- [RegionsAllResponseSubscriptionInnerPlansInner](docs/Model/RegionsAllResponseSubscriptionInnerPlansInner.md)
- [RegionsGetByIdResponse](docs/Model/RegionsGetByIdResponse.md)
- [RegionsGetByIdResponseData](docs/Model/RegionsGetByIdResponseData.md)
- [RegionsGetByIdResponseRateLimit](docs/Model/RegionsGetByIdResponseRateLimit.md)
- [RegionsGetByIdResponseSubscriptionInner](docs/Model/RegionsGetByIdResponseSubscriptionInner.md)
- [RegionsGetByIdResponseSubscriptionInnerPlansInner](docs/Model/RegionsGetByIdResponseSubscriptionInnerPlansInner.md)
- [RegionsSearchResponse](docs/Model/RegionsSearchResponse.md)
- [RegionsSearchResponseDataInner](docs/Model/RegionsSearchResponseDataInner.md)
- [RegionsSearchResponsePagination](docs/Model/RegionsSearchResponsePagination.md)
- [RegionsSearchResponseRateLimit](docs/Model/RegionsSearchResponseRateLimit.md)
- [RegionsSearchResponseSubscriptionInner](docs/Model/RegionsSearchResponseSubscriptionInner.md)
- [RegionsSearchResponseSubscriptionInnerPlansInner](docs/Model/RegionsSearchResponseSubscriptionInnerPlansInner.md)
- [SportCoachByIdResponse](docs/Model/SportCoachByIdResponse.md)
- [SportCoachByIdResponseData](docs/Model/SportCoachByIdResponseData.md)
- [SportCoachByIdResponseRateLimit](docs/Model/SportCoachByIdResponseRateLimit.md)
- [SportCoachByIdResponseSubscriptionInner](docs/Model/SportCoachByIdResponseSubscriptionInner.md)
- [SportCoachByIdResponseSubscriptionInnerPlansInner](docs/Model/SportCoachByIdResponseSubscriptionInnerPlansInner.md)
- [SportCoachesAllResponse](docs/Model/SportCoachesAllResponse.md)
- [SportCoachesAllResponseDataInner](docs/Model/SportCoachesAllResponseDataInner.md)
- [SportCoachesAllResponseDataInnerHeight](docs/Model/SportCoachesAllResponseDataInnerHeight.md)
- [SportCoachesAllResponseDataInnerWeight](docs/Model/SportCoachesAllResponseDataInnerWeight.md)
- [SportCoachesAllResponsePagination](docs/Model/SportCoachesAllResponsePagination.md)
- [SportCoachesAllResponseRateLimit](docs/Model/SportCoachesAllResponseRateLimit.md)
- [SportCoachesAllResponseSubscriptionInner](docs/Model/SportCoachesAllResponseSubscriptionInner.md)
- [SportCoachesAllResponseSubscriptionInnerPlansInner](docs/Model/SportCoachesAllResponseSubscriptionInnerPlansInner.md)
- [SportCoachesByCountryIdResponse](docs/Model/SportCoachesByCountryIdResponse.md)
- [SportCoachesByCountryIdResponseDataInner](docs/Model/SportCoachesByCountryIdResponseDataInner.md)
- [SportCoachesByCountryIdResponseDataInnerHeight](docs/Model/SportCoachesByCountryIdResponseDataInnerHeight.md)
- [SportCoachesByCountryIdResponseDataInnerWeight](docs/Model/SportCoachesByCountryIdResponseDataInnerWeight.md)
- [SportCoachesByCountryIdResponsePagination](docs/Model/SportCoachesByCountryIdResponsePagination.md)
- [SportCoachesByCountryIdResponseRateLimit](docs/Model/SportCoachesByCountryIdResponseRateLimit.md)
- [SportCoachesByCountryIdResponseSubscriptionInner](docs/Model/SportCoachesByCountryIdResponseSubscriptionInner.md)
- [SportCoachesByCountryIdResponseSubscriptionInnerPlansInner](docs/Model/SportCoachesByCountryIdResponseSubscriptionInnerPlansInner.md)
- [SportCoachesLatestResponse](docs/Model/SportCoachesLatestResponse.md)
- [SportCoachesLatestResponseRateLimit](docs/Model/SportCoachesLatestResponseRateLimit.md)
- [SportCoachesLatestResponseSubscriptionInner](docs/Model/SportCoachesLatestResponseSubscriptionInner.md)
- [SportCoachesLatestResponseSubscriptionInnerPlansInner](docs/Model/SportCoachesLatestResponseSubscriptionInnerPlansInner.md)
- [SportCoachesSearchResponse](docs/Model/SportCoachesSearchResponse.md)
- [SportCoachesSearchResponseDataInner](docs/Model/SportCoachesSearchResponseDataInner.md)
- [SportCoachesSearchResponseDataInnerHeight](docs/Model/SportCoachesSearchResponseDataInnerHeight.md)
- [SportCoachesSearchResponseDataInnerWeight](docs/Model/SportCoachesSearchResponseDataInnerWeight.md)
- [SportCoachesSearchResponsePagination](docs/Model/SportCoachesSearchResponsePagination.md)
- [SportCoachesSearchResponseRateLimit](docs/Model/SportCoachesSearchResponseRateLimit.md)
- [SportCoachesSearchResponseSubscriptionInner](docs/Model/SportCoachesSearchResponseSubscriptionInner.md)
- [SportCoachesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportCoachesSearchResponseSubscriptionInnerPlansInner.md)
- [SportCommentariesAllResponse](docs/Model/SportCommentariesAllResponse.md)
- [SportCommentariesAllResponseDataInner](docs/Model/SportCommentariesAllResponseDataInner.md)
- [SportCommentariesAllResponsePagination](docs/Model/SportCommentariesAllResponsePagination.md)
- [SportCommentariesAllResponseRateLimit](docs/Model/SportCommentariesAllResponseRateLimit.md)
- [SportCommentariesAllResponseSubscriptionInner](docs/Model/SportCommentariesAllResponseSubscriptionInner.md)
- [SportCommentariesAllResponseSubscriptionInnerPlansInner](docs/Model/SportCommentariesAllResponseSubscriptionInnerPlansInner.md)
- [SportCommentariesByFixtureIdResponse](docs/Model/SportCommentariesByFixtureIdResponse.md)
- [SportCommentariesByFixtureIdResponseRateLimit](docs/Model/SportCommentariesByFixtureIdResponseRateLimit.md)
- [SportCommentariesByFixtureIdResponseSubscriptionInner](docs/Model/SportCommentariesByFixtureIdResponseSubscriptionInner.md)
- [SportCommentariesByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/SportCommentariesByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [SportFixtureByDateRangeForTeamResponse](docs/Model/SportFixtureByDateRangeForTeamResponse.md)
- [SportFixtureByDateRangeForTeamResponseDataInner](docs/Model/SportFixtureByDateRangeForTeamResponseDataInner.md)
- [SportFixtureByDateRangeForTeamResponsePagination](docs/Model/SportFixtureByDateRangeForTeamResponsePagination.md)
- [SportFixtureByDateRangeForTeamResponseRateLimit](docs/Model/SportFixtureByDateRangeForTeamResponseRateLimit.md)
- [SportFixtureByDateRangeForTeamResponseSubscriptionInner](docs/Model/SportFixtureByDateRangeForTeamResponseSubscriptionInner.md)
- [SportFixtureByDateRangeForTeamResponseSubscriptionInnerPlansInner](docs/Model/SportFixtureByDateRangeForTeamResponseSubscriptionInnerPlansInner.md)
- [SportFixtureByIdResponse](docs/Model/SportFixtureByIdResponse.md)
- [SportFixtureByIdResponseDataInner](docs/Model/SportFixtureByIdResponseDataInner.md)
- [SportFixtureByIdResponsePagination](docs/Model/SportFixtureByIdResponsePagination.md)
- [SportFixtureByIdResponseRateLimit](docs/Model/SportFixtureByIdResponseRateLimit.md)
- [SportFixtureByIdResponseSubscriptionInner](docs/Model/SportFixtureByIdResponseSubscriptionInner.md)
- [SportFixtureByIdResponseSubscriptionInnerPlansInner](docs/Model/SportFixtureByIdResponseSubscriptionInnerPlansInner.md)
- [SportFixturesAllResponse](docs/Model/SportFixturesAllResponse.md)
- [SportFixturesAllResponseDataInner](docs/Model/SportFixturesAllResponseDataInner.md)
- [SportFixturesAllResponsePagination](docs/Model/SportFixturesAllResponsePagination.md)
- [SportFixturesAllResponseRateLimit](docs/Model/SportFixturesAllResponseRateLimit.md)
- [SportFixturesAllResponseSubscriptionInner](docs/Model/SportFixturesAllResponseSubscriptionInner.md)
- [SportFixturesAllResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesAllResponseSubscriptionInnerPlansInner.md)
- [SportFixturesByDateRangeResponse](docs/Model/SportFixturesByDateRangeResponse.md)
- [SportFixturesByDateRangeResponseDataInner](docs/Model/SportFixturesByDateRangeResponseDataInner.md)
- [SportFixturesByDateRangeResponsePagination](docs/Model/SportFixturesByDateRangeResponsePagination.md)
- [SportFixturesByDateRangeResponseRateLimit](docs/Model/SportFixturesByDateRangeResponseRateLimit.md)
- [SportFixturesByDateRangeResponseSubscriptionInner](docs/Model/SportFixturesByDateRangeResponseSubscriptionInner.md)
- [SportFixturesByDateRangeResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesByDateRangeResponseSubscriptionInnerPlansInner.md)
- [SportFixturesByDateResponse](docs/Model/SportFixturesByDateResponse.md)
- [SportFixturesByDateResponseDataInner](docs/Model/SportFixturesByDateResponseDataInner.md)
- [SportFixturesByDateResponsePagination](docs/Model/SportFixturesByDateResponsePagination.md)
- [SportFixturesByDateResponseRateLimit](docs/Model/SportFixturesByDateResponseRateLimit.md)
- [SportFixturesByDateResponseSubscriptionInner](docs/Model/SportFixturesByDateResponseSubscriptionInner.md)
- [SportFixturesByDateResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesByDateResponseSubscriptionInnerPlansInner.md)
- [SportFixturesByIdsResponse](docs/Model/SportFixturesByIdsResponse.md)
- [SportFixturesByIdsResponseDataInner](docs/Model/SportFixturesByIdsResponseDataInner.md)
- [SportFixturesByIdsResponseRateLimit](docs/Model/SportFixturesByIdsResponseRateLimit.md)
- [SportFixturesByIdsResponseSubscriptionInner](docs/Model/SportFixturesByIdsResponseSubscriptionInner.md)
- [SportFixturesByIdsResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesByIdsResponseSubscriptionInnerPlansInner.md)
- [SportFixturesHeadToHeadResponse](docs/Model/SportFixturesHeadToHeadResponse.md)
- [SportFixturesHeadToHeadResponseDataInner](docs/Model/SportFixturesHeadToHeadResponseDataInner.md)
- [SportFixturesHeadToHeadResponseDataInnerGroupId](docs/Model/SportFixturesHeadToHeadResponseDataInnerGroupId.md)
- [SportFixturesHeadToHeadResponseRateLimit](docs/Model/SportFixturesHeadToHeadResponseRateLimit.md)
- [SportFixturesHeadToHeadResponseSubscriptionInner](docs/Model/SportFixturesHeadToHeadResponseSubscriptionInner.md)
- [SportFixturesHeadToHeadResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesHeadToHeadResponseSubscriptionInnerPlansInner.md)
- [SportFixturesSearchResponse](docs/Model/SportFixturesSearchResponse.md)
- [SportFixturesSearchResponseDataInner](docs/Model/SportFixturesSearchResponseDataInner.md)
- [SportFixturesSearchResponsePagination](docs/Model/SportFixturesSearchResponsePagination.md)
- [SportFixturesSearchResponseRateLimit](docs/Model/SportFixturesSearchResponseRateLimit.md)
- [SportFixturesSearchResponseSubscriptionInner](docs/Model/SportFixturesSearchResponseSubscriptionInner.md)
- [SportFixturesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportFixturesSearchResponseSubscriptionInnerPlansInner.md)
- [SportLeagueByIdResponse](docs/Model/SportLeagueByIdResponse.md)
- [SportLeagueByIdResponseData](docs/Model/SportLeagueByIdResponseData.md)
- [SportLeagueByIdResponseRateLimit](docs/Model/SportLeagueByIdResponseRateLimit.md)
- [SportLeagueByIdResponseSubscriptionInner](docs/Model/SportLeagueByIdResponseSubscriptionInner.md)
- [SportLeagueByIdResponseSubscriptionInnerPlansInner](docs/Model/SportLeagueByIdResponseSubscriptionInnerPlansInner.md)
- [SportLeaguesAllResponse](docs/Model/SportLeaguesAllResponse.md)
- [SportLeaguesAllResponseDataInner](docs/Model/SportLeaguesAllResponseDataInner.md)
- [SportLeaguesAllResponsePagination](docs/Model/SportLeaguesAllResponsePagination.md)
- [SportLeaguesAllResponseRateLimit](docs/Model/SportLeaguesAllResponseRateLimit.md)
- [SportLeaguesAllResponseSubscriptionInner](docs/Model/SportLeaguesAllResponseSubscriptionInner.md)
- [SportLeaguesAllResponseSubscriptionInnerPlansInner](docs/Model/SportLeaguesAllResponseSubscriptionInnerPlansInner.md)
- [SportLeaguesByCountryIdResponse](docs/Model/SportLeaguesByCountryIdResponse.md)
- [SportLeaguesByCountryIdResponseDataInner](docs/Model/SportLeaguesByCountryIdResponseDataInner.md)
- [SportLeaguesByCountryIdResponsePagination](docs/Model/SportLeaguesByCountryIdResponsePagination.md)
- [SportLeaguesByCountryIdResponseRateLimit](docs/Model/SportLeaguesByCountryIdResponseRateLimit.md)
- [SportLeaguesByCountryIdResponseSubscriptionInner](docs/Model/SportLeaguesByCountryIdResponseSubscriptionInner.md)
- [SportLeaguesByCountryIdResponseSubscriptionInnerPlansInner](docs/Model/SportLeaguesByCountryIdResponseSubscriptionInnerPlansInner.md)
- [SportLeaguesByDateResponse](docs/Model/SportLeaguesByDateResponse.md)
- [SportLeaguesByDateResponseDataInner](docs/Model/SportLeaguesByDateResponseDataInner.md)
- [SportLeaguesByDateResponsePagination](docs/Model/SportLeaguesByDateResponsePagination.md)
- [SportLeaguesByDateResponseRateLimit](docs/Model/SportLeaguesByDateResponseRateLimit.md)
- [SportLeaguesByDateResponseSubscriptionInner](docs/Model/SportLeaguesByDateResponseSubscriptionInner.md)
- [SportLeaguesByDateResponseSubscriptionInnerPlansInner](docs/Model/SportLeaguesByDateResponseSubscriptionInnerPlansInner.md)
- [SportLeaguesLiveResponse](docs/Model/SportLeaguesLiveResponse.md)
- [SportLeaguesLiveResponseDataInner](docs/Model/SportLeaguesLiveResponseDataInner.md)
- [SportLeaguesLiveResponseRateLimit](docs/Model/SportLeaguesLiveResponseRateLimit.md)
- [SportLeaguesLiveResponseSubscriptionInner](docs/Model/SportLeaguesLiveResponseSubscriptionInner.md)
- [SportLeaguesLiveResponseSubscriptionInnerPlansInner](docs/Model/SportLeaguesLiveResponseSubscriptionInnerPlansInner.md)
- [SportLeaguesSearchResponse](docs/Model/SportLeaguesSearchResponse.md)
- [SportLeaguesSearchResponseDataInner](docs/Model/SportLeaguesSearchResponseDataInner.md)
- [SportLeaguesSearchResponsePagination](docs/Model/SportLeaguesSearchResponsePagination.md)
- [SportLeaguesSearchResponseRateLimit](docs/Model/SportLeaguesSearchResponseRateLimit.md)
- [SportLeaguesSearchResponseSubscriptionInner](docs/Model/SportLeaguesSearchResponseSubscriptionInner.md)
- [SportLeaguesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportLeaguesSearchResponseSubscriptionInnerPlansInner.md)
- [SportLivescoresAllInPlayResponse](docs/Model/SportLivescoresAllInPlayResponse.md)
- [SportLivescoresAllInPlayResponseDataInner](docs/Model/SportLivescoresAllInPlayResponseDataInner.md)
- [SportLivescoresAllInPlayResponseRateLimit](docs/Model/SportLivescoresAllInPlayResponseRateLimit.md)
- [SportLivescoresAllInPlayResponseSubscriptionInner](docs/Model/SportLivescoresAllInPlayResponseSubscriptionInner.md)
- [SportLivescoresAllInPlayResponseSubscriptionInnerPlansInner](docs/Model/SportLivescoresAllInPlayResponseSubscriptionInnerPlansInner.md)
- [SportLivescoresAllResponse](docs/Model/SportLivescoresAllResponse.md)
- [SportLivescoresAllResponseDataInner](docs/Model/SportLivescoresAllResponseDataInner.md)
- [SportLivescoresAllResponseRateLimit](docs/Model/SportLivescoresAllResponseRateLimit.md)
- [SportLivescoresAllResponseSubscriptionInner](docs/Model/SportLivescoresAllResponseSubscriptionInner.md)
- [SportLivescoresAllResponseSubscriptionInnerPlansInner](docs/Model/SportLivescoresAllResponseSubscriptionInnerPlansInner.md)
- [SportLivescoresLatestResponse](docs/Model/SportLivescoresLatestResponse.md)
- [SportLivescoresLatestResponseDataInner](docs/Model/SportLivescoresLatestResponseDataInner.md)
- [SportLivescoresLatestResponseRateLimit](docs/Model/SportLivescoresLatestResponseRateLimit.md)
- [SportLivescoresLatestResponseSubscriptionInner](docs/Model/SportLivescoresLatestResponseSubscriptionInner.md)
- [SportLivescoresLatestResponseSubscriptionInnerPlansInner](docs/Model/SportLivescoresLatestResponseSubscriptionInnerPlansInner.md)
- [SportNewsAllPreMatchResponse](docs/Model/SportNewsAllPreMatchResponse.md)
- [SportNewsAllPreMatchResponseDataInner](docs/Model/SportNewsAllPreMatchResponseDataInner.md)
- [SportNewsAllPreMatchResponsePagination](docs/Model/SportNewsAllPreMatchResponsePagination.md)
- [SportNewsAllPreMatchResponseRateLimit](docs/Model/SportNewsAllPreMatchResponseRateLimit.md)
- [SportNewsAllPreMatchResponseSubscriptionInner](docs/Model/SportNewsAllPreMatchResponseSubscriptionInner.md)
- [SportNewsAllPreMatchResponseSubscriptionInnerAddOnsInner](docs/Model/SportNewsAllPreMatchResponseSubscriptionInnerAddOnsInner.md)
- [SportNewsAllPreMatchResponseSubscriptionInnerPlansInner](docs/Model/SportNewsAllPreMatchResponseSubscriptionInnerPlansInner.md)
- [SportNewsPreMatchBySeasonIdResponse](docs/Model/SportNewsPreMatchBySeasonIdResponse.md)
- [SportNewsPreMatchBySeasonIdResponseDataInner](docs/Model/SportNewsPreMatchBySeasonIdResponseDataInner.md)
- [SportNewsPreMatchBySeasonIdResponsePagination](docs/Model/SportNewsPreMatchBySeasonIdResponsePagination.md)
- [SportNewsPreMatchBySeasonIdResponseRateLimit](docs/Model/SportNewsPreMatchBySeasonIdResponseRateLimit.md)
- [SportNewsPreMatchBySeasonIdResponseSubscriptionInner](docs/Model/SportNewsPreMatchBySeasonIdResponseSubscriptionInner.md)
- [SportNewsPreMatchBySeasonIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportNewsPreMatchBySeasonIdResponseSubscriptionInnerAddOnsInner.md)
- [SportNewsPreMatchBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportNewsPreMatchBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportNewsUpcomingPreMatchResponse](docs/Model/SportNewsUpcomingPreMatchResponse.md)
- [SportNewsUpcomingPreMatchResponseDataInner](docs/Model/SportNewsUpcomingPreMatchResponseDataInner.md)
- [SportNewsUpcomingPreMatchResponsePagination](docs/Model/SportNewsUpcomingPreMatchResponsePagination.md)
- [SportNewsUpcomingPreMatchResponseRateLimit](docs/Model/SportNewsUpcomingPreMatchResponseRateLimit.md)
- [SportNewsUpcomingPreMatchResponseSubscriptionInner](docs/Model/SportNewsUpcomingPreMatchResponseSubscriptionInner.md)
- [SportNewsUpcomingPreMatchResponseSubscriptionInnerAddOnsInner](docs/Model/SportNewsUpcomingPreMatchResponseSubscriptionInnerAddOnsInner.md)
- [SportNewsUpcomingPreMatchResponseSubscriptionInnerPlansInner](docs/Model/SportNewsUpcomingPreMatchResponseSubscriptionInnerPlansInner.md)
- [SportOddsAllInPlayResponse](docs/Model/SportOddsAllInPlayResponse.md)
- [SportOddsAllInPlayResponseDataInner](docs/Model/SportOddsAllInPlayResponseDataInner.md)
- [SportOddsAllInPlayResponsePagination](docs/Model/SportOddsAllInPlayResponsePagination.md)
- [SportOddsAllInPlayResponseRateLimit](docs/Model/SportOddsAllInPlayResponseRateLimit.md)
- [SportOddsAllInPlayResponseSubscriptionInner](docs/Model/SportOddsAllInPlayResponseSubscriptionInner.md)
- [SportOddsAllInPlayResponseSubscriptionInnerAddOnsInner](docs/Model/SportOddsAllInPlayResponseSubscriptionInnerAddOnsInner.md)
- [SportOddsAllInPlayResponseSubscriptionInnerPlansInner](docs/Model/SportOddsAllInPlayResponseSubscriptionInnerPlansInner.md)
- [SportOddsAllPreMatchResponse](docs/Model/SportOddsAllPreMatchResponse.md)
- [SportOddsAllPreMatchResponseDataInner](docs/Model/SportOddsAllPreMatchResponseDataInner.md)
- [SportOddsAllPreMatchResponsePagination](docs/Model/SportOddsAllPreMatchResponsePagination.md)
- [SportOddsAllPreMatchResponseRateLimit](docs/Model/SportOddsAllPreMatchResponseRateLimit.md)
- [SportOddsAllPreMatchResponseSubscriptionInner](docs/Model/SportOddsAllPreMatchResponseSubscriptionInner.md)
- [SportOddsAllPreMatchResponseSubscriptionInnerPlansInner](docs/Model/SportOddsAllPreMatchResponseSubscriptionInnerPlansInner.md)
- [SportOddsInPlayByFixtureIdResponse](docs/Model/SportOddsInPlayByFixtureIdResponse.md)
- [SportOddsInPlayByFixtureIdResponseDataInner](docs/Model/SportOddsInPlayByFixtureIdResponseDataInner.md)
- [SportOddsInPlayByFixtureIdResponseRateLimit](docs/Model/SportOddsInPlayByFixtureIdResponseRateLimit.md)
- [SportOddsInPlayByFixtureIdResponseSubscriptionInner](docs/Model/SportOddsInPlayByFixtureIdResponseSubscriptionInner.md)
- [SportOddsInPlayByFixtureIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportOddsInPlayByFixtureIdResponseSubscriptionInnerAddOnsInner.md)
- [SportOddsInPlayByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/SportOddsInPlayByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponse](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponse.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponseDataInner](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponseDataInner.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponseDataInnerWinning](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponseDataInnerWinning.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponseRateLimit](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponseRateLimit.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponseSubscriptionInner](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponseSubscriptionInner.md)
- [SportOddsPreMatchByFixtureAndBookmakerIdResponseSubscriptionInnerPlansInner](docs/Model/SportOddsPreMatchByFixtureAndBookmakerIdResponseSubscriptionInnerPlansInner.md)
- [SportOddsPreMatchByFixtureAndMarketIdResponse](docs/Model/SportOddsPreMatchByFixtureAndMarketIdResponse.md)
- [SportOddsPreMatchByFixtureAndMarketIdResponseDataInner](docs/Model/SportOddsPreMatchByFixtureAndMarketIdResponseDataInner.md)
- [SportOddsPreMatchByFixtureAndMarketIdResponseRateLimit](docs/Model/SportOddsPreMatchByFixtureAndMarketIdResponseRateLimit.md)
- [SportOddsPreMatchByFixtureAndMarketIdResponseSubscriptionInner](docs/Model/SportOddsPreMatchByFixtureAndMarketIdResponseSubscriptionInner.md)
- [SportOddsPreMatchByFixtureAndMarketIdResponseSubscriptionInnerPlansInner](docs/Model/SportOddsPreMatchByFixtureAndMarketIdResponseSubscriptionInnerPlansInner.md)
- [SportOddsPreMatchByFixtureIdResponse](docs/Model/SportOddsPreMatchByFixtureIdResponse.md)
- [SportOddsPreMatchByFixtureIdResponseDataInner](docs/Model/SportOddsPreMatchByFixtureIdResponseDataInner.md)
- [SportOddsPreMatchByFixtureIdResponseDataInnerWinning](docs/Model/SportOddsPreMatchByFixtureIdResponseDataInnerWinning.md)
- [SportOddsPreMatchByFixtureIdResponseRateLimit](docs/Model/SportOddsPreMatchByFixtureIdResponseRateLimit.md)
- [SportOddsPreMatchByFixtureIdResponseSubscriptionInner](docs/Model/SportOddsPreMatchByFixtureIdResponseSubscriptionInner.md)
- [SportOddsPreMatchByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/SportOddsPreMatchByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [SportPlayerByIdResponse](docs/Model/SportPlayerByIdResponse.md)
- [SportPlayerByIdResponseData](docs/Model/SportPlayerByIdResponseData.md)
- [SportPlayerByIdResponseRateLimit](docs/Model/SportPlayerByIdResponseRateLimit.md)
- [SportPlayerByIdResponseSubscriptionInner](docs/Model/SportPlayerByIdResponseSubscriptionInner.md)
- [SportPlayerByIdResponseSubscriptionInnerPlansInner](docs/Model/SportPlayerByIdResponseSubscriptionInnerPlansInner.md)
- [SportPlayersAllResponse](docs/Model/SportPlayersAllResponse.md)
- [SportPlayersAllResponseDataInner](docs/Model/SportPlayersAllResponseDataInner.md)
- [SportPlayersAllResponseDataInnerDetailedPositionId](docs/Model/SportPlayersAllResponseDataInnerDetailedPositionId.md)
- [SportPlayersAllResponsePagination](docs/Model/SportPlayersAllResponsePagination.md)
- [SportPlayersAllResponseRateLimit](docs/Model/SportPlayersAllResponseRateLimit.md)
- [SportPlayersAllResponseSubscriptionInner](docs/Model/SportPlayersAllResponseSubscriptionInner.md)
- [SportPlayersAllResponseSubscriptionInnerPlansInner](docs/Model/SportPlayersAllResponseSubscriptionInnerPlansInner.md)
- [SportPlayersByCountryIdResponse](docs/Model/SportPlayersByCountryIdResponse.md)
- [SportPlayersByCountryIdResponseDataInner](docs/Model/SportPlayersByCountryIdResponseDataInner.md)
- [SportPlayersByCountryIdResponseDataInnerDetailedPositionId](docs/Model/SportPlayersByCountryIdResponseDataInnerDetailedPositionId.md)
- [SportPlayersByCountryIdResponseDataInnerHeight](docs/Model/SportPlayersByCountryIdResponseDataInnerHeight.md)
- [SportPlayersByCountryIdResponseDataInnerPositionId](docs/Model/SportPlayersByCountryIdResponseDataInnerPositionId.md)
- [SportPlayersByCountryIdResponseDataInnerWeight](docs/Model/SportPlayersByCountryIdResponseDataInnerWeight.md)
- [SportPlayersByCountryIdResponsePagination](docs/Model/SportPlayersByCountryIdResponsePagination.md)
- [SportPlayersByCountryIdResponseRateLimit](docs/Model/SportPlayersByCountryIdResponseRateLimit.md)
- [SportPlayersByCountryIdResponseSubscriptionInner](docs/Model/SportPlayersByCountryIdResponseSubscriptionInner.md)
- [SportPlayersByCountryIdResponseSubscriptionInnerPlansInner](docs/Model/SportPlayersByCountryIdResponseSubscriptionInnerPlansInner.md)
- [SportPlayersLatestResponse](docs/Model/SportPlayersLatestResponse.md)
- [SportPlayersLatestResponseDataInner](docs/Model/SportPlayersLatestResponseDataInner.md)
- [SportPlayersLatestResponseDataInnerDetailedPositionId](docs/Model/SportPlayersLatestResponseDataInnerDetailedPositionId.md)
- [SportPlayersLatestResponseDataInnerHeight](docs/Model/SportPlayersLatestResponseDataInnerHeight.md)
- [SportPlayersLatestResponseDataInnerWeight](docs/Model/SportPlayersLatestResponseDataInnerWeight.md)
- [SportPlayersLatestResponseRateLimit](docs/Model/SportPlayersLatestResponseRateLimit.md)
- [SportPlayersLatestResponseSubscriptionInner](docs/Model/SportPlayersLatestResponseSubscriptionInner.md)
- [SportPlayersLatestResponseSubscriptionInnerPlansInner](docs/Model/SportPlayersLatestResponseSubscriptionInnerPlansInner.md)
- [SportPlayersSearchResponse](docs/Model/SportPlayersSearchResponse.md)
- [SportPlayersSearchResponseDataInner](docs/Model/SportPlayersSearchResponseDataInner.md)
- [SportPlayersSearchResponseDataInnerDetailedPositionId](docs/Model/SportPlayersSearchResponseDataInnerDetailedPositionId.md)
- [SportPlayersSearchResponsePagination](docs/Model/SportPlayersSearchResponsePagination.md)
- [SportPlayersSearchResponseRateLimit](docs/Model/SportPlayersSearchResponseRateLimit.md)
- [SportPlayersSearchResponseSubscriptionInner](docs/Model/SportPlayersSearchResponseSubscriptionInner.md)
- [SportPlayersSearchResponseSubscriptionInnerPlansInner](docs/Model/SportPlayersSearchResponseSubscriptionInnerPlansInner.md)
- [SportPredictionsAllResponse](docs/Model/SportPredictionsAllResponse.md)
- [SportPredictionsAllResponseDataInner](docs/Model/SportPredictionsAllResponseDataInner.md)
- [SportPredictionsAllResponseDataInnerPredictions](docs/Model/SportPredictionsAllResponseDataInnerPredictions.md)
- [SportPredictionsAllResponseDataInnerPredictionsScores](docs/Model/SportPredictionsAllResponseDataInnerPredictionsScores.md)
- [SportPredictionsAllResponsePagination](docs/Model/SportPredictionsAllResponsePagination.md)
- [SportPredictionsAllResponseRateLimit](docs/Model/SportPredictionsAllResponseRateLimit.md)
- [SportPredictionsAllResponseSubscriptionInner](docs/Model/SportPredictionsAllResponseSubscriptionInner.md)
- [SportPredictionsAllResponseSubscriptionInnerAddOnsInner](docs/Model/SportPredictionsAllResponseSubscriptionInnerAddOnsInner.md)
- [SportPredictionsAllResponseSubscriptionInnerPlansInner](docs/Model/SportPredictionsAllResponseSubscriptionInnerPlansInner.md)
- [SportPredictionsAllValueBetsResponse](docs/Model/SportPredictionsAllValueBetsResponse.md)
- [SportPredictionsAllValueBetsResponseDataInner](docs/Model/SportPredictionsAllValueBetsResponseDataInner.md)
- [SportPredictionsAllValueBetsResponseDataInnerPredictions](docs/Model/SportPredictionsAllValueBetsResponseDataInnerPredictions.md)
- [SportPredictionsAllValueBetsResponsePagination](docs/Model/SportPredictionsAllValueBetsResponsePagination.md)
- [SportPredictionsAllValueBetsResponseRateLimit](docs/Model/SportPredictionsAllValueBetsResponseRateLimit.md)
- [SportPredictionsAllValueBetsResponseSubscriptionInner](docs/Model/SportPredictionsAllValueBetsResponseSubscriptionInner.md)
- [SportPredictionsAllValueBetsResponseSubscriptionInnerAddOnsInner](docs/Model/SportPredictionsAllValueBetsResponseSubscriptionInnerAddOnsInner.md)
- [SportPredictionsAllValueBetsResponseSubscriptionInnerPlansInner](docs/Model/SportPredictionsAllValueBetsResponseSubscriptionInnerPlansInner.md)
- [SportPredictionsByFixtureIdResponse](docs/Model/SportPredictionsByFixtureIdResponse.md)
- [SportPredictionsByFixtureIdResponseDataInner](docs/Model/SportPredictionsByFixtureIdResponseDataInner.md)
- [SportPredictionsByFixtureIdResponseDataInnerPredictions](docs/Model/SportPredictionsByFixtureIdResponseDataInnerPredictions.md)
- [SportPredictionsByFixtureIdResponseDataInnerPredictionsScores](docs/Model/SportPredictionsByFixtureIdResponseDataInnerPredictionsScores.md)
- [SportPredictionsByFixtureIdResponsePagination](docs/Model/SportPredictionsByFixtureIdResponsePagination.md)
- [SportPredictionsByFixtureIdResponseRateLimit](docs/Model/SportPredictionsByFixtureIdResponseRateLimit.md)
- [SportPredictionsByFixtureIdResponseSubscriptionInner](docs/Model/SportPredictionsByFixtureIdResponseSubscriptionInner.md)
- [SportPredictionsByFixtureIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportPredictionsByFixtureIdResponseSubscriptionInnerAddOnsInner.md)
- [SportPredictionsByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/SportPredictionsByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [SportRefereeByIdResponse](docs/Model/SportRefereeByIdResponse.md)
- [SportRefereeByIdResponseData](docs/Model/SportRefereeByIdResponseData.md)
- [SportRefereeByIdResponseRateLimit](docs/Model/SportRefereeByIdResponseRateLimit.md)
- [SportRefereeByIdResponseSubscriptionInner](docs/Model/SportRefereeByIdResponseSubscriptionInner.md)
- [SportRefereeByIdResponseSubscriptionInnerPlansInner](docs/Model/SportRefereeByIdResponseSubscriptionInnerPlansInner.md)
- [SportRefereesAllResponse](docs/Model/SportRefereesAllResponse.md)
- [SportRefereesAllResponseDataInner](docs/Model/SportRefereesAllResponseDataInner.md)
- [SportRefereesAllResponseDataInnerCountryId](docs/Model/SportRefereesAllResponseDataInnerCountryId.md)
- [SportRefereesAllResponsePagination](docs/Model/SportRefereesAllResponsePagination.md)
- [SportRefereesAllResponseRateLimit](docs/Model/SportRefereesAllResponseRateLimit.md)
- [SportRefereesAllResponseSubscriptionInner](docs/Model/SportRefereesAllResponseSubscriptionInner.md)
- [SportRefereesAllResponseSubscriptionInnerPlansInner](docs/Model/SportRefereesAllResponseSubscriptionInnerPlansInner.md)
- [SportRefereesByCountryIdResponse](docs/Model/SportRefereesByCountryIdResponse.md)
- [SportRefereesByCountryIdResponseDataInner](docs/Model/SportRefereesByCountryIdResponseDataInner.md)
- [SportRefereesByCountryIdResponsePagination](docs/Model/SportRefereesByCountryIdResponsePagination.md)
- [SportRefereesByCountryIdResponseRateLimit](docs/Model/SportRefereesByCountryIdResponseRateLimit.md)
- [SportRefereesByCountryIdResponseSubscriptionInner](docs/Model/SportRefereesByCountryIdResponseSubscriptionInner.md)
- [SportRefereesByCountryIdResponseSubscriptionInnerPlansInner](docs/Model/SportRefereesByCountryIdResponseSubscriptionInnerPlansInner.md)
- [SportRefereesBySeasonIdResponse](docs/Model/SportRefereesBySeasonIdResponse.md)
- [SportRefereesBySeasonIdResponseDataInner](docs/Model/SportRefereesBySeasonIdResponseDataInner.md)
- [SportRefereesBySeasonIdResponsePagination](docs/Model/SportRefereesBySeasonIdResponsePagination.md)
- [SportRefereesBySeasonIdResponseRateLimit](docs/Model/SportRefereesBySeasonIdResponseRateLimit.md)
- [SportRefereesBySeasonIdResponseSubscriptionInner](docs/Model/SportRefereesBySeasonIdResponseSubscriptionInner.md)
- [SportRefereesBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportRefereesBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportRefereesSearchResponse](docs/Model/SportRefereesSearchResponse.md)
- [SportRefereesSearchResponseDataInner](docs/Model/SportRefereesSearchResponseDataInner.md)
- [SportRefereesSearchResponsePagination](docs/Model/SportRefereesSearchResponsePagination.md)
- [SportRefereesSearchResponseRateLimit](docs/Model/SportRefereesSearchResponseRateLimit.md)
- [SportRefereesSearchResponseSubscriptionInner](docs/Model/SportRefereesSearchResponseSubscriptionInner.md)
- [SportRefereesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportRefereesSearchResponseSubscriptionInnerPlansInner.md)
- [SportRivalsAllResponse](docs/Model/SportRivalsAllResponse.md)
- [SportRivalsAllResponseDataInner](docs/Model/SportRivalsAllResponseDataInner.md)
- [SportRivalsAllResponsePagination](docs/Model/SportRivalsAllResponsePagination.md)
- [SportRivalsAllResponseRateLimit](docs/Model/SportRivalsAllResponseRateLimit.md)
- [SportRivalsAllResponseSubscriptionInner](docs/Model/SportRivalsAllResponseSubscriptionInner.md)
- [SportRivalsAllResponseSubscriptionInnerAddOnsInner](docs/Model/SportRivalsAllResponseSubscriptionInnerAddOnsInner.md)
- [SportRivalsAllResponseSubscriptionInnerPlansInner](docs/Model/SportRivalsAllResponseSubscriptionInnerPlansInner.md)
- [SportRivalsByTeamIdResponse](docs/Model/SportRivalsByTeamIdResponse.md)
- [SportRivalsByTeamIdResponseDataInner](docs/Model/SportRivalsByTeamIdResponseDataInner.md)
- [SportRivalsByTeamIdResponseRateLimit](docs/Model/SportRivalsByTeamIdResponseRateLimit.md)
- [SportRivalsByTeamIdResponseSubscriptionInner](docs/Model/SportRivalsByTeamIdResponseSubscriptionInner.md)
- [SportRivalsByTeamIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportRivalsByTeamIdResponseSubscriptionInnerAddOnsInner.md)
- [SportRivalsByTeamIdResponseSubscriptionInnerPlansInner](docs/Model/SportRivalsByTeamIdResponseSubscriptionInnerPlansInner.md)
- [SportRoundByIdResponse](docs/Model/SportRoundByIdResponse.md)
- [SportRoundByIdResponseData](docs/Model/SportRoundByIdResponseData.md)
- [SportRoundByIdResponseRateLimit](docs/Model/SportRoundByIdResponseRateLimit.md)
- [SportRoundByIdResponseSubscriptionInner](docs/Model/SportRoundByIdResponseSubscriptionInner.md)
- [SportRoundByIdResponseSubscriptionInnerPlansInner](docs/Model/SportRoundByIdResponseSubscriptionInnerPlansInner.md)
- [SportRoundsAllResponse](docs/Model/SportRoundsAllResponse.md)
- [SportRoundsAllResponseDataInner](docs/Model/SportRoundsAllResponseDataInner.md)
- [SportRoundsAllResponsePagination](docs/Model/SportRoundsAllResponsePagination.md)
- [SportRoundsAllResponseRateLimit](docs/Model/SportRoundsAllResponseRateLimit.md)
- [SportRoundsAllResponseSubscriptionInner](docs/Model/SportRoundsAllResponseSubscriptionInner.md)
- [SportRoundsAllResponseSubscriptionInnerPlansInner](docs/Model/SportRoundsAllResponseSubscriptionInnerPlansInner.md)
- [SportRoundsBySeasonIdResponse](docs/Model/SportRoundsBySeasonIdResponse.md)
- [SportRoundsBySeasonIdResponseDataInner](docs/Model/SportRoundsBySeasonIdResponseDataInner.md)
- [SportRoundsBySeasonIdResponseRateLimit](docs/Model/SportRoundsBySeasonIdResponseRateLimit.md)
- [SportRoundsBySeasonIdResponseSubscriptionInner](docs/Model/SportRoundsBySeasonIdResponseSubscriptionInner.md)
- [SportRoundsBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportRoundsBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportRoundsSearchResponse](docs/Model/SportRoundsSearchResponse.md)
- [SportRoundsSearchResponseDataInner](docs/Model/SportRoundsSearchResponseDataInner.md)
- [SportRoundsSearchResponsePagination](docs/Model/SportRoundsSearchResponsePagination.md)
- [SportRoundsSearchResponseRateLimit](docs/Model/SportRoundsSearchResponseRateLimit.md)
- [SportRoundsSearchResponseSubscriptionInner](docs/Model/SportRoundsSearchResponseSubscriptionInner.md)
- [SportRoundsSearchResponseSubscriptionInnerPlansInner](docs/Model/SportRoundsSearchResponseSubscriptionInnerPlansInner.md)
- [SportSchedulesBySeasonIdResponse](docs/Model/SportSchedulesBySeasonIdResponse.md)
- [SportSchedulesBySeasonIdResponseDataInner](docs/Model/SportSchedulesBySeasonIdResponseDataInner.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInner](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInner.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInner](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInner.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerAwayScore](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerAwayScore.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerHomeScore](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerHomeScore.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner.md)
- [SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInnerMeta](docs/Model/SportSchedulesBySeasonIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInnerMeta.md)
- [SportSchedulesBySeasonIdResponseRateLimit](docs/Model/SportSchedulesBySeasonIdResponseRateLimit.md)
- [SportSchedulesBySeasonIdResponseSubscriptionInner](docs/Model/SportSchedulesBySeasonIdResponseSubscriptionInner.md)
- [SportSchedulesBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportSchedulesBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportSchedulesByTeamAndSeasonIdResponse](docs/Model/SportSchedulesByTeamAndSeasonIdResponse.md)
- [SportSchedulesByTeamAndSeasonIdResponseDataInner](docs/Model/SportSchedulesByTeamAndSeasonIdResponseDataInner.md)
- [SportSchedulesByTeamAndSeasonIdResponseDataInnerRoundsInner](docs/Model/SportSchedulesByTeamAndSeasonIdResponseDataInnerRoundsInner.md)
- [SportSchedulesByTeamAndSeasonIdResponseRateLimit](docs/Model/SportSchedulesByTeamAndSeasonIdResponseRateLimit.md)
- [SportSchedulesByTeamAndSeasonIdResponseSubscriptionInner](docs/Model/SportSchedulesByTeamAndSeasonIdResponseSubscriptionInner.md)
- [SportSchedulesByTeamAndSeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportSchedulesByTeamAndSeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportSchedulesByTeamIdResponse](docs/Model/SportSchedulesByTeamIdResponse.md)
- [SportSchedulesByTeamIdResponseDataInner](docs/Model/SportSchedulesByTeamIdResponseDataInner.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInner](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInner.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInner](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInner.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerAwayScore](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerAwayScore.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerHomeScore](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerHomeScore.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInner.md)
- [SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInnerMeta](docs/Model/SportSchedulesByTeamIdResponseDataInnerRoundsInnerFixturesInnerParticipantsInnerMeta.md)
- [SportSchedulesByTeamIdResponseRateLimit](docs/Model/SportSchedulesByTeamIdResponseRateLimit.md)
- [SportSchedulesByTeamIdResponseSubscriptionInner](docs/Model/SportSchedulesByTeamIdResponseSubscriptionInner.md)
- [SportSchedulesByTeamIdResponseSubscriptionInnerPlansInner](docs/Model/SportSchedulesByTeamIdResponseSubscriptionInnerPlansInner.md)
- [SportSeasonByIdResponse](docs/Model/SportSeasonByIdResponse.md)
- [SportSeasonByIdResponseData](docs/Model/SportSeasonByIdResponseData.md)
- [SportSeasonByIdResponseRateLimit](docs/Model/SportSeasonByIdResponseRateLimit.md)
- [SportSeasonByIdResponseSubscriptionInner](docs/Model/SportSeasonByIdResponseSubscriptionInner.md)
- [SportSeasonByIdResponseSubscriptionInnerPlansInner](docs/Model/SportSeasonByIdResponseSubscriptionInnerPlansInner.md)
- [SportSeasonsAllResponse](docs/Model/SportSeasonsAllResponse.md)
- [SportSeasonsAllResponseDataInner](docs/Model/SportSeasonsAllResponseDataInner.md)
- [SportSeasonsAllResponsePagination](docs/Model/SportSeasonsAllResponsePagination.md)
- [SportSeasonsAllResponseRateLimit](docs/Model/SportSeasonsAllResponseRateLimit.md)
- [SportSeasonsAllResponseSubscriptionInner](docs/Model/SportSeasonsAllResponseSubscriptionInner.md)
- [SportSeasonsAllResponseSubscriptionInnerPlansInner](docs/Model/SportSeasonsAllResponseSubscriptionInnerPlansInner.md)
- [SportSeasonsSearchResponse](docs/Model/SportSeasonsSearchResponse.md)
- [SportSeasonsSearchResponseDataInner](docs/Model/SportSeasonsSearchResponseDataInner.md)
- [SportSeasonsSearchResponsePagination](docs/Model/SportSeasonsSearchResponsePagination.md)
- [SportSeasonsSearchResponseRateLimit](docs/Model/SportSeasonsSearchResponseRateLimit.md)
- [SportSeasonsSearchResponseSubscriptionInner](docs/Model/SportSeasonsSearchResponseSubscriptionInner.md)
- [SportSeasonsSearchResponseSubscriptionInnerPlansInner](docs/Model/SportSeasonsSearchResponseSubscriptionInnerPlansInner.md)
- [SportSquadsBySeasonAndTeamIdResponse](docs/Model/SportSquadsBySeasonAndTeamIdResponse.md)
- [SportSquadsBySeasonAndTeamIdResponseRateLimit](docs/Model/SportSquadsBySeasonAndTeamIdResponseRateLimit.md)
- [SportSquadsBySeasonAndTeamIdResponseSubscriptionInner](docs/Model/SportSquadsBySeasonAndTeamIdResponseSubscriptionInner.md)
- [SportSquadsBySeasonAndTeamIdResponseSubscriptionInnerPlansInner](docs/Model/SportSquadsBySeasonAndTeamIdResponseSubscriptionInnerPlansInner.md)
- [SportSquadsByTeamIdResponse](docs/Model/SportSquadsByTeamIdResponse.md)
- [SportSquadsByTeamIdResponseDataInner](docs/Model/SportSquadsByTeamIdResponseDataInner.md)
- [SportSquadsByTeamIdResponseDataInnerTransferId](docs/Model/SportSquadsByTeamIdResponseDataInnerTransferId.md)
- [SportSquadsByTeamIdResponseDataInnerYerseyNumber](docs/Model/SportSquadsByTeamIdResponseDataInnerYerseyNumber.md)
- [SportSquadsByTeamIdResponseRateLimit](docs/Model/SportSquadsByTeamIdResponseRateLimit.md)
- [SportSquadsByTeamIdResponseSubscriptionInner](docs/Model/SportSquadsByTeamIdResponseSubscriptionInner.md)
- [SportSquadsByTeamIdResponseSubscriptionInnerPlansInner](docs/Model/SportSquadsByTeamIdResponseSubscriptionInnerPlansInner.md)
- [SportStageByIdResponse](docs/Model/SportStageByIdResponse.md)
- [SportStageByIdResponseData](docs/Model/SportStageByIdResponseData.md)
- [SportStageByIdResponseRateLimit](docs/Model/SportStageByIdResponseRateLimit.md)
- [SportStageByIdResponseSubscriptionInner](docs/Model/SportStageByIdResponseSubscriptionInner.md)
- [SportStageByIdResponseSubscriptionInnerPlansInner](docs/Model/SportStageByIdResponseSubscriptionInnerPlansInner.md)
- [SportStagesAllResponse](docs/Model/SportStagesAllResponse.md)
- [SportStagesAllResponseDataInner](docs/Model/SportStagesAllResponseDataInner.md)
- [SportStagesAllResponseDataInnerSortOrder](docs/Model/SportStagesAllResponseDataInnerSortOrder.md)
- [SportStagesAllResponsePagination](docs/Model/SportStagesAllResponsePagination.md)
- [SportStagesAllResponseRateLimit](docs/Model/SportStagesAllResponseRateLimit.md)
- [SportStagesAllResponseSubscriptionInner](docs/Model/SportStagesAllResponseSubscriptionInner.md)
- [SportStagesAllResponseSubscriptionInnerPlansInner](docs/Model/SportStagesAllResponseSubscriptionInnerPlansInner.md)
- [SportStagesBySeasonIdResponse](docs/Model/SportStagesBySeasonIdResponse.md)
- [SportStagesBySeasonIdResponseDataInner](docs/Model/SportStagesBySeasonIdResponseDataInner.md)
- [SportStagesBySeasonIdResponseRateLimit](docs/Model/SportStagesBySeasonIdResponseRateLimit.md)
- [SportStagesBySeasonIdResponseSubscriptionInner](docs/Model/SportStagesBySeasonIdResponseSubscriptionInner.md)
- [SportStagesBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportStagesBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportStagesSearchResponse](docs/Model/SportStagesSearchResponse.md)
- [SportStagesSearchResponseDataInner](docs/Model/SportStagesSearchResponseDataInner.md)
- [SportStagesSearchResponseDataInnerSortOrder](docs/Model/SportStagesSearchResponseDataInnerSortOrder.md)
- [SportStagesSearchResponsePagination](docs/Model/SportStagesSearchResponsePagination.md)
- [SportStagesSearchResponseRateLimit](docs/Model/SportStagesSearchResponseRateLimit.md)
- [SportStagesSearchResponseSubscriptionInner](docs/Model/SportStagesSearchResponseSubscriptionInner.md)
- [SportStagesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportStagesSearchResponseSubscriptionInnerPlansInner.md)
- [SportStandingCorrectionsBySeasonIdResponse](docs/Model/SportStandingCorrectionsBySeasonIdResponse.md)
- [SportStandingCorrectionsBySeasonIdResponseRateLimit](docs/Model/SportStandingCorrectionsBySeasonIdResponseRateLimit.md)
- [SportStandingCorrectionsBySeasonIdResponseSubscriptionInner](docs/Model/SportStandingCorrectionsBySeasonIdResponseSubscriptionInner.md)
- [SportStandingCorrectionsBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportStandingCorrectionsBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportStandingsAllResponse](docs/Model/SportStandingsAllResponse.md)
- [SportStandingsAllResponseDataInner](docs/Model/SportStandingsAllResponseDataInner.md)
- [SportStandingsAllResponseDataInnerStandingRuleId](docs/Model/SportStandingsAllResponseDataInnerStandingRuleId.md)
- [SportStandingsAllResponsePagination](docs/Model/SportStandingsAllResponsePagination.md)
- [SportStandingsAllResponseRateLimit](docs/Model/SportStandingsAllResponseRateLimit.md)
- [SportStandingsAllResponseSubscriptionInner](docs/Model/SportStandingsAllResponseSubscriptionInner.md)
- [SportStandingsAllResponseSubscriptionInnerPlansInner](docs/Model/SportStandingsAllResponseSubscriptionInnerPlansInner.md)
- [SportStandingsByRoundIdResponse](docs/Model/SportStandingsByRoundIdResponse.md)
- [SportStandingsByRoundIdResponseRateLimit](docs/Model/SportStandingsByRoundIdResponseRateLimit.md)
- [SportStandingsByRoundIdResponseSubscriptionInner](docs/Model/SportStandingsByRoundIdResponseSubscriptionInner.md)
- [SportStandingsByRoundIdResponseSubscriptionInnerPlansInner](docs/Model/SportStandingsByRoundIdResponseSubscriptionInnerPlansInner.md)
- [SportStandingsBySeasonIdResponse](docs/Model/SportStandingsBySeasonIdResponse.md)
- [SportStandingsBySeasonIdResponseDataInner](docs/Model/SportStandingsBySeasonIdResponseDataInner.md)
- [SportStandingsBySeasonIdResponseRateLimit](docs/Model/SportStandingsBySeasonIdResponseRateLimit.md)
- [SportStandingsBySeasonIdResponseSubscriptionInner](docs/Model/SportStandingsBySeasonIdResponseSubscriptionInner.md)
- [SportStandingsBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportStandingsBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportStandingsLiveByLeagueIdResponse](docs/Model/SportStandingsLiveByLeagueIdResponse.md)
- [SportStandingsLiveByLeagueIdResponseDataInner](docs/Model/SportStandingsLiveByLeagueIdResponseDataInner.md)
- [SportStandingsLiveByLeagueIdResponseRateLimit](docs/Model/SportStandingsLiveByLeagueIdResponseRateLimit.md)
- [SportStandingsLiveByLeagueIdResponseSubscriptionInner](docs/Model/SportStandingsLiveByLeagueIdResponseSubscriptionInner.md)
- [SportStandingsLiveByLeagueIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportStandingsLiveByLeagueIdResponseSubscriptionInnerAddOnsInner.md)
- [SportStandingsLiveByLeagueIdResponseSubscriptionInnerMeta](docs/Model/SportStandingsLiveByLeagueIdResponseSubscriptionInnerMeta.md)
- [SportStandingsLiveByLeagueIdResponseSubscriptionInnerPlansInner](docs/Model/SportStandingsLiveByLeagueIdResponseSubscriptionInnerPlansInner.md)
- [SportStateByIdResponse](docs/Model/SportStateByIdResponse.md)
- [SportStateByIdResponseData](docs/Model/SportStateByIdResponseData.md)
- [SportStateByIdResponseRateLimit](docs/Model/SportStateByIdResponseRateLimit.md)
- [SportStateByIdResponseSubscriptionInner](docs/Model/SportStateByIdResponseSubscriptionInner.md)
- [SportStateByIdResponseSubscriptionInnerPlansInner](docs/Model/SportStateByIdResponseSubscriptionInnerPlansInner.md)
- [SportStatesBySportResponse](docs/Model/SportStatesBySportResponse.md)
- [SportStatesBySportResponseDataInner](docs/Model/SportStatesBySportResponseDataInner.md)
- [SportStatesBySportResponseDataInnerTypeId](docs/Model/SportStatesBySportResponseDataInnerTypeId.md)
- [SportStatesBySportResponsePagination](docs/Model/SportStatesBySportResponsePagination.md)
- [SportStatesBySportResponseRateLimit](docs/Model/SportStatesBySportResponseRateLimit.md)
- [SportStatesBySportResponseSubscriptionInner](docs/Model/SportStatesBySportResponseSubscriptionInner.md)
- [SportStatesBySportResponseSubscriptionInnerPlansInner](docs/Model/SportStatesBySportResponseSubscriptionInnerPlansInner.md)
- [SportTeamsAllResponse](docs/Model/SportTeamsAllResponse.md)
- [SportTeamsAllResponseDataInner](docs/Model/SportTeamsAllResponseDataInner.md)
- [SportTeamsAllResponsePagination](docs/Model/SportTeamsAllResponsePagination.md)
- [SportTeamsAllResponseRateLimit](docs/Model/SportTeamsAllResponseRateLimit.md)
- [SportTeamsAllResponseSubscriptionInner](docs/Model/SportTeamsAllResponseSubscriptionInner.md)
- [SportTeamsAllResponseSubscriptionInnerPlansInner](docs/Model/SportTeamsAllResponseSubscriptionInnerPlansInner.md)
- [SportTeamsByCountryIdResponse](docs/Model/SportTeamsByCountryIdResponse.md)
- [SportTeamsByCountryIdResponseDataInner](docs/Model/SportTeamsByCountryIdResponseDataInner.md)
- [SportTeamsByCountryIdResponsePagination](docs/Model/SportTeamsByCountryIdResponsePagination.md)
- [SportTeamsByCountryIdResponseRateLimit](docs/Model/SportTeamsByCountryIdResponseRateLimit.md)
- [SportTeamsByCountryIdResponseSubscriptionInner](docs/Model/SportTeamsByCountryIdResponseSubscriptionInner.md)
- [SportTeamsByCountryIdResponseSubscriptionInnerPlansInner](docs/Model/SportTeamsByCountryIdResponseSubscriptionInnerPlansInner.md)
- [SportTeamsByIdResponse](docs/Model/SportTeamsByIdResponse.md)
- [SportTeamsByIdResponseData](docs/Model/SportTeamsByIdResponseData.md)
- [SportTeamsByIdResponseRateLimit](docs/Model/SportTeamsByIdResponseRateLimit.md)
- [SportTeamsByIdResponseSubscriptionInner](docs/Model/SportTeamsByIdResponseSubscriptionInner.md)
- [SportTeamsByIdResponseSubscriptionInnerPlansInner](docs/Model/SportTeamsByIdResponseSubscriptionInnerPlansInner.md)
- [SportTeamsBySeasonIdResponse](docs/Model/SportTeamsBySeasonIdResponse.md)
- [SportTeamsBySeasonIdResponseDataInner](docs/Model/SportTeamsBySeasonIdResponseDataInner.md)
- [SportTeamsBySeasonIdResponseRateLimit](docs/Model/SportTeamsBySeasonIdResponseRateLimit.md)
- [SportTeamsBySeasonIdResponseSubscriptionInner](docs/Model/SportTeamsBySeasonIdResponseSubscriptionInner.md)
- [SportTeamsBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportTeamsBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportTeamsSearchResponse](docs/Model/SportTeamsSearchResponse.md)
- [SportTeamsSearchResponseDataInner](docs/Model/SportTeamsSearchResponseDataInner.md)
- [SportTeamsSearchResponsePagination](docs/Model/SportTeamsSearchResponsePagination.md)
- [SportTeamsSearchResponseRateLimit](docs/Model/SportTeamsSearchResponseRateLimit.md)
- [SportTeamsSearchResponseSubscriptionInner](docs/Model/SportTeamsSearchResponseSubscriptionInner.md)
- [SportTeamsSearchResponseSubscriptionInnerPlansInner](docs/Model/SportTeamsSearchResponseSubscriptionInnerPlansInner.md)
- [SportTopScorersBySeasonIdResponse](docs/Model/SportTopScorersBySeasonIdResponse.md)
- [SportTopScorersBySeasonIdResponseDataInner](docs/Model/SportTopScorersBySeasonIdResponseDataInner.md)
- [SportTopScorersBySeasonIdResponsePagination](docs/Model/SportTopScorersBySeasonIdResponsePagination.md)
- [SportTopScorersBySeasonIdResponseRateLimit](docs/Model/SportTopScorersBySeasonIdResponseRateLimit.md)
- [SportTopScorersBySeasonIdResponseSubscriptionInner](docs/Model/SportTopScorersBySeasonIdResponseSubscriptionInner.md)
- [SportTopScorersBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportTopScorersBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportTopScorersByStageIdResponse](docs/Model/SportTopScorersByStageIdResponse.md)
- [SportTopScorersByStageIdResponseDataInner](docs/Model/SportTopScorersByStageIdResponseDataInner.md)
- [SportTopScorersByStageIdResponsePagination](docs/Model/SportTopScorersByStageIdResponsePagination.md)
- [SportTopScorersByStageIdResponseRateLimit](docs/Model/SportTopScorersByStageIdResponseRateLimit.md)
- [SportTopScorersByStageIdResponseSubscriptionInner](docs/Model/SportTopScorersByStageIdResponseSubscriptionInner.md)
- [SportTopScorersByStageIdResponseSubscriptionInnerPlansInner](docs/Model/SportTopScorersByStageIdResponseSubscriptionInnerPlansInner.md)
- [SportTranfersByDateRangeResponse](docs/Model/SportTranfersByDateRangeResponse.md)
- [SportTranfersByDateRangeResponseDataInner](docs/Model/SportTranfersByDateRangeResponseDataInner.md)
- [SportTranfersByDateRangeResponseDataInnerDetailedPositionId](docs/Model/SportTranfersByDateRangeResponseDataInnerDetailedPositionId.md)
- [SportTranfersByDateRangeResponseDataInnerPositionId](docs/Model/SportTranfersByDateRangeResponseDataInnerPositionId.md)
- [SportTranfersByDateRangeResponsePagination](docs/Model/SportTranfersByDateRangeResponsePagination.md)
- [SportTranfersByDateRangeResponseRateLimit](docs/Model/SportTranfersByDateRangeResponseRateLimit.md)
- [SportTranfersByDateRangeResponseSubscriptionInner](docs/Model/SportTranfersByDateRangeResponseSubscriptionInner.md)
- [SportTranfersByDateRangeResponseSubscriptionInnerPlansInner](docs/Model/SportTranfersByDateRangeResponseSubscriptionInnerPlansInner.md)
- [SportTransferByIdResponse](docs/Model/SportTransferByIdResponse.md)
- [SportTransferByIdResponseData](docs/Model/SportTransferByIdResponseData.md)
- [SportTransferByIdResponseRateLimit](docs/Model/SportTransferByIdResponseRateLimit.md)
- [SportTransferByIdResponseSubscriptionInner](docs/Model/SportTransferByIdResponseSubscriptionInner.md)
- [SportTransferByIdResponseSubscriptionInnerAddOnsInner](docs/Model/SportTransferByIdResponseSubscriptionInnerAddOnsInner.md)
- [SportTransferByIdResponseSubscriptionInnerPlansInner](docs/Model/SportTransferByIdResponseSubscriptionInnerPlansInner.md)
- [SportTransfersAllResponse](docs/Model/SportTransfersAllResponse.md)
- [SportTransfersAllResponseDataInner](docs/Model/SportTransfersAllResponseDataInner.md)
- [SportTransfersAllResponsePagination](docs/Model/SportTransfersAllResponsePagination.md)
- [SportTransfersAllResponseRateLimit](docs/Model/SportTransfersAllResponseRateLimit.md)
- [SportTransfersAllResponseSubscriptionInner](docs/Model/SportTransfersAllResponseSubscriptionInner.md)
- [SportTransfersAllResponseSubscriptionInnerPlansInner](docs/Model/SportTransfersAllResponseSubscriptionInnerPlansInner.md)
- [SportTransfersByPlayerIdResponse](docs/Model/SportTransfersByPlayerIdResponse.md)
- [SportTransfersByPlayerIdResponseDataInner](docs/Model/SportTransfersByPlayerIdResponseDataInner.md)
- [SportTransfersByPlayerIdResponsePagination](docs/Model/SportTransfersByPlayerIdResponsePagination.md)
- [SportTransfersByPlayerIdResponseRateLimit](docs/Model/SportTransfersByPlayerIdResponseRateLimit.md)
- [SportTransfersByPlayerIdResponseSubscriptionInner](docs/Model/SportTransfersByPlayerIdResponseSubscriptionInner.md)
- [SportTransfersByPlayerIdResponseSubscriptionInnerPlansInner](docs/Model/SportTransfersByPlayerIdResponseSubscriptionInnerPlansInner.md)
- [SportTransfersByTeamIdResponse](docs/Model/SportTransfersByTeamIdResponse.md)
- [SportTransfersByTeamIdResponseDataInner](docs/Model/SportTransfersByTeamIdResponseDataInner.md)
- [SportTransfersByTeamIdResponseDataInnerDetailedPositionId](docs/Model/SportTransfersByTeamIdResponseDataInnerDetailedPositionId.md)
- [SportTransfersByTeamIdResponseDataInnerPositionId](docs/Model/SportTransfersByTeamIdResponseDataInnerPositionId.md)
- [SportTransfersByTeamIdResponsePagination](docs/Model/SportTransfersByTeamIdResponsePagination.md)
- [SportTransfersByTeamIdResponseRateLimit](docs/Model/SportTransfersByTeamIdResponseRateLimit.md)
- [SportTransfersByTeamIdResponseSubscriptionInner](docs/Model/SportTransfersByTeamIdResponseSubscriptionInner.md)
- [SportTransfersByTeamIdResponseSubscriptionInnerPlansInner](docs/Model/SportTransfersByTeamIdResponseSubscriptionInnerPlansInner.md)
- [SportTransfersLatestResponse](docs/Model/SportTransfersLatestResponse.md)
- [SportTransfersLatestResponseDataInner](docs/Model/SportTransfersLatestResponseDataInner.md)
- [SportTransfersLatestResponseDataInnerDetailedPositionId](docs/Model/SportTransfersLatestResponseDataInnerDetailedPositionId.md)
- [SportTransfersLatestResponseDataInnerPositionId](docs/Model/SportTransfersLatestResponseDataInnerPositionId.md)
- [SportTransfersLatestResponsePagination](docs/Model/SportTransfersLatestResponsePagination.md)
- [SportTransfersLatestResponseRateLimit](docs/Model/SportTransfersLatestResponseRateLimit.md)
- [SportTransfersLatestResponseSubscriptionInner](docs/Model/SportTransfersLatestResponseSubscriptionInner.md)
- [SportTransfersLatestResponseSubscriptionInnerPlansInner](docs/Model/SportTransfersLatestResponseSubscriptionInnerPlansInner.md)
- [SportTvStationByIdResponse](docs/Model/SportTvStationByIdResponse.md)
- [SportTvStationByIdResponseData](docs/Model/SportTvStationByIdResponseData.md)
- [SportTvStationByIdResponseRateLimit](docs/Model/SportTvStationByIdResponseRateLimit.md)
- [SportTvStationByIdResponseSubscriptionInner](docs/Model/SportTvStationByIdResponseSubscriptionInner.md)
- [SportTvStationByIdResponseSubscriptionInnerPlansInner](docs/Model/SportTvStationByIdResponseSubscriptionInnerPlansInner.md)
- [SportTvStationsAllResponse](docs/Model/SportTvStationsAllResponse.md)
- [SportTvStationsAllResponseDataInner](docs/Model/SportTvStationsAllResponseDataInner.md)
- [SportTvStationsAllResponseDataInnerRelatedId](docs/Model/SportTvStationsAllResponseDataInnerRelatedId.md)
- [SportTvStationsAllResponsePagination](docs/Model/SportTvStationsAllResponsePagination.md)
- [SportTvStationsAllResponseRateLimit](docs/Model/SportTvStationsAllResponseRateLimit.md)
- [SportTvStationsAllResponseSubscriptionInner](docs/Model/SportTvStationsAllResponseSubscriptionInner.md)
- [SportTvStationsAllResponseSubscriptionInnerPlansInner](docs/Model/SportTvStationsAllResponseSubscriptionInnerPlansInner.md)
- [SportTvStationsByFixtureIdResponse](docs/Model/SportTvStationsByFixtureIdResponse.md)
- [SportTvStationsByFixtureIdResponseRateLimit](docs/Model/SportTvStationsByFixtureIdResponseRateLimit.md)
- [SportTvStationsByFixtureIdResponseSubscriptionInner](docs/Model/SportTvStationsByFixtureIdResponseSubscriptionInner.md)
- [SportTvStationsByFixtureIdResponseSubscriptionInnerPlansInner](docs/Model/SportTvStationsByFixtureIdResponseSubscriptionInnerPlansInner.md)
- [SportVenueByIdResponse](docs/Model/SportVenueByIdResponse.md)
- [SportVenueByIdResponseData](docs/Model/SportVenueByIdResponseData.md)
- [SportVenueByIdResponseRateLimit](docs/Model/SportVenueByIdResponseRateLimit.md)
- [SportVenueByIdResponseSubscriptionInner](docs/Model/SportVenueByIdResponseSubscriptionInner.md)
- [SportVenueByIdResponseSubscriptionInnerPlansInner](docs/Model/SportVenueByIdResponseSubscriptionInnerPlansInner.md)
- [SportVenuesAllResponse](docs/Model/SportVenuesAllResponse.md)
- [SportVenuesAllResponseDataInner](docs/Model/SportVenuesAllResponseDataInner.md)
- [SportVenuesAllResponseDataInnerCapacity](docs/Model/SportVenuesAllResponseDataInnerCapacity.md)
- [SportVenuesAllResponseDataInnerCityId](docs/Model/SportVenuesAllResponseDataInnerCityId.md)
- [SportVenuesAllResponseDataInnerCountryId](docs/Model/SportVenuesAllResponseDataInnerCountryId.md)
- [SportVenuesAllResponsePagination](docs/Model/SportVenuesAllResponsePagination.md)
- [SportVenuesAllResponseRateLimit](docs/Model/SportVenuesAllResponseRateLimit.md)
- [SportVenuesAllResponseSubscriptionInner](docs/Model/SportVenuesAllResponseSubscriptionInner.md)
- [SportVenuesAllResponseSubscriptionInnerPlansInner](docs/Model/SportVenuesAllResponseSubscriptionInnerPlansInner.md)
- [SportVenuesBySeasonIdResponse](docs/Model/SportVenuesBySeasonIdResponse.md)
- [SportVenuesBySeasonIdResponseDataInner](docs/Model/SportVenuesBySeasonIdResponseDataInner.md)
- [SportVenuesBySeasonIdResponseDataInnerCityId](docs/Model/SportVenuesBySeasonIdResponseDataInnerCityId.md)
- [SportVenuesBySeasonIdResponseDataInnerCountryId](docs/Model/SportVenuesBySeasonIdResponseDataInnerCountryId.md)
- [SportVenuesBySeasonIdResponseRateLimit](docs/Model/SportVenuesBySeasonIdResponseRateLimit.md)
- [SportVenuesBySeasonIdResponseSubscriptionInner](docs/Model/SportVenuesBySeasonIdResponseSubscriptionInner.md)
- [SportVenuesBySeasonIdResponseSubscriptionInnerPlansInner](docs/Model/SportVenuesBySeasonIdResponseSubscriptionInnerPlansInner.md)
- [SportVenuesSearchResponse](docs/Model/SportVenuesSearchResponse.md)
- [SportVenuesSearchResponseDataInner](docs/Model/SportVenuesSearchResponseDataInner.md)
- [SportVenuesSearchResponseDataInnerCapacity](docs/Model/SportVenuesSearchResponseDataInnerCapacity.md)
- [SportVenuesSearchResponseDataInnerCityId](docs/Model/SportVenuesSearchResponseDataInnerCityId.md)
- [SportVenuesSearchResponseDataInnerCountryId](docs/Model/SportVenuesSearchResponseDataInnerCountryId.md)
- [SportVenuesSearchResponsePagination](docs/Model/SportVenuesSearchResponsePagination.md)
- [SportVenuesSearchResponseRateLimit](docs/Model/SportVenuesSearchResponseRateLimit.md)
- [SportVenuesSearchResponseSubscriptionInner](docs/Model/SportVenuesSearchResponseSubscriptionInner.md)
- [SportVenuesSearchResponseSubscriptionInnerPlansInner](docs/Model/SportVenuesSearchResponseSubscriptionInnerPlansInner.md)
- [TypesAllResponse](docs/Model/TypesAllResponse.md)
- [TypesAllResponseDataInner](docs/Model/TypesAllResponseDataInner.md)
- [TypesAllResponsePagination](docs/Model/TypesAllResponsePagination.md)
- [TypesAllResponseRateLimit](docs/Model/TypesAllResponseRateLimit.md)
- [TypesAllResponseSubscriptionInner](docs/Model/TypesAllResponseSubscriptionInner.md)
- [TypesAllResponseSubscriptionInnerPlansInner](docs/Model/TypesAllResponseSubscriptionInnerPlansInner.md)
- [TypesGetByIdResponse](docs/Model/TypesGetByIdResponse.md)
- [TypesGetByIdResponseData](docs/Model/TypesGetByIdResponseData.md)
- [TypesGetByIdResponseRateLimit](docs/Model/TypesGetByIdResponseRateLimit.md)
- [TypesGetByIdResponseSubscriptionInner](docs/Model/TypesGetByIdResponseSubscriptionInner.md)
- [TypesGetByIdResponseSubscriptionInnerPlansInner](docs/Model/TypesGetByIdResponseSubscriptionInnerPlansInner.md)

## Author

This PHP package is automatically generated by [Konfig](https://konfigthis.com):