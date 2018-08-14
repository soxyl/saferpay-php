<?php
/**
 * AliasInsertRequest
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
 * AliasInsertRequest Class Doc Comment
 *
 * @category Class
 * @package  Soxyl\Saferpay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AliasInsertRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AliasInsertRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_header' => '\Soxyl\Saferpay\Model\RequestHeader',
        'register_alias' => '\Soxyl\Saferpay\Model\RegisterAlias',
        'type' => 'string',
        'return_urls' => '\Soxyl\Saferpay\Model\ReturnUrls',
        'styling' => '\Soxyl\Saferpay\Model\Styling',
        'language_code' => 'string',
        'check' => '\Soxyl\Saferpay\Model\AliasInsertCheck',
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
        'register_alias' => null,
        'type' => null,
        'return_urls' => null,
        'styling' => null,
        'language_code' => null,
        'check' => null,
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
        'register_alias' => 'RegisterAlias',
        'type' => 'Type',
        'return_urls' => 'ReturnUrls',
        'styling' => 'Styling',
        'language_code' => 'LanguageCode',
        'check' => 'Check',
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
        'register_alias' => 'setRegisterAlias',
        'type' => 'setType',
        'return_urls' => 'setReturnUrls',
        'styling' => 'setStyling',
        'language_code' => 'setLanguageCode',
        'check' => 'setCheck',
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
        'register_alias' => 'getRegisterAlias',
        'type' => 'getType',
        'return_urls' => 'getReturnUrls',
        'styling' => 'getStyling',
        'language_code' => 'getLanguageCode',
        'check' => 'getCheck',
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
        $this->container['register_alias'] = isset($data['register_alias']) ? $data['register_alias'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['return_urls'] = isset($data['return_urls']) ? $data['return_urls'] : null;
        $this->container['styling'] = isset($data['styling']) ? $data['styling'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
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
        if ($this->container['register_alias'] === null) {
            $invalidProperties[] = "'register_alias' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets register_alias
     *
     * @return \Soxyl\Saferpay\Model\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->container['register_alias'];
    }

    /**
     * Sets register_alias
     *
     * @param \Soxyl\Saferpay\Model\RegisterAlias $register_alias register_alias
     *
     * @return $this
     */
    public function setRegisterAlias($register_alias)
    {
        $this->container['register_alias'] = $register_alias;

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
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets check
     *
     * @return \Soxyl\Saferpay\Model\AliasInsertCheck|null
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     *
     * @param \Soxyl\Saferpay\Model\AliasInsertCheck|null $check check
     *
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

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


