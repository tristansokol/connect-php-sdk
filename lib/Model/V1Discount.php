<?php
/**
 * V1Discount
 *
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  Apache Licene v2 - http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://squareup.com/developers
 */

/**
 * Square Connect API
 *
 * Client library for accessing the Square Connect APIs
 *
 * OpenAPI spec version: 3.0
 * Contact: developers@squareup.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 *  Copyright 2016 Square, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;

/**
 * V1Discount Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Discount implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Discount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'rate' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'discount_type' => 'string[]',
        'pin_required' => 'bool',
        'color' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'rate' => 'rate',
        'amount_money' => 'amount_money',
        'discount_type' => 'discount_type',
        'pin_required' => 'pin_required',
        'color' => 'color'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'rate' => 'setRate',
        'amount_money' => 'setAmountMoney',
        'discount_type' => 'setDiscountType',
        'pin_required' => 'setPinRequired',
        'color' => 'setColor'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'rate' => 'getRate',
        'amount_money' => 'getAmountMoney',
        'discount_type' => 'getDiscountType',
        'pin_required' => 'getPinRequired',
        'color' => 'getColor'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const DISCOUNT_TYPE_FIXED = 'FIXED';
    const DISCOUNT_TYPE_VARIABLE_PERCENTAGE = 'VARIABLE_PERCENTAGE';
    const DISCOUNT_TYPE_VARIABLE_AMOUNT = 'VARIABLE_AMOUNT';
    const COLOR__9DA2A6 = '9da2a6';
    const COLOR__4AB200 = '4ab200';
    const COLOR__0B8000 = '0b8000';
    const COLOR__2952CC = '2952cc';
    const COLOR_A82EE5 = 'a82ee5';
    const COLOR_E5457A = 'e5457a';
    const COLOR_B21212 = 'b21212';
    const COLOR__593C00 = '593c00';
    const COLOR_E5_BF00 = 'e5BF00';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDiscountTypeAllowableValues()
    {
        return [
            self::DISCOUNT_TYPE_FIXED,
            self::DISCOUNT_TYPE_VARIABLE_PERCENTAGE,
            self::DISCOUNT_TYPE_VARIABLE_AMOUNT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getColorAllowableValues()
    {
        return [
            self::COLOR__9DA2A6,
            self::COLOR__4AB200,
            self::COLOR__0B8000,
            self::COLOR__2952CC,
            self::COLOR_A82EE5,
            self::COLOR_E5457A,
            self::COLOR_B21212,
            self::COLOR__593C00,
            self::COLOR_E5_BF00,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['amount_money'] = isset($data['amount_money']) ? $data['amount_money'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['pin_required'] = isset($data['pin_required']) ? $data['pin_required'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["9da2a6", "4ab200", "0b8000", "2952cc", "a82ee5", "e5457a", "b21212", "593c00", "e5BF00"];
        if (!in_array($this->container['color'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'color', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["9da2a6", "4ab200", "0b8000", "2952cc", "a82ee5", "e5457a", "b21212", "593c00", "e5BF00"];
        if (!in_array($this->container['color'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The discount's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The discount's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate
     * @return string
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     * @param string $rate The rate of the discount, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%. This rate is 0 if discount_type is VARIABLE_PERCENTAGE.
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->container['amount_money'];
    }

    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of the discount. This amount is 0 if discount_type is VARIABLE_AMOUNT. This field is not included for rate-based discounts.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->container['amount_money'] = $amount_money;

        return $this;
    }

    /**
     * Gets discount_type
     * @return string[]
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     * @param string[] $discount_type Indicates whether the discount is a FIXED value or entered at the time of sale.
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $allowed_values = array('FIXED', 'VARIABLE_PERCENTAGE', 'VARIABLE_AMOUNT');
        if (!is_null($discount_type) && (array_diff($discount_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'discount_type', must be one of 'FIXED', 'VARIABLE_PERCENTAGE', 'VARIABLE_AMOUNT'");
        }
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets pin_required
     * @return bool
     */
    public function getPinRequired()
    {
        return $this->container['pin_required'];
    }

    /**
     * Sets pin_required
     * @param bool $pin_required Indicates whether a mobile staff member needs to enter their PIN to apply the discount to a payment.
     * @return $this
     */
    public function setPinRequired($pin_required)
    {
        $this->container['pin_required'] = $pin_required;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color The color of the discount's display label in Square Register, if not the default color. The default color is 9da2a6.
     * @return $this
     */
    public function setColor($color)
    {
        $allowed_values = array('9da2a6', '4ab200', '0b8000', '2952cc', 'a82ee5', 'e5457a', 'b21212', '593c00', 'e5BF00');
        if (!is_null($color) && (!in_array($color, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'color', must be one of '9da2a6', '4ab200', '0b8000', '2952cc', 'a82ee5', 'e5457a', 'b21212', '593c00', 'e5BF00'");
        }
        $this->container['color'] = $color;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
    }
}


