<?php
/**
 * V1Order
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
 * V1Order Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Order implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errors' => '\SquareConnect\Model\Error[]',
        'id' => 'string',
        'buyer_email' => 'string',
        'recipient_name' => 'string',
        'recipient_phone_number' => 'string',
        'state' => 'string',
        'shipping_address' => '\SquareConnect\Model\Address',
        'subtotal_money' => '\SquareConnect\Model\Money',
        'total_shipping_money' => '\SquareConnect\Model\Money',
        'total_tax_money' => '\SquareConnect\Model\Money',
        'total_price_money' => '\SquareConnect\Model\Money',
        'total_discount_money' => '\SquareConnect\Model\Money',
        'created_at' => 'string',
        'updated_at' => 'string',
        'expires_at' => 'string',
        'payment_id' => 'string',
        'buyer_note' => 'string',
        'completed_note' => 'string',
        'refunded_note' => 'string',
        'canceled_note' => 'string',
        'tender' => '\SquareConnect\Model\V1Tender',
        'order_history' => '\SquareConnect\Model\V1OrderHistoryEntry[]',
        'promo_code' => 'string',
        'btc_receive_address' => 'string',
        'btc_price_satoshi' => 'float'
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
        'errors' => 'errors',
        'id' => 'id',
        'buyer_email' => 'buyer_email',
        'recipient_name' => 'recipient_name',
        'recipient_phone_number' => 'recipient_phone_number',
        'state' => 'state',
        'shipping_address' => 'shipping_address',
        'subtotal_money' => 'subtotal_money',
        'total_shipping_money' => 'total_shipping_money',
        'total_tax_money' => 'total_tax_money',
        'total_price_money' => 'total_price_money',
        'total_discount_money' => 'total_discount_money',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'expires_at' => 'expires_at',
        'payment_id' => 'payment_id',
        'buyer_note' => 'buyer_note',
        'completed_note' => 'completed_note',
        'refunded_note' => 'refunded_note',
        'canceled_note' => 'canceled_note',
        'tender' => 'tender',
        'order_history' => 'order_history',
        'promo_code' => 'promo_code',
        'btc_receive_address' => 'btc_receive_address',
        'btc_price_satoshi' => 'btc_price_satoshi'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'id' => 'setId',
        'buyer_email' => 'setBuyerEmail',
        'recipient_name' => 'setRecipientName',
        'recipient_phone_number' => 'setRecipientPhoneNumber',
        'state' => 'setState',
        'shipping_address' => 'setShippingAddress',
        'subtotal_money' => 'setSubtotalMoney',
        'total_shipping_money' => 'setTotalShippingMoney',
        'total_tax_money' => 'setTotalTaxMoney',
        'total_price_money' => 'setTotalPriceMoney',
        'total_discount_money' => 'setTotalDiscountMoney',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'expires_at' => 'setExpiresAt',
        'payment_id' => 'setPaymentId',
        'buyer_note' => 'setBuyerNote',
        'completed_note' => 'setCompletedNote',
        'refunded_note' => 'setRefundedNote',
        'canceled_note' => 'setCanceledNote',
        'tender' => 'setTender',
        'order_history' => 'setOrderHistory',
        'promo_code' => 'setPromoCode',
        'btc_receive_address' => 'setBtcReceiveAddress',
        'btc_price_satoshi' => 'setBtcPriceSatoshi'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'id' => 'getId',
        'buyer_email' => 'getBuyerEmail',
        'recipient_name' => 'getRecipientName',
        'recipient_phone_number' => 'getRecipientPhoneNumber',
        'state' => 'getState',
        'shipping_address' => 'getShippingAddress',
        'subtotal_money' => 'getSubtotalMoney',
        'total_shipping_money' => 'getTotalShippingMoney',
        'total_tax_money' => 'getTotalTaxMoney',
        'total_price_money' => 'getTotalPriceMoney',
        'total_discount_money' => 'getTotalDiscountMoney',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'expires_at' => 'getExpiresAt',
        'payment_id' => 'getPaymentId',
        'buyer_note' => 'getBuyerNote',
        'completed_note' => 'getCompletedNote',
        'refunded_note' => 'getRefundedNote',
        'canceled_note' => 'getCanceledNote',
        'tender' => 'getTender',
        'order_history' => 'getOrderHistory',
        'promo_code' => 'getPromoCode',
        'btc_receive_address' => 'getBtcReceiveAddress',
        'btc_price_satoshi' => 'getBtcPriceSatoshi'
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

    const STATE_PENDING = 'PENDING';
    const STATE_OPEN = 'OPEN';
    const STATE_COMPLETED = 'COMPLETED';
    const STATE_CANCELED = 'CANCELED';
    const STATE_REFUNDED = 'REFUNDED';
    const STATE_REJECTED = 'REJECTED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_OPEN,
            self::STATE_COMPLETED,
            self::STATE_CANCELED,
            self::STATE_REFUNDED,
            self::STATE_REJECTED,
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
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['buyer_email'] = isset($data['buyer_email']) ? $data['buyer_email'] : null;
        $this->container['recipient_name'] = isset($data['recipient_name']) ? $data['recipient_name'] : null;
        $this->container['recipient_phone_number'] = isset($data['recipient_phone_number']) ? $data['recipient_phone_number'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['shipping_address'] = isset($data['shipping_address']) ? $data['shipping_address'] : null;
        $this->container['subtotal_money'] = isset($data['subtotal_money']) ? $data['subtotal_money'] : null;
        $this->container['total_shipping_money'] = isset($data['total_shipping_money']) ? $data['total_shipping_money'] : null;
        $this->container['total_tax_money'] = isset($data['total_tax_money']) ? $data['total_tax_money'] : null;
        $this->container['total_price_money'] = isset($data['total_price_money']) ? $data['total_price_money'] : null;
        $this->container['total_discount_money'] = isset($data['total_discount_money']) ? $data['total_discount_money'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['buyer_note'] = isset($data['buyer_note']) ? $data['buyer_note'] : null;
        $this->container['completed_note'] = isset($data['completed_note']) ? $data['completed_note'] : null;
        $this->container['refunded_note'] = isset($data['refunded_note']) ? $data['refunded_note'] : null;
        $this->container['canceled_note'] = isset($data['canceled_note']) ? $data['canceled_note'] : null;
        $this->container['tender'] = isset($data['tender']) ? $data['tender'] : null;
        $this->container['order_history'] = isset($data['order_history']) ? $data['order_history'] : null;
        $this->container['promo_code'] = isset($data['promo_code']) ? $data['promo_code'] : null;
        $this->container['btc_receive_address'] = isset($data['btc_receive_address']) ? $data['btc_receive_address'] : null;
        $this->container['btc_price_satoshi'] = isset($data['btc_price_satoshi']) ? $data['btc_price_satoshi'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["PENDING", "OPEN", "COMPLETED", "CANCELED", "REFUNDED", "REJECTED"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
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
        $allowed_values = ["PENDING", "OPEN", "COMPLETED", "CANCELED", "REFUNDED", "REJECTED"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets errors
     * @return \SquareConnect\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     * @param \SquareConnect\Model\Error[] $errors Any errors that occurred during the request.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
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
     * @param string $id The order's unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets buyer_email
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->container['buyer_email'];
    }

    /**
     * Sets buyer_email
     * @param string $buyer_email The email address of the order's buyer.
     * @return $this
     */
    public function setBuyerEmail($buyer_email)
    {
        $this->container['buyer_email'] = $buyer_email;

        return $this;
    }

    /**
     * Gets recipient_name
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     * @param string $recipient_name The name of the order's buyer.
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets recipient_phone_number
     * @return string
     */
    public function getRecipientPhoneNumber()
    {
        return $this->container['recipient_phone_number'];
    }

    /**
     * Sets recipient_phone_number
     * @param string $recipient_phone_number The phone number to use for the order's delivery.
     * @return $this
     */
    public function setRecipientPhoneNumber($recipient_phone_number)
    {
        $this->container['recipient_phone_number'] = $recipient_phone_number;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Whether the tax is an ADDITIVE tax or an INCLUSIVE tax.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('PENDING', 'OPEN', 'COMPLETED', 'CANCELED', 'REFUNDED', 'REJECTED');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'PENDING', 'OPEN', 'COMPLETED', 'CANCELED', 'REFUNDED', 'REJECTED'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets shipping_address
     * @return \SquareConnect\Model\Address
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \SquareConnect\Model\Address $shipping_address The address to ship the order to.
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets subtotal_money
     * @return \SquareConnect\Model\Money
     */
    public function getSubtotalMoney()
    {
        return $this->container['subtotal_money'];
    }

    /**
     * Sets subtotal_money
     * @param \SquareConnect\Model\Money $subtotal_money The amount of all items purchased in the order, before taxes and shipping.
     * @return $this
     */
    public function setSubtotalMoney($subtotal_money)
    {
        $this->container['subtotal_money'] = $subtotal_money;

        return $this;
    }

    /**
     * Gets total_shipping_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalShippingMoney()
    {
        return $this->container['total_shipping_money'];
    }

    /**
     * Sets total_shipping_money
     * @param \SquareConnect\Model\Money $total_shipping_money The shipping cost for the order.
     * @return $this
     */
    public function setTotalShippingMoney($total_shipping_money)
    {
        $this->container['total_shipping_money'] = $total_shipping_money;

        return $this;
    }

    /**
     * Gets total_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalTaxMoney()
    {
        return $this->container['total_tax_money'];
    }

    /**
     * Sets total_tax_money
     * @param \SquareConnect\Model\Money $total_tax_money The total of all taxes applied to the order.
     * @return $this
     */
    public function setTotalTaxMoney($total_tax_money)
    {
        $this->container['total_tax_money'] = $total_tax_money;

        return $this;
    }

    /**
     * Gets total_price_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalPriceMoney()
    {
        return $this->container['total_price_money'];
    }

    /**
     * Sets total_price_money
     * @param \SquareConnect\Model\Money $total_price_money The total cost of the order.
     * @return $this
     */
    public function setTotalPriceMoney($total_price_money)
    {
        $this->container['total_price_money'] = $total_price_money;

        return $this;
    }

    /**
     * Gets total_discount_money
     * @return \SquareConnect\Model\Money
     */
    public function getTotalDiscountMoney()
    {
        return $this->container['total_discount_money'];
    }

    /**
     * Sets total_discount_money
     * @param \SquareConnect\Model\Money $total_discount_money The total of all discounts applied to the order.
     * @return $this
     */
    public function setTotalDiscountMoney($total_discount_money)
    {
        $this->container['total_discount_money'] = $total_discount_money;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at The time when the order was created, in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at The time when the order was last modified, in ISO 8601 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets expires_at
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     * @param string $expires_at The time when the order expires if no action is taken, in ISO 8601 format.
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     * @param string $payment_id The unique identifier of the payment associated with the order.
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets buyer_note
     * @return string
     */
    public function getBuyerNote()
    {
        return $this->container['buyer_note'];
    }

    /**
     * Sets buyer_note
     * @param string $buyer_note A note provided by the buyer when the order was created, if any.
     * @return $this
     */
    public function setBuyerNote($buyer_note)
    {
        $this->container['buyer_note'] = $buyer_note;

        return $this;
    }

    /**
     * Gets completed_note
     * @return string
     */
    public function getCompletedNote()
    {
        return $this->container['completed_note'];
    }

    /**
     * Sets completed_note
     * @param string $completed_note A note provided by the merchant when the order's state was set to COMPLETED, if any
     * @return $this
     */
    public function setCompletedNote($completed_note)
    {
        $this->container['completed_note'] = $completed_note;

        return $this;
    }

    /**
     * Gets refunded_note
     * @return string
     */
    public function getRefundedNote()
    {
        return $this->container['refunded_note'];
    }

    /**
     * Sets refunded_note
     * @param string $refunded_note A note provided by the merchant when the order's state was set to REFUNDED, if any.
     * @return $this
     */
    public function setRefundedNote($refunded_note)
    {
        $this->container['refunded_note'] = $refunded_note;

        return $this;
    }

    /**
     * Gets canceled_note
     * @return string
     */
    public function getCanceledNote()
    {
        return $this->container['canceled_note'];
    }

    /**
     * Sets canceled_note
     * @param string $canceled_note A note provided by the merchant when the order's state was set to CANCELED, if any.
     * @return $this
     */
    public function setCanceledNote($canceled_note)
    {
        $this->container['canceled_note'] = $canceled_note;

        return $this;
    }

    /**
     * Gets tender
     * @return \SquareConnect\Model\V1Tender
     */
    public function getTender()
    {
        return $this->container['tender'];
    }

    /**
     * Sets tender
     * @param \SquareConnect\Model\V1Tender $tender The tender used to pay for the order.
     * @return $this
     */
    public function setTender($tender)
    {
        $this->container['tender'] = $tender;

        return $this;
    }

    /**
     * Gets order_history
     * @return \SquareConnect\Model\V1OrderHistoryEntry[]
     */
    public function getOrderHistory()
    {
        return $this->container['order_history'];
    }

    /**
     * Sets order_history
     * @param \SquareConnect\Model\V1OrderHistoryEntry[] $order_history The history of actions associated with the order.
     * @return $this
     */
    public function setOrderHistory($order_history)
    {
        $this->container['order_history'] = $order_history;

        return $this;
    }

    /**
     * Gets promo_code
     * @return string
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     * @param string $promo_code The promo code provided by the buyer, if any.
     * @return $this
     */
    public function setPromoCode($promo_code)
    {
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets btc_receive_address
     * @return string
     */
    public function getBtcReceiveAddress()
    {
        return $this->container['btc_receive_address'];
    }

    /**
     * Sets btc_receive_address
     * @param string $btc_receive_address For Bitcoin transactions, the address that the buyer sent Bitcoin to.
     * @return $this
     */
    public function setBtcReceiveAddress($btc_receive_address)
    {
        $this->container['btc_receive_address'] = $btc_receive_address;

        return $this;
    }

    /**
     * Gets btc_price_satoshi
     * @return float
     */
    public function getBtcPriceSatoshi()
    {
        return $this->container['btc_price_satoshi'];
    }

    /**
     * Sets btc_price_satoshi
     * @param float $btc_price_satoshi For Bitcoin transactions, the price of the buyer's order in satoshi (100 million satoshi equals 1 BTC).
     * @return $this
     */
    public function setBtcPriceSatoshi($btc_price_satoshi)
    {
        $this->container['btc_price_satoshi'] = $btc_price_satoshi;

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

