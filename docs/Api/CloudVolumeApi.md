# NETZFABRIK\CloudVolumeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiCloudVolumesIdDelete()**](CloudVolumeApi.md#apiCloudVolumesIdDelete) | **DELETE** /cloud-volumes/{id} | Removes the Volume resource. |
| [**attachVolumeToServer()**](CloudVolumeApi.md#attachVolumeToServer) | **POST** /cloud-servers/{id}/volume | Add volume to server |
| [**detachVolumeFromServer()**](CloudVolumeApi.md#detachVolumeFromServer) | **POST** /cloud-servers/{id}/volume/{volumeId} | Detach volume from server |
| [**getVolume()**](CloudVolumeApi.md#getVolume) | **GET** /cloud-volumes/{id} | Get volume |


## `apiCloudVolumesIdDelete()`

```php
apiCloudVolumesIdDelete($id)
```

Removes the Volume resource.

Removes the Volume resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Volume identifier

try {
    $apiInstance->apiCloudVolumesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudVolumeApi->apiCloudVolumesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Volume identifier | |

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

## `attachVolumeToServer()`

```php
attachVolumeToServer($id, $body): object
```

Add volume to server

Creates a Volume resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Volume identifier
$body = array('key' => new \stdClass); // object | The new Volume resource

try {
    $result = $apiInstance->attachVolumeToServer($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudVolumeApi->attachVolumeToServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Volume identifier | |
| **body** | **object**| The new Volume resource | |

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

## `detachVolumeFromServer()`

```php
detachVolumeFromServer($id, $volumeId, $body): object
```

Detach volume from server

Creates a Volume resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Volume identifier
$volumeId = 'volumeId_example'; // string | Volume identifier
$body = array('key' => new \stdClass); // object | The new Volume resource

try {
    $result = $apiInstance->detachVolumeFromServer($id, $volumeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudVolumeApi->detachVolumeFromServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Volume identifier | |
| **volumeId** | **string**| Volume identifier | |
| **body** | **object**| The new Volume resource | |

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

## `getVolume()`

```php
getVolume($id): object
```

Get volume

Retrieves a Volume resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CloudVolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Volume identifier

try {
    $result = $apiInstance->getVolume($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudVolumeApi->getVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Volume identifier | |

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
