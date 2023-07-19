# Sportmonks\OddsApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookmakerById()**](OddsApi.md#bookmakerById) | **GET** /{version}/odds/bookmakers/{bookmakerId} | By ID |
| [**bookmakersAll()**](OddsApi.md#bookmakersAll) | **GET** /{version}/odds/bookmakers | All |
| [**bookmakersByFixtureId()**](OddsApi.md#bookmakersByFixtureId) | **GET** /{version}/odds/bookmakers/fixtures/{fixtureId} | By Fixture ID |
| [**bookmakersMappingByFixtureId()**](OddsApi.md#bookmakersMappingByFixtureId) | **GET** /{version}/odds/bookmakers/fixtures/{fixtureId}/mapping | Mapping by Fixture ID |
| [**bookmakersSearch()**](OddsApi.md#bookmakersSearch) | **GET** /{version}/odds/bookmakers/search/{name} | Search |
| [**fixturesUpcomingByMarketId()**](OddsApi.md#fixturesUpcomingByMarketId) | **GET** /{version}/{sport}/fixtures/upcoming/markets/{marketId} | Upcoming Fixtures by Market ID |
| [**marketById()**](OddsApi.md#marketById) | **GET** /{version}/odds/markets/{marketId} | By ID |
| [**marketsAll()**](OddsApi.md#marketsAll) | **GET** /{version}/odds/markets | All |
| [**marketsSearch()**](OddsApi.md#marketsSearch) | **GET** /{version}/odds/markets/search/{name} | Search |


## `bookmakerById()`

```php
bookmakerById($bookmaker_id, $version): \Sportmonks\Model\OddsBookmakerByIdResponse
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

$bookmaker_id = 1; // The ID of the bookmaker you want to retrieve.
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->bookmakerById(
        bookmaker_id: $bookmaker_id, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->bookmakerById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bookmaker_id** | **int**| The ID of the bookmaker you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsBookmakerByIdResponse**](../Model/OddsBookmakerByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookmakersAll()`

```php
bookmakersAll($version): \Sportmonks\Model\OddsBookmakersAllResponse
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

try {
    $result = $sportmonks->odds->bookmakersAll(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->bookmakersAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsBookmakersAllResponse**](../Model/OddsBookmakersAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookmakersByFixtureId()`

```php
bookmakersByFixtureId($fixture_id, $version): \Sportmonks\Model\OddsBookmakersByFixtureIdResponse
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

$fixture_id = 18528479; // The ID of the bookmaker you want to retrieve.
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->bookmakersByFixtureId(
        fixture_id: $fixture_id, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->bookmakersByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The ID of the bookmaker you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsBookmakersByFixtureIdResponse**](../Model/OddsBookmakersByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookmakersMappingByFixtureId()`

```php
bookmakersMappingByFixtureId($fixture_id, $version): \Sportmonks\Model\OddsBookmakersMappingByFixtureIdResponse
```

Mapping by Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$fixture_id = 18528479; // The fixtureId you want to retrieve the bookmaker mapping from.
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->bookmakersMappingByFixtureId(
        fixture_id: $fixture_id, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->bookmakersMappingByFixtureId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fixture_id** | **int**| The fixtureId you want to retrieve the bookmaker mapping from. | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsBookmakersMappingByFixtureIdResponse**](../Model/OddsBookmakersMappingByFixtureIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bookmakersSearch()`

```php
bookmakersSearch($name, $version): \Sportmonks\Model\OddsBookmakersSearchResponse
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

$name = "Bet"; // The name you want to search on
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->bookmakersSearch(
        name: $name, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->bookmakersSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsBookmakersSearchResponse**](../Model/OddsBookmakersSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fixturesUpcomingByMarketId()`

```php
fixturesUpcomingByMarketId($market_id, $version, $sport): \Sportmonks\Model\OddsFixturesUpcomingByMarketIdResponse
```

Upcoming Fixtures by Market ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
    version: "VERSION",
    sport: "SPORT",
    apiKey: "AUTHORIZATION",
);

$market_id = 1; // The ID of the market you want to retrieve upcoming fixtures from.
$version = "v3"; // The sport you want to retrieve upcoming fixtures from.
$sport = "football";

try {
    $result = $sportmonks->odds->fixturesUpcomingByMarketId(
        market_id: $market_id, 
        version: $version, 
        sport: $sport
    );
    print_r($result->$getData());
    print_r($result->$getMessage());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->fixturesUpcomingByMarketId: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **market_id** | **int**| The ID of the market you want to retrieve upcoming fixtures from. | |
| **version** | **string**| The sport you want to retrieve upcoming fixtures from. | [optional] |
| **sport** | **string**|  | [optional] |

### Return type

[**\Sportmonks\Model\OddsFixturesUpcomingByMarketIdResponse**](../Model/OddsFixturesUpcomingByMarketIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketById()`

```php
marketById($market_id, $version): \Sportmonks\Model\OddsMarketByIdResponse
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

$market_id = 1; // The ID of the market you want to retrieve.
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->marketById(
        market_id: $market_id, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->marketById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **market_id** | **int**| The ID of the market you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsMarketByIdResponse**](../Model/OddsMarketByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketsAll()`

```php
marketsAll($version): \Sportmonks\Model\OddsMarketsAllResponse
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

try {
    $result = $sportmonks->odds->marketsAll(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->marketsAll: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsMarketsAllResponse**](../Model/OddsMarketsAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketsSearch()`

```php
marketsSearch($name, $version): \Sportmonks\Model\OddsMarketsSearchResponse
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

$name = "Over"; // The name you want to search on
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->odds->marketsSearch(
        name: $name, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling OddsApi->marketsSearch: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\OddsMarketsSearchResponse**](../Model/OddsMarketsSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
