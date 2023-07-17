# Sportmonks\RegionsApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**all()**](RegionsApi.md#all) | **GET** /{version}/core/regions | All |
| [**getById()**](RegionsApi.md#getById) | **GET** /{version}/core/regions/{regionId} | By ID |
| [**search()**](RegionsApi.md#search) | **GET** /{version}/core/regions/search/{name} | Search |


## `all()`

```php
all($version): \Sportmonks\Model\RegionsAllResponse
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
    $result = $sportmonks->regions->all(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling RegionsApi->all: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |

### Return type

[**\Sportmonks\Model\RegionsAllResponse**](../Model/RegionsAllResponse.md)

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
getById($version, $region_id): \Sportmonks\Model\RegionsGetByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$region_id = 367; // The ID of the region you want to retrieve.

try {
    $result = $sportmonks->regions->getById(
        version: $version, 
        region_id: $region_id
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling RegionsApi->getById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |
| **region_id** | **int**| The ID of the region you want to retrieve. | |

### Return type

[**\Sportmonks\Model\RegionsGetByIdResponse**](../Model/RegionsGetByIdResponse.md)

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
search($version, $name): \Sportmonks\Model\RegionsSearchResponse
```

Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$name = "Br"; // The name you want to search on

try {
    $result = $sportmonks->regions->search(
        version: $version, 
        name: $name
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling RegionsApi->search: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |
| **name** | **string**| The name you want to search on | |

### Return type

[**\Sportmonks\Model\RegionsSearchResponse**](../Model/RegionsSearchResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
