# NETZFABRIK\IpAddressPoolApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiIpAddressPoolsPost()**](IpAddressPoolApi.md#apiIpAddressPoolsPost) | **POST** /ip-address-pools | Creates a IpAddressPool resource. |


## `apiIpAddressPoolsPost()`

```php
apiIpAddressPoolsPost($ipAddressPoolIpAddressPoolCreate): \NETZFABRIK\Model\IpAddressPool
```

Creates a IpAddressPool resource.

Creates a IpAddressPool resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\IpAddressPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ipAddressPoolIpAddressPoolCreate = new \NETZFABRIK\Model\IpAddressPoolIpAddressPoolCreate(); // \NETZFABRIK\Model\IpAddressPoolIpAddressPoolCreate | The new IpAddressPool resource

try {
    $result = $apiInstance->apiIpAddressPoolsPost($ipAddressPoolIpAddressPoolCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpAddressPoolApi->apiIpAddressPoolsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ipAddressPoolIpAddressPoolCreate** | [**\NETZFABRIK\Model\IpAddressPoolIpAddressPoolCreate**](../Model/IpAddressPoolIpAddressPoolCreate.md)| The new IpAddressPool resource | |

### Return type

[**\NETZFABRIK\Model\IpAddressPool**](../Model/IpAddressPool.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
