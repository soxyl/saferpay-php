<?php
/**
 * TransactionInitializeRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Saferpay JSON API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 1.10.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Soxyl\Saferpay\Model;

use \ArrayAccess;
use \Soxyl\Saferpay\ObjectSerializer;

/**
 * TransactionInitializeRequest Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionInitializeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionInitializeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_header' => '\Soxyl\Saferpay\Model\RequestHeader',
        'config_set' => 'string',
        'terminal_id' => 'string',
        'payment' => '\Soxyl\Saferpay\Model\Payment',
        'payment_means' => '\Soxyl\Saferpay\Model\PaymentMeans',
        'payer' => '\Soxyl\Saferpay\Model\Payer',
        'return_urls' => '\Soxyl\Saferpay\Model\ReturnUrls',
        'styling' => '\Soxyl\Saferpay\Model\Styling',
        'wallet' => '\Soxyl\Saferpay\Model\Wallet',
        'payment_methods' => 'string[]',
        'card_form' => '\Soxyl\Saferpay\Model\CardForm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'request_header' => null,
        'config_set' => null,
        'terminal_id' => null,
        'payment' => null,
        'payment_means' => null,
        'payer' => null,
        'return_urls' => null,
        'styling' => null,
        'wallet' => null,
        'payment_methods' => null,
        'card_form' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_header' => 'RequestHeader',
        'config_set' => 'ConfigSet',
        'terminal_id' => 'TerminalId',
        'payment' => 'Payment',
        'payment_means' => 'PaymentMeans',
        'payer' => 'Payer',
        'return_urls' => 'ReturnUrls',
        'styling' => 'Styling',
        'wallet' => 'Wallet',
        'payment_methods' => 'PaymentMethods',
        'card_form' => 'CardForm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_header' => 'setRequestHeader',
        'config_set' => 'setConfigSet',
        'terminal_id' => 'setTerminalId',
        'payment' => 'setPayment',
        'payment_means' => 'setPaymentMeans',
        'payer' => 'setPayer',
        'return_urls' => 'setReturnUrls',
        'styling' => 'setStyling',
        'wallet' => 'setWallet',
        'payment_methods' => 'setPaymentMethods',
        'card_form' => 'setCardForm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_header' => 'getRequestHeader',
        'config_set' => 'getConfigSet',
        'terminal_id' => 'getTerminalId',
        'payment' => 'getPayment',
        'payment_means' => 'getPaymentMeans',
        'payer' => 'getPayer',
        'return_urls' => 'getReturnUrls',
        'styling' => 'getStyling',
        'wallet' => 'getWallet',
        'payment_methods' => 'getPaymentMethods',
        'card_form' => 'getCardForm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request_header'] = isset($data['request_header']) ? $data['request_header'] : null;
        $this->container['config_set'] = isset($data['config_set']) ? $data['config_set'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['payment_means'] = isset($data['payment_means']) ? $data['payment_means'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['return_urls'] = isset($data['return_urls']) ? $data['return_urls'] : null;
        $this->container['styling'] = isset($data['styling']) ? $data['styling'] : null;
        $this->container['wallet'] = isset($data['wallet']) ? $data['wallet'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['card_form'] = isset($data['card_form']) ? $data['card_form'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_header'] === null) {
            $invalidProperties[] = "'request_header' can't be null";
        }
        if ($this->container['terminal_id'] === null) {
            $invalidProperties[] = "'terminal_id' can't be null";
        }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['return_urls'] === null) {
            $invalidProperties[] = "'return_urls' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request_header
     *
     * @return \Soxyl\Saferpay\Model\RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->container['request_header'];
    }

    /**
     * Sets request_header
     *
     * @param \Soxyl\Saferpay\Model\RequestHeader $request_header request_header
     *
     * @return $this
     */
    public function setRequestHeader($request_header)
    {
        $this->container['request_header'] = $request_header;

        return $this;
    }

    /**
     * Gets config_set
     *
     * @return string|null
     */
    public function getConfigSet()
    {
        return $this->container['config_set'];
    }

    /**
     * Sets config_set
     *
     * @param string|null $config_set config_set
     *
     * @return $this
     */
    public function setConfigSet($config_set)
    {
        $this->container['config_set'] = $config_set;

        return $this;
    }

    /**
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id terminal_id
     *
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Soxyl\Saferpay\Model\Payment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Soxyl\Saferpay\Model\Payment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets payment_means
     *
     * @return \Soxyl\Saferpay\Model\PaymentMeans|null
     */
    public function getPaymentMeans()
    {
        return $this->container['payment_means'];
    }

    /**
     * Sets payment_means
     *
     * @param \Soxyl\Saferpay\Model\PaymentMeans|null $payment_means payment_means
     *
     * @return $this
     */
    public function setPaymentMeans($payment_means)
    {
        $this->container['payment_means'] = $payment_means;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \Soxyl\Saferpay\Model\Payer|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Soxyl\Saferpay\Model\Payer|null $payer payer
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets return_urls
     *
     * @return \Soxyl\Saferpay\Model\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->container['return_urls'];
    }

    /**
     * Sets return_urls
     *
     * @param \Soxyl\Saferpay\Model\ReturnUrls $return_urls return_urls
     *
     * @return $this
     */
    public function setReturnUrls($return_urls)
    {
        $this->container['return_urls'] = $return_urls;

        return $this;
    }

    /**
     * Gets styling
     *
     * @return \Soxyl\Saferpay\Model\Styling|null
     */
    public function getStyling()
    {
        return $this->container['styling'];
    }

    /**
     * Sets styling
     *
     * @param \Soxyl\Saferpay\Model\Styling|null $styling styling
     *
     * @return $this
     */
    public function setStyling($styling)
    {
        $this->container['styling'] = $styling;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \Soxyl\Saferpay\Model\Wallet|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \Soxyl\Saferpay\Model\Wallet|null $wallet wallet
     *
     * @return $this
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return string[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param string[]|null $payment_methods payment_methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets card_form
     *
     * @return \Soxyl\Saferpay\Model\CardForm|null
     */
    public function getCardForm()
    {
        return $this->container['card_form'];
    }

    /**
     * Sets card_form
     *
     * @param \Soxyl\Saferpay\Model\CardForm|null $card_form card_form
     *
     * @return $this
     */
    public function setCardForm($card_form)
    {
        $this->container['card_form'] = $card_form;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


