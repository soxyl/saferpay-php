# Soxyl\Saferpay\PaymentPageApi

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentPageAssertPost**](PaymentPageApi.md#paymentPageAssertPost) | **POST** /PaymentPage/Assert | 
[**paymentPageInitializePost**](PaymentPageApi.md#paymentPageInitializePost) | **POST** /PaymentPage/Initialize | 


# **paymentPageAssertPost**
> \Soxyl\Saferpay\Model\PaymentPageAssertResponse paymentPageAssertPost($payment_page_assert_request)



Call this function to safely check the status of the transaction from your server. Depending on the payment provider, the resulting transaction may either be an authorization or may already be captured (meaning the financial flow was already triggered). This will be visible in the status of the transaction container returned in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\PaymentPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_page_assert_request = new \Soxyl\Saferpay\Model\PaymentPageAssertRequest(); // \Soxyl\Saferpay\Model\PaymentPageAssertRequest | 

try {
    $result = $apiInstance->paymentPageAssertPost($payment_page_assert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPageApi->paymentPageAssertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_page_assert_request** | [**\Soxyl\Saferpay\Model\PaymentPageAssertRequest**](../Model/PaymentPageAssertRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\PaymentPageAssertResponse**](../Model/PaymentPageAssertResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPageInitializePost**
> \Soxyl\Saferpay\Model\PaymentPageInitializeResponse paymentPageInitializePost($payment_page_initialize_request)



This method can be used to start a transaction with the Payment Page which may involve either DCC and / or 3d-secure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\PaymentPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_page_initialize_request = new \Soxyl\Saferpay\Model\PaymentPageInitializeRequest(); // \Soxyl\Saferpay\Model\PaymentPageInitializeRequest | 

try {
    $result = $apiInstance->paymentPageInitializePost($payment_page_initialize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPageApi->paymentPageInitializePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_page_initialize_request** | [**\Soxyl\Saferpay\Model\PaymentPageInitializeRequest**](../Model/PaymentPageInitializeRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\PaymentPageInitializeResponse**](../Model/PaymentPageInitializeResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

