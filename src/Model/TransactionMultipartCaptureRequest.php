<?php
/**
 * TransactionMultipartCaptureRequest
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
 * TransactionMultipartCaptureRequest Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionMultipartCaptureRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionMultipartCaptureRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_header' => '\Soxyl\Saferpay\Model\RequestHeader',
        'transaction_reference' => '\Soxyl\Saferpay\Model\TransactionReference',
        'amount' => '\Soxyl\Saferpay\Model\Amount',
        'type' => 'string',
        'order_part_id' => 'string',
        'marketplace' => '\Soxyl\Saferpay\Model\MarketplaceCapture'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'request_header' => null,
        'transaction_reference' => null,
        'amount' => null,
        'type' => null,
        'order_part_id' => null,
        'marketplace' => null
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
        'transaction_reference' => 'TransactionReference',
        'amount' => 'Amount',
        'type' => 'Type',
        'order_part_id' => 'OrderPartId',
        'marketplace' => 'Marketplace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_header' => 'setRequestHeader',
        'transaction_reference' => 'setTransactionReference',
        'amount' => 'setAmount',
        'type' => 'setType',
        'order_part_id' => 'setOrderPartId',
        'marketplace' => 'setMarketplace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_header' => 'getRequestHeader',
        'transaction_reference' => 'getTransactionReference',
        'amount' => 'getAmount',
        'type' => 'getType',
        'order_part_id' => 'getOrderPartId',
        'marketplace' => 'getMarketplace'
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
        $this->container['transaction_reference'] = isset($data['transaction_reference']) ? $data['transaction_reference'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['order_part_id'] = isset($data['order_part_id']) ? $data['order_part_id'] : null;
        $this->container['marketplace'] = isset($data['marketplace']) ? $data['marketplace'] : null;
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
        if ($this->container['transaction_reference'] === null) {
            $invalidProperties[] = "'transaction_reference' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['order_part_id'] === null) {
            $invalidProperties[] = "'order_part_id' can't be null";
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
     * Gets transaction_reference
     *
     * @return \Soxyl\Saferpay\Model\TransactionReference
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param \Soxyl\Saferpay\Model\TransactionReference $transaction_reference transaction_reference
     *
     * @return $this
     */
    public function setTransactionReference($transaction_reference)
    {
        $this->container['transaction_reference'] = $transaction_reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Soxyl\Saferpay\Model\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Soxyl\Saferpay\Model\Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets order_part_id
     *
     * @return string
     */
    public function getOrderPartId()
    {
        return $this->container['order_part_id'];
    }

    /**
     * Sets order_part_id
     *
     * @param string $order_part_id order_part_id
     *
     * @return $this
     */
    public function setOrderPartId($order_part_id)
    {
        $this->container['order_part_id'] = $order_part_id;

        return $this;
    }

    /**
     * Gets marketplace
     *
     * @return \Soxyl\Saferpay\Model\MarketplaceCapture|null
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param \Soxyl\Saferpay\Model\MarketplaceCapture|null $marketplace marketplace
     *
     * @return $this
     */
    public function setMarketplace($marketplace)
    {
        $this->container['marketplace'] = $marketplace;

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


