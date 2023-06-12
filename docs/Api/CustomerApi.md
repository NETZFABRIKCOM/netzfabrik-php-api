# NETZFABRIK\CustomerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomerApi.md#createCustomer) | **POST** /customers | Create a new customer |


## `createCustomer()`

```php
createCustomer($customerCreateCustomerRequest): \NETZFABRIK\Model\Customer
```

Create a new customer

Creates a Customer resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerCreateCustomerRequest = new \NETZFABRIK\Model\CustomerCreateCustomerRequest(); // \NETZFABRIK\Model\CustomerCreateCustomerRequest | The new Customer resource

try {
    $result = $apiInstance->createCustomer($customerCreateCustomerRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerCreateCustomerRequest** | [**\NETZFABRIK\Model\CustomerCreateCustomerRequest**](../Model/CustomerCreateCustomerRequest.md)| The new Customer resource | |

### Return type

[**\NETZFABRIK\Model\Customer**](../Model/Customer.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
