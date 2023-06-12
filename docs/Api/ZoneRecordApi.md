# NETZFABRIK\ZoneRecordApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDnsZoneRecord()**](ZoneRecordApi.md#deleteDnsZoneRecord) | **DELETE** /dns/zones/{id}/records/{recordId} | Delete a DNS record |
| [**updateDnsZoneRecord()**](ZoneRecordApi.md#updateDnsZoneRecord) | **PUT** /dns/zones/{id}/records/{recordId} | Update a DNS record |


## `deleteDnsZoneRecord()`

```php
deleteDnsZoneRecord($id, $recordId)
```

Delete a DNS record

Delete a DNS record for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier
$recordId = 'recordId_example'; // string | ZoneRecord identifier

try {
    $apiInstance->deleteDnsZoneRecord($id, $recordId);
} catch (Exception $e) {
    echo 'Exception when calling ZoneRecordApi->deleteDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |
| **recordId** | **string**| ZoneRecord identifier | |

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

## `updateDnsZoneRecord()`

```php
updateDnsZoneRecord($id, $recordId, $zoneRecordZoneRecordUpdate): \NETZFABRIK\Model\ZoneRecordZoneRecordRead
```

Update a DNS record

Update a DNS record for a given zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\ZoneRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Zone identifier
$recordId = 'recordId_example'; // string | ZoneRecord identifier
$zoneRecordZoneRecordUpdate = new \NETZFABRIK\Model\ZoneRecordZoneRecordUpdate(); // \NETZFABRIK\Model\ZoneRecordZoneRecordUpdate | The updated ZoneRecord resource

try {
    $result = $apiInstance->updateDnsZoneRecord($id, $recordId, $zoneRecordZoneRecordUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneRecordApi->updateDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Zone identifier | |
| **recordId** | **string**| ZoneRecord identifier | |
| **zoneRecordZoneRecordUpdate** | [**\NETZFABRIK\Model\ZoneRecordZoneRecordUpdate**](../Model/ZoneRecordZoneRecordUpdate.md)| The updated ZoneRecord resource | |

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
