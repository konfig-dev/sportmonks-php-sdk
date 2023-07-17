# Sportmonks\ContinentsApi

All URIs are relative to https://api.sportmonks.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**all()**](ContinentsApi.md#all) | **GET** /{version}/core/continents | All |
| [**getById()**](ContinentsApi.md#getById) | **GET** /{version}/core/continents/{continentId} | By ID |


## `all()`

```php
all($version): \Sportmonks\Model\ContinentsAllResponse
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
    $result = $sportmonks->continents->all(
        version: $version
    );
    print_r($result->$getData());
    print_r($result->$getPagination());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling ContinentsApi->all: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |

### Return type

[**\Sportmonks\Model\ContinentsAllResponse**](../Model/ContinentsAllResponse.md)

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
getById($version, $continent_id): \Sportmonks\Model\ContinentsGetByIdResponse
```

By ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$sportmonks = new \Sportmonks\Client(
);

$version = "v3"; // The version of the API.
$continent_id = 1; // The ID of the continent you want to retrieve

try {
    $result = $sportmonks->continents->getById(
        version: $version, 
        continent_id: $continent_id
    );
    print_r($result->$getData());
    print_r($result->$getSubscription());
    print_r($result->$getRateLimit());
    print_r($result->$getTimezone());
} catch (\Exception $e) {
    echo 'Exception when calling ContinentsApi->getById: ', $e->getMessage(), PHP_EOL;
}

```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **string**| The version of the API. | |
| **continent_id** | **int**| The ID of the continent you want to retrieve | |

### Return type

[**\Sportmonks\Model\ContinentsGetByIdResponse**](../Model/ContinentsGetByIdResponse.md)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
