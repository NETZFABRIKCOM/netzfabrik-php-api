# NETZFABRIK\DomainResellerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDomainReseller()**](DomainResellerApi.md#getDomainReseller) | **GET** /domain-reseller | Retrieves a DomainReseller resource. |
| [**getDomainResellerBillingData()**](DomainResellerApi.md#getDomainResellerBillingData) | **GET** /domain-reseller/billing-data | Retrieves the collection of DomainReseller resources. |


## `getDomainReseller()`

```php
getDomainReseller(): \NETZFABRIK\Model\DomainResellerDomainResellerRead
```

Retrieves a DomainReseller resource.

Retrieves a DomainReseller resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDomainReseller();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainResellerApi->getDomainReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NETZFABRIK\Model\DomainResellerDomainResellerRead**](../Model/DomainResellerDomainResellerRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainResellerBillingData()`

```php
getDomainResellerBillingData($month, $page): \NETZFABRIK\Model\DomainResellerDomainResellerBillingDataResponse[]
```

Retrieves the collection of DomainReseller resources.

Retrieves the collection of DomainReseller resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainResellerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month of billing data, format: YYYY-MM. If no month is defined, the current month is used.
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getDomainResellerBillingData($month, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainResellerApi->getDomainResellerBillingData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **month** | **\DateTime**| Month of billing data, format: YYYY-MM. If no month is defined, the current month is used. | [optional] |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\DomainResellerDomainResellerBillingDataResponse[]**](../Model/DomainResellerDomainResellerBillingDataResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
