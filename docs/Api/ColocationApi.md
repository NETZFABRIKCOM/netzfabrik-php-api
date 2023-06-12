# NETZFABRIK\ColocationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addColocation()**](ColocationApi.md#addColocation) | **POST** /colocations | Add a colocation |
| [**getColocation()**](ColocationApi.md#getColocation) | **GET** /colocations/{id} | Get a colocation |
| [**getColocationInterconnections()**](ColocationApi.md#getColocationInterconnections) | **GET** /colocations/{id}/interconnections | Get the interconnections of a colocation |
| [**getColocationPowerFeeds()**](ColocationApi.md#getColocationPowerFeeds) | **GET** /colocations/{id}/power-feeds | Get the power feeds of a colocation |


## `addColocation()`

```php
addColocation($colocation): \NETZFABRIK\Model\Colocation
```

Add a colocation

Creates a Colocation resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ColocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$colocation = new \NETZFABRIK\Model\Colocation(); // \NETZFABRIK\Model\Colocation | The new Colocation resource

try {
    $result = $apiInstance->addColocation($colocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColocationApi->addColocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **colocation** | [**\NETZFABRIK\Model\Colocation**](../Model/Colocation.md)| The new Colocation resource | |

### Return type

[**\NETZFABRIK\Model\Colocation**](../Model/Colocation.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColocation()`

```php
getColocation($id): \NETZFABRIK\Model\Colocation
```

Get a colocation

Retrieves a Colocation resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ColocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Colocation identifier

try {
    $result = $apiInstance->getColocation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColocationApi->getColocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Colocation identifier | |

### Return type

[**\NETZFABRIK\Model\Colocation**](../Model/Colocation.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColocationInterconnections()`

```php
getColocationInterconnections($id, $page): \NETZFABRIK\Model\ColocationInterconnection[]
```

Get the interconnections of a colocation

Retrieves the collection of Colocation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ColocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Colocation identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getColocationInterconnections($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColocationApi->getColocationInterconnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Colocation identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\ColocationInterconnection[]**](../Model/ColocationInterconnection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColocationPowerFeeds()`

```php
getColocationPowerFeeds($id, $page): \NETZFABRIK\Model\ColocationPowerFeed[]
```

Get the power feeds of a colocation

Retrieves the collection of Colocation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ColocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Colocation identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getColocationPowerFeeds($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColocationApi->getColocationPowerFeeds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Colocation identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\ColocationPowerFeed[]**](../Model/ColocationPowerFeed.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
