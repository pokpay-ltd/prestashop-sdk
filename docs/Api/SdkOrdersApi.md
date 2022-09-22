# RPay\POK\PaymentsSdk\SdkOrdersApi

All URIs are relative to *https://api.pokpay.io* in the production environment and *https://api-staging.pokpay.io* in the staging environment.

| Method                                                           | HTTP request                                    | Description                       |
|------------------------------------------------------------------|-------------------------------------------------|-----------------------------------|
| [**confirmOrder()**](SdkOrdersApi.md#confirmOrder)               | **POST** /sdk-orders/{sdkOrderId}/confirm       | Confirm order.                    |
| [**confirmOrderAsGuest()**](SdkOrdersApi.md#confirmOrderAsGuest) | **POST** /sdk-orders/{sdkOrderId}/guest-confirm | Confirm order with guest checkout |
| [**getSdkOrderById()**](SdkOrdersApi.md#getSdkOrderById)         | **GET** /sdk-orders/{sdkOrderId}                | Retrieve an order                 |

## `confirmOrder()`

```php
confirmOrder($sdkOrderId, $body): \RPay\POK\PaymentsSdk\Model\SdkOrderResponse
```

Confirm order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new RPay\POK\PaymentsSdk\Api\SdkOrdersApi(
    $config,
    new GuzzleHttp\Client(),
);

$sdkOrderId = 'sdkOrderId_example'; // string
$body = new \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload(); // \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload

try {
    $result = $apiInstance->confirmOrder($sdkOrderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SdkOrdersApi->confirmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type                                                                                         | Description | Notes      |
|----------------|----------------------------------------------------------------------------------------------|-------------|------------|
| **sdkOrderId** | **string**                                                                                   |             |            |
| **body**       | [**\RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload**](../Model/ConfirmSdkOrderPayload.md) |             | [optional] |

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

## `confirmOrderAsGuest()`

```php
confirmOrderAsGuest($sdkOrderId, $body): \RPay\POK\PaymentsSdk\Model\SdkOrderResponse
```

Confirm order with guest checkout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();

$apiInstance = new RPay\POK\PaymentsSdk\Api\SdkOrdersApi(
    new GuzzleHttp\Client()
);
$sdkOrderId = 'sdkOrderId_example'; // string
$body = new \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload(); // \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload

try {
    $result = $apiInstance->confirmOrderAsGuest($sdkOrderId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SdkOrdersApi->confirmOrderAsGuest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type                                                                                                   | Description | Notes      |
|----------------|--------------------------------------------------------------------------------------------------------|-------------|------------|
| **sdkOrderId** | **string**                                                                                             |             |            |
| **body**       | [**\RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload**](../Model/ConfirmSdkOrderGuestPayload.md) |             | [optional] |

### Return type

[**\RPay\POK\PaymentsSdk\Model\SdkOrderResponse**](../Model/SdkOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSdkOrderById()`

```php
getSdkOrderById($sdkOrderId): \RPay\POK\PaymentsSdk\Model\SdkOrderResponse
```

Retrieve an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();

$apiInstance = new RPay\POK\PaymentsSdk\Api\SdkOrdersApi(
    $config,
    new GuzzleHttp\Client(),
);
$sdkOrderId = 'sdkOrderId_example'; // string

try {
    $result = $apiInstance->getSdkOrderById($sdkOrderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SdkOrdersApi->getSdkOrderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type       | Description | Notes |
|----------------|------------|-------------|-------|
| **sdkOrderId** | **string** |             |       |

### Return type

[**\RPay\POK\PaymentsSdk\Model\SdkOrderResponse**](../Model/SdkOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
