# Sportmonks\CountriesApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**all()**](CountriesApi.md#all) | **GET** /{version}/core/countries | All |
| [**getById()**](CountriesApi.md#getById) | **GET** /{version}/core/countries/{countryId} | By ID |
| [**search()**](CountriesApi.md#search) | **GET** /{version}/core/countries/search/{name} | Search |


## `all()`

```php
all($version): \Sportmonks\Model\CountriesAllResponse
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
    $result = $sportmonks->countries->all(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CountriesApi->all: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\CountriesAllResponse**](../Model/CountriesAllResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getById()`

```php
getById($country_id, $version): \Sportmonks\Model\CountriesGetByIdResponse
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

$country_id = 1161; // The ID of the country you want to retrieve.
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->countries->getById(
        country_id: $country_id, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CountriesApi->getById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country_id** | **int**| The ID of the country you want to retrieve. | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\CountriesGetByIdResponse**](../Model/CountriesGetByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($name, $version): \Sportmonks\Model\CountriesSearchResponse
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

$name = "Fra"; // The name you want to search on
$version = "v3"; // The version of the API.

try {
    $result = $sportmonks->countries->search(
        name: $name, 
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CountriesApi->search: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name you want to search on | |
| **version** | **string**| The version of the API. | [optional] |

### Return type

[**\Sportmonks\Model\CountriesSearchResponse**](../Model/CountriesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
