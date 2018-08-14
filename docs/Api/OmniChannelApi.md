# Soxyl\Saferpay\OmniChannelApi

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**omniChannelAcquireTransactionPost**](OmniChannelApi.md#omniChannelAcquireTransactionPost) | **POST** /OmniChannel/AcquireTransaction | 
[**omniChannelInsertAliasPost**](OmniChannelApi.md#omniChannelInsertAliasPost) | **POST** /OmniChannel/InsertAlias | 


# **omniChannelAcquireTransactionPost**
> \Soxyl\Saferpay\Model\OmniChannelAcquireTransactionResponse omniChannelAcquireTransactionPost($omni_channel_acquire_transaction_request)



This function may be used to acquire an authorized transaction by providing a SixTransactionReference. This transaction can then be captured or canceled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\OmniChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omni_channel_acquire_transaction_request = new \Soxyl\Saferpay\Model\OmniChannelAcquireTransactionRequest(); // \Soxyl\Saferpay\Model\OmniChannelAcquireTransactionRequest | 

try {
    $result = $apiInstance->omniChannelAcquireTransactionPost($omni_channel_acquire_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniChannelApi->omniChannelAcquireTransactionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omni_channel_acquire_transaction_request** | [**\Soxyl\Saferpay\Model\OmniChannelAcquireTransactionRequest**](../Model/OmniChannelAcquireTransactionRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\OmniChannelAcquireTransactionResponse**](../Model/OmniChannelAcquireTransactionResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **omniChannelInsertAliasPost**
> \Soxyl\Saferpay\Model\OmniChannelInsertAliasResponse omniChannelInsertAliasPost($omni_channel_insert_alias_request)



This function may be used to create an alias by providing a SixTransactionReference.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\OmniChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omni_channel_insert_alias_request = new \Soxyl\Saferpay\Model\OmniChannelInsertAliasRequest(); // \Soxyl\Saferpay\Model\OmniChannelInsertAliasRequest | 

try {
    $result = $apiInstance->omniChannelInsertAliasPost($omni_channel_insert_alias_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniChannelApi->omniChannelInsertAliasPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omni_channel_insert_alias_request** | [**\Soxyl\Saferpay\Model\OmniChannelInsertAliasRequest**](../Model/OmniChannelInsertAliasRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\OmniChannelInsertAliasResponse**](../Model/OmniChannelInsertAliasResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

