<?php
/**
 * V1UpdateOrderRequest
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
 * V1UpdateOrderRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1UpdateOrderRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1UpdateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'shipped_tracking_number' => 'string',
        'completed_note' => 'string',
        'refunded_note' => 'string',
        'canceled_note' => 'string'
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
        'action' => 'action',
        'shipped_tracking_number' => 'shipped_tracking_number',
        'completed_note' => 'completed_note',
        'refunded_note' => 'refunded_note',
        'canceled_note' => 'canceled_note'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'shipped_tracking_number' => 'setShippedTrackingNumber',
        'completed_note' => 'setCompletedNote',
        'refunded_note' => 'setRefundedNote',
        'canceled_note' => 'setCanceledNote'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'shipped_tracking_number' => 'getShippedTrackingNumber',
        'completed_note' => 'getCompletedNote',
        'refunded_note' => 'getRefundedNote',
        'canceled_note' => 'getCanceledNote'
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

    const ACTION_COMPLETE = 'COMPLETE';
    const ACTION_CANCEL = 'CANCEL';
    const ACTION_REFUND = 'REFUND';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_COMPLETE,
            self::ACTION_CANCEL,
            self::ACTION_REFUND,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['shipped_tracking_number'] = isset($data['shipped_tracking_number']) ? $data['shipped_tracking_number'] : null;
        $this->container['completed_note'] = isset($data['completed_note']) ? $data['completed_note'] : null;
        $this->container['refunded_note'] = isset($data['refunded_note']) ? $data['refunded_note'] : null;
        $this->container['canceled_note'] = isset($data['canceled_note']) ? $data['canceled_note'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['action'] === null) {
            $invalid_properties[] = "'action' can't be null";
        }
        $allowed_values = ["COMPLETE", "CANCEL", "REFUND"];
        if (!in_array($this->container['action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'action', must be one of #{allowed_values}.";
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
        if ($this->container['action'] === null) {
            return false;
        }
        $allowed_values = ["COMPLETE", "CANCEL", "REFUND"];
        if (!in_array($this->container['action'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action The action to perform on the order (COMPLETE, CANCEL, or REFUND).
     * @return $this
     */
    public function setAction($action)
    {
        $allowed_values = array('COMPLETE', 'CANCEL', 'REFUND');
        if ((!in_array($action, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'action', must be one of 'COMPLETE', 'CANCEL', 'REFUND'");
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets shipped_tracking_number
     * @return string
     */
    public function getShippedTrackingNumber()
    {
        return $this->container['shipped_tracking_number'];
    }

    /**
     * Sets shipped_tracking_number
     * @param string $shipped_tracking_number The tracking number of the shipment associated with the order. Only valid if action is COMPLETE.
     * @return $this
     */
    public function setShippedTrackingNumber($shipped_tracking_number)
    {
        $this->container['shipped_tracking_number'] = $shipped_tracking_number;

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
     * @param string $completed_note A merchant-specified note about the completion of the order. Only valid if action is COMPLETE.
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
     * @param string $refunded_note A merchant-specified note about the refunding of the order. Only valid if action is REFUND.
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
     * @param string $canceled_note A merchant-specified note about the canceling of the order. Only valid if action is CANCEL.
     * @return $this
     */
    public function setCanceledNote($canceled_note)
    {
        $this->container['canceled_note'] = $canceled_note;

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

