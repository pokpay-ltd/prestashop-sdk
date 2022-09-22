# RPay\POK\PaymentsSdk\AuthApi

All URIs are relative to *https://api.pokpay.io* in the production environment and *https://api-staging.pokpay.io* in the staging environment.

| Method                          | HTTP request             | Description |
|---------------------------------|--------------------------|-------------|
| [**login()**](AuthApi.md#login) | **POST** /auth/sdk/login | Login Sdk   |

## `login()`

```php
login($body): \RPay\POK\PaymentsSdk\Model\LoginResponse
```

Login Sdk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create the configuration for the API calls
// getDefaultConfiguration accepts a parameter to specify whether the production environment is used
// By default the staging environment is used
// The same configuration is later used for all the other API classes
$config = RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration(true);

$apiInstance = new RPay\POK\PaymentsSdk\Api\AuthApi(
    $config,
    new GuzzleHttp\Client()
);
$body = new \RPay\POK\PaymentsSdk\Model\LoginSdkPayload(); // \RPay\POK\PaymentsSdk\Model\LoginSdkPayload

try {
    $result = $apiInstance->login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name     | Type                                                                           | Description | Notes      |
|----------|--------------------------------------------------------------------------------|-------------|------------|
| **body** | [**\RPay\POK\PaymentsSdk\Model\LoginSdkPayload**](../Model/LoginSdkPayload.md) |             | [optional] |

### Return type

[**\RPay\POK\PaymentsSdk\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
