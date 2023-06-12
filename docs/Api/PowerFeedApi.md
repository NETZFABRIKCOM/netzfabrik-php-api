# NETZFABRIK\PowerFeedApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPowerFeed()**](PowerFeedApi.md#getPowerFeed) | **GET** /power-feeds/{id} | Get a power feed |


## `getPowerFeed()`

```php
getPowerFeed($id): \NETZFABRIK\Model\PowerFeed
```

Get a power feed

Retrieves a PowerFeed resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\PowerFeedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | PowerFeed identifier

try {
    $result = $apiInstance->getPowerFeed($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PowerFeedApi->getPowerFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| PowerFeed identifier | |

### Return type

[**\NETZFABRIK\Model\PowerFeed**](../Model/PowerFeed.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
