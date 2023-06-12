# NETZFABRIK\InterconnectionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInterconnection()**](InterconnectionApi.md#getInterconnection) | **GET** /interconnections/{id} | Get an interconnection |


## `getInterconnection()`

```php
getInterconnection($id): \NETZFABRIK\Model\Interconnection
```

Get an interconnection

Retrieves a Interconnection resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\InterconnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Interconnection identifier

try {
    $result = $apiInstance->getInterconnection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterconnectionApi->getInterconnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Interconnection identifier | |

### Return type

[**\NETZFABRIK\Model\Interconnection**](../Model/Interconnection.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
