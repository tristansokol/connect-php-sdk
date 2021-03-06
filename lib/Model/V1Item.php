<?php
/**
 * V1Item
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
 * V1Item Class Doc Comment
 *
 * @category    Class */
/**
 * @package     SquareConnect
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1Item implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'color' => 'string',
        'abbreviation' => 'string',
        'visibility' => 'string',
        'available_online' => 'string',
        'master_image' => '\SquareConnect\Model\V1ItemImage',
        'category' => '\SquareConnect\Model\V1ItemCategory',
        'variations' => '\SquareConnect\Model\V1ItemVariation[]',
        'modifier_lists' => '\SquareConnect\Model\V1ItemVariation[]',
        'fees' => '\SquareConnect\Model\V1Fee[]',
        'taxable' => 'bool'
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
        'description' => 'description',
        'type' => 'type',
        'color' => 'color',
        'abbreviation' => 'abbreviation',
        'visibility' => 'visibility',
        'available_online' => 'available_online',
        'master_image' => 'master_image',
        'category' => 'category',
        'variations' => 'variations',
        'modifier_lists' => 'modifier_lists',
        'fees' => 'fees',
        'taxable' => 'taxable'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'color' => 'setColor',
        'abbreviation' => 'setAbbreviation',
        'visibility' => 'setVisibility',
        'available_online' => 'setAvailableOnline',
        'master_image' => 'setMasterImage',
        'category' => 'setCategory',
        'variations' => 'setVariations',
        'modifier_lists' => 'setModifierLists',
        'fees' => 'setFees',
        'taxable' => 'setTaxable'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'color' => 'getColor',
        'abbreviation' => 'getAbbreviation',
        'visibility' => 'getVisibility',
        'available_online' => 'getAvailableOnline',
        'master_image' => 'getMasterImage',
        'category' => 'getCategory',
        'variations' => 'getVariations',
        'modifier_lists' => 'getModifierLists',
        'fees' => 'getFees',
        'taxable' => 'getTaxable'
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

    const TYPE_NORMAL = 'NORMAL';
    const TYPE_GIFT_CARD = 'GIFT_CARD';
    const TYPE_OTHER = 'OTHER';
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_GIFT_CARD,
            self::TYPE_OTHER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['abbreviation'] = isset($data['abbreviation']) ? $data['abbreviation'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['available_online'] = isset($data['available_online']) ? $data['available_online'] : null;
        $this->container['master_image'] = isset($data['master_image']) ? $data['master_image'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['modifier_lists'] = isset($data['modifier_lists']) ? $data['modifier_lists'] : null;
        $this->container['fees'] = isset($data['fees']) ? $data['fees'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["NORMAL", "GIFT_CARD", "OTHER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

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
        $allowed_values = ["NORMAL", "GIFT_CARD", "OTHER"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The item's ID. Must be unique among all entity IDs ever provided on behalf of the merchant. You can never reuse an ID. This value can include alphanumeric characters, dashes (-), and underscores (_).
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The item's type. This value is NORMAL for almost all items.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('NORMAL', 'GIFT_CARD', 'OTHER');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'NORMAL', 'GIFT_CARD', 'OTHER'");
        }
        $this->container['type'] = $type;

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
     * Gets master_image
     * @return \SquareConnect\Model\V1ItemImage
     */
    public function getMasterImage()
    {
        return $this->container['master_image'];
    }

    /**
     * Sets master_image
     * @param \SquareConnect\Model\V1ItemImage $master_image The item's master image, if any.
     * @return $this
     */
    public function setMasterImage($master_image)
    {
        $this->container['master_image'] = $master_image;

        return $this;
    }

    /**
     * Gets category
     * @return \SquareConnect\Model\V1ItemCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \SquareConnect\Model\V1ItemCategory $category The category the item belongs to, if any.
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets variations
     * @return \SquareConnect\Model\V1ItemVariation[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     * @param \SquareConnect\Model\V1ItemVariation[] $variations The item's variations. You must specify at least one variation.
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets modifier_lists
     * @return \SquareConnect\Model\V1ItemVariation[]
     */
    public function getModifierLists()
    {
        return $this->container['modifier_lists'];
    }

    /**
     * Sets modifier_lists
     * @param \SquareConnect\Model\V1ItemVariation[] $modifier_lists The modifier lists that apply to the item, if any.
     * @return $this
     */
    public function setModifierLists($modifier_lists)
    {
        $this->container['modifier_lists'] = $modifier_lists;

        return $this;
    }

    /**
     * Gets fees
     * @return \SquareConnect\Model\V1Fee[]
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     * @param \SquareConnect\Model\V1Fee[] $fees The fees that apply to the item, if any.
     * @return $this
     */
    public function setFees($fees)
    {
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable Deprecated. This field is not used.
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

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


