# # SdkOrder

## Properties

| Name                        | Type                                                                      | Description | Notes              |
|-----------------------------|---------------------------------------------------------------------------|-------------|--------------------|
| **id**                      | **string**                                                                |             |                    |
| **amount**                  | **float**                                                                 |             |                    |
| **currencyCode**            | **string**                                                                |             | [default to 'ALL'] |
| **products**                | [**\RPay\POK\PaymentsSdk\Model\SdkOrderProduct[]**](SdkOrderProduct.md)   |             | [optional]         |
| **shippingCost**            | **float**                                                                 |             | [optional]         |
| **finalAmount**             | **float**                                                                 |             |                    |
| **createdAt**               | [**\DateTime**](\DateTime.md)                                             |             |                    |
| **expiresAt**               | [**\DateTime**](\DateTime.md)                                             |             |                    |
| **redirectUrl**             | **string**                                                                |             | [optional]         |
| **merchantCustomReference** | **string**                                                                |             | [optional]         |
| **merchant**                | [**\RPay\POK\PaymentsSdk\Model\Merchant**](Merchant.md)                   |             | [optional]         |
| **self**                    | [**\RPay\POK\PaymentsSdk\Model\SdkOrderSelf**](SdkOrderSelf.md)           |             | [optional]         |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
