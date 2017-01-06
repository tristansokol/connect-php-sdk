<?php
/**
 * V1ItemModifierOption
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
 * V1ItemModifierOption Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1ItemModifierOption implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1ItemModifierOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'price_money' => '\SquareConnect\Model\Money',
        'on_by_default' => 'bool',
        'ordinal' => 'int',
        'modifier_list_id' => 'string'
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
        'price_money' => 'price_money',
        'on_by_default' => 'on_by_default',
        'ordinal' => 'ordinal',
        'modifier_list_id' => 'modifier_list_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'price_money' => 'setPriceMoney',
        'on_by_default' => 'setOnByDefault',
        'ordinal' => 'setOrdinal',
        'modifier_list_id' => 'setModifierListId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'price_money' => 'getPriceMoney',
        'on_by_default' => 'getOnByDefault',
        'ordinal' => 'getOrdinal',
        'modifier_list_id' => 'getModifierListId'
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
        $this->container['price_money'] = isset($data['price_money']) ? $data['price_money'] : null;
        $this->container['on_by_default'] = isset($data['on_by_default']) ? $data['on_by_default'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['modifier_list_id'] = isset($data['modifier_list_id']) ? $data['modifier_list_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
     * @param string $id The modifier option's unique ID.
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
     * @param string $name The modifier option's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price_money
     * @return \SquareConnect\Model\Money
     */
    public function getPriceMoney()
    {
        return $this->container['price_money'];
    }

    /**
     * Sets price_money
     * @param \SquareConnect\Model\Money $price_money The modifier option's price.
     * @return $this
     */
    public function setPriceMoney($price_money)
    {
        $this->container['price_money'] = $price_money;

        return $this;
    }

    /**
     * Gets on_by_default
     * @return bool
     */
    public function getOnByDefault()
    {
        return $this->container['on_by_default'];
    }

    /**
     * Sets on_by_default
     * @param bool $on_by_default If true, the modifier option is the default option in a modifier list for which selection_type is SINGLE.
     * @return $this
     */
    public function setOnByDefault($on_by_default)
    {
        $this->container['on_by_default'] = $on_by_default;

        return $this;
    }

    /**
     * Gets ordinal
     * @return int
     */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
     * Sets ordinal
     * @param int $ordinal Indicates the modifier option's list position when displayed in Square Register and the merchant dashboard. If more than one modifier option in the same modifier list has the same ordinal value, those options are displayed in alphabetical order.
     * @return $this
     */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;

        return $this;
    }

    /**
     * Gets modifier_list_id
     * @return string
     */
    public function getModifierListId()
    {
        return $this->container['modifier_list_id'];
    }

    /**
     * Sets modifier_list_id
     * @param string $modifier_list_id The ID of the modifier list the option belongs to.
     * @return $this
     */
    public function setModifierListId($modifier_list_id)
    {
        $this->container['modifier_list_id'] = $modifier_list_id;

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

