# NETZFABRIK\CloudServerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteServer()**](CloudServerApi.md#deleteServer) | **POST** /cloud-servers/{id}/delete | Delete server |
| [**getServer()**](CloudServerApi.md#getServer) | **GET** /cloud-servers/{id} | Get server |
| [**getServerStatistics()**](CloudServerApi.md#getServerStatistics) | **GET** /cloud-servers/{id}/statistics | Get server statistics |
| [**getServers()**](CloudServerApi.md#getServers) | **GET** /cloud-servers | Get servers |
| [**restartServer()**](CloudServerApi.md#restartServer) | **POST** /cloud-servers/{id}/restart | Restart server |
| [**shutdownServer()**](CloudServerApi.md#shutdownServer) | **POST** /cloud-servers/{id}/shutdown | Shutdown server |
| [**startServer()**](CloudServerApi.md#startServer) | **POST** /cloud-servers/{id}/start | Start server |
| [**stopServer()**](CloudServerApi.md#stopServer) | **POST** /cloud-servers/{id}/stop | Stop server |


## `deleteServer()`

```php
deleteServer($id, $body): mixed
```

Delete server

Delete a server and all their data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier
$body = NULL; // mixed | The new VirtualMachine resource

try {
    $result = $apiInstance->deleteServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->deleteServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |
| **body** | **mixed**| The new VirtualMachine resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServer()`

```php
getServer($id): \NETZFABRIK\Model\VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead
```

Get server

Get a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier

try {
    $result = $apiInstance->getServer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->getServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |

### Return type

[**\NETZFABRIK\Model\VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead**](../Model/VirtualMachineCloudServerReadServiceLevelAgreementReadRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadVirtualMachineTaskRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerStatistics()`

```php
getServerStatistics($id): \NETZFABRIK\Model\VirtualMachineCloudServerStatisticsResponseRrdDataRead
```

Get server statistics

Get server statistics for the last month.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier

try {
    $result = $apiInstance->getServerStatistics($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->getServerStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |

### Return type

[**\NETZFABRIK\Model\VirtualMachineCloudServerStatisticsResponseRrdDataRead**](../Model/VirtualMachineCloudServerStatisticsResponseRrdDataRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServers()`

```php
getServers($page, $existsApplication, $existsServiceLevelAgreement): \NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead[]
```

Get servers

Get all servers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$existsApplication = True; // bool | 
$existsServiceLevelAgreement = True; // bool | 

try {
    $result = $apiInstance->getServers($page, $existsApplication, $existsServiceLevelAgreement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->getServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **existsApplication** | **bool**|  | [optional] |
| **existsServiceLevelAgreement** | **bool**|  | [optional] |

### Return type

[**\NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead[]**](../Model/VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartServer()`

```php
restartServer($id, $body): mixed
```

Restart server

Restart a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier
$body = NULL; // mixed | The new VirtualMachine resource

try {
    $result = $apiInstance->restartServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->restartServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |
| **body** | **mixed**| The new VirtualMachine resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shutdownServer()`

```php
shutdownServer($id, $body): mixed
```

Shutdown server

Shutdown a server immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier
$body = NULL; // mixed | The new VirtualMachine resource

try {
    $result = $apiInstance->shutdownServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->shutdownServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |
| **body** | **mixed**| The new VirtualMachine resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startServer()`

```php
startServer($id, $body): mixed
```

Start server

Start a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier
$body = NULL; // mixed | The new VirtualMachine resource

try {
    $result = $apiInstance->startServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->startServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |
| **body** | **mixed**| The new VirtualMachine resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopServer()`

```php
stopServer($id, $body): mixed
```

Stop server

Stop a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VirtualMachine identifier
$body = NULL; // mixed | The new VirtualMachine resource

try {
    $result = $apiInstance->stopServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServerApi->stopServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VirtualMachine identifier | |
| **body** | **mixed**| The new VirtualMachine resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
