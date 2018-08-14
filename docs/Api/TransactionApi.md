# Soxyl\Saferpay\TransactionApi

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionAdjustAmountPost**](TransactionApi.md#transactionAdjustAmountPost) | **POST** /Transaction/AdjustAmount | 
[**transactionAssertCapturePost**](TransactionApi.md#transactionAssertCapturePost) | **POST** /Transaction/AssertCapture | 
[**transactionAssertRedirectPaymentPost**](TransactionApi.md#transactionAssertRedirectPaymentPost) | **POST** /Transaction/AssertRedirectPayment | 
[**transactionAssertRefundPost**](TransactionApi.md#transactionAssertRefundPost) | **POST** /Transaction/AssertRefund | 
[**transactionAuthorizeDirectPost**](TransactionApi.md#transactionAuthorizeDirectPost) | **POST** /Transaction/AuthorizeDirect | 
[**transactionAuthorizePost**](TransactionApi.md#transactionAuthorizePost) | **POST** /Transaction/Authorize | 
[**transactionAuthorizeReferencedPost**](TransactionApi.md#transactionAuthorizeReferencedPost) | **POST** /Transaction/AuthorizeReferenced | 
[**transactionCancelPost**](TransactionApi.md#transactionCancelPost) | **POST** /Transaction/Cancel | 
[**transactionCapturePost**](TransactionApi.md#transactionCapturePost) | **POST** /Transaction/Capture | 
[**transactionInitializePost**](TransactionApi.md#transactionInitializePost) | **POST** /Transaction/Initialize | 
[**transactionMultipartCapturePost**](TransactionApi.md#transactionMultipartCapturePost) | **POST** /Transaction/MultipartCapture | 
[**transactionMultipartFinalizePost**](TransactionApi.md#transactionMultipartFinalizePost) | **POST** /Transaction/MultipartFinalize | 
[**transactionQueryPaymentMeansPost**](TransactionApi.md#transactionQueryPaymentMeansPost) | **POST** /Transaction/QueryPaymentMeans | 
[**transactionRedirectPaymentPost**](TransactionApi.md#transactionRedirectPaymentPost) | **POST** /Transaction/RedirectPayment | 
[**transactionRefundDirectPost**](TransactionApi.md#transactionRefundDirectPost) | **POST** /Transaction/RefundDirect | 
[**transactionRefundPost**](TransactionApi.md#transactionRefundPost) | **POST** /Transaction/Refund | 


# **transactionAdjustAmountPost**
> \Soxyl\Saferpay\Model\TransactionAdjustAmountResponse transactionAdjustAmountPost($transaction_adjust_amount_request)



This method may be used to adjust the amount after query payment means.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_adjust_amount_request = new \Soxyl\Saferpay\Model\TransactionAdjustAmountRequest(); // \Soxyl\Saferpay\Model\TransactionAdjustAmountRequest | 

try {
    $result = $apiInstance->transactionAdjustAmountPost($transaction_adjust_amount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAdjustAmountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_adjust_amount_request** | [**\Soxyl\Saferpay\Model\TransactionAdjustAmountRequest**](../Model/TransactionAdjustAmountRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAdjustAmountResponse**](../Model/TransactionAdjustAmountResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAssertCapturePost**
> \Soxyl\Saferpay\Model\TransactionAssertCaptureResponse transactionAssertCapturePost($transaction_assert_capture_request)



This method is only supported for pending capture transactions (only used for paydirekt at the moment)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_assert_capture_request = new \Soxyl\Saferpay\Model\TransactionAssertCaptureRequest(); // \Soxyl\Saferpay\Model\TransactionAssertCaptureRequest | 

try {
    $result = $apiInstance->transactionAssertCapturePost($transaction_assert_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAssertCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_assert_capture_request** | [**\Soxyl\Saferpay\Model\TransactionAssertCaptureRequest**](../Model/TransactionAssertCaptureRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAssertCaptureResponse**](../Model/TransactionAssertCaptureResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAssertRedirectPaymentPost**
> \Soxyl\Saferpay\Model\TransactionAssertRedirectPaymentResponse transactionAssertRedirectPaymentPost($transaction_assert_redirect_payment_request)



WARNING: This feature is deprecated and replaced by the Payment Page. Please use the parameter PaymentMethods to directly select the desired 3rd party provider!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_assert_redirect_payment_request = new \Soxyl\Saferpay\Model\TransactionAssertRedirectPaymentRequest(); // \Soxyl\Saferpay\Model\TransactionAssertRedirectPaymentRequest | 

try {
    $result = $apiInstance->transactionAssertRedirectPaymentPost($transaction_assert_redirect_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAssertRedirectPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_assert_redirect_payment_request** | [**\Soxyl\Saferpay\Model\TransactionAssertRedirectPaymentRequest**](../Model/TransactionAssertRedirectPaymentRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAssertRedirectPaymentResponse**](../Model/TransactionAssertRedirectPaymentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAssertRefundPost**
> \Soxyl\Saferpay\Model\TransactionAssertRefundResponse transactionAssertRefundPost($transaction_assert_refund_request)



This method may be used to inquire the status and further information of pending refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_assert_refund_request = new \Soxyl\Saferpay\Model\TransactionAssertRefundRequest(); // \Soxyl\Saferpay\Model\TransactionAssertRefundRequest | 

try {
    $result = $apiInstance->transactionAssertRefundPost($transaction_assert_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAssertRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_assert_refund_request** | [**\Soxyl\Saferpay\Model\TransactionAssertRefundRequest**](../Model/TransactionAssertRefundRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAssertRefundResponse**](../Model/TransactionAssertRefundResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAuthorizeDirectPost**
> \Soxyl\Saferpay\Model\TransactionAuthorizeDirectResponse transactionAuthorizeDirectPost($transaction_authorize_direct_request)



This function may be used to directly authorize transactions which do not require a redirect of the customer (e.g. direct debit or recurring transactions based on a previously registered alias).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_authorize_direct_request = new \Soxyl\Saferpay\Model\TransactionAuthorizeDirectRequest(); // \Soxyl\Saferpay\Model\TransactionAuthorizeDirectRequest | 

try {
    $result = $apiInstance->transactionAuthorizeDirectPost($transaction_authorize_direct_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAuthorizeDirectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_authorize_direct_request** | [**\Soxyl\Saferpay\Model\TransactionAuthorizeDirectRequest**](../Model/TransactionAuthorizeDirectRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAuthorizeDirectResponse**](../Model/TransactionAuthorizeDirectResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAuthorizePost**
> \Soxyl\Saferpay\Model\TransactionAuthorizeResponse transactionAuthorizePost($transaction_authorize_request)



This function may be called to authorize a transaction which was started by a call to Transaction/Initialize.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_authorize_request = new \Soxyl\Saferpay\Model\TransactionAuthorizeRequest(); // \Soxyl\Saferpay\Model\TransactionAuthorizeRequest | 

try {
    $result = $apiInstance->transactionAuthorizePost($transaction_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAuthorizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_authorize_request** | [**\Soxyl\Saferpay\Model\TransactionAuthorizeRequest**](../Model/TransactionAuthorizeRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAuthorizeResponse**](../Model/TransactionAuthorizeResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionAuthorizeReferencedPost**
> \Soxyl\Saferpay\Model\TransactionAuthorizeReferencedResponse transactionAuthorizeReferencedPost($transaction_authorize_referenced_request)



This method may be used to perform follow-up authorizations to an earlier transaction. At this time, the referenced (initial) transaction must have been performed setting either the recurring or installment option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_authorize_referenced_request = new \Soxyl\Saferpay\Model\TransactionAuthorizeReferencedRequest(); // \Soxyl\Saferpay\Model\TransactionAuthorizeReferencedRequest | 

try {
    $result = $apiInstance->transactionAuthorizeReferencedPost($transaction_authorize_referenced_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionAuthorizeReferencedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_authorize_referenced_request** | [**\Soxyl\Saferpay\Model\TransactionAuthorizeReferencedRequest**](../Model/TransactionAuthorizeReferencedRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionAuthorizeReferencedResponse**](../Model/TransactionAuthorizeReferencedResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionCancelPost**
> \Soxyl\Saferpay\Model\TransactionCancelResponse transactionCancelPost($transaction_cancel_request)



This method may be used to cancel previously authorized transactions and refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_cancel_request = new \Soxyl\Saferpay\Model\TransactionCancelRequest(); // \Soxyl\Saferpay\Model\TransactionCancelRequest | 

try {
    $result = $apiInstance->transactionCancelPost($transaction_cancel_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_cancel_request** | [**\Soxyl\Saferpay\Model\TransactionCancelRequest**](../Model/TransactionCancelRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionCancelResponse**](../Model/TransactionCancelResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionCapturePost**
> \Soxyl\Saferpay\Model\TransactionCaptureResponse transactionCapturePost($transaction_capture_request)



This method may be used to finalize previously authorized transactions and refunds.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_capture_request = new \Soxyl\Saferpay\Model\TransactionCaptureRequest(); // \Soxyl\Saferpay\Model\TransactionCaptureRequest | 

try {
    $result = $apiInstance->transactionCapturePost($transaction_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_capture_request** | [**\Soxyl\Saferpay\Model\TransactionCaptureRequest**](../Model/TransactionCaptureRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionCaptureResponse**](../Model/TransactionCaptureResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionInitializePost**
> \Soxyl\Saferpay\Model\TransactionInitializeResponse transactionInitializePost($transaction_initialize_request)



This method may be used to start a transaction which may involve either DCC and / or 3d-secure.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_initialize_request = new \Soxyl\Saferpay\Model\TransactionInitializeRequest(); // \Soxyl\Saferpay\Model\TransactionInitializeRequest | 

try {
    $result = $apiInstance->transactionInitializePost($transaction_initialize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionInitializePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_initialize_request** | [**\Soxyl\Saferpay\Model\TransactionInitializeRequest**](../Model/TransactionInitializeRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionInitializeResponse**](../Model/TransactionInitializeResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMultipartCapturePost**
> \Soxyl\Saferpay\Model\TransactionMultipartCaptureResponse transactionMultipartCapturePost($transaction_multipart_capture_request)



This method may be used to capture multiple parts of an authorized transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_multipart_capture_request = new \Soxyl\Saferpay\Model\TransactionMultipartCaptureRequest(); // \Soxyl\Saferpay\Model\TransactionMultipartCaptureRequest | 

try {
    $result = $apiInstance->transactionMultipartCapturePost($transaction_multipart_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionMultipartCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_multipart_capture_request** | [**\Soxyl\Saferpay\Model\TransactionMultipartCaptureRequest**](../Model/TransactionMultipartCaptureRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionMultipartCaptureResponse**](../Model/TransactionMultipartCaptureResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionMultipartFinalizePost**
> \Soxyl\Saferpay\Model\TransactionMultipartFinalizeResponse transactionMultipartFinalizePost($transaction_multipart_finalize_request)



This method may be used to finalize an authorized transaction (i.e. marks the end of partial captures).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_multipart_finalize_request = new \Soxyl\Saferpay\Model\TransactionMultipartFinalizeRequest(); // \Soxyl\Saferpay\Model\TransactionMultipartFinalizeRequest | 

try {
    $result = $apiInstance->transactionMultipartFinalizePost($transaction_multipart_finalize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionMultipartFinalizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_multipart_finalize_request** | [**\Soxyl\Saferpay\Model\TransactionMultipartFinalizeRequest**](../Model/TransactionMultipartFinalizeRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionMultipartFinalizeResponse**](../Model/TransactionMultipartFinalizeResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionQueryPaymentMeansPost**
> \Soxyl\Saferpay\Model\TransactionQueryPaymentMeansResponse transactionQueryPaymentMeansPost($transaction_query_payment_means_request)



This method may be used to query the payment means and payer data (address) after initialize and wallet redirect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_query_payment_means_request = new \Soxyl\Saferpay\Model\TransactionQueryPaymentMeansRequest(); // \Soxyl\Saferpay\Model\TransactionQueryPaymentMeansRequest | 

try {
    $result = $apiInstance->transactionQueryPaymentMeansPost($transaction_query_payment_means_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionQueryPaymentMeansPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_query_payment_means_request** | [**\Soxyl\Saferpay\Model\TransactionQueryPaymentMeansRequest**](../Model/TransactionQueryPaymentMeansRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionQueryPaymentMeansResponse**](../Model/TransactionQueryPaymentMeansResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRedirectPaymentPost**
> \Soxyl\Saferpay\Model\TransactionRedirectPaymentResponse transactionRedirectPaymentPost($transaction_redirect_payment_request)



WARNING: This feature is deprecated and replaced by the Payment Page. Please use the parameter PaymentMethods to directly select the desired 3rd party provider!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_redirect_payment_request = new \Soxyl\Saferpay\Model\TransactionRedirectPaymentRequest(); // \Soxyl\Saferpay\Model\TransactionRedirectPaymentRequest | 

try {
    $result = $apiInstance->transactionRedirectPaymentPost($transaction_redirect_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionRedirectPaymentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_redirect_payment_request** | [**\Soxyl\Saferpay\Model\TransactionRedirectPaymentRequest**](../Model/TransactionRedirectPaymentRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionRedirectPaymentResponse**](../Model/TransactionRedirectPaymentResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundDirectPost**
> \Soxyl\Saferpay\Model\TransactionRefundDirectResponse transactionRefundDirectPost($transaction_refund_direct_request)



This method may be called to refund an amount to the given means of payment (not supported for all means of payment) without referencing a previous transaction. This might be the case if the original transaction was done with a card which is not valid any more.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_refund_direct_request = new \Soxyl\Saferpay\Model\TransactionRefundDirectRequest(); // \Soxyl\Saferpay\Model\TransactionRefundDirectRequest | 

try {
    $result = $apiInstance->transactionRefundDirectPost($transaction_refund_direct_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionRefundDirectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_refund_direct_request** | [**\Soxyl\Saferpay\Model\TransactionRefundDirectRequest**](../Model/TransactionRefundDirectRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionRefundDirectResponse**](../Model/TransactionRefundDirectResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRefundPost**
> \Soxyl\Saferpay\Model\TransactionRefundResponse transactionRefundPost($transaction_refund_request)



This method may be called to refund a previous transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_refund_request = new \Soxyl\Saferpay\Model\TransactionRefundRequest(); // \Soxyl\Saferpay\Model\TransactionRefundRequest | 

try {
    $result = $apiInstance->transactionRefundPost($transaction_refund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->transactionRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_refund_request** | [**\Soxyl\Saferpay\Model\TransactionRefundRequest**](../Model/TransactionRefundRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\TransactionRefundResponse**](../Model/TransactionRefundResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

