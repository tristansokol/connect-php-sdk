<?php
/**
 * V1PaymentItemization
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
 * V1PaymentItemization Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1PaymentItemization implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1PaymentItemization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'quantity' => 'float',
        'itemization_type' => 'string',
        'item_detail' => '\SquareConnect\Model\V1PaymentItemDetail',
        'notes' => 'string',
        'item_variation_name' => 'string',
        'total_money' => '\SquareConnect\Model\Money',
        'single_quantity_money' => '\SquareConnect\Model\Money',
        'gross_sales_money' => '\SquareConnect\Model\Money',
        'discount_money' => '\SquareConnect\Model\Money',
        'net_sales_money' => '\SquareConnect\Model\Money',
        'taxes' => '\SquareConnect\Model\V1PaymentTax[]',
        'discounts' => '\SquareConnect\Model\V1PaymentDiscount[]',
        'modifiers' => '\SquareConnect\Model\V1PaymentModifier[]'
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
        'name' => 'name',
        'quantity' => 'quantity',
        'itemization_type' => 'itemization_type',
        'item_detail' => 'item_detail',
        'notes' => 'notes',
        'item_variation_name' => 'item_variation_name',
        'total_money' => 'total_money',
        'single_quantity_money' => 'single_quantity_money',
        'gross_sales_money' => 'gross_sales_money',
        'discount_money' => 'discount_money',
        'net_sales_money' => 'net_sales_money',
        'taxes' => 'taxes',
        'discounts' => 'discounts',
        'modifiers' => 'modifiers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'itemization_type' => 'setItemizationType',
        'item_detail' => 'setItemDetail',
        'notes' => 'setNotes',
        'item_variation_name' => 'setItemVariationName',
        'total_money' => 'setTotalMoney',
        'single_quantity_money' => 'setSingleQuantityMoney',
        'gross_sales_money' => 'setGrossSalesMoney',
        'discount_money' => 'setDiscountMoney',
        'net_sales_money' => 'setNetSalesMoney',
        'taxes' => 'setTaxes',
        'discounts' => 'setDiscounts',
        'modifiers' => 'setModifiers'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'itemization_type' => 'getItemizationType',
        'item_detail' => 'getItemDetail',
        'notes' => 'getNotes',
        'item_variation_name' => 'getItemVariationName',
        'total_money' => 'getTotalMoney',
        'single_quantity_money' => 'getSingleQuantityMoney',
        'gross_sales_money' => 'getGrossSalesMoney',
        'discount_money' => 'getDiscountMoney',
        'net_sales_money' => 'getNetSalesMoney',
        'taxes' => 'getTaxes',
        'discounts' => 'getDiscounts',
        'modifiers' => 'getModifiers'
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

    const ITEMIZATION_TYPE_ITEM = 'ITEM';
    const ITEMIZATION_TYPE_CUSTOM_AMOUNT = 'CUSTOM_AMOUNT';
    const ITEMIZATION_TYPE_GIFT_CARD_ACTIVATION = 'GIFT_CARD_ACTIVATION';
    const ITEMIZATION_TYPE_GIFT_CARD_RELOAD = 'GIFT_CARD_RELOAD';
    const ITEMIZATION_TYPE_GIFT_CARD_UNKNOWN = 'GIFT_CARD_UNKNOWN';
    const ITEMIZATION_TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getItemizationTypeAllowableValues()
    {
        return [
            self::ITEMIZATION_TYPE_ITEM,
            self::ITEMIZATION_TYPE_CUSTOM_AMOUNT,
            self::ITEMIZATION_TYPE_GIFT_CARD_ACTIVATION,
            self::ITEMIZATION_TYPE_GIFT_CARD_RELOAD,
            self::ITEMIZATION_TYPE_GIFT_CARD_UNKNOWN,
            self::ITEMIZATION_TYPE_OTHER,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['itemization_type'] = isset($data['itemization_type']) ? $data['itemization_type'] : null;
        $this->container['item_detail'] = isset($data['item_detail']) ? $data['item_detail'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['item_variation_name'] = isset($data['item_variation_name']) ? $data['item_variation_name'] : null;
        $this->container['total_money'] = isset($data['total_money']) ? $data['total_money'] : null;
        $this->container['single_quantity_money'] = isset($data['single_quantity_money']) ? $data['single_quantity_money'] : null;
        $this->container['gross_sales_money'] = isset($data['gross_sales_money']) ? $data['gross_sales_money'] : null;
        $this->container['discount_money'] = isset($data['discount_money']) ? $data['discount_money'] : null;
        $this->container['net_sales_money'] = isset($data['net_sales_money']) ? $data['net_sales_money'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['modifiers'] = isset($data['modifiers']) ? $data['modifiers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["ITEM", "CUSTOM_AMOUNT", "GIFT_CARD_ACTIVATION", "GIFT_CARD_RELOAD", "GIFT_CARD_UNKNOWN", "OTHER"];
        if (!in_array($this->container['itemization_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'itemization_type', must be one of #{allowed_values}.";
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
        $allowed_values = ["ITEM", "CUSTOM_AMOUNT", "GIFT_CARD_ACTIVATION", "GIFT_CARD_RELOAD", "GIFT_CARD_UNKNOWN", "OTHER"];
        if (!in_array($this->container['itemization_type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $name The item's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity The quantity of the item purchased. This can be a decimal value.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets itemization_type
     * @return string
     */
    public function getItemizationType()
    {
        return $this->container['itemization_type'];
    }

    /**
     * Sets itemization_type
     * @param string $itemization_type The type of purchase that the itemization represents, such as an ITEM or CUSTOM_AMOUNT
     * @return $this
     */
    public function setItemizationType($itemization_type)
    {
        $allowed_values = array('ITEM', 'CUSTOM_AMOUNT', 'GIFT_CARD_ACTIVATION', 'GIFT_CARD_RELOAD', 'GIFT_CARD_UNKNOWN', 'OTHER');
        if (!is_null($itemization_type) && (!in_array($itemization_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'itemization_type', must be one of 'ITEM', 'CUSTOM_AMOUNT', 'GIFT_CARD_ACTIVATION', 'GIFT_CARD_RELOAD', 'GIFT_CARD_UNKNOWN', 'OTHER'");
        }
        $this->container['itemization_type'] = $itemization_type;

        return $this;
    }

    /**
     * Gets item_detail
     * @return \SquareConnect\Model\V1PaymentItemDetail
     */
    public function getItemDetail()
    {
        return $this->container['item_detail'];
    }

    /**
     * Sets item_detail
     * @param \SquareConnect\Model\V1PaymentItemDetail $item_detail Details of the item, including its unique identifier and the identifier of the item variation purchased.
     * @return $this
     */
    public function setItemDetail($item_detail)
    {
        $this->container['item_detail'] = $item_detail;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Notes entered by the merchant about the item at the time of payment, if any.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets item_variation_name
     * @return string
     */
    public function getItemVariationName()
    {
        return $this->container['item_variation_name'];
    }

    /**
     * Sets item_variation_name
     * @param string $item_variation_name The name of the item variation purchased, if any.
     * @return $this
     */
    public function setItemVariationName($item_variation_name)
    {
        $this->container['item_variation_name'] = $item_variation_name;

        return $this;
    }

    /**
     * Gets total_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalMoney()
    {
        return $this->container['total_money'];
    }

    /**
     * Sets total_money
     * @param \SquareConnect\Model\Money $total_money The total cost of the item, including all taxes and discounts.
     * @return $this
     */
    public function setTotalMoney($total_money)
    {
        $this->container['total_money'] = $total_money;

        return $this;
    }

    /**
     * Gets single_quantity_money
     * @return \SquareConnect\Model\Money
     */
    public function getSingleQuantityMoney()
    {
        return $this->container['single_quantity_money'];
    }

    /**
     * Sets single_quantity_money
     * @param \SquareConnect\Model\Money $single_quantity_money The cost of a single unit of this item.
     * @return $this
     */
    public function setSingleQuantityMoney($single_quantity_money)
    {
        $this->container['single_quantity_money'] = $single_quantity_money;

        return $this;
    }

    /**
     * Gets gross_sales_money
     * @return \SquareConnect\Model\Money
     */
    public function getGrossSalesMoney()
    {
        return $this->container['gross_sales_money'];
    }

    /**
     * Sets gross_sales_money
     * @param \SquareConnect\Model\Money $gross_sales_money The total cost of the itemization and its modifiers, not including taxes or discounts.
     * @return $this
     */
    public function setGrossSalesMoney($gross_sales_money)
    {
        $this->container['gross_sales_money'] = $gross_sales_money;

        return $this;
    }

    /**
     * Gets discount_money
     * @return \SquareConnect\Model\Money
     */
    public function getDiscountMoney()
    {
        return $this->container['discount_money'];
    }

    /**
     * Sets discount_money
     * @param \SquareConnect\Model\Money $discount_money The total of all discounts applied to the itemization. This value is always negative or zero.
     * @return $this
     */
    public function setDiscountMoney($discount_money)
    {
        $this->container['discount_money'] = $discount_money;

        return $this;
    }

    /**
     * Gets net_sales_money
     * @return \SquareConnect\Model\Money
     */
    public function getNetSalesMoney()
    {
        return $this->container['net_sales_money'];
    }

    /**
     * Sets net_sales_money
     * @param \SquareConnect\Model\Money $net_sales_money The sum of gross_sales_money and discount_money.
     * @return $this
     */
    public function setNetSalesMoney($net_sales_money)
    {
        $this->container['net_sales_money'] = $net_sales_money;

        return $this;
    }

    /**
     * Gets taxes
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     * @param \SquareConnect\Model\V1PaymentTax[] $taxes All taxes applied to this itemization.
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets discounts
     * @return \SquareConnect\Model\V1PaymentDiscount[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     * @param \SquareConnect\Model\V1PaymentDiscount[] $discounts All discounts applied to this itemization.
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets modifiers
     * @return \SquareConnect\Model\V1PaymentModifier[]
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     * @param \SquareConnect\Model\V1PaymentModifier[] $modifiers All modifier options applied to this itemization.
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

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


