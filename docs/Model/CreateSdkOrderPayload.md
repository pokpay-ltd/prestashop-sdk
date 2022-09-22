# # CreateSdkOrderPayload

## Properties

| Name                        | Type                                                                      | Description | Notes              |
|-----------------------------|---------------------------------------------------------------------------|-------------|--------------------|
| **amount**                  | **string**                                                                |             |                    |
| **currencyCode**            | **string**                                                                |             | [default to 'ALL'] |
| **autoCapture**             | **bool**                                                                  |             | [optional]         |
| **products**                | [**\RPay\POK\PaymentsSdk\Model\SdkOrderProduct[]**](SdkOrderProduct.md)   |             |                    |
| **shippingCost**            | **float**                                                                 |             | [optional]         |
| **webhookUrl**              | **string**                                                                |             | [optional]         |
| **redirectUrl**             | **string**                                                                |             | [optional]         |
| **merchantCustomReference** | **string**                                                                |             | [optional]         |
| **deeplink**                | **string**                                                                |             | [optional]         |
| **splitWith**               | [**\RPay\POK\PaymentsSdk\Model\SdkOrderSplitWith**](SdkOrderSplitWith.md) |             | [optional]         |
| **description**             | **string**                                                                |             | [optional]         |


[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
