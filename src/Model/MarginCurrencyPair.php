<?php
/**
 * MarginCurrencyPair
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * MarginCurrencyPair Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class MarginCurrencyPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'MarginCurrencyPair';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id' => 'string',
        'base' => 'string',
        'quote' => 'string',
        'leverage' => 'int',
        'min_base_amount' => 'string',
        'min_quote_amount' => 'string',
        'max_quote_amount' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'id' => null,
        'base' => null,
        'quote' => null,
        'leverage' => null,
        'min_base_amount' => null,
        'min_quote_amount' => null,
        'max_quote_amount' => null
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
        'id' => 'id',
        'base' => 'base',
        'quote' => 'quote',
        'leverage' => 'leverage',
        'min_base_amount' => 'min_base_amount',
        'min_quote_amount' => 'min_quote_amount',
        'max_quote_amount' => 'max_quote_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'base' => 'setBase',
        'quote' => 'setQuote',
        'leverage' => 'setLeverage',
        'min_base_amount' => 'setMinBaseAmount',
        'min_quote_amount' => 'setMinQuoteAmount',
        'max_quote_amount' => 'setMaxQuoteAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'base' => 'getBase',
        'quote' => 'getQuote',
        'leverage' => 'getLeverage',
        'min_base_amount' => 'getMinBaseAmount',
        'min_quote_amount' => 'getMinQuoteAmount',
        'max_quote_amount' => 'getMaxQuoteAmount'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['min_base_amount'] = isset($data['min_base_amount']) ? $data['min_base_amount'] : null;
        $this->container['min_quote_amount'] = isset($data['min_quote_amount']) ? $data['min_quote_amount'] : null;
        $this->container['max_quote_amount'] = isset($data['max_quote_amount']) ? $data['max_quote_amount'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Currency pair
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets base
     *
     * @return string|null
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string|null $base Base currency
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string|null $quote Quote currency
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return int|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param int|null $leverage Leverage
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets min_base_amount
     *
     * @return string|null
     */
    public function getMinBaseAmount()
    {
        return $this->container['min_base_amount'];
    }

    /**
     * Sets min_base_amount
     *
     * @param string|null $min_base_amount Minimum base currency to loan, `null` means no limit
     *
     * @return $this
     */
    public function setMinBaseAmount($min_base_amount)
    {
        $this->container['min_base_amount'] = $min_base_amount;

        return $this;
    }

    /**
     * Gets min_quote_amount
     *
     * @return string|null
     */
    public function getMinQuoteAmount()
    {
        return $this->container['min_quote_amount'];
    }

    /**
     * Sets min_quote_amount
     *
     * @param string|null $min_quote_amount Minimum quote currency to loan, `null` means no limit
     *
     * @return $this
     */
    public function setMinQuoteAmount($min_quote_amount)
    {
        $this->container['min_quote_amount'] = $min_quote_amount;

        return $this;
    }

    /**
     * Gets max_quote_amount
     *
     * @return string|null
     */
    public function getMaxQuoteAmount()
    {
        return $this->container['max_quote_amount'];
    }

    /**
     * Sets max_quote_amount
     *
     * @param string|null $max_quote_amount Maximum borrowable amount for quote currency. Base currency limit is calculated by quote maximum and market price. `null` means no limit
     *
     * @return $this
     */
    public function setMaxQuoteAmount($max_quote_amount)
    {
        $this->container['max_quote_amount'] = $max_quote_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


