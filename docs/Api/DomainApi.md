# NETZFABRIK\DomainApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelDomain()**](DomainApi.md#cancelDomain) | **POST** /domains/{id}/cancel | Cancel a domain on the given date. If no date is given, the domain will be cancelled immediately. |
| [**checkDomainAvailability()**](DomainApi.md#checkDomainAvailability) | **POST** /domains/check-availability | Check if a domain is available |
| [**createHandle()**](DomainApi.md#createHandle) | **POST** /handles | Create a new handle |
| [**deleteDomainAuthCode()**](DomainApi.md#deleteDomainAuthCode) | **DELETE** /domains/{id}/auth-code | Request the auth code for a domain |
| [**deleteDomainTransferLock()**](DomainApi.md#deleteDomainTransferLock) | **DELETE** /domains/{id}/transfer-lock | Delete the transfer lock for a domain. This is not available for .de domains. |
| [**getDomain()**](DomainApi.md#getDomain) | **GET** /domains/{id} | Get a domain by id |
| [**getDomains()**](DomainApi.md#getDomains) | **GET** /domains | Get the current domains |
| [**getHandle()**](DomainApi.md#getHandle) | **GET** /handles/{id} | Get a handle by id |
| [**getHandles()**](DomainApi.md#getHandles) | **GET** /handles | Get the current handles |
| [**postDomain()**](DomainApi.md#postDomain) | **POST** /domains | Register a new domain |
| [**retrieveDomainAuthCode()**](DomainApi.md#retrieveDomainAuthCode) | **POST** /domains/{id}/auth-code | Request the auth code for a domain |
| [**revokeCancelDomain()**](DomainApi.md#revokeCancelDomain) | **DELETE** /domains/{id}/cancel | Revokes the cancellation of a domain. |
| [**setDomainTransferLock()**](DomainApi.md#setDomainTransferLock) | **POST** /domains/{id}/transfer-lock | Set the transfer lock for a domain. This is not available for .de domains. |
| [**transitDomain()**](DomainApi.md#transitDomain) | **POST** /domains/{id}/transit | Gives the domain to the registrar. This is only available for .de domains. |


## `cancelDomain()`

```php
cancelDomain($id, $domainCancelRequest): \NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead
```

Cancel a domain on the given date. If no date is given, the domain will be cancelled immediately.

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier
$domainCancelRequest = new \NETZFABRIK\Model\DomainCancelRequest(); // \NETZFABRIK\Model\DomainCancelRequest | The new Domain resource

try {
    $result = $apiInstance->cancelDomain($id, $domainCancelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->cancelDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |
| **domainCancelRequest** | [**\NETZFABRIK\Model\DomainCancelRequest**](../Model/DomainCancelRequest.md)| The new Domain resource | |

### Return type

[**\NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead**](../Model/DomainDomainReadHandleReadNameserverRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDomainAvailability()`

```php
checkDomainAvailability($domainCheckDomainAvailabilityRequestDomainCheck): \NETZFABRIK\Model\DomainDomainAvailabilityResponseDomainCheck
```

Check if a domain is available

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainCheckDomainAvailabilityRequestDomainCheck = new \NETZFABRIK\Model\DomainCheckDomainAvailabilityRequestDomainCheck(); // \NETZFABRIK\Model\DomainCheckDomainAvailabilityRequestDomainCheck | The new Domain resource

try {
    $result = $apiInstance->checkDomainAvailability($domainCheckDomainAvailabilityRequestDomainCheck);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->checkDomainAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainCheckDomainAvailabilityRequestDomainCheck** | [**\NETZFABRIK\Model\DomainCheckDomainAvailabilityRequestDomainCheck**](../Model/DomainCheckDomainAvailabilityRequestDomainCheck.md)| The new Domain resource | |

### Return type

[**\NETZFABRIK\Model\DomainDomainAvailabilityResponseDomainCheck**](../Model/DomainDomainAvailabilityResponseDomainCheck.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createHandle()`

```php
createHandle($handleCreateHandleRequestHandleWrite): \NETZFABRIK\Model\HandleHandleRead
```

Create a new handle

Creates a Handle resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handleCreateHandleRequestHandleWrite = new \NETZFABRIK\Model\HandleCreateHandleRequestHandleWrite(); // \NETZFABRIK\Model\HandleCreateHandleRequestHandleWrite | The new Handle resource

try {
    $result = $apiInstance->createHandle($handleCreateHandleRequestHandleWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->createHandle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **handleCreateHandleRequestHandleWrite** | [**\NETZFABRIK\Model\HandleCreateHandleRequestHandleWrite**](../Model/HandleCreateHandleRequestHandleWrite.md)| The new Handle resource | |

### Return type

[**\NETZFABRIK\Model\HandleHandleRead**](../Model/HandleHandleRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomainAuthCode()`

```php
deleteDomainAuthCode($id)
```

Request the auth code for a domain

Removes the Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier

try {
    $apiInstance->deleteDomainAuthCode($id);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->deleteDomainAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |

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

## `deleteDomainTransferLock()`

```php
deleteDomainTransferLock($id)
```

Delete the transfer lock for a domain. This is not available for .de domains.

Removes the Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier

try {
    $apiInstance->deleteDomainTransferLock($id);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->deleteDomainTransferLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |

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

## `getDomain()`

```php
getDomain($id): \NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead
```

Get a domain by id

Retrieves a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier

try {
    $result = $apiInstance->getDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |

### Return type

[**\NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead**](../Model/DomainDomainReadHandleReadNameserverRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomains()`

```php
getDomains($page, $name, $tld, $status, $orderName, $orderTld, $orderStatus, $orderRegistrationDate): \NETZFABRIK\Model\DomainDomainList[]
```

Get the current domains

Retrieves the collection of Domain resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$name = 'name_example'; // string | 
$tld = 'tld_example'; // string | 
$status = 'status_example'; // string | 
$orderName = 'orderName_example'; // string | 
$orderTld = 'orderTld_example'; // string | 
$orderStatus = 'orderStatus_example'; // string | 
$orderRegistrationDate = 'orderRegistrationDate_example'; // string | 

try {
    $result = $apiInstance->getDomains($page, $name, $tld, $status, $orderName, $orderTld, $orderStatus, $orderRegistrationDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **name** | **string**|  | [optional] |
| **tld** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **orderName** | **string**|  | [optional] |
| **orderTld** | **string**|  | [optional] |
| **orderStatus** | **string**|  | [optional] |
| **orderRegistrationDate** | **string**|  | [optional] |

### Return type

[**\NETZFABRIK\Model\DomainDomainList[]**](../Model/DomainDomainList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHandle()`

```php
getHandle($id): \NETZFABRIK\Model\Handle
```

Get a handle by id

Retrieves a Handle resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Handle identifier

try {
    $result = $apiInstance->getHandle($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getHandle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Handle identifier | |

### Return type

[**\NETZFABRIK\Model\Handle**](../Model/Handle.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHandles()`

```php
getHandles($page): \NETZFABRIK\Model\Handle[]
```

Get the current handles

Retrieves the collection of Handle resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getHandles($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->getHandles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\Handle[]**](../Model/Handle.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDomain()`

```php
postDomain($domainRegisterDomainRequest)
```

Register a new domain

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainRegisterDomainRequest = new \NETZFABRIK\Model\DomainRegisterDomainRequest(); // \NETZFABRIK\Model\DomainRegisterDomainRequest | The new Domain resource

try {
    $apiInstance->postDomain($domainRegisterDomainRequest);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->postDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domainRegisterDomainRequest** | [**\NETZFABRIK\Model\DomainRegisterDomainRequest**](../Model/DomainRegisterDomainRequest.md)| The new Domain resource | |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveDomainAuthCode()`

```php
retrieveDomainAuthCode($id, $body): \NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead
```

Request the auth code for a domain

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier
$body = NULL; // mixed | The new Domain resource

try {
    $result = $apiInstance->retrieveDomainAuthCode($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->retrieveDomainAuthCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |
| **body** | **mixed**| The new Domain resource | |

### Return type

[**\NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead**](../Model/DomainDomainReadHandleReadNameserverRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeCancelDomain()`

```php
revokeCancelDomain($id)
```

Revokes the cancellation of a domain.

Removes the Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier

try {
    $apiInstance->revokeCancelDomain($id);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->revokeCancelDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |

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

## `setDomainTransferLock()`

```php
setDomainTransferLock($id, $body): \NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead
```

Set the transfer lock for a domain. This is not available for .de domains.

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier
$body = NULL; // mixed | The new Domain resource

try {
    $result = $apiInstance->setDomainTransferLock($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->setDomainTransferLock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |
| **body** | **mixed**| The new Domain resource | |

### Return type

[**\NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead**](../Model/DomainDomainReadHandleReadNameserverRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transitDomain()`

```php
transitDomain($id, $domainTransitRequest): \NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead
```

Gives the domain to the registrar. This is only available for .de domains.

Creates a Domain resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Domain identifier
$domainTransitRequest = new \NETZFABRIK\Model\DomainTransitRequest(); // \NETZFABRIK\Model\DomainTransitRequest | The new Domain resource

try {
    $result = $apiInstance->transitDomain($id, $domainTransitRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->transitDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Domain identifier | |
| **domainTransitRequest** | [**\NETZFABRIK\Model\DomainTransitRequest**](../Model/DomainTransitRequest.md)| The new Domain resource | |

### Return type

[**\NETZFABRIK\Model\DomainDomainReadHandleReadNameserverRead**](../Model/DomainDomainReadHandleReadNameserverRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
