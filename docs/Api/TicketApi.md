# NETZFABRIK\TicketApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMessage()**](TicketApi.md#createMessage) | **POST** /tickets/{id}/messages | Create message |
| [**createTicket()**](TicketApi.md#createTicket) | **POST** /tickets | Create ticket |
| [**getTicket()**](TicketApi.md#getTicket) | **GET** /tickets/{id} | Get ticket |
| [**getTickets()**](TicketApi.md#getTickets) | **GET** /tickets | Get tickets |
| [**replyTicket()**](TicketApi.md#replyTicket) | **POST** /tickets/{id}/reply | Reply to ticket |


## `createMessage()`

```php
createMessage($id, $ticketMessageMessageCreate): \NETZFABRIK\Model\TicketTicketRead
```

Create message

Creates a Ticket resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Ticket identifier
$ticketMessageMessageCreate = new \NETZFABRIK\Model\TicketMessageMessageCreate(); // \NETZFABRIK\Model\TicketMessageMessageCreate | The new Ticket resource

try {
    $result = $apiInstance->createMessage($id, $ticketMessageMessageCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->createMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Ticket identifier | |
| **ticketMessageMessageCreate** | [**\NETZFABRIK\Model\TicketMessageMessageCreate**](../Model/TicketMessageMessageCreate.md)| The new Ticket resource | |

### Return type

[**\NETZFABRIK\Model\TicketTicketRead**](../Model/TicketTicketRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTicket()`

```php
createTicket($ticketCreateTicketRequestTicketCreate): \NETZFABRIK\Model\TicketTicketRead
```

Create ticket

Creates a Ticket resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticketCreateTicketRequestTicketCreate = new \NETZFABRIK\Model\TicketCreateTicketRequestTicketCreate(); // \NETZFABRIK\Model\TicketCreateTicketRequestTicketCreate | The new Ticket resource

try {
    $result = $apiInstance->createTicket($ticketCreateTicketRequestTicketCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->createTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticketCreateTicketRequestTicketCreate** | [**\NETZFABRIK\Model\TicketCreateTicketRequestTicketCreate**](../Model/TicketCreateTicketRequestTicketCreate.md)| The new Ticket resource | |

### Return type

[**\NETZFABRIK\Model\TicketTicketRead**](../Model/TicketTicketRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicket()`

```php
getTicket($id): \NETZFABRIK\Model\TicketTicketReadMaintenanceRead
```

Get ticket

Retrieves a Ticket resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Ticket identifier

try {
    $result = $apiInstance->getTicket($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Ticket identifier | |

### Return type

[**\NETZFABRIK\Model\TicketTicketReadMaintenanceRead**](../Model/TicketTicketReadMaintenanceRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($page, $orderCreatedAt): \NETZFABRIK\Model\TicketTicketList[]
```

Get tickets

Retrieves the collection of Ticket resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$orderCreatedAt = 'orderCreatedAt_example'; // string | 

try {
    $result = $apiInstance->getTickets($page, $orderCreatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **orderCreatedAt** | **string**|  | [optional] |

### Return type

[**\NETZFABRIK\Model\TicketTicketList[]**](../Model/TicketTicketList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replyTicket()`

```php
replyTicket($id, $ticketReplyTicketRequestMessageCreate): \NETZFABRIK\Model\TicketTicketRead
```

Reply to ticket

Creates a Ticket resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\TicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Ticket identifier
$ticketReplyTicketRequestMessageCreate = new \NETZFABRIK\Model\TicketReplyTicketRequestMessageCreate(); // \NETZFABRIK\Model\TicketReplyTicketRequestMessageCreate | The new Ticket resource

try {
    $result = $apiInstance->replyTicket($id, $ticketReplyTicketRequestMessageCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketApi->replyTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Ticket identifier | |
| **ticketReplyTicketRequestMessageCreate** | [**\NETZFABRIK\Model\TicketReplyTicketRequestMessageCreate**](../Model/TicketReplyTicketRequestMessageCreate.md)| The new Ticket resource | |

### Return type

[**\NETZFABRIK\Model\TicketTicketRead**](../Model/TicketTicketRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
