# NETZFABRIK\UserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeUser()**](UserApi.md#completeUser) | **POST** /user/complete | Complete the user registration |
| [**createApiToken()**](UserApi.md#createApiToken) | **POST** /user/api-tokens | Creates a ApiToken resource. |
| [**deleteApiToken()**](UserApi.md#deleteApiToken) | **DELETE** /user/api-tokens/{id} | Removes the ApiToken resource. |
| [**getApiTokens()**](UserApi.md#getApiTokens) | **GET** /user/api-tokens | Retrieves the collection of ApiToken resources. |
| [**getLoginActivities()**](UserApi.md#getLoginActivities) | **GET** /user/login-activities | Retrieves the collection of LoginActivity resources. |
| [**getMe()**](UserApi.md#getMe) | **GET** /user/me | Get the current user |
| [**getUserCustomers()**](UserApi.md#getUserCustomers) | **GET** /user/customers | Get the customers of the current user |
| [**recoverPassword()**](UserApi.md#recoverPassword) | **POST** /auth/recover-password/{id} | Recover the password |
| [**registerUser()**](UserApi.md#registerUser) | **POST** /auth/register | Register a new user |
| [**requestPasswordRecovery()**](UserApi.md#requestPasswordRecovery) | **POST** /auth/request-password-recovery | Request a password recovery |
| [**setDefaultCustomer()**](UserApi.md#setDefaultCustomer) | **POST** /user/default-customer | Set the default customer of the current user |
| [**testPasswordRecovery()**](UserApi.md#testPasswordRecovery) | **GET** /auth/recover-password/{id} | Test the password recovery token |


## `completeUser()`

```php
completeUser($userCompleteUserRequestUserComplete): \NETZFABRIK\Model\User
```

Complete the user registration

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userCompleteUserRequestUserComplete = new \NETZFABRIK\Model\UserCompleteUserRequestUserComplete(); // \NETZFABRIK\Model\UserCompleteUserRequestUserComplete | The new User resource

try {
    $result = $apiInstance->completeUser($userCompleteUserRequestUserComplete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->completeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userCompleteUserRequestUserComplete** | [**\NETZFABRIK\Model\UserCompleteUserRequestUserComplete**](../Model/UserCompleteUserRequestUserComplete.md)| The new User resource | |

### Return type

[**\NETZFABRIK\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiToken()`

```php
createApiToken($apiTokenCreateApiTokenRequest): \NETZFABRIK\Model\ApiTokenApiTokenCreatedResponse
```

Creates a ApiToken resource.

Creates a ApiToken resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiTokenCreateApiTokenRequest = new \NETZFABRIK\Model\ApiTokenCreateApiTokenRequest(); // \NETZFABRIK\Model\ApiTokenCreateApiTokenRequest | The new ApiToken resource

try {
    $result = $apiInstance->createApiToken($apiTokenCreateApiTokenRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiTokenCreateApiTokenRequest** | [**\NETZFABRIK\Model\ApiTokenCreateApiTokenRequest**](../Model/ApiTokenCreateApiTokenRequest.md)| The new ApiToken resource | |

### Return type

[**\NETZFABRIK\Model\ApiTokenApiTokenCreatedResponse**](../Model/ApiTokenApiTokenCreatedResponse.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApiToken()`

```php
deleteApiToken($id)
```

Removes the ApiToken resource.

Removes the ApiToken resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ApiToken identifier

try {
    $apiInstance->deleteApiToken($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteApiToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ApiToken identifier | |

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

## `getApiTokens()`

```php
getApiTokens($page): \NETZFABRIK\Model\ApiTokenApiTokenReadTimestampableCreatedAtReadTimestampableUpdatedAtRead[]
```

Retrieves the collection of ApiToken resources.

Retrieves the collection of ApiToken resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getApiTokens($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getApiTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\ApiTokenApiTokenReadTimestampableCreatedAtReadTimestampableUpdatedAtRead[]**](../Model/ApiTokenApiTokenReadTimestampableCreatedAtReadTimestampableUpdatedAtRead.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoginActivities()`

```php
getLoginActivities($page, $orderLoginAt): \NETZFABRIK\Model\LoginActivity[]
```

Retrieves the collection of LoginActivity resources.

Retrieves the collection of LoginActivity resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$orderLoginAt = 'orderLoginAt_example'; // string | 

try {
    $result = $apiInstance->getLoginActivities($page, $orderLoginAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getLoginActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **orderLoginAt** | **string**|  | [optional] |

### Return type

[**\NETZFABRIK\Model\LoginActivity[]**](../Model/LoginActivity.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMe()`

```php
getMe(): \NETZFABRIK\Model\UserUserMeResponseUserReadUserMeReadAccountMeCustomerMe
```

Get the current user

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NETZFABRIK\Model\UserUserMeResponseUserReadUserMeReadAccountMeCustomerMe**](../Model/UserUserMeResponseUserReadUserMeReadAccountMeCustomerMe.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCustomers()`

```php
getUserCustomers($page): \NETZFABRIK\Model\UserCustomer[]
```

Get the customers of the current user

Retrieves the collection of User resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getUserCustomers($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\NETZFABRIK\Model\UserCustomer[]**](../Model/UserCustomer.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoverPassword()`

```php
recoverPassword($id, $userChangePasswordRequestDefault)
```

Recover the password

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userChangePasswordRequestDefault = new \NETZFABRIK\Model\UserChangePasswordRequestDefault(); // \NETZFABRIK\Model\UserChangePasswordRequestDefault | The new User resource

try {
    $apiInstance->recoverPassword($id, $userChangePasswordRequestDefault);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->recoverPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userChangePasswordRequestDefault** | [**\NETZFABRIK\Model\UserChangePasswordRequestDefault**](../Model/UserChangePasswordRequestDefault.md)| The new User resource | |

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

## `registerUser()`

```php
registerUser($userRegisterUserRequestUserRegister): \NETZFABRIK\Model\User
```

Register a new user

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userRegisterUserRequestUserRegister = new \NETZFABRIK\Model\UserRegisterUserRequestUserRegister(); // \NETZFABRIK\Model\UserRegisterUserRequestUserRegister | The new User resource

try {
    $result = $apiInstance->registerUser($userRegisterUserRequestUserRegister);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->registerUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userRegisterUserRequestUserRegister** | [**\NETZFABRIK\Model\UserRegisterUserRequestUserRegister**](../Model/UserRegisterUserRequestUserRegister.md)| The new User resource | |

### Return type

[**\NETZFABRIK\Model\User**](../Model/User.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

- **Content-Type**: `application/json`, `text/html`
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestPasswordRecovery()`

```php
requestPasswordRecovery($userRequestPasswordRecoveryRequestDefault)
```

Request a password recovery

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userRequestPasswordRecoveryRequestDefault = new \NETZFABRIK\Model\UserRequestPasswordRecoveryRequestDefault(); // \NETZFABRIK\Model\UserRequestPasswordRecoveryRequestDefault | The new User resource

try {
    $apiInstance->requestPasswordRecovery($userRequestPasswordRecoveryRequestDefault);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->requestPasswordRecovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userRequestPasswordRecoveryRequestDefault** | [**\NETZFABRIK\Model\UserRequestPasswordRecoveryRequestDefault**](../Model/UserRequestPasswordRecoveryRequestDefault.md)| The new User resource | |

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

## `setDefaultCustomer()`

```php
setDefaultCustomer($userSetDefaultCustomerRequestDefault)
```

Set the default customer of the current user

Creates a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userSetDefaultCustomerRequestDefault = new \NETZFABRIK\Model\UserSetDefaultCustomerRequestDefault(); // \NETZFABRIK\Model\UserSetDefaultCustomerRequestDefault | The new User resource

try {
    $apiInstance->setDefaultCustomer($userSetDefaultCustomerRequestDefault);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setDefaultCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userSetDefaultCustomerRequestDefault** | [**\NETZFABRIK\Model\UserSetDefaultCustomerRequestDefault**](../Model/UserSetDefaultCustomerRequestDefault.md)| The new User resource | |

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

## `testPasswordRecovery()`

```php
testPasswordRecovery($id)
```

Test the password recovery token

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: JWT
$config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NETZFABRIK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new NETZFABRIK\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier

try {
    $apiInstance->testPasswordRecovery($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->testPasswordRecovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |

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
