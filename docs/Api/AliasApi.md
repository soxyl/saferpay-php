# Soxyl\Saferpay\AliasApi

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aliasAssertInsertPost**](AliasApi.md#aliasAssertInsertPost) | **POST** /Alias/AssertInsert | 
[**aliasDeletePost**](AliasApi.md#aliasDeletePost) | **POST** /Alias/Delete | 
[**aliasInsertDirectPost**](AliasApi.md#aliasInsertDirectPost) | **POST** /Alias/InsertDirect | 
[**aliasInsertPost**](AliasApi.md#aliasInsertPost) | **POST** /Alias/Insert | 


# **aliasAssertInsertPost**
> \Soxyl\Saferpay\Model\AliasAssertInsertResponse aliasAssertInsertPost($alias_assert_insert_request)



This method may be used to inquire the Alias Id and further information after a successful Alias Insert call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_assert_insert_request = new \Soxyl\Saferpay\Model\AliasAssertInsertRequest(); // \Soxyl\Saferpay\Model\AliasAssertInsertRequest | 

try {
    $result = $apiInstance->aliasAssertInsertPost($alias_assert_insert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->aliasAssertInsertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_assert_insert_request** | [**\Soxyl\Saferpay\Model\AliasAssertInsertRequest**](../Model/AliasAssertInsertRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\AliasAssertInsertResponse**](../Model/AliasAssertInsertResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aliasDeletePost**
> \Soxyl\Saferpay\Model\AliasDeleteResponse aliasDeletePost($alias_delete_request)



This method may be used to delete previously inserted aliases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_delete_request = new \Soxyl\Saferpay\Model\AliasDeleteRequest(); // \Soxyl\Saferpay\Model\AliasDeleteRequest | 

try {
    $result = $apiInstance->aliasDeletePost($alias_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->aliasDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_delete_request** | [**\Soxyl\Saferpay\Model\AliasDeleteRequest**](../Model/AliasDeleteRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\AliasDeleteResponse**](../Model/AliasDeleteResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aliasInsertDirectPost**
> \Soxyl\Saferpay\Model\AliasInsertDirectResponse aliasInsertDirectPost($alias_insert_direct_request)



This method may be used to insert an alias directly with card-data collected by using your own HTML form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_insert_direct_request = new \Soxyl\Saferpay\Model\AliasInsertDirectRequest(); // \Soxyl\Saferpay\Model\AliasInsertDirectRequest | 

try {
    $result = $apiInstance->aliasInsertDirectPost($alias_insert_direct_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->aliasInsertDirectPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_insert_direct_request** | [**\Soxyl\Saferpay\Model\AliasInsertDirectRequest**](../Model/AliasInsertDirectRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\AliasInsertDirectResponse**](../Model/AliasInsertDirectResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aliasInsertPost**
> \Soxyl\Saferpay\Model\AliasInsertResponse aliasInsertPost($alias_insert_request)



This function may be used to insert an alias without knowledge about the card details. Therefore a redirect of the customer is required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
$config = Soxyl\Saferpay\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Soxyl\Saferpay\Api\AliasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alias_insert_request = new \Soxyl\Saferpay\Model\AliasInsertRequest(); // \Soxyl\Saferpay\Model\AliasInsertRequest | 

try {
    $result = $apiInstance->aliasInsertPost($alias_insert_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasApi->aliasInsertPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias_insert_request** | [**\Soxyl\Saferpay\Model\AliasInsertRequest**](../Model/AliasInsertRequest.md)|  |

### Return type

[**\Soxyl\Saferpay\Model\AliasInsertResponse**](../Model/AliasInsertResponse.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain, 

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

