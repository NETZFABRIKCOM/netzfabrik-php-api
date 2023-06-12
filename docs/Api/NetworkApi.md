# NETZFABRIK\NetworkApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachNetworkToServer()**](NetworkApi.md#attachNetworkToServer) | **POST** /cloud-servers/{id}/network | Add network to server |
| [**createNetwork()**](NetworkApi.md#createNetwork) | **POST** /cloud-networks | Create network |
| [**deleteNetwork()**](NetworkApi.md#deleteNetwork) | **DELETE** /cloud-networks/{id} | Delete network |
| [**detachNetworkFromServer()**](NetworkApi.md#detachNetworkFromServer) | **DELETE** /cloud-servers/{id}/network/{networkId} | Detach network from server |
| [**getNetwork()**](NetworkApi.md#getNetwork) | **GET** /cloud-networks/{id} | Get network |


## `attachNetworkToServer()`

```php
attachNetworkToServer($id, $networkAttachNetworkToServerRequest): object
```

Add network to server

Creates a Network resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Network identifier
$networkAttachNetworkToServerRequest = new \NETZFABRIK\Model\NetworkAttachNetworkToServerRequest(); // \NETZFABRIK\Model\NetworkAttachNetworkToServerRequest | The new Network resource

try {
    $result = $apiInstance->attachNetworkToServer($id, $networkAttachNetworkToServerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->attachNetworkToServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Network identifier | |
| **networkAttachNetworkToServerRequest** | [**\NETZFABRIK\Model\NetworkAttachNetworkToServerRequest**](../Model/NetworkAttachNetworkToServerRequest.md)| The new Network resource | |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetwork()`

```php
createNetwork($body): object
```

Create network

Creates a Network resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | The new Network resource

try {
    $result = $apiInstance->createNetwork($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->createNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| The new Network resource | |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNetwork()`

```php
deleteNetwork($id)
```

Delete network

Removes the Network resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Network identifier

try {
    $apiInstance->deleteNetwork($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->deleteNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Network identifier | |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detachNetworkFromServer()`

```php
detachNetworkFromServer($id, $networkId)
```

Detach network from server

Removes the Network resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Network identifier
$networkId = 'networkId_example'; // string | Network identifier

try {
    $apiInstance->detachNetworkFromServer($id, $networkId);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->detachNetworkFromServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Network identifier | |
| **networkId** | **string**| Network identifier | |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetwork()`

```php
getNetwork($id): object
```

Get network

Retrieves a Network resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\NetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Network identifier

try {
    $result = $apiInstance->getNetwork($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkApi->getNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Network identifier | |

### Return type

**object**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
