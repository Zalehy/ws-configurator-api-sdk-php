<?php
/**
 * Body
 *
 * PHP version 5
 *
 * @category Class
 * @package  WheelSizeApiClient\Configurator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wheel Configurator API
 *
 * Wheel Configurator API is a part of Wheel Fitment API v2.  The Wheel Configurator API is a tool that allows users to visualize wheel  and tire upgrades on vehicles. It can be integrated into any website   or application to enhance the customer shopping experience by allowing them to visualize   their vehicle with different wheel options,    which can lead to increased sales and customer satisfaction.       **NOTE:** A _Configurator Template_ is a vehicle-specific image prepared  for custom rim installation via a URL or file upload.       [Demo](https://api-demo.wheel-size.com/),  [FAQs](https://api-demo.wheel-size.com/),
 *
 * OpenAPI spec version: v2
 * Contact: info@wheel-size.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WheelSizeApiClient\Configurator\Model;

use \ArrayAccess;
use \WheelSizeApiClient\Configurator\ObjectSerializer;

/**
 * Body Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient\Configurator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'make' => '\WheelSizeApiClient\Configurator\Model\Make',
        'model' => '\WheelSizeApiClient\Configurator\Model\Model',
        'generation' => '\WheelSizeApiClient\Configurator\Model\Generation',
        'body' => '\WheelSizeApiClient\Configurator\Model\GenBody',
        'vehicle_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'make' => null,
        'model' => null,
        'generation' => null,
        'body' => null,
        'vehicle_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'make' => 'make',
        'model' => 'model',
        'generation' => 'generation',
        'body' => 'body',
        'vehicle_data' => 'vehicle_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'make' => 'setMake',
        'model' => 'setModel',
        'generation' => 'setGeneration',
        'body' => 'setBody',
        'vehicle_data' => 'setVehicleData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'make' => 'getMake',
        'model' => 'getModel',
        'generation' => 'getGeneration',
        'body' => 'getBody',
        'vehicle_data' => 'getVehicleData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['generation'] = isset($data['generation']) ? $data['generation'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['vehicle_data'] = isset($data['vehicle_data']) ? $data['vehicle_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['make'] === null) {
            $invalidProperties[] = "'make' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['generation'] === null) {
            $invalidProperties[] = "'generation' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets make
     *
     * @return \WheelSizeApiClient\Configurator\Model\Make
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param \WheelSizeApiClient\Configurator\Model\Make $make make
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \WheelSizeApiClient\Configurator\Model\Model
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \WheelSizeApiClient\Configurator\Model\Model $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets generation
     *
     * @return \WheelSizeApiClient\Configurator\Model\Generation
     */
    public function getGeneration()
    {
        return $this->container['generation'];
    }

    /**
     * Sets generation
     *
     * @param \WheelSizeApiClient\Configurator\Model\Generation $generation generation
     *
     * @return $this
     */
    public function setGeneration($generation)
    {
        $this->container['generation'] = $generation;

        return $this;
    }

    /**
     * Gets body
     *
     * @return \WheelSizeApiClient\Configurator\Model\GenBody
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param \WheelSizeApiClient\Configurator\Model\GenBody $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets vehicle_data
     *
     * @return string
     */
    public function getVehicleData()
    {
        return $this->container['vehicle_data'];
    }

    /**
     * Sets vehicle_data
     *
     * @param string $vehicle_data vehicle_data
     *
     * @return $this
     */
    public function setVehicleData($vehicle_data)
    {
        $this->container['vehicle_data'] = $vehicle_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
