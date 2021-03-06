<?php
/**
 * V1UpdateItemRequest
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
 * V1UpdateItemRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1UpdateItemRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1UpdateItemRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'category_id' => 'string',
        'color' => 'string',
        'abbreviation' => 'string',
        'visibility' => 'string',
        'available_online' => 'string',
        'available_for_pickup' => 'string'
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
        'description' => 'description',
        'category_id' => 'category_id',
        'color' => 'color',
        'abbreviation' => 'abbreviation',
        'visibility' => 'visibility',
        'available_online' => 'available_online',
        'available_for_pickup' => 'available_for_pickup'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'category_id' => 'setCategoryId',
        'color' => 'setColor',
        'abbreviation' => 'setAbbreviation',
        'visibility' => 'setVisibility',
        'available_online' => 'setAvailableOnline',
        'available_for_pickup' => 'setAvailableForPickup'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'category_id' => 'getCategoryId',
        'color' => 'getColor',
        'abbreviation' => 'getAbbreviation',
        'visibility' => 'getVisibility',
        'available_online' => 'getAvailableOnline',
        'available_for_pickup' => 'getAvailableForPickup'
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

    const COLOR__9DA2A6 = '9da2a6';
    const COLOR__4AB200 = '4ab200';
    const COLOR__0B8000 = '0b8000';
    const COLOR__2952CC = '2952cc';
    const COLOR_A82EE5 = 'a82ee5';
    const COLOR_E5457A = 'e5457a';
    const COLOR_B21212 = 'b21212';
    const COLOR__593C00 = '593c00';
    const COLOR_E5_BF00 = 'e5BF00';
    const VISIBILITY_PUBLIC = 'PUBLIC';
    const VISIBILITY_PRIVATE = 'PRIVATE';
    

    
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_PUBLIC,
            self::VISIBILITY_PRIVATE,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['available_online'] = isset($data['available_online']) ? $data['available_online'] : null;
        $this->container['available_for_pickup'] = isset($data['available_for_pickup']) ? $data['available_for_pickup'] : null;
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

        $allowed_values = ["PUBLIC", "PRIVATE"];
        if (!in_array($this->container['visibility'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'visibility', must be one of #{allowed_values}.";
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
        $allowed_values = ["PUBLIC", "PRIVATE"];
        if (!in_array($this->container['visibility'], $allowed_values)) {
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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The item's description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets category_id
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     * @param string $category_id The ID of the item's category, if any.
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * @param string $color The action to perform on the order (COMPLETE, CANCEL, or REFUND).
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
     * Gets abbreviation
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     * @param string $abbreviation The text of the item's display label in Square Register. Only up to the first five characters of the string are used.
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Gets visibility
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     * @param string $visibility Indicates whether the item is viewable from the merchant's online store (PUBLIC) or PRIVATE.
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowed_values = array('PUBLIC', 'PRIVATE');
        if (!is_null($visibility) && (!in_array($visibility, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'visibility', must be one of 'PUBLIC', 'PRIVATE'");
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets available_online
     * @return string
     */
    public function getAvailableOnline()
    {
        return $this->container['available_online'];
    }

    /**
     * Sets available_online
     * @param string $available_online If true, the item can be added to shipping orders from the merchant's online store.
     * @return $this
     */
    public function setAvailableOnline($available_online)
    {
        $this->container['available_online'] = $available_online;

        return $this;
    }

    /**
     * Gets available_for_pickup
     * @return string
     */
    public function getAvailableForPickup()
    {
        return $this->container['available_for_pickup'];
    }

    /**
     * Sets available_for_pickup
     * @param string $available_for_pickup If true, the item can be added to pickup orders from the merchant's online store.
     * @return $this
     */
    public function setAvailableForPickup($available_for_pickup)
    {
        $this->container['available_for_pickup'] = $available_for_pickup;

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


