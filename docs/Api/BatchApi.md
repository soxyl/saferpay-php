# Soxyl\Saferpay\BatchApi

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchClosePost**](BatchApi.md#batchClosePost) | **POST** /Batch/Close | 


# **batchClosePost**
> \Soxyl\Saferpay\Model\BatchCloseResponse batchClosePost($batch_close_request)



This chapter covers the Batch Close via API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_close_request = new \Soxyl\Saferpay\Model\BatchCloseRequest(); // \Soxyl\Saferpay\Model\BatchCloseRequest | 

try {
    $result = $apiInstance->batchClosePost($batch_close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchClosePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_close_request** | [**\Soxyl\Saferpay\Model\BatchCloseRequest**](../Model/BatchCloseRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\BatchCloseResponse**](../Model/BatchCloseResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

