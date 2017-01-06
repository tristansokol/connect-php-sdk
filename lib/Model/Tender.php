<?php
/**
 * Tender
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
 * Tender Class Doc Comment
 *
 * @category    Class */
 // @description Represents a form of tender used to pay in a transaction.
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tender implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tender';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'location_id' => 'string',
        'transaction_id' => 'string',
        'created_at' => 'string',
        'note' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'processing_fee_money' => '\SquareConnect\Model\Money',
        'customer_id' => 'string',
        'type' => 'string',
        'card_details' => '\SquareConnect\Model\TenderCardDetails',
        'cash_details' => '\SquareConnect\Model\TenderCashDetails'
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
        'location_id' => 'location_id',
        'transaction_id' => 'transaction_id',
        'created_at' => 'created_at',
        'note' => 'note',
        'amount_money' => 'amount_money',
        'processing_fee_money' => 'processing_fee_money',
        'customer_id' => 'customer_id',
        'type' => 'type',
        'card_details' => 'card_details',
        'cash_details' => 'cash_details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'transaction_id' => 'setTransactionId',
        'created_at' => 'setCreatedAt',
        'note' => 'setNote',
        'amount_money' => 'setAmountMoney',
        'processing_fee_money' => 'setProcessingFeeMoney',
        'customer_id' => 'setCustomerId',
        'type' => 'setType',
        'card_details' => 'setCardDetails',
        'cash_details' => 'setCashDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'transaction_id' => 'getTransactionId',
        'created_at' => 'getCreatedAt',
        'note' => 'getNote',
        'amount_money' => 'getAmountMoney',
        'processing_fee_money' => 'getProcessingFeeMoney',
        'customer_id' => 'getCustomerId',
        'type' => 'getType',
        'card_details' => 'getCardDetails',
        'cash_details' => 'getCashDetails'
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

    const TYPE_OTHER = 'OTHER';
    const TYPE_CARD = 'CARD';
    const TYPE_CASH = 'CASH';
    const TYPE_THIRD_PARTY_CARD = 'THIRD_PARTY_CARD';
    const TYPE_SQUARE_GIFT_CARD = 'SQUARE_GIFT_CARD';
    const TYPE_NO_SALE = 'NO_SALE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_OTHER,
            self::TYPE_CARD,
            self::TYPE_CASH,
            self::TYPE_THIRD_PARTY_CARD,
            self::TYPE_SQUARE_GIFT_CARD,
            self::TYPE_NO_SALE,
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
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['amount_money'] = isset($data['amount_money']) ? $data['amount_money'] : null;
        $this->container['processing_fee_money'] = isset($data['processing_fee_money']) ? $data['processing_fee_money'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['card_details'] = isset($data['card_details']) ? $data['card_details'] : null;
        $this->container['cash_details'] = isset($data['cash_details']) ? $data['cash_details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["OTHER", "CARD", "CASH", "THIRD_PARTY_CARD", "SQUARE_GIFT_CARD", "NO_SALE"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["OTHER", "CARD", "CASH", "THIRD_PARTY_CARD", "SQUARE_GIFT_CARD", "NO_SALE"];
        if (!in_array($this->container['type'], $allowed_values)) {
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
     * @param string $id The tender's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param string $location_id The ID of the tender's associated location.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param string $transaction_id The ID of the tender's associated transaction.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * @param string $created_at The time when the tender was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note An optional note associated with the tender at the time of payment.
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
     * @param \SquareConnect\Model\Money $amount_money The amount of the tender.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->container['amount_money'] = $amount_money;

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
     * @param \SquareConnect\Model\Money $processing_fee_money The amount of any Square processing fees applied to the tender.
     * @return $this
     */
    public function setProcessingFeeMoney($processing_fee_money)
    {
        $this->container['processing_fee_money'] = $processing_fee_money;

        return $this;
    }

    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param string $customer_id If the tender represents a customer's card on file, this is the ID of the associated customer.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of tender.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('OTHER', 'CARD', 'CASH', 'THIRD_PARTY_CARD', 'SQUARE_GIFT_CARD', 'NO_SALE');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'OTHER', 'CARD', 'CASH', 'THIRD_PARTY_CARD', 'SQUARE_GIFT_CARD', 'NO_SALE'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets card_details
     * @return \SquareConnect\Model\TenderCardDetails
     */
    public function getCardDetails()
    {
        return $this->container['card_details'];
    }

    /**
     * Sets card_details
     * @param \SquareConnect\Model\TenderCardDetails $card_details The details of the card tender. This value is present only if the value of `type` is `CARD`.
     * @return $this
     */
    public function setCardDetails($card_details)
    {
        $this->container['card_details'] = $card_details;

        return $this;
    }

    /**
     * Gets cash_details
     * @return \SquareConnect\Model\TenderCashDetails
     */
    public function getCashDetails()
    {
        return $this->container['cash_details'];
    }

    /**
     * Sets cash_details
     * @param \SquareConnect\Model\TenderCashDetails $cash_details The details of the cash tender. This value is present only if the value of `type` is `CASH`.
     * @return $this
     */
    public function setCashDetails($cash_details)
    {
        $this->container['cash_details'] = $cash_details;

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


