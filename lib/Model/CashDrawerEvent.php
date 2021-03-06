<?php
/**
 * CashDrawerEvent
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
 * CashDrawerEvent Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CashDrawerEvent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CashDrawerEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'employee_id' => 'string',
        'event_type' => 'string',
        'event_money' => '\SquareConnect\Model\Money',
        'created_at' => 'string',
        'description' => 'string'
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
        'employee_id' => 'employee_id',
        'event_type' => 'event_type',
        'event_money' => 'event_money',
        'created_at' => 'created_at',
        'description' => 'description'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'event_type' => 'setEventType',
        'event_money' => 'setEventMoney',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'event_type' => 'getEventType',
        'event_money' => 'getEventMoney',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription'
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

    const EVENT_TYPE_NO_SALE = 'NO_SALE';
    const EVENT_TYPE_CASH_TENDER_PAYMENT = 'CASH_TENDER_PAYMENT';
    const EVENT_TYPE_OTHER_TENDER_PAYMENT = 'OTHER_TENDER_PAYMENT';
    const EVENT_TYPE_CASH_TENDER_CANCELED_PAYMENT = 'CASH_TENDER_CANCELED_PAYMENT';
    const EVENT_TYPE_OTHER_TENDER_CANCELED_PAYMENT = 'OTHER_TENDER_CANCELED_PAYMENT';
    const EVENT_TYPE_CASH_TENDER_REFUND = 'CASH_TENDER_REFUND';
    const EVENT_TYPE_OTHER_TENDER_REFUND = 'OTHER_TENDER_REFUND';
    const EVENT_TYPE_PAID_IN = 'PAID_IN';
    const EVENT_TYPE_PAID_OUT = 'PAID_OUT';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_NO_SALE,
            self::EVENT_TYPE_CASH_TENDER_PAYMENT,
            self::EVENT_TYPE_OTHER_TENDER_PAYMENT,
            self::EVENT_TYPE_CASH_TENDER_CANCELED_PAYMENT,
            self::EVENT_TYPE_OTHER_TENDER_CANCELED_PAYMENT,
            self::EVENT_TYPE_CASH_TENDER_REFUND,
            self::EVENT_TYPE_OTHER_TENDER_REFUND,
            self::EVENT_TYPE_PAID_IN,
            self::EVENT_TYPE_PAID_OUT,
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
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['event_money'] = isset($data['event_money']) ? $data['event_money'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["NO_SALE", "CASH_TENDER_PAYMENT", "OTHER_TENDER_PAYMENT", "CASH_TENDER_CANCELED_PAYMENT", "OTHER_TENDER_CANCELED_PAYMENT", "CASH_TENDER_REFUND", "OTHER_TENDER_REFUND", "PAID_IN", "PAID_OUT"];
        if (!in_array($this->container['event_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'event_type', must be one of #{allowed_values}.";
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
        $allowed_values = ["NO_SALE", "CASH_TENDER_PAYMENT", "OTHER_TENDER_PAYMENT", "CASH_TENDER_CANCELED_PAYMENT", "OTHER_TENDER_CANCELED_PAYMENT", "CASH_TENDER_REFUND", "OTHER_TENDER_REFUND", "PAID_IN", "PAID_OUT"];
        if (!in_array($this->container['event_type'], $allowed_values)) {
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
     * @param string $id The event's unique ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets employee_id
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     * @param string $employee_id The ID of the employee that created the event.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     * @param string $event_type The type of event that occurred.
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowed_values = array('NO_SALE', 'CASH_TENDER_PAYMENT', 'OTHER_TENDER_PAYMENT', 'CASH_TENDER_CANCELED_PAYMENT', 'OTHER_TENDER_CANCELED_PAYMENT', 'CASH_TENDER_REFUND', 'OTHER_TENDER_REFUND', 'PAID_IN', 'PAID_OUT');
        if (!is_null($event_type) && (!in_array($event_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'event_type', must be one of 'NO_SALE', 'CASH_TENDER_PAYMENT', 'OTHER_TENDER_PAYMENT', 'CASH_TENDER_CANCELED_PAYMENT', 'OTHER_TENDER_CANCELED_PAYMENT', 'CASH_TENDER_REFUND', 'OTHER_TENDER_REFUND', 'PAID_IN', 'PAID_OUT'");
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_money
     * @return \SquareConnect\Model\Money
     */
    public function getEventMoney()
    {
        return $this->container['event_money'];
    }

    /**
     * Sets event_money
     * @param \SquareConnect\Model\Money $event_money The amount of money that was added to or removed from the cash drawer because of the event. This value can be positive (for added money) or negative (for removed money).
     * @return $this
     */
    public function setEventMoney($event_money)
    {
        $this->container['event_money'] = $event_money;

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
     * @param string $created_at The time when the event occurred, in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description An optional description of the event, entered by the employee that created it.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


