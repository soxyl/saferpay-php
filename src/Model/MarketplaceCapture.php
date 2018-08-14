<?php
/**
 * MarketplaceCapture
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
 * MarketplaceCapture Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MarketplaceCapture implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MarketplaceCapture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'submerchant_id' => 'string',
        'fee' => '\Soxyl\Saferpay\Model\Amount',
        'fee_refund' => '\Soxyl\Saferpay\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'submerchant_id' => null,
        'fee' => null,
        'fee_refund' => null
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
        'submerchant_id' => 'SubmerchantId',
        'fee' => 'Fee',
        'fee_refund' => 'FeeRefund'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'submerchant_id' => 'setSubmerchantId',
        'fee' => 'setFee',
        'fee_refund' => 'setFeeRefund'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'submerchant_id' => 'getSubmerchantId',
        'fee' => 'getFee',
        'fee_refund' => 'getFeeRefund'
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
        $this->container['submerchant_id'] = isset($data['submerchant_id']) ? $data['submerchant_id'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['fee_refund'] = isset($data['fee_refund']) ? $data['fee_refund'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['submerchant_id'] === null) {
            $invalidProperties[] = "'submerchant_id' can't be null";
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
     * Gets submerchant_id
     *
     * @return string
     */
    public function getSubmerchantId()
    {
        return $this->container['submerchant_id'];
    }

    /**
     * Sets submerchant_id
     *
     * @param string $submerchant_id submerchant_id
     *
     * @return $this
     */
    public function setSubmerchantId($submerchant_id)
    {
        $this->container['submerchant_id'] = $submerchant_id;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \Soxyl\Saferpay\Model\Amount|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \Soxyl\Saferpay\Model\Amount|null $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fee_refund
     *
     * @return \Soxyl\Saferpay\Model\Amount|null
     */
    public function getFeeRefund()
    {
        return $this->container['fee_refund'];
    }

    /**
     * Sets fee_refund
     *
     * @param \Soxyl\Saferpay\Model\Amount|null $fee_refund fee_refund
     *
     * @return $this
     */
    public function setFeeRefund($fee_refund)
    {
        $this->container['fee_refund'] = $fee_refund;

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


