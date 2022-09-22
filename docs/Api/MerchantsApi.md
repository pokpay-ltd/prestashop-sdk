# RPay\POK\PaymentsSdk\MerchantsApi

All URIs are relative to *https://api.pokpay.io* in the production environment and *https://api-staging.pokpay.io* in the staging environment.
All URIs use authorization, so AuthApi->login must be completed successfully firstly.

| Method                                             | HTTP request                                                     | Description             |
|----------------------------------------------------|------------------------------------------------------------------|-------------------------|
| [**captureOrder()**](MerchantsApi.md#captureOrder) | **POST** /merchants/{merchantId}/sdk-orders/{sdkOrderId}/capture | Capture an sdk order    |
| [**createOrder()**](MerchantsApi.md#createOrder)   | **POST** /merchants/{merchantId}/sdk-orders                      | Create an sdk api order |

## `captureOrder()`

```php
captureOrder($merchantId, $sdkOrderId): \RPay\POK\PaymentsSdk\Model\SdkOrderResponse
```

Capture an sdk order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();

$merchantId = 'YOUR_POKPAY_MERCHANT_ID';

$apiInstance = new RPay\POK\PaymentsSdk\Api\MerchantsApi(
    $merchantId,
    $config,
    new GuzzleHttp\Client(),
);

$sdkOrderId = 'sdkOrderId_example'; // string

try {
    $result = $apiInstance->captureOrder($sdkOrderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type       | Description | Notes |
|----------------|------------|-------------|-------|
| **merchantId** | **string** |             |       |
| **sdkOrderId** | **string** |             |       |

### Return type

[**\RPay\POK\PaymentsSdk\Model\SdkOrderResponse**](../Model/SdkOrderResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($merchantId, $body): \RPay\POK\PaymentsSdk\Model\SdkOrderResponse
```

Create an sdk api order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();

$merchantId = 'YOUR_POKPAY_MERCHANT_ID';

$apiInstance = new RPay\POK\PaymentsSdk\Api\MerchantsApi(
    $merchantId,
    $config,
    new GuzzleHttp\Client(),
);

$sdkOrderInfo = [
    'amount' => 100,
    'currencyCode' => 'EUR',
    'products' => [],
];

$body = new \RPay\POK\PaymentsSdk\Model\CreateSdkOrderPayload($sdkOrderInfo); // \RPay\POK\PaymentsSdk\Model\CreateSdkOrderPayload

try {
    $result = $apiInstance->createOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type                                                                                       | Description | Notes      |
|----------------|--------------------------------------------------------------------------------------------|-------------|------------|
| **merchantId** | **string**                                                                                 |             |            |
| **body**       | [**\RPay\POK\PaymentsSdk\Model\CreateSdkOrderPayload**](../Model/CreateSdkOrderPayload.md) |             | [optional] |

### Return type

[**\RPay\POK\PaymentsSdk\Model\SdkOrderResponse**](../Model/SdkOrderResponse.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
