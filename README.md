# Saferpay JSON API PHP Client
No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.10.0
- Package version: 1.10.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/soxyl/saferpay.git"
    }
  ],
  "require": {
    "soxyl/saferpay": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Saferpay JSON API PHP Client/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://www.saferpay.com/api/Payment/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AliasApi* | [**aliasAssertInsertPost**](docs/Api/AliasApi.md#aliasassertinsertpost) | **POST** /Alias/AssertInsert | 
*AliasApi* | [**aliasDeletePost**](docs/Api/AliasApi.md#aliasdeletepost) | **POST** /Alias/Delete | 
*AliasApi* | [**aliasInsertDirectPost**](docs/Api/AliasApi.md#aliasinsertdirectpost) | **POST** /Alias/InsertDirect | 
*AliasApi* | [**aliasInsertPost**](docs/Api/AliasApi.md#aliasinsertpost) | **POST** /Alias/Insert | 
*BatchApi* | [**batchClosePost**](docs/Api/BatchApi.md#batchclosepost) | **POST** /Batch/Close | 
*OmniChannelApi* | [**omniChannelAcquireTransactionPost**](docs/Api/OmniChannelApi.md#omnichannelacquiretransactionpost) | **POST** /OmniChannel/AcquireTransaction | 
*OmniChannelApi* | [**omniChannelInsertAliasPost**](docs/Api/OmniChannelApi.md#omnichannelinsertaliaspost) | **POST** /OmniChannel/InsertAlias | 
*PaymentPageApi* | [**paymentPageAssertPost**](docs/Api/PaymentPageApi.md#paymentpageassertpost) | **POST** /PaymentPage/Assert | 
*PaymentPageApi* | [**paymentPageInitializePost**](docs/Api/PaymentPageApi.md#paymentpageinitializepost) | **POST** /PaymentPage/Initialize | 
*TransactionApi* | [**transactionAdjustAmountPost**](docs/Api/TransactionApi.md#transactionadjustamountpost) | **POST** /Transaction/AdjustAmount | 
*TransactionApi* | [**transactionAssertCapturePost**](docs/Api/TransactionApi.md#transactionassertcapturepost) | **POST** /Transaction/AssertCapture | 
*TransactionApi* | [**transactionAssertRedirectPaymentPost**](docs/Api/TransactionApi.md#transactionassertredirectpaymentpost) | **POST** /Transaction/AssertRedirectPayment | 
*TransactionApi* | [**transactionAssertRefundPost**](docs/Api/TransactionApi.md#transactionassertrefundpost) | **POST** /Transaction/AssertRefund | 
*TransactionApi* | [**transactionAuthorizeDirectPost**](docs/Api/TransactionApi.md#transactionauthorizedirectpost) | **POST** /Transaction/AuthorizeDirect | 
*TransactionApi* | [**transactionAuthorizePost**](docs/Api/TransactionApi.md#transactionauthorizepost) | **POST** /Transaction/Authorize | 
*TransactionApi* | [**transactionAuthorizeReferencedPost**](docs/Api/TransactionApi.md#transactionauthorizereferencedpost) | **POST** /Transaction/AuthorizeReferenced | 
*TransactionApi* | [**transactionCancelPost**](docs/Api/TransactionApi.md#transactioncancelpost) | **POST** /Transaction/Cancel | 
*TransactionApi* | [**transactionCapturePost**](docs/Api/TransactionApi.md#transactioncapturepost) | **POST** /Transaction/Capture | 
*TransactionApi* | [**transactionInitializePost**](docs/Api/TransactionApi.md#transactioninitializepost) | **POST** /Transaction/Initialize | 
*TransactionApi* | [**transactionMultipartCapturePost**](docs/Api/TransactionApi.md#transactionmultipartcapturepost) | **POST** /Transaction/MultipartCapture | 
*TransactionApi* | [**transactionMultipartFinalizePost**](docs/Api/TransactionApi.md#transactionmultipartfinalizepost) | **POST** /Transaction/MultipartFinalize | 
*TransactionApi* | [**transactionQueryPaymentMeansPost**](docs/Api/TransactionApi.md#transactionquerypaymentmeanspost) | **POST** /Transaction/QueryPaymentMeans | 
*TransactionApi* | [**transactionRedirectPaymentPost**](docs/Api/TransactionApi.md#transactionredirectpaymentpost) | **POST** /Transaction/RedirectPayment | 
*TransactionApi* | [**transactionRefundDirectPost**](docs/Api/TransactionApi.md#transactionrefunddirectpost) | **POST** /Transaction/RefundDirect | 
*TransactionApi* | [**transactionRefundPost**](docs/Api/TransactionApi.md#transactionrefundpost) | **POST** /Transaction/Refund | 


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressForm](docs/Model/AddressForm.md)
 - [Alias](docs/Model/Alias.md)
 - [AliasAssertInsertRequest](docs/Model/AliasAssertInsertRequest.md)
 - [AliasAssertInsertResponse](docs/Model/AliasAssertInsertResponse.md)
 - [AliasDeleteRequest](docs/Model/AliasDeleteRequest.md)
 - [AliasDeleteResponse](docs/Model/AliasDeleteResponse.md)
 - [AliasInfo](docs/Model/AliasInfo.md)
 - [AliasInsertCheck](docs/Model/AliasInsertCheck.md)
 - [AliasInsertCheckResult](docs/Model/AliasInsertCheckResult.md)
 - [AliasInsertDirectRequest](docs/Model/AliasInsertDirectRequest.md)
 - [AliasInsertDirectResponse](docs/Model/AliasInsertDirectResponse.md)
 - [AliasInsertRequest](docs/Model/AliasInsertRequest.md)
 - [AliasInsertResponse](docs/Model/AliasInsertResponse.md)
 - [Amount](docs/Model/Amount.md)
 - [BankAccount](docs/Model/BankAccount.md)
 - [BankAccountInfo](docs/Model/BankAccountInfo.md)
 - [BasicPayment](docs/Model/BasicPayment.md)
 - [BatchCloseRequest](docs/Model/BatchCloseRequest.md)
 - [BatchCloseResponse](docs/Model/BatchCloseResponse.md)
 - [BillpayCapture](docs/Model/BillpayCapture.md)
 - [Brand](docs/Model/Brand.md)
 - [CaptureReference](docs/Model/CaptureReference.md)
 - [Card](docs/Model/Card.md)
 - [CardForm](docs/Model/CardForm.md)
 - [CardInfo](docs/Model/CardInfo.md)
 - [ClientInfo](docs/Model/ClientInfo.md)
 - [DccInfo](docs/Model/DccInfo.md)
 - [DirectDebitInfo](docs/Model/DirectDebitInfo.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [FraudFreeInfo](docs/Model/FraudFreeInfo.md)
 - [InstallmentOptions](docs/Model/InstallmentOptions.md)
 - [InvoiceInfo](docs/Model/InvoiceInfo.md)
 - [LiabilityInfo](docs/Model/LiabilityInfo.md)
 - [MarketplaceCapture](docs/Model/MarketplaceCapture.md)
 - [Notification](docs/Model/Notification.md)
 - [OmniChannelAcquireTransactionRequest](docs/Model/OmniChannelAcquireTransactionRequest.md)
 - [OmniChannelAcquireTransactionResponse](docs/Model/OmniChannelAcquireTransactionResponse.md)
 - [OmniChannelInsertAliasRequest](docs/Model/OmniChannelInsertAliasRequest.md)
 - [OmniChannelInsertAliasResponse](docs/Model/OmniChannelInsertAliasResponse.md)
 - [Payer](docs/Model/Payer.md)
 - [PayerInfo](docs/Model/PayerInfo.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentMeans](docs/Model/PaymentMeans.md)
 - [PaymentMeansInfo](docs/Model/PaymentMeansInfo.md)
 - [PaymentOptions](docs/Model/PaymentOptions.md)
 - [PaymentPageAssertRequest](docs/Model/PaymentPageAssertRequest.md)
 - [PaymentPageAssertResponse](docs/Model/PaymentPageAssertResponse.md)
 - [PaymentPageInitializeRequest](docs/Model/PaymentPageInitializeRequest.md)
 - [PaymentPageInitializeResponse](docs/Model/PaymentPageInitializeResponse.md)
 - [PaymentPagePayment](docs/Model/PaymentPagePayment.md)
 - [PaymentTransaction](docs/Model/PaymentTransaction.md)
 - [PendingNotification](docs/Model/PendingNotification.md)
 - [RecurringOptions](docs/Model/RecurringOptions.md)
 - [Redirect](docs/Model/Redirect.md)
 - [Refund](docs/Model/Refund.md)
 - [RefundTransaction](docs/Model/RefundTransaction.md)
 - [RegisterAlias](docs/Model/RegisterAlias.md)
 - [RegistrationErrorInfo](docs/Model/RegistrationErrorInfo.md)
 - [RegistrationResult](docs/Model/RegistrationResult.md)
 - [RequestHeader](docs/Model/RequestHeader.md)
 - [ResponseHeader](docs/Model/ResponseHeader.md)
 - [ReturnUrls](docs/Model/ReturnUrls.md)
 - [Styling](docs/Model/Styling.md)
 - [ThreeDsInfo](docs/Model/ThreeDsInfo.md)
 - [TransactionAdjustAmountRequest](docs/Model/TransactionAdjustAmountRequest.md)
 - [TransactionAdjustAmountResponse](docs/Model/TransactionAdjustAmountResponse.md)
 - [TransactionAssertCaptureRequest](docs/Model/TransactionAssertCaptureRequest.md)
 - [TransactionAssertCaptureResponse](docs/Model/TransactionAssertCaptureResponse.md)
 - [TransactionAssertRedirectPaymentRequest](docs/Model/TransactionAssertRedirectPaymentRequest.md)
 - [TransactionAssertRedirectPaymentResponse](docs/Model/TransactionAssertRedirectPaymentResponse.md)
 - [TransactionAssertRefundRequest](docs/Model/TransactionAssertRefundRequest.md)
 - [TransactionAssertRefundResponse](docs/Model/TransactionAssertRefundResponse.md)
 - [TransactionAuthorizeDirectRequest](docs/Model/TransactionAuthorizeDirectRequest.md)
 - [TransactionAuthorizeDirectResponse](docs/Model/TransactionAuthorizeDirectResponse.md)
 - [TransactionAuthorizeReferencedRequest](docs/Model/TransactionAuthorizeReferencedRequest.md)
 - [TransactionAuthorizeReferencedResponse](docs/Model/TransactionAuthorizeReferencedResponse.md)
 - [TransactionAuthorizeRequest](docs/Model/TransactionAuthorizeRequest.md)
 - [TransactionAuthorizeResponse](docs/Model/TransactionAuthorizeResponse.md)
 - [TransactionCancelRequest](docs/Model/TransactionCancelRequest.md)
 - [TransactionCancelResponse](docs/Model/TransactionCancelResponse.md)
 - [TransactionCaptureRequest](docs/Model/TransactionCaptureRequest.md)
 - [TransactionCaptureResponse](docs/Model/TransactionCaptureResponse.md)
 - [TransactionInitializeRequest](docs/Model/TransactionInitializeRequest.md)
 - [TransactionInitializeResponse](docs/Model/TransactionInitializeResponse.md)
 - [TransactionMultipartCaptureRequest](docs/Model/TransactionMultipartCaptureRequest.md)
 - [TransactionMultipartCaptureResponse](docs/Model/TransactionMultipartCaptureResponse.md)
 - [TransactionMultipartFinalizeRequest](docs/Model/TransactionMultipartFinalizeRequest.md)
 - [TransactionMultipartFinalizeResponse](docs/Model/TransactionMultipartFinalizeResponse.md)
 - [TransactionQueryPaymentMeansRequest](docs/Model/TransactionQueryPaymentMeansRequest.md)
 - [TransactionQueryPaymentMeansResponse](docs/Model/TransactionQueryPaymentMeansResponse.md)
 - [TransactionRedirectPaymentRequest](docs/Model/TransactionRedirectPaymentRequest.md)
 - [TransactionRedirectPaymentResponse](docs/Model/TransactionRedirectPaymentResponse.md)
 - [TransactionReference](docs/Model/TransactionReference.md)
 - [TransactionRefundDirectRequest](docs/Model/TransactionRefundDirectRequest.md)
 - [TransactionRefundDirectResponse](docs/Model/TransactionRefundDirectResponse.md)
 - [TransactionRefundRequest](docs/Model/TransactionRefundRequest.md)
 - [TransactionRefundResponse](docs/Model/TransactionRefundResponse.md)
 - [Wallet](docs/Model/Wallet.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author




