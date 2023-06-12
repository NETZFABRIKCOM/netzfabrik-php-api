# NETZFABRIK\VLANApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiVlansGetCollection()**](VLANApi.md#apiVlansGetCollection) | **GET** /vlans | Retrieves the collection of VLAN resources. |
| [**apiVlansIdGet()**](VLANApi.md#apiVlansIdGet) | **GET** /vlans/{id} | Retrieves a VLAN resource. |
| [**apiVlansPost()**](VLANApi.md#apiVlansPost) | **POST** /vlans | Creates a VLAN resource. |


## `apiVlansGetCollection()`

```php
apiVlansGetCollection($page): \NETZFABRIK\Model\VLAN[]
```

Retrieves the collection of VLAN resources.

Retrieves the collection of VLAN resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\VLANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiVlansGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VLANApi->apiVlansGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\VLAN[]**](../Model/VLAN.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVlansIdGet()`

```php
apiVlansIdGet($id): \NETZFABRIK\Model\VLAN
```

Retrieves a VLAN resource.

Retrieves a VLAN resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\VLANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | VLAN identifier

try {
    $result = $apiInstance->apiVlansIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VLANApi->apiVlansIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| VLAN identifier | |

### Return type

[**\NETZFABRIK\Model\VLAN**](../Model/VLAN.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVlansPost()`

```php
apiVlansPost($vLAN): \NETZFABRIK\Model\VLAN
```

Creates a VLAN resource.

Creates a VLAN resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\VLANApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vLAN = new \NETZFABRIK\Model\VLAN(); // \NETZFABRIK\Model\VLAN | The new VLAN resource

try {
    $result = $apiInstance->apiVlansPost($vLAN);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VLANApi->apiVlansPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vLAN** | [**\NETZFABRIK\Model\VLAN**](../Model/VLAN.md)| The new VLAN resource | |

### Return type

[**\NETZFABRIK\Model\VLAN**](../Model/VLAN.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
