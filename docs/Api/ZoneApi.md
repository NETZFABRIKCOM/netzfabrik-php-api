# NETZFABRIK\ZoneApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDnsZone()**](ZoneApi.md#createDnsZone) | **POST** /dns/zones | Create a DNS zone |
| [**createDnsZoneRecord()**](ZoneApi.md#createDnsZoneRecord) | **POST** /dns/zones/{id}/records | Create a DNS record |
| [**deleteDnsZone()**](ZoneApi.md#deleteDnsZone) | **DELETE** /dns/zones/{id} | Delete a DNS zone |
| [**disableDnssec()**](ZoneApi.md#disableDnssec) | **DELETE** /dns/zones/{id}/dnssec | Disable DNSSEC |
| [**enableDnssec()**](ZoneApi.md#enableDnssec) | **POST** /dns/zones/{id}/dnssec | Enable DNSSEC |
| [**getDnsZone()**](ZoneApi.md#getDnsZone) | **GET** /dns/zones/{id} | Get a DNS zone |
| [**getDnsZoneRecords()**](ZoneApi.md#getDnsZoneRecords) | **GET** /dns/zones/{id}/records | Get a collection of DNS records |
| [**getDnsZones()**](ZoneApi.md#getDnsZones) | **GET** /dns/zones | Get a collection of DNS zones |
| [**getDnssec()**](ZoneApi.md#getDnssec) | **GET** /dns/zones/{id}/dnssec | Get DNSSEC keys |
| [**updateDnsZone()**](ZoneApi.md#updateDnsZone) | **PUT** /dns/zones/{id} | Update a DNS zone |


## `createDnsZone()`

```php
createDnsZone($zoneZoneInputZoneCreateZoneRecordCreate): \NETZFABRIK\Model\ZoneZoneReadZoneRecordRead
```

Create a DNS zone

Create a DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zoneZoneInputZoneCreateZoneRecordCreate = new \NETZFABRIK\Model\ZoneZoneInputZoneCreateZoneRecordCreate(); // \NETZFABRIK\Model\ZoneZoneInputZoneCreateZoneRecordCreate | The new Zone resource

try {
    $result = $apiInstance->createDnsZone($zoneZoneInputZoneCreateZoneRecordCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->createDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zoneZoneInputZoneCreateZoneRecordCreate** | [**\NETZFABRIK\Model\ZoneZoneInputZoneCreateZoneRecordCreate**](../Model/ZoneZoneInputZoneCreateZoneRecordCreate.md)| The new Zone resource | |

### Return type

[**\NETZFABRIK\Model\ZoneZoneReadZoneRecordRead**](../Model/ZoneZoneReadZoneRecordRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDnsZoneRecord()`

```php
createDnsZoneRecord($id, $zoneRecordZoneRecordInputZoneRecordCreate): \NETZFABRIK\Model\ZoneRecordZoneRecordRead
```

Create a DNS record

Create a DNS record for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ZoneRecord identifier
$zoneRecordZoneRecordInputZoneRecordCreate = new \NETZFABRIK\Model\ZoneRecordZoneRecordInputZoneRecordCreate(); // \NETZFABRIK\Model\ZoneRecordZoneRecordInputZoneRecordCreate | The new ZoneRecord resource

try {
    $result = $apiInstance->createDnsZoneRecord($id, $zoneRecordZoneRecordInputZoneRecordCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->createDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ZoneRecord identifier | |
| **zoneRecordZoneRecordInputZoneRecordCreate** | [**\NETZFABRIK\Model\ZoneRecordZoneRecordInputZoneRecordCreate**](../Model/ZoneRecordZoneRecordInputZoneRecordCreate.md)| The new ZoneRecord resource | |

### Return type

[**\NETZFABRIK\Model\ZoneRecordZoneRecordRead**](../Model/ZoneRecordZoneRecordRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDnsZone()`

```php
deleteDnsZone($id)
```

Delete a DNS zone

Delete a DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier

try {
    $apiInstance->deleteDnsZone($id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->deleteDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |

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

## `disableDnssec()`

```php
disableDnssec($id)
```

Disable DNSSEC

Disable DNSSEC for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier

try {
    $apiInstance->disableDnssec($id);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->disableDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |

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

## `enableDnssec()`

```php
enableDnssec($id, $body): mixed
```

Enable DNSSEC

Enable DNSSEC for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier
$body = NULL; // mixed | The new Zone resource

try {
    $result = $apiInstance->enableDnssec($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->enableDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |
| **body** | **mixed**| The new Zone resource | |

### Return type

**mixed**

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsZone()`

```php
getDnsZone($id): \NETZFABRIK\Model\ZoneZoneReadZoneListZoneRecordRead
```

Get a DNS zone

Get a DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier

try {
    $result = $apiInstance->getDnsZone($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |

### Return type

[**\NETZFABRIK\Model\ZoneZoneReadZoneListZoneRecordRead**](../Model/ZoneZoneReadZoneListZoneRecordRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsZoneRecords()`

```php
getDnsZoneRecords($id, $page): \NETZFABRIK\Model\ZoneRecordZoneRecordRead[]
```

Get a collection of DNS records

Get a collection of DNS records for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getDnsZoneRecords($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getDnsZoneRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\ZoneRecordZoneRecordRead[]**](../Model/ZoneRecordZoneRecordRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnsZones()`

```php
getDnsZones($page): \NETZFABRIK\Model\ZoneZoneList[]
```

Get a collection of DNS zones

Get a collection of DNS zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getDnsZones($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getDnsZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\ZoneZoneList[]**](../Model/ZoneZoneList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDnssec()`

```php
getDnssec($id): \NETZFABRIK\Model\ZoneDnssecInfoZoneDnssec
```

Get DNSSEC keys

Get DNSSEC keys for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier

try {
    $result = $apiInstance->getDnssec($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->getDnssec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |

### Return type

[**\NETZFABRIK\Model\ZoneDnssecInfoZoneDnssec**](../Model/ZoneDnssecInfoZoneDnssec.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDnsZone()`

```php
updateDnsZone($id, $zoneZoneUpdateZoneRecordUpdate): \NETZFABRIK\Model\ZoneZoneListZoneRead
```

Update a DNS zone

Update a DNS zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier
$zoneZoneUpdateZoneRecordUpdate = new \NETZFABRIK\Model\ZoneZoneUpdateZoneRecordUpdate(); // \NETZFABRIK\Model\ZoneZoneUpdateZoneRecordUpdate | The updated Zone resource

try {
    $result = $apiInstance->updateDnsZone($id, $zoneZoneUpdateZoneRecordUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneApi->updateDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |
| **zoneZoneUpdateZoneRecordUpdate** | [**\NETZFABRIK\Model\ZoneZoneUpdateZoneRecordUpdate**](../Model/ZoneZoneUpdateZoneRecordUpdate.md)| The updated Zone resource | |

### Return type

[**\NETZFABRIK\Model\ZoneZoneListZoneRead**](../Model/ZoneZoneListZoneRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
