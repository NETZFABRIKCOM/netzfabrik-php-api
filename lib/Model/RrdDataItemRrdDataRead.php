<?php
/**
 * RrdDataItemRrdDataRead
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NETZFABRIK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NETZFABRIK API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.0
 * Contact: info@netzfabrik.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NETZFABRIK\Model;

use \ArrayAccess;
use \NETZFABRIK\ObjectSerializer;

/**
 * RrdDataItemRrdDataRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  NETZFABRIK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RrdDataItemRrdDataRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RrdDataItem-rrd_data.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'timestamp' => 'int',
        'maxcpu' => 'float',
        'maxmem' => 'float',
        'maxdisk' => 'float',
        'diskwrite' => 'float',
        'mem' => 'float',
        'netin' => 'float',
        'disk' => 'float',
        'cpu' => 'float',
        'netout' => 'float',
        'diskread' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'timestamp' => null,
        'maxcpu' => null,
        'maxmem' => null,
        'maxdisk' => null,
        'diskwrite' => null,
        'mem' => null,
        'netin' => null,
        'disk' => null,
        'cpu' => null,
        'netout' => null,
        'diskread' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'timestamp' => false,
		'maxcpu' => false,
		'maxmem' => false,
		'maxdisk' => false,
		'diskwrite' => false,
		'mem' => false,
		'netin' => false,
		'disk' => false,
		'cpu' => false,
		'netout' => false,
		'diskread' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'timestamp' => 'timestamp',
        'maxcpu' => 'maxcpu',
        'maxmem' => 'maxmem',
        'maxdisk' => 'maxdisk',
        'diskwrite' => 'diskwrite',
        'mem' => 'mem',
        'netin' => 'netin',
        'disk' => 'disk',
        'cpu' => 'cpu',
        'netout' => 'netout',
        'diskread' => 'diskread'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'timestamp' => 'setTimestamp',
        'maxcpu' => 'setMaxcpu',
        'maxmem' => 'setMaxmem',
        'maxdisk' => 'setMaxdisk',
        'diskwrite' => 'setDiskwrite',
        'mem' => 'setMem',
        'netin' => 'setNetin',
        'disk' => 'setDisk',
        'cpu' => 'setCpu',
        'netout' => 'setNetout',
        'diskread' => 'setDiskread'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'timestamp' => 'getTimestamp',
        'maxcpu' => 'getMaxcpu',
        'maxmem' => 'getMaxmem',
        'maxdisk' => 'getMaxdisk',
        'diskwrite' => 'getDiskwrite',
        'mem' => 'getMem',
        'netin' => 'getNetin',
        'disk' => 'getDisk',
        'cpu' => 'getCpu',
        'netout' => 'getNetout',
        'diskread' => 'getDiskread'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('maxcpu', $data ?? [], null);
        $this->setIfExists('maxmem', $data ?? [], null);
        $this->setIfExists('maxdisk', $data ?? [], null);
        $this->setIfExists('diskwrite', $data ?? [], null);
        $this->setIfExists('mem', $data ?? [], null);
        $this->setIfExists('netin', $data ?? [], null);
        $this->setIfExists('disk', $data ?? [], null);
        $this->setIfExists('cpu', $data ?? [], null);
        $this->setIfExists('netout', $data ?? [], null);
        $this->setIfExists('diskread', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets timestamp
     *
     * @return int|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets maxcpu
     *
     * @return float|null
     */
    public function getMaxcpu()
    {
        return $this->container['maxcpu'];
    }

    /**
     * Sets maxcpu
     *
     * @param float|null $maxcpu maxcpu
     *
     * @return self
     */
    public function setMaxcpu($maxcpu)
    {
        if (is_null($maxcpu)) {
            throw new \InvalidArgumentException('non-nullable maxcpu cannot be null');
        }
        $this->container['maxcpu'] = $maxcpu;

        return $this;
    }

    /**
     * Gets maxmem
     *
     * @return float|null
     */
    public function getMaxmem()
    {
        return $this->container['maxmem'];
    }

    /**
     * Sets maxmem
     *
     * @param float|null $maxmem maxmem
     *
     * @return self
     */
    public function setMaxmem($maxmem)
    {
        if (is_null($maxmem)) {
            throw new \InvalidArgumentException('non-nullable maxmem cannot be null');
        }
        $this->container['maxmem'] = $maxmem;

        return $this;
    }

    /**
     * Gets maxdisk
     *
     * @return float|null
     */
    public function getMaxdisk()
    {
        return $this->container['maxdisk'];
    }

    /**
     * Sets maxdisk
     *
     * @param float|null $maxdisk maxdisk
     *
     * @return self
     */
    public function setMaxdisk($maxdisk)
    {
        if (is_null($maxdisk)) {
            throw new \InvalidArgumentException('non-nullable maxdisk cannot be null');
        }
        $this->container['maxdisk'] = $maxdisk;

        return $this;
    }

    /**
     * Gets diskwrite
     *
     * @return float|null
     */
    public function getDiskwrite()
    {
        return $this->container['diskwrite'];
    }

    /**
     * Sets diskwrite
     *
     * @param float|null $diskwrite diskwrite
     *
     * @return self
     */
    public function setDiskwrite($diskwrite)
    {
        if (is_null($diskwrite)) {
            throw new \InvalidArgumentException('non-nullable diskwrite cannot be null');
        }
        $this->container['diskwrite'] = $diskwrite;

        return $this;
    }

    /**
     * Gets mem
     *
     * @return float|null
     */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
     * Sets mem
     *
     * @param float|null $mem mem
     *
     * @return self
     */
    public function setMem($mem)
    {
        if (is_null($mem)) {
            throw new \InvalidArgumentException('non-nullable mem cannot be null');
        }
        $this->container['mem'] = $mem;

        return $this;
    }

    /**
     * Gets netin
     *
     * @return float|null
     */
    public function getNetin()
    {
        return $this->container['netin'];
    }

    /**
     * Sets netin
     *
     * @param float|null $netin netin
     *
     * @return self
     */
    public function setNetin($netin)
    {
        if (is_null($netin)) {
            throw new \InvalidArgumentException('non-nullable netin cannot be null');
        }
        $this->container['netin'] = $netin;

        return $this;
    }

    /**
     * Gets disk
     *
     * @return float|null
     */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
     * Sets disk
     *
     * @param float|null $disk disk
     *
     * @return self
     */
    public function setDisk($disk)
    {
        if (is_null($disk)) {
            throw new \InvalidArgumentException('non-nullable disk cannot be null');
        }
        $this->container['disk'] = $disk;

        return $this;
    }

    /**
     * Gets cpu
     *
     * @return float|null
     */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
     * Sets cpu
     *
     * @param float|null $cpu cpu
     *
     * @return self
     */
    public function setCpu($cpu)
    {
        if (is_null($cpu)) {
            throw new \InvalidArgumentException('non-nullable cpu cannot be null');
        }
        $this->container['cpu'] = $cpu;

        return $this;
    }

    /**
     * Gets netout
     *
     * @return float|null
     */
    public function getNetout()
    {
        return $this->container['netout'];
    }

    /**
     * Sets netout
     *
     * @param float|null $netout netout
     *
     * @return self
     */
    public function setNetout($netout)
    {
        if (is_null($netout)) {
            throw new \InvalidArgumentException('non-nullable netout cannot be null');
        }
        $this->container['netout'] = $netout;

        return $this;
    }

    /**
     * Gets diskread
     *
     * @return float|null
     */
    public function getDiskread()
    {
        return $this->container['diskread'];
    }

    /**
     * Sets diskread
     *
     * @param float|null $diskread diskread
     *
     * @return self
     */
    public function setDiskread($diskread)
    {
        if (is_null($diskread)) {
            throw new \InvalidArgumentException('non-nullable diskread cannot be null');
        }
        $this->container['diskread'] = $diskread;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

