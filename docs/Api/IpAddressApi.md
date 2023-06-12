# NETZFABRIK\IpAddressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIpAddressesPost()**](IpAddressApi.md#apiIpAddressesPost) | **POST** /ip-addresses | Create IP address |


## `apiIpAddressesPost()`

```php
apiIpAddressesPost($ipAddress): \NETZFABRIK\Model\IpAddress
```

Create IP address

Create a new IP address for the customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\IpAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipAddress = new \NETZFABRIK\Model\IpAddress(); // \NETZFABRIK\Model\IpAddress | The new IpAddress resource

try {
    $result = $apiInstance->apiIpAddressesPost($ipAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpAddressApi->apiIpAddressesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ipAddress** | [**\NETZFABRIK\Model\IpAddress**](../Model/IpAddress.md)| The new IpAddress resource | |

### Return type

[**\NETZFABRIK\Model\IpAddress**](../Model/IpAddress.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
