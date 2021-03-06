<?php
/**
 * TransactionAuthorizeReferencedResponse
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
 * TransactionAuthorizeReferencedResponse Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionAuthorizeReferencedResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionAuthorizeReferencedResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_header' => '\Soxyl\Saferpay\Model\ResponseHeader',
        'transaction' => '\Soxyl\Saferpay\Model\PaymentTransaction',
        'payment_means' => '\Soxyl\Saferpay\Model\PaymentMeansInfo',
        'payer' => '\Soxyl\Saferpay\Model\PayerInfo',
        'dcc' => '\Soxyl\Saferpay\Model\DccInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'response_header' => null,
        'transaction' => null,
        'payment_means' => null,
        'payer' => null,
        'dcc' => null
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
        'response_header' => 'ResponseHeader',
        'transaction' => 'Transaction',
        'payment_means' => 'PaymentMeans',
        'payer' => 'Payer',
        'dcc' => 'Dcc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_header' => 'setResponseHeader',
        'transaction' => 'setTransaction',
        'payment_means' => 'setPaymentMeans',
        'payer' => 'setPayer',
        'dcc' => 'setDcc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_header' => 'getResponseHeader',
        'transaction' => 'getTransaction',
        'payment_means' => 'getPaymentMeans',
        'payer' => 'getPayer',
        'dcc' => 'getDcc'
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
        $this->container['response_header'] = isset($data['response_header']) ? $data['response_header'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['payment_means'] = isset($data['payment_means']) ? $data['payment_means'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['dcc'] = isset($data['dcc']) ? $data['dcc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['response_header'] === null) {
            $invalidProperties[] = "'response_header' can't be null";
        }
        if ($this->container['transaction'] === null) {
            $invalidProperties[] = "'transaction' can't be null";
        }
        if ($this->container['payment_means'] === null) {
            $invalidProperties[] = "'payment_means' can't be null";
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
     * Gets response_header
     *
     * @return \Soxyl\Saferpay\Model\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->container['response_header'];
    }

    /**
     * Sets response_header
     *
     * @param \Soxyl\Saferpay\Model\ResponseHeader $response_header response_header
     *
     * @return $this
     */
    public function setResponseHeader($response_header)
    {
        $this->container['response_header'] = $response_header;

        return $this;
    }

    /**
     * Gets transaction
     *
     * @return \Soxyl\Saferpay\Model\PaymentTransaction
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \Soxyl\Saferpay\Model\PaymentTransaction $transaction transaction
     *
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets payment_means
     *
     * @return \Soxyl\Saferpay\Model\PaymentMeansInfo
     */
    public function getPaymentMeans()
    {
        return $this->container['payment_means'];
    }

    /**
     * Sets payment_means
     *
     * @param \Soxyl\Saferpay\Model\PaymentMeansInfo $payment_means payment_means
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
     * @return \Soxyl\Saferpay\Model\PayerInfo|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Soxyl\Saferpay\Model\PayerInfo|null $payer payer
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets dcc
     *
     * @return \Soxyl\Saferpay\Model\DccInfo|null
     */
    public function getDcc()
    {
        return $this->container['dcc'];
    }

    /**
     * Sets dcc
     *
     * @param \Soxyl\Saferpay\Model\DccInfo|null $dcc dcc
     *
     * @return $this
     */
    public function setDcc($dcc)
    {
        $this->container['dcc'] = $dcc;

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


