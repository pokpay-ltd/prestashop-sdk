<?php
/**
 * AuthApi
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
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  RPay\POK\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var RPay\POK\PaymentsSdk\Configuration
     */
    protected $config;

    /**
     * @var RPay\POK\PaymentsSdk\HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param \RPay\POK\PaymentsSdk\Configuration $config configuration
     * @param \GuzzleHttp\ClientInterface $client
     * @param \RPay\POK\PaymentsSdk\HeaderSelector  $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        \RPay\POK\PaymentsSdk\Configuration $config = null,
        \GuzzleHttp\ClientInterface $client = null,
        \RPay\POK\PaymentsSdk\HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client;
        $this->config = $config ?: \RPay\POK\PaymentsSdk\Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new \RPay\POK\PaymentsSdk\HeaderSelector();
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
     * Operation login
     *
     * Login Sdk
     *
     * @param  \RPay\POK\PaymentsSdk\Model\LoginSdkPayload $body body
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \RPay\POK\PaymentsSdk\Model\LoginResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse
     */
    public function login($body)
    {
        list($response) = $this->loginWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation loginWithHttpInfo
     *
     * Login Sdk
     *
     * @param  \RPay\POK\PaymentsSdk\Model\LoginSdkPayload $body (optional)
     *
     * @throws \RPay\POK\PaymentsSdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \RPay\POK\PaymentsSdk\Model\LoginResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse|\RPay\POK\PaymentsSdk\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginWithHttpInfo($body = null)
    {
        $request = $this->loginRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                throw new \RPay\POK\PaymentsSdk\ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new \RPay\POK\PaymentsSdk\ApiException(
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
                    if ('\RPay\POK\PaymentsSdk\Model\LoginResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, '\RPay\POK\PaymentsSdk\Model\LoginResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
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
                case 403:
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
            }

            $returnType = '\RPay\POK\PaymentsSdk\Model\LoginResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (\RPay\POK\PaymentsSdk\ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\LoginResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\RPay\POK\PaymentsSdk\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize(
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
     * Operation loginAsync
     *
     * Login Sdk
     *
     * @param  \RPay\POK\PaymentsSdk\Model\LoginSdkPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginAsync($body = null)
    {
        return $this->loginAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loginAsyncWithHttpInfo
     *
     * Login Sdk
     *
     * @param  \RPay\POK\PaymentsSdk\Model\LoginSdkPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginAsyncWithHttpInfo($body = null)
    {
        $returnType = '\RPay\POK\PaymentsSdk\Model\LoginResponse';
        $request = $this->loginRequest($body);

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
                        \RPay\POK\PaymentsSdk\ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new \RPay\POK\PaymentsSdk\ApiException(
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
     * Create request for operation 'login'
     *
     * @param  \RPay\POK\PaymentsSdk\Model\LoginSdkPayload $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loginRequest($body = null)
    {
        $resourcePath = '/auth/sdk/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

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
