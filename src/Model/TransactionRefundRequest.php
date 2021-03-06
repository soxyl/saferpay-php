<?php
/**
 * TransactionRefundRequest
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
 * TransactionRefundRequest Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TransactionRefundRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionRefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_header' => '\Soxyl\Saferpay\Model\RequestHeader',
        'refund' => '\Soxyl\Saferpay\Model\Refund',
        'capture_reference' => '\Soxyl\Saferpay\Model\CaptureReference',
        'pending_notification' => '\Soxyl\Saferpay\Model\PendingNotification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'request_header' => null,
        'refund' => null,
        'capture_reference' => null,
        'pending_notification' => null
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
        'refund' => 'Refund',
        'capture_reference' => 'CaptureReference',
        'pending_notification' => 'PendingNotification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_header' => 'setRequestHeader',
        'refund' => 'setRefund',
        'capture_reference' => 'setCaptureReference',
        'pending_notification' => 'setPendingNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_header' => 'getRequestHeader',
        'refund' => 'getRefund',
        'capture_reference' => 'getCaptureReference',
        'pending_notification' => 'getPendingNotification'
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
        $this->container['refund'] = isset($data['refund']) ? $data['refund'] : null;
        $this->container['capture_reference'] = isset($data['capture_reference']) ? $data['capture_reference'] : null;
        $this->container['pending_notification'] = isset($data['pending_notification']) ? $data['pending_notification'] : null;
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
        if ($this->container['refund'] === null) {
            $invalidProperties[] = "'refund' can't be null";
        }
        if ($this->container['capture_reference'] === null) {
            $invalidProperties[] = "'capture_reference' can't be null";
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
     * Gets refund
     *
     * @return \Soxyl\Saferpay\Model\Refund
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param \Soxyl\Saferpay\Model\Refund $refund refund
     *
     * @return $this
     */
    public function setRefund($refund)
    {
        $this->container['refund'] = $refund;

        return $this;
    }

    /**
     * Gets capture_reference
     *
     * @return \Soxyl\Saferpay\Model\CaptureReference
     */
    public function getCaptureReference()
    {
        return $this->container['capture_reference'];
    }

    /**
     * Sets capture_reference
     *
     * @param \Soxyl\Saferpay\Model\CaptureReference $capture_reference capture_reference
     *
     * @return $this
     */
    public function setCaptureReference($capture_reference)
    {
        $this->container['capture_reference'] = $capture_reference;

        return $this;
    }

    /**
     * Gets pending_notification
     *
     * @return \Soxyl\Saferpay\Model\PendingNotification|null
     */
    public function getPendingNotification()
    {
        return $this->container['pending_notification'];
    }

    /**
     * Sets pending_notification
     *
     * @param \Soxyl\Saferpay\Model\PendingNotification|null $pending_notification pending_notification
     *
     * @return $this
     */
    public function setPendingNotification($pending_notification)
    {
        $this->container['pending_notification'] = $pending_notification;

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


