<?php
/**
 * SdkOrdersApi
 * PHP version 7.0
 *
 * @category Class
 * @package  RPay\POK\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * RPay API Documentation
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RPay\POK\PaymentsSdk\Api;

/**
 * SdkOrdersApi Class Doc Comment
 *
 * @category Class
 * @package  RPay\POK\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SdkOrdersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration       $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        \Rpay\POK\PaymentsSdk\Configuration $config = null,
        \GuzzleHttp\ClientInterface $client = null,
        \Rpay\POK\PaymentsSdk\HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client;
        $this->config = $config ?: \Rpay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new \Rpay\POK\PaymentsSdk\HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation confirmOrder
     *
     * Confirm order.
     *
     * @param  string $sdkOrderId sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload $body body (optional)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse
     */
    public function confirmOrder($sdkOrderId, $body = null)
    {
        list($response) = $this->confirmOrderWithHttpInfo($sdkOrderId, $body);
        return $response;
    }

    /**
     * Operation confirmOrderWithHttpInfo
     *
     * Confirm order.
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload $body (optional)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmOrderWithHttpInfo($sdkOrderId, $body = null)
    {
        $request = $this->confirmOrderRequest($sdkOrderId, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUrl()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\RPay\POK\PaymentsSdk\Model\SdkOrderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (\Rpay\POK\PaymentsSdk\ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation confirmOrderAsync
     *
     * Confirm order.
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOrderAsync($sdkOrderId, $body = null)
    {
        return $this->confirmOrderAsyncWithHttpInfo($sdkOrderId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation confirmOrderAsyncWithHttpInfo
     *
     * Confirm order.
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOrderAsyncWithHttpInfo($sdkOrderId, $body = null)
    {
        $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
        $request = $this->confirmOrderRequest($sdkOrderId, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new \Rpay\POK\PaymentsSdk\ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUrl()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'confirmOrder'
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function confirmOrderRequest($sdkOrderId, $body = null)
    {
        // verify the required parameter 'sdkOrderId' is set
        if ($sdkOrderId === null || (is_array($sdkOrderId) && count($sdkOrderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sdkOrderId when calling confirmOrder'
            );
        }

        $resourcePath = '/sdk-orders/{sdkOrderId}/confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        if ($sdkOrderId !== null) {
            $resourcePath = str_replace(
                '{' . 'sdkOrderId' . '}',
                \Rpay\POK\PaymentsSdk\ObjectSerializer::toPathValue($sdkOrderId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*'],
            []
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(\RPay\POK\PaymentsSdk\ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        $httpBody = \GuzzleHttp\Stream\Stream::factory($httpBody);
        return new \GuzzleHttp\Message\Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation confirmOrderAsGuest
     *
     * Confirm order with guest checkout
     *
     * @param  string $sdkOrderId sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload $body body (optional)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse
     */
    public function confirmOrderAsGuest($sdkOrderId, $body = null)
    {
        list($response) = $this->confirmOrderAsGuestWithHttpInfo($sdkOrderId, $body);
        return $response;
    }

    /**
     * Operation confirmOrderAsGuestWithHttpInfo
     *
     * Confirm order with guest checkout
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload $body (optional)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmOrderAsGuestWithHttpInfo($sdkOrderId, $body = null)
    {
        $request = $this->confirmOrderAsGuestRequest($sdkOrderId, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUrl()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\RPay\POK\PaymentsSdk\Model\SdkOrderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (\Rpay\POK\PaymentsSdk\ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Rpay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation confirmOrderAsGuestAsync
     *
     * Confirm order with guest checkout
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOrderAsGuestAsync($sdkOrderId, $body = null)
    {
        return $this->confirmOrderAsGuestAsyncWithHttpInfo($sdkOrderId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation confirmOrderAsGuestAsyncWithHttpInfo
     *
     * Confirm order with guest checkout
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmOrderAsGuestAsyncWithHttpInfo($sdkOrderId, $body = null)
    {
        $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
        $request = $this->confirmOrderAsGuestRequest($sdkOrderId, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new \Rpay\POK\PaymentsSdk\ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUrl()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'confirmOrderAsGuest'
     *
     * @param  string $sdkOrderId (required)
     * @param  \RPay\POK\PaymentsSdk\Model\ConfirmSdkOrderGuestPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function confirmOrderAsGuestRequest($sdkOrderId, $body = null)
    {
        // verify the required parameter 'sdkOrderId' is set
        if ($sdkOrderId === null || (is_array($sdkOrderId) && count($sdkOrderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sdkOrderId when calling confirmOrderAsGuest'
            );
        }

        $resourcePath = '/sdk-orders/{sdkOrderId}/guest-confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // path params
        if ($sdkOrderId !== null) {
            $resourcePath = str_replace(
                '{' . 'sdkOrderId' . '}',
                \Rpay\POK\PaymentsSdk\ObjectSerializer::toPathValue($sdkOrderId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*'],
            []
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode(\Rpay\POK\PaymentsSdk\ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        $httpBody = \GuzzleHttp\Stream\Stream::factory($httpBody);
        return new \GuzzleHttp\Message\Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSdkOrderById
     *
     * Retrieve an order
     *
     * @param  string $sdkOrderId sdkOrderId (required)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse
     */
    public function getSdkOrderById($sdkOrderId)
    {
        list($response) = $this->getSdkOrderByIdWithHttpInfo($sdkOrderId);
        return $response;
    }

    /**
     * Operation getSdkOrderByIdWithHttpInfo
     *
     * Retrieve an order
     *
     * @param  string $sdkOrderId (required)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RPay\POK\PaymentsSdk\Model\SdkOrderResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSdkOrderByIdWithHttpInfo($sdkOrderId)
    {
        $request = $this->getSdkOrderByIdRequest($sdkOrderId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new \Rpay\POK\PaymentsSdk\ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUrl()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\RPay\POK\PaymentsSdk\Model\SdkOrderResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 410:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\RPay\POK\PaymentsSdk\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (\Rpay\POK\PaymentsSdk\ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSdkOrderByIdAsync
     *
     * Retrieve an order
     *
     * @param  string $sdkOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSdkOrderByIdAsync($sdkOrderId)
    {
        return $this->getSdkOrderByIdAsyncWithHttpInfo($sdkOrderId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSdkOrderByIdAsyncWithHttpInfo
     *
     * Retrieve an order
     *
     * @param  string $sdkOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSdkOrderByIdAsyncWithHttpInfo($sdkOrderId)
    {
        $returnType = '\RPay\POK\PaymentsSdk\Model\SdkOrderResponse';
        $request = $this->getSdkOrderByIdRequest($sdkOrderId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \Rpay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new \Rpay\POK\PaymentsSdk\ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUrl()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSdkOrderById'
     *
     * @param  string $sdkOrderId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSdkOrderByIdRequest($sdkOrderId)
    {
        // verify the required parameter 'sdkOrderId' is set
        if ($sdkOrderId === null || (is_array($sdkOrderId) && count($sdkOrderId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sdkOrderId when calling getSdkOrderById'
            );
        }

        $resourcePath = '/sdk-orders/{sdkOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];

        // path params
        if ($sdkOrderId !== null) {
            $resourcePath = str_replace(
                '{' . 'sdkOrderId' . '}',
                \Rpay\POK\PaymentsSdk\ObjectSerializer::toPathValue($sdkOrderId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*'],
            []
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        $httpBody = \GuzzleHttp\Stream\Stream::factory($httpBody);
        return new \GuzzleHttp\Message\Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[\GuzzleHttp\RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[\GuzzleHttp\RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
