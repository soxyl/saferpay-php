<?php
/**
 * InvoiceInfo
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
 * InvoiceInfo Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payee' => '\Soxyl\Saferpay\Model\BankAccount',
        'reason_for_transfer' => 'string',
        'due_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payee' => null,
        'reason_for_transfer' => null,
        'due_date' => 'date'
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
        'payee' => 'Payee',
        'reason_for_transfer' => 'ReasonForTransfer',
        'due_date' => 'DueDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payee' => 'setPayee',
        'reason_for_transfer' => 'setReasonForTransfer',
        'due_date' => 'setDueDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payee' => 'getPayee',
        'reason_for_transfer' => 'getReasonForTransfer',
        'due_date' => 'getDueDate'
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
        $this->container['payee'] = isset($data['payee']) ? $data['payee'] : null;
        $this->container['reason_for_transfer'] = isset($data['reason_for_transfer']) ? $data['reason_for_transfer'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets payee
     *
     * @return \Soxyl\Saferpay\Model\BankAccount|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param \Soxyl\Saferpay\Model\BankAccount|null $payee payee
     *
     * @return $this
     */
    public function setPayee($payee)
    {
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets reason_for_transfer
     *
     * @return string|null
     */
    public function getReasonForTransfer()
    {
        return $this->container['reason_for_transfer'];
    }

    /**
     * Sets reason_for_transfer
     *
     * @param string|null $reason_for_transfer reason_for_transfer
     *
     * @return $this
     */
    public function setReasonForTransfer($reason_for_transfer)
    {
        $this->container['reason_for_transfer'] = $reason_for_transfer;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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


