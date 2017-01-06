<?php
/**
 * V1Payment
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
 * V1Payment Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Payment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errors' => '\SquareConnect\Model\Error[]',
        'id' => 'string',
        'merchant_id' => 'string',
        'created_at' => 'string',
        'creator_id' => 'bool',
        'device' => '\SquareConnect\Model\Device',
        'payment_url' => 'string',
        'receipt_url' => 'string',
        'inclusive_tax_money' => '\SquareConnect\Model\Money',
        'additive_tax_money' => '\SquareConnect\Model\Money',
        'tax_money' => '\SquareConnect\Model\Money',
        'tip_money' => '\SquareConnect\Model\Money',
        'discount_money' => '\SquareConnect\Model\Money',
        'processing_fee_money' => '\SquareConnect\Model\Money',
        'net_total_money' => '\SquareConnect\Model\Money',
        'refunded_money' => '\SquareConnect\Model\Money',
        'inclusive_tax' => '\SquareConnect\Model\V1PaymentTax[]',
        'additive_tax' => '\SquareConnect\Model\V1PaymentTax[]',
        'tender' => '\SquareConnect\Model\V1Tender[]',
        'refunds' => '\SquareConnect\Model\V1Refund[]',
        'itemizations' => '\SquareConnect\Model\V1PaymentItemization[]'
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
        'merchant_id' => 'merchant_id',
        'created_at' => 'created_at',
        'creator_id' => 'creator_id',
        'device' => 'device',
        'payment_url' => 'payment_url',
        'receipt_url' => 'receipt_url',
        'inclusive_tax_money' => 'inclusive_tax_money',
        'additive_tax_money' => 'additive_tax_money',
        'tax_money' => 'tax_money',
        'tip_money' => 'tip_money',
        'discount_money' => 'discount_money',
        'processing_fee_money' => 'processing_fee_money',
        'net_total_money' => 'net_total_money',
        'refunded_money' => 'refunded_money',
        'inclusive_tax' => 'inclusive_tax',
        'additive_tax' => 'additive_tax',
        'tender' => 'tender',
        'refunds' => 'refunds',
        'itemizations' => 'itemizations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'created_at' => 'setCreatedAt',
        'creator_id' => 'setCreatorId',
        'device' => 'setDevice',
        'payment_url' => 'setPaymentUrl',
        'receipt_url' => 'setReceiptUrl',
        'inclusive_tax_money' => 'setInclusiveTaxMoney',
        'additive_tax_money' => 'setAdditiveTaxMoney',
        'tax_money' => 'setTaxMoney',
        'tip_money' => 'setTipMoney',
        'discount_money' => 'setDiscountMoney',
        'processing_fee_money' => 'setProcessingFeeMoney',
        'net_total_money' => 'setNetTotalMoney',
        'refunded_money' => 'setRefundedMoney',
        'inclusive_tax' => 'setInclusiveTax',
        'additive_tax' => 'setAdditiveTax',
        'tender' => 'setTender',
        'refunds' => 'setRefunds',
        'itemizations' => 'setItemizations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'created_at' => 'getCreatedAt',
        'creator_id' => 'getCreatorId',
        'device' => 'getDevice',
        'payment_url' => 'getPaymentUrl',
        'receipt_url' => 'getReceiptUrl',
        'inclusive_tax_money' => 'getInclusiveTaxMoney',
        'additive_tax_money' => 'getAdditiveTaxMoney',
        'tax_money' => 'getTaxMoney',
        'tip_money' => 'getTipMoney',
        'discount_money' => 'getDiscountMoney',
        'processing_fee_money' => 'getProcessingFeeMoney',
        'net_total_money' => 'getNetTotalMoney',
        'refunded_money' => 'getRefundedMoney',
        'inclusive_tax' => 'getInclusiveTax',
        'additive_tax' => 'getAdditiveTax',
        'tender' => 'getTender',
        'refunds' => 'getRefunds',
        'itemizations' => 'getItemizations'
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
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['creator_id'] = isset($data['creator_id']) ? $data['creator_id'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['payment_url'] = isset($data['payment_url']) ? $data['payment_url'] : null;
        $this->container['receipt_url'] = isset($data['receipt_url']) ? $data['receipt_url'] : null;
        $this->container['inclusive_tax_money'] = isset($data['inclusive_tax_money']) ? $data['inclusive_tax_money'] : null;
        $this->container['additive_tax_money'] = isset($data['additive_tax_money']) ? $data['additive_tax_money'] : null;
        $this->container['tax_money'] = isset($data['tax_money']) ? $data['tax_money'] : null;
        $this->container['tip_money'] = isset($data['tip_money']) ? $data['tip_money'] : null;
        $this->container['discount_money'] = isset($data['discount_money']) ? $data['discount_money'] : null;
        $this->container['processing_fee_money'] = isset($data['processing_fee_money']) ? $data['processing_fee_money'] : null;
        $this->container['net_total_money'] = isset($data['net_total_money']) ? $data['net_total_money'] : null;
        $this->container['refunded_money'] = isset($data['refunded_money']) ? $data['refunded_money'] : null;
        $this->container['inclusive_tax'] = isset($data['inclusive_tax']) ? $data['inclusive_tax'] : null;
        $this->container['additive_tax'] = isset($data['additive_tax']) ? $data['additive_tax'] : null;
        $this->container['tender'] = isset($data['tender']) ? $data['tender'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['itemizations'] = isset($data['itemizations']) ? $data['itemizations'] : null;
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
     * @param string $id The payment's unique identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     * @param string $merchant_id The unique identifier of the merchant that took the payment.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
     * @param string $created_at The time when the payment was created, in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets creator_id
     * @return bool
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     * @param bool $creator_id The unique identifier of the Square account that took the payment.
     * @return $this
     */
    public function setCreatorId($creator_id)
    {
        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets device
     * @return \SquareConnect\Model\Device
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     * @param \SquareConnect\Model\Device $device The device that took the payment.
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets payment_url
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->container['payment_url'];
    }

    /**
     * Sets payment_url
     * @param string $payment_url The URL of the payment's detail page in the merchant dashboard. The merchant must be signed in to the merchant dashboard to view this page.
     * @return $this
     */
    public function setPaymentUrl($payment_url)
    {
        $this->container['payment_url'] = $payment_url;

        return $this;
    }

    /**
     * Gets receipt_url
     * @return string
     */
    public function getReceiptUrl()
    {
        return $this->container['receipt_url'];
    }

    /**
     * Sets receipt_url
     * @param string $receipt_url The URL of the receipt for the payment. Note that for split tender payments, this URL corresponds to the receipt for the first tender listed in the payment's tender field. Each Tender object has its own receipt_url field you can use to get the other receipts associated with a split tender payment.
     * @return $this
     */
    public function setReceiptUrl($receipt_url)
    {
        $this->container['receipt_url'] = $receipt_url;

        return $this;
    }

    /**
     * Gets inclusive_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getInclusiveTaxMoney()
    {
        return $this->container['inclusive_tax_money'];
    }

    /**
     * Sets inclusive_tax_money
     * @param \SquareConnect\Model\Money $inclusive_tax_money The sum of all inclusive taxes associated with the payment.
     * @return $this
     */
    public function setInclusiveTaxMoney($inclusive_tax_money)
    {
        $this->container['inclusive_tax_money'] = $inclusive_tax_money;

        return $this;
    }

    /**
     * Gets additive_tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getAdditiveTaxMoney()
    {
        return $this->container['additive_tax_money'];
    }

    /**
     * Sets additive_tax_money
     * @param \SquareConnect\Model\Money $additive_tax_money The sum of all additive taxes associated with the payment.
     * @return $this
     */
    public function setAdditiveTaxMoney($additive_tax_money)
    {
        $this->container['additive_tax_money'] = $additive_tax_money;

        return $this;
    }

    /**
     * Gets tax_money
     * @return \SquareConnect\Model\Money
     */
    public function getTaxMoney()
    {
        return $this->container['tax_money'];
    }

    /**
     * Sets tax_money
     * @param \SquareConnect\Model\Money $tax_money The total of all taxes applied to the payment. This is always the sum of inclusive_tax_money and additive_tax_money.
     * @return $this
     */
    public function setTaxMoney($tax_money)
    {
        $this->container['tax_money'] = $tax_money;

        return $this;
    }

    /**
     * Gets tip_money
     * @return \SquareConnect\Model\Money
     */
    public function getTipMoney()
    {
        return $this->container['tip_money'];
    }

    /**
     * Sets tip_money
     * @param \SquareConnect\Model\Money $tip_money The total of all tips applied to the payment.
     * @return $this
     */
    public function setTipMoney($tip_money)
    {
        $this->container['tip_money'] = $tip_money;

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
     * @param \SquareConnect\Model\Money $discount_money The total of all discounts applied to the payment.
     * @return $this
     */
    public function setDiscountMoney($discount_money)
    {
        $this->container['discount_money'] = $discount_money;

        return $this;
    }

    /**
     * Gets processing_fee_money
     * @return \SquareConnect\Model\Money
     */
    public function getProcessingFeeMoney()
    {
        return $this->container['processing_fee_money'];
    }

    /**
     * Sets processing_fee_money
     * @param \SquareConnect\Model\Money $processing_fee_money The total of all processing fees collected by Square for the payment.
     * @return $this
     */
    public function setProcessingFeeMoney($processing_fee_money)
    {
        $this->container['processing_fee_money'] = $processing_fee_money;

        return $this;
    }

    /**
     * Gets net_total_money
     * @return \SquareConnect\Model\Money
     */
    public function getNetTotalMoney()
    {
        return $this->container['net_total_money'];
    }

    /**
     * Sets net_total_money
     * @param \SquareConnect\Model\Money $net_total_money The amount to be deposited into the merchant's bank account for the payment.
     * @return $this
     */
    public function setNetTotalMoney($net_total_money)
    {
        $this->container['net_total_money'] = $net_total_money;

        return $this;
    }

    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\Money
     */
    public function getRefundedMoney()
    {
        return $this->container['refunded_money'];
    }

    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\Money $refunded_money The total of all refunds applied to the payment.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->container['refunded_money'] = $refunded_money;

        return $this;
    }

    /**
     * Gets inclusive_tax
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getInclusiveTax()
    {
        return $this->container['inclusive_tax'];
    }

    /**
     * Sets inclusive_tax
     * @param \SquareConnect\Model\V1PaymentTax[] $inclusive_tax All of the inclusive taxes associated with the payment.
     * @return $this
     */
    public function setInclusiveTax($inclusive_tax)
    {
        $this->container['inclusive_tax'] = $inclusive_tax;

        return $this;
    }

    /**
     * Gets additive_tax
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getAdditiveTax()
    {
        return $this->container['additive_tax'];
    }

    /**
     * Sets additive_tax
     * @param \SquareConnect\Model\V1PaymentTax[] $additive_tax All of the additive taxes associated with the payment.
     * @return $this
     */
    public function setAdditiveTax($additive_tax)
    {
        $this->container['additive_tax'] = $additive_tax;

        return $this;
    }

    /**
     * Gets tender
     * @return \SquareConnect\Model\V1Tender[]
     */
    public function getTender()
    {
        return $this->container['tender'];
    }

    /**
     * Sets tender
     * @param \SquareConnect\Model\V1Tender[] $tender All of the additive taxes associated with the payment.
     * @return $this
     */
    public function setTender($tender)
    {
        $this->container['tender'] = $tender;

        return $this;
    }

    /**
     * Gets refunds
     * @return \SquareConnect\Model\V1Refund[]
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     * @param \SquareConnect\Model\V1Refund[] $refunds All of the refunds applied to the payment.
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets itemizations
     * @return \SquareConnect\Model\V1PaymentItemization[]
     */
    public function getItemizations()
    {
        return $this->container['itemizations'];
    }

    /**
     * Sets itemizations
     * @param \SquareConnect\Model\V1PaymentItemization[] $itemizations The items purchased in the payment.
     * @return $this
     */
    public function setItemizations($itemizations)
    {
        $this->container['itemizations'] = $itemizations;

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

