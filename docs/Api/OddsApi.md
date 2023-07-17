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
bookmakerById($version, $bookmaker_id): \Sportmonks\Model\OddsBookmakerByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$bookmaker_id = 1; // The ID of the bookmaker you want to retrieve.

try {
    $result = $sportmonks->odds->bookmakerById(
        version: $version, 
        bookmaker_id: $bookmaker_id
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
| **version** | **string**| The version of the API. | |
| **bookmaker_id** | **int**| The ID of the bookmaker you want to retrieve. | |

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
| **version** | **string**| The version of the API. | |

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
bookmakersByFixtureId($version, $fixture_id): \Sportmonks\Model\OddsBookmakersByFixtureIdResponse
```

By Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$fixture_id = 18528479; // The ID of the bookmaker you want to retrieve.

try {
    $result = $sportmonks->odds->bookmakersByFixtureId(
        version: $version, 
        fixture_id: $fixture_id
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
| **version** | **string**| The version of the API. | |
| **fixture_id** | **int**| The ID of the bookmaker you want to retrieve. | |

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
bookmakersMappingByFixtureId($version, $fixture_id): \Sportmonks\Model\OddsBookmakersMappingByFixtureIdResponse
```

Mapping by Fixture ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$fixture_id = 18528479; // The fixtureId you want to retrieve the bookmaker mapping from.

try {
    $result = $sportmonks->odds->bookmakersMappingByFixtureId(
        version: $version, 
        fixture_id: $fixture_id
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
| **version** | **string**| The version of the API. | |
| **fixture_id** | **int**| The fixtureId you want to retrieve the bookmaker mapping from. | |

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
bookmakersSearch($version, $name): \Sportmonks\Model\OddsBookmakersSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$name = "Bet"; // The name you want to search on

try {
    $result = $sportmonks->odds->bookmakersSearch(
        version: $version, 
        name: $name
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
| **version** | **string**| The version of the API. | |
| **name** | **string**| The name you want to search on | |

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
fixturesUpcomingByMarketId($version, $sport, $market_id): \Sportmonks\Model\OddsFixturesUpcomingByMarketIdResponse
```

Upcoming Fixtures by Market ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The sport you want to retrieve upcoming fixtures from.
$sport = "football";
$market_id = 1; // The ID of the market you want to retrieve upcoming fixtures from.

try {
    $result = $sportmonks->odds->fixturesUpcomingByMarketId(
        version: $version, 
        sport: $sport, 
        market_id: $market_id
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
| **version** | **string**| The sport you want to retrieve upcoming fixtures from. | |
| **sport** | **string**|  | |
| **market_id** | **int**| The ID of the market you want to retrieve upcoming fixtures from. | |

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
marketById($version, $market_id): \Sportmonks\Model\OddsMarketByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$market_id = 1; // The ID of the market you want to retrieve.

try {
    $result = $sportmonks->odds->marketById(
        version: $version, 
        market_id: $market_id
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
| **version** | **string**| The version of the API. | |
| **market_id** | **int**| The ID of the market you want to retrieve. | |

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
| **version** | **string**| The version of the API. | |

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
marketsSearch($version, $name): \Sportmonks\Model\OddsMarketsSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$name = "Over"; // The name you want to search on

try {
    $result = $sportmonks->odds->marketsSearch(
        version: $version, 
        name: $name
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
| **version** | **string**| The version of the API. | |
| **name** | **string**| The name you want to search on | |

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
