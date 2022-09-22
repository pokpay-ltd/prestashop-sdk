<?php

use RPay\POK\PaymentsSdk\Api\AuthApi;
use RPay\POK\PaymentsSdk\Api\MerchantsApi;
use RPay\POK\PaymentsSdk\Configuration;
use RPay\POK\PaymentsSdk\Model\CreateSdkOrderPayload;
use RPay\POK\PaymentsSdk\Model\LoginSdkPayload;

class Demo
{
    function generateConfirmationUrl()
    {
        $loginApi = new AuthApi();
        $loginPayload = new LoginSdkPayload('<KEY_ID>', '<KEY_SECRET>');
        $loginResponse = $loginApi->login($loginPayload);
        $token = $loginResponse->getData()->getAccessToken();
        $config = new Configuration(); //pass true here for production
        $config->setApiKey('Authorization', $token);

        $merchantsApi = new MerchantsApi('<MERCHANT_ID>', $config);

        $sdkOrder = new CreateSdkOrderPayload([
            'products' => [],
            'amount' => 400, // if products array is empty this is required
            'currencyCode' => 'ALL', // currently, we support only ALL and EUR
            'autoCapture' => true, //if false, $merchantsApi->captureOrder() will be required after client confirmation,
            'redirectUrl' => 'https://www.example.com/some-path', // (optional)
            'merchantCustomReference' => '5623498', // (optional) e.g.: Invoice Number on your system
            'webhookUrl' => 'https://www.example.com/some-wh-listener', // (optional) will be POST-ed by our server along with order data
        ]);

        $createdOrder = $merchantsApi->createOrder($sdkOrder);

        return $createdOrder->getData()
            ->getSdkOrder()
            ->getSelf()
            ->getConfirmUrl();
    }
}