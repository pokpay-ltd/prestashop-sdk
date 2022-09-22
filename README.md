# PokPay Payments SDK

PokPay's Prestashop PHP SDK for Checkout REST APIs

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer
```bash
$ composer require rpay/prestashop-pokpay-payments-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/pok-payments-sdk/vendor/autoload.php');
```

## Logging in with API key

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    new GuzzleHttp\Client(),
);

$keyId = 'PokPay Key Id';
$keySecret = 'PokPay Key Secret';

$payload = new \RPay\POK\PaymentsSdk\Model\LoginSdkPayload($keyId, $keySecret); // \RPay\POK\PaymentsSdk\Model\LoginSdkPayload

try {
    $result = $apiInstance->login($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->login: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.pokpay.io* in the production environment and *https://api-staging.pokpay.io* in the staging environment

| Class          | Method                                                                  | HTTP request                                                     | Description                       |
|----------------|-------------------------------------------------------------------------|------------------------------------------------------------------|-----------------------------------|
| *AuthApi*      | [**login**](docs/Api/AuthApi.md#login)                                  | **POST** /auth/sdk/login                                         | Login Sdk                         |
| *MerchantsApi* | [**captureOrder**](docs/Api/MerchantsApi.md#captureorder)               | **POST** /merchants/{merchantId}/sdk-orders/{sdkOrderId}/capture | Capture an sdk order              |
| *MerchantsApi* | [**createOrder**](docs/Api/MerchantsApi.md#createorder)                 | **POST** /merchants/{merchantId}/sdk-orders                      | Create an sdk api order           |
| *SdkOrdersApi* | [**confirmOrder**](docs/Api/SdkOrdersApi.md#confirmorder)               | **POST** /sdk-orders/{sdkOrderId}/confirm                        | Confirm order.                    |
| *SdkOrdersApi* | [**confirmOrderAsGuest**](docs/Api/SdkOrdersApi.md#confirmorderasguest) | **POST** /sdk-orders/{sdkOrderId}/guest-confirm                  | Confirm order with guest checkout |
| *SdkOrdersApi* | [**getSdkOrderById**](docs/Api/SdkOrdersApi.md#getsdkorderbyid)         | **GET** /sdk-orders/{sdkOrderId}                                 | Retrieve an order                 |

## Models

- [ConfirmSdkOrderGuestPayload](docs/Model/ConfirmSdkOrderGuestPayload.md)
- [ConfirmSdkOrderPayload](docs/Model/ConfirmSdkOrderPayload.md)
- [CreateSdkOrderPayload](docs/Model/CreateSdkOrderPayload.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [FieldOfOperation](docs/Model/FieldOfOperation.md)
- [LoginResponse](docs/Model/LoginResponse.md)
- [LoginResponseData](docs/Model/LoginResponseData.md)
- [LoginSdkPayload](docs/Model/LoginSdkPayload.md)
- [Merchant](docs/Model/Merchant.md)
- [SdkOrder](docs/Model/SdkOrder.md)
- [SdkOrderProduct](docs/Model/SdkOrderProduct.md)
- [SdkOrderResponse](docs/Model/SdkOrderResponse.md)
- [SdkOrderResponseData](docs/Model/SdkOrderResponseData.md)
- [SdkOrderSelf](docs/Model/SdkOrderSelf.md)
- [SdkOrderSplitWith](docs/Model/SdkOrderSplitWith.md)

## Authorization

### jwt

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author
[RPay Ltd](https://www.rpay.ai)


## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
