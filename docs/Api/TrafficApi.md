# NETZFABRIK\TrafficApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBill()**](TrafficApi.md#getBill) | **GET** /datacenter/traffic/bills/{id} | Retrieves a Bill resource. |
| [**getBillHistories()**](TrafficApi.md#getBillHistories) | **GET** /datacenter/traffic/bills/{id}/history | Retrieves the collection of BillHistory resources. |
| [**getBillHistory()**](TrafficApi.md#getBillHistory) | **GET** /datacenter/traffic/bills/{id}/history/{historyId} | Retrieves a BillHistory resource. |
| [**getBillHistoryGraph()**](TrafficApi.md#getBillHistoryGraph) | **GET** /datacenter/traffic/bills/{id}/history/{historyId}/graphs/{graphType} | Retrieves a Bill resource. |
| [**getBills()**](TrafficApi.md#getBills) | **GET** /datacenter/traffic/bills | Retrieves the collection of Bill resources. |


## `getBill()`

```php
getBill($id): \NETZFABRIK\Model\Bill
```

Retrieves a Bill resource.

Retrieves a Bill resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Bill identifier

try {
    $result = $apiInstance->getBill($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficApi->getBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Bill identifier | |

### Return type

[**\NETZFABRIK\Model\Bill**](../Model/Bill.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillHistories()`

```php
getBillHistories($id, $page): \NETZFABRIK\Model\BillHistory[]
```

Retrieves the collection of BillHistory resources.

Retrieves the collection of BillHistory resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | BillHistory identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getBillHistories($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficApi->getBillHistories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| BillHistory identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\BillHistory[]**](../Model/BillHistory.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillHistory()`

```php
getBillHistory($id, $historyId): \NETZFABRIK\Model\BillHistory
```

Retrieves a BillHistory resource.

Retrieves a BillHistory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | BillHistory identifier
$historyId = 'historyId_example'; // string | BillHistory identifier

try {
    $result = $apiInstance->getBillHistory($id, $historyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficApi->getBillHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| BillHistory identifier | |
| **historyId** | **string**| BillHistory identifier | |

### Return type

[**\NETZFABRIK\Model\BillHistory**](../Model/BillHistory.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillHistoryGraph()`

```php
getBillHistoryGraph($id, $historyId, $graphType): \NETZFABRIK\Model\BillBillGraphResponse
```

Retrieves a Bill resource.

Retrieves a Bill resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Bill identifier
$historyId = 'historyId_example'; // string | Bill identifier
$graphType = 'graphType_example'; // string | Bill identifier

try {
    $result = $apiInstance->getBillHistoryGraph($id, $historyId, $graphType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficApi->getBillHistoryGraph: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Bill identifier | |
| **historyId** | **string**| Bill identifier | |
| **graphType** | **string**| Bill identifier | |

### Return type

[**\NETZFABRIK\Model\BillBillGraphResponse**](../Model/BillBillGraphResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBills()`

```php
getBills($page): \NETZFABRIK\Model\Bill[]
```

Retrieves the collection of Bill resources.

Retrieves the collection of Bill resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getBills($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrafficApi->getBills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\Bill[]**](../Model/Bill.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
