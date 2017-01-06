<?php
/**
 * V1Fee
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
 * V1Fee Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Fee implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Fee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'rate' => 'string',
        'calculation_phase' => 'string',
        'adjustment_type' => 'string',
        'applies_to_custom_amounts' => 'bool',
        'enabled' => 'bool',
        'inclusion_type' => 'string',
        'type' => 'string'
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
        'calculation_phase' => 'calculation_phase',
        'adjustment_type' => 'adjustment_type',
        'applies_to_custom_amounts' => 'applies_to_custom_amounts',
        'enabled' => 'enabled',
        'inclusion_type' => 'inclusion_type',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'rate' => 'setRate',
        'calculation_phase' => 'setCalculationPhase',
        'adjustment_type' => 'setAdjustmentType',
        'applies_to_custom_amounts' => 'setAppliesToCustomAmounts',
        'enabled' => 'setEnabled',
        'inclusion_type' => 'setInclusionType',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'rate' => 'getRate',
        'calculation_phase' => 'getCalculationPhase',
        'adjustment_type' => 'getAdjustmentType',
        'applies_to_custom_amounts' => 'getAppliesToCustomAmounts',
        'enabled' => 'getEnabled',
        'inclusion_type' => 'getInclusionType',
        'type' => 'getType'
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

    const CALCULATION_PHASE_FEE_SUBTOTAL_PHASE = 'FEE_SUBTOTAL_PHASE';
    const CALCULATION_PHASE_OTHER = 'OTHER';
    const CALCULATION_PHASE_FEE_TOTAL_PHASE = 'FEE_TOTAL_PHASE';
    const ADJUSTMENT_TYPE_TAX = 'TAX';
    const INCLUSION_TYPE_ADDITIVE = 'ADDITIVE';
    const INCLUSION_TYPE_INCLUSIVE = 'INCLUSIVE';
    const TYPE_CA_GST = 'CA_GST';
    const TYPE_CA_HST = 'CA_HST';
    const TYPE_CA_PST = 'CA_PST';
    const TYPE_CA_QST = 'CA_QST';
    const TYPE_JP_CONSUMPTION_TAX = 'JP_CONSUMPTION_TAX';
    const TYPE_CA_PEI_PST = 'CA_PEI_PST';
    const TYPE_US_SALES_TAX = 'US_SALES_TAX';
    const TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCalculationPhaseAllowableValues()
    {
        return [
            self::CALCULATION_PHASE_FEE_SUBTOTAL_PHASE,
            self::CALCULATION_PHASE_OTHER,
            self::CALCULATION_PHASE_FEE_TOTAL_PHASE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAdjustmentTypeAllowableValues()
    {
        return [
            self::ADJUSTMENT_TYPE_TAX,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getInclusionTypeAllowableValues()
    {
        return [
            self::INCLUSION_TYPE_ADDITIVE,
            self::INCLUSION_TYPE_INCLUSIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CA_GST,
            self::TYPE_CA_HST,
            self::TYPE_CA_PST,
            self::TYPE_CA_QST,
            self::TYPE_JP_CONSUMPTION_TAX,
            self::TYPE_CA_PEI_PST,
            self::TYPE_US_SALES_TAX,
            self::TYPE_OTHER,
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
        $this->container['calculation_phase'] = isset($data['calculation_phase']) ? $data['calculation_phase'] : null;
        $this->container['adjustment_type'] = isset($data['adjustment_type']) ? $data['adjustment_type'] : null;
        $this->container['applies_to_custom_amounts'] = isset($data['applies_to_custom_amounts']) ? $data['applies_to_custom_amounts'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['inclusion_type'] = isset($data['inclusion_type']) ? $data['inclusion_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["FEE_SUBTOTAL_PHASE", "OTHER", "FEE_TOTAL_PHASE"];
        if (!in_array($this->container['calculation_phase'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'calculation_phase', must be one of #{allowed_values}.";
        }

        $allowed_values = ["TAX"];
        if (!in_array($this->container['adjustment_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'adjustment_type', must be one of #{allowed_values}.";
        }

        $allowed_values = ["ADDITIVE", "INCLUSIVE"];
        if (!in_array($this->container['inclusion_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'inclusion_type', must be one of #{allowed_values}.";
        }

        $allowed_values = ["CA_GST", "CA_HST", "CA_PST", "CA_QST", "JP_CONSUMPTION_TAX", "CA_PEI_PST", "US_SALES_TAX", "OTHER"];
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
        $allowed_values = ["FEE_SUBTOTAL_PHASE", "OTHER", "FEE_TOTAL_PHASE"];
        if (!in_array($this->container['calculation_phase'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["TAX"];
        if (!in_array($this->container['adjustment_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["ADDITIVE", "INCLUSIVE"];
        if (!in_array($this->container['inclusion_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["CA_GST", "CA_HST", "CA_PST", "CA_QST", "JP_CONSUMPTION_TAX", "CA_PEI_PST", "US_SALES_TAX", "OTHER"];
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
     * @param string $id The fee's unique ID.
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
     * @param string $name The fee's name.
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
     * @param string $rate The rate of the fee, as a string representation of a decimal number. A value of 0.07 corresponds to a rate of 7%.
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets calculation_phase
     * @return string
     */
    public function getCalculationPhase()
    {
        return $this->container['calculation_phase'];
    }

    /**
     * Sets calculation_phase
     * @param string $calculation_phase Forthcoming
     * @return $this
     */
    public function setCalculationPhase($calculation_phase)
    {
        $allowed_values = array('FEE_SUBTOTAL_PHASE', 'OTHER', 'FEE_TOTAL_PHASE');
        if (!is_null($calculation_phase) && (!in_array($calculation_phase, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'calculation_phase', must be one of 'FEE_SUBTOTAL_PHASE', 'OTHER', 'FEE_TOTAL_PHASE'");
        }
        $this->container['calculation_phase'] = $calculation_phase;

        return $this;
    }

    /**
     * Gets adjustment_type
     * @return string
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustment_type'];
    }

    /**
     * Sets adjustment_type
     * @param string $adjustment_type The type of adjustment the fee applies to a payment. Currently, this value is TAX for all fees.
     * @return $this
     */
    public function setAdjustmentType($adjustment_type)
    {
        $allowed_values = array('TAX');
        if (!is_null($adjustment_type) && (!in_array($adjustment_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'adjustment_type', must be one of 'TAX'");
        }
        $this->container['adjustment_type'] = $adjustment_type;

        return $this;
    }

    /**
     * Gets applies_to_custom_amounts
     * @return bool
     */
    public function getAppliesToCustomAmounts()
    {
        return $this->container['applies_to_custom_amounts'];
    }

    /**
     * Sets applies_to_custom_amounts
     * @param bool $applies_to_custom_amounts If true, the fee applies to custom amounts entered into Square Register that are not associated with a particular item.
     * @return $this
     */
    public function setAppliesToCustomAmounts($applies_to_custom_amounts)
    {
        $this->container['applies_to_custom_amounts'] = $applies_to_custom_amounts;

        return $this;
    }

    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param bool $enabled If true, the fee is applied to all appropriate items. If false, the fee is not applied at all.
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets inclusion_type
     * @return string
     */
    public function getInclusionType()
    {
        return $this->container['inclusion_type'];
    }

    /**
     * Sets inclusion_type
     * @param string $inclusion_type Whether the fee is ADDITIVE or INCLUSIVE.
     * @return $this
     */
    public function setInclusionType($inclusion_type)
    {
        $allowed_values = array('ADDITIVE', 'INCLUSIVE');
        if (!is_null($inclusion_type) && (!in_array($inclusion_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'inclusion_type', must be one of 'ADDITIVE', 'INCLUSIVE'");
        }
        $this->container['inclusion_type'] = $inclusion_type;

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
     * @param string $type In countries with multiple classifications for sales taxes, indicates which classification the fee falls under. Currently relevant only to Canadian merchants.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('CA_GST', 'CA_HST', 'CA_PST', 'CA_QST', 'JP_CONSUMPTION_TAX', 'CA_PEI_PST', 'US_SALES_TAX', 'OTHER');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CA_GST', 'CA_HST', 'CA_PST', 'CA_QST', 'JP_CONSUMPTION_TAX', 'CA_PEI_PST', 'US_SALES_TAX', 'OTHER'");
        }
        $this->container['type'] = $type;

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


