# Sportmonks\CitiesApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**all()**](CitiesApi.md#all) | **GET** /{version}/core/cities | All |
| [**getById()**](CitiesApi.md#getById) | **GET** /{version}/core/cities/{cityId} | By ID |
| [**search()**](CitiesApi.md#search) | **GET** /{version}/core/cities/search/{name} | Search |


## `all()`

```php
all($version): \Sportmonks\Model\CitiesAllResponse
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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |

### Return type

[**\Sportmonks\Model\CitiesAllResponse**](../Model/CitiesAllResponse.md)

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
getById($version, $city_id): \Sportmonks\Model\CitiesGetByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$city_id = 29834; // The ID of the city you want to retrieve

try {
    $result = $sportmonks->cities->getById(
        version: $version, 
        city_id: $city_id
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CitiesApi->getById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |
| **city_id** | **int**| The ID of the city you want to retrieve | |

### Return type

[**\Sportmonks\Model\CitiesGetByIdResponse**](../Model/CitiesGetByIdResponse.md)

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
search($version, $name): \Sportmonks\Model\CitiesSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$name = "Lon"; // The name you want to search on

try {
    $result = $sportmonks->cities->search(
        version: $version, 
        name: $name
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling CitiesApi->search: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |
| **name** | **string**| The name you want to search on | |

### Return type

[**\Sportmonks\Model\CitiesSearchResponse**](../Model/CitiesSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
