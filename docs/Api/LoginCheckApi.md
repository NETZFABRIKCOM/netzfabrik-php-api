# NETZFABRIK\LoginCheckApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginCheckPost()**](LoginCheckApi.md#loginCheckPost) | **POST** /auth/login | Creates a user token. |


## `loginCheckPost()`

```php
loginCheckPost($loginCheckPostRequest): \NETZFABRIK\Model\LoginCheckPost200Response
```

Creates a user token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\LoginCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loginCheckPostRequest = new \NETZFABRIK\Model\LoginCheckPostRequest(); // \NETZFABRIK\Model\LoginCheckPostRequest | The login data

try {
    $result = $apiInstance->loginCheckPost($loginCheckPostRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginCheckApi->loginCheckPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginCheckPostRequest** | [**\NETZFABRIK\Model\LoginCheckPostRequest**](../Model/LoginCheckPostRequest.md)| The login data | |

### Return type

[**\NETZFABRIK\Model\LoginCheckPost200Response**](../Model/LoginCheckPost200Response.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
