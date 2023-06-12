# NETZFABRIK\WebspaceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebspace()**](WebspaceApi.md#createWebspace) | **POST** /webspaces | Create a webspace |
| [**getWebspace()**](WebspaceApi.md#getWebspace) | **GET** /webspaces/{id} | Get a webspace |
| [**getWebspaces()**](WebspaceApi.md#getWebspaces) | **GET** /webspaces | Get all webspaces |
| [**loginSessionWebspace()**](WebspaceApi.md#loginSessionWebspace) | **POST** /webspaces/{id}/login-session | Login to a webspace |


## `createWebspace()`

```php
createWebspace($webspaceCreateWebspaceRequestWebspaceCreate): \NETZFABRIK\Model\WebspaceWebspaceRead
```

Create a webspace

Creates a Webspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webspaceCreateWebspaceRequestWebspaceCreate = new \NETZFABRIK\Model\WebspaceCreateWebspaceRequestWebspaceCreate(); // \NETZFABRIK\Model\WebspaceCreateWebspaceRequestWebspaceCreate | The new Webspace resource

try {
    $result = $apiInstance->createWebspace($webspaceCreateWebspaceRequestWebspaceCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->createWebspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webspaceCreateWebspaceRequestWebspaceCreate** | [**\NETZFABRIK\Model\WebspaceCreateWebspaceRequestWebspaceCreate**](../Model/WebspaceCreateWebspaceRequestWebspaceCreate.md)| The new Webspace resource | |

### Return type

[**\NETZFABRIK\Model\WebspaceWebspaceRead**](../Model/WebspaceWebspaceRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebspace()`

```php
getWebspace($id): \NETZFABRIK\Model\WebspaceWebspaceRead
```

Get a webspace

Retrieves a Webspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webspace identifier

try {
    $result = $apiInstance->getWebspace($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->getWebspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webspace identifier | |

### Return type

[**\NETZFABRIK\Model\WebspaceWebspaceRead**](../Model/WebspaceWebspaceRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebspaces()`

```php
getWebspaces($page): \NETZFABRIK\Model\WebspaceWebspaceRead[]
```

Get all webspaces

Retrieves the collection of Webspace resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getWebspaces($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->getWebspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\WebspaceWebspaceRead[]**](../Model/WebspaceWebspaceRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginSessionWebspace()`

```php
loginSessionWebspace($id, $body): \NETZFABRIK\Model\WebspaceWebspaceLoginSessionResponseWebspaceLoginSession
```

Login to a webspace

Creates a Webspace resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\WebspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Webspace identifier
$body = NULL; // mixed | The new Webspace resource

try {
    $result = $apiInstance->loginSessionWebspace($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebspaceApi->loginSessionWebspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Webspace identifier | |
| **body** | **mixed**| The new Webspace resource | |

### Return type

[**\NETZFABRIK\Model\WebspaceWebspaceLoginSessionResponseWebspaceLoginSession**](../Model/WebspaceWebspaceLoginSessionResponseWebspaceLoginSession.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
