<?php
/**
 * ZoneZoneReadZoneListZoneRecordRead
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
 * ZoneZoneReadZoneListZoneRecordRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  NETZFABRIK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ZoneZoneReadZoneListZoneRecordRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Zone-zone.read_zone.list_zone_record.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'isDnssecEnabled' => 'bool',
        'refresh' => 'int',
        'retry' => 'int',
        'expire' => 'int',
        'ttl' => 'int',
        'type' => 'string',
        'masterIpAddresses' => 'string[]',
        'records' => '\NETZFABRIK\Model\ZoneRecordZoneReadZoneListZoneRecordRead[]',
        'nameservers' => '\NETZFABRIK\Model\ZoneNameserverZoneReadZoneListZoneRecordRead[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'isDnssecEnabled' => null,
        'refresh' => null,
        'retry' => null,
        'expire' => null,
        'ttl' => null,
        'type' => null,
        'masterIpAddresses' => null,
        'records' => null,
        'nameservers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'isDnssecEnabled' => false,
		'refresh' => false,
		'retry' => false,
		'expire' => false,
		'ttl' => false,
		'type' => false,
		'masterIpAddresses' => true,
		'records' => false,
		'nameservers' => false
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
        'id' => 'id',
        'name' => 'name',
        'isDnssecEnabled' => 'isDnssecEnabled',
        'refresh' => 'refresh',
        'retry' => 'retry',
        'expire' => 'expire',
        'ttl' => 'ttl',
        'type' => 'type',
        'masterIpAddresses' => 'masterIpAddresses',
        'records' => 'records',
        'nameservers' => 'nameservers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'isDnssecEnabled' => 'setIsDnssecEnabled',
        'refresh' => 'setRefresh',
        'retry' => 'setRetry',
        'expire' => 'setExpire',
        'ttl' => 'setTtl',
        'type' => 'setType',
        'masterIpAddresses' => 'setMasterIpAddresses',
        'records' => 'setRecords',
        'nameservers' => 'setNameservers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'isDnssecEnabled' => 'getIsDnssecEnabled',
        'refresh' => 'getRefresh',
        'retry' => 'getRetry',
        'expire' => 'getExpire',
        'ttl' => 'getTtl',
        'type' => 'getType',
        'masterIpAddresses' => 'getMasterIpAddresses',
        'records' => 'getRecords',
        'nameservers' => 'getNameservers'
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

    public const TYPE_STANDARD = 'standard';
    public const TYPE_SLAVE = 'slave';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
            self::TYPE_SLAVE,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('isDnssecEnabled', $data ?? [], null);
        $this->setIfExists('refresh', $data ?? [], 3600);
        $this->setIfExists('retry', $data ?? [], 600);
        $this->setIfExists('expire', $data ?? [], 604800);
        $this->setIfExists('ttl', $data ?? [], 3600);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('masterIpAddresses', $data ?? [], null);
        $this->setIfExists('records', $data ?? [], null);
        $this->setIfExists('nameservers', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['isDnssecEnabled'] === null) {
            $invalidProperties[] = "'isDnssecEnabled' can't be null";
        }
        if ($this->container['refresh'] === null) {
            $invalidProperties[] = "'refresh' can't be null";
        }
        if (($this->container['refresh'] > 604800)) {
            $invalidProperties[] = "invalid value for 'refresh', must be smaller than or equal to 604800.";
        }

        if (($this->container['refresh'] <= 60)) {
            $invalidProperties[] = "invalid value for 'refresh', must be bigger than 60.";
        }

        if ($this->container['retry'] === null) {
            $invalidProperties[] = "'retry' can't be null";
        }
        if (($this->container['retry'] > 604800)) {
            $invalidProperties[] = "invalid value for 'retry', must be smaller than or equal to 604800.";
        }

        if (($this->container['retry'] <= 60)) {
            $invalidProperties[] = "invalid value for 'retry', must be bigger than 60.";
        }

        if ($this->container['expire'] === null) {
            $invalidProperties[] = "'expire' can't be null";
        }
        if (($this->container['expire'] > 604800)) {
            $invalidProperties[] = "invalid value for 'expire', must be smaller than or equal to 604800.";
        }

        if (($this->container['expire'] <= 60)) {
            $invalidProperties[] = "invalid value for 'expire', must be bigger than 60.";
        }

        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
        if (($this->container['ttl'] > 604800)) {
            $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 604800.";
        }

        if (($this->container['ttl'] <= 60)) {
            $invalidProperties[] = "invalid value for 'ttl', must be bigger than 60.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ZoneZoneReadZoneListZoneRecordRead., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets isDnssecEnabled
     *
     * @return bool
     */
    public function getIsDnssecEnabled()
    {
        return $this->container['isDnssecEnabled'];
    }

    /**
     * Sets isDnssecEnabled
     *
     * @param bool $isDnssecEnabled necessary for api platform
     *
     * @return self
     */
    public function setIsDnssecEnabled($isDnssecEnabled)
    {
        if (is_null($isDnssecEnabled)) {
            throw new \InvalidArgumentException('non-nullable isDnssecEnabled cannot be null');
        }
        $this->container['isDnssecEnabled'] = $isDnssecEnabled;

        return $this;
    }

    /**
     * Gets refresh
     *
     * @return int
     */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
     * Sets refresh
     *
     * @param int $refresh refresh
     *
     * @return self
     */
    public function setRefresh($refresh)
    {
        if (is_null($refresh)) {
            throw new \InvalidArgumentException('non-nullable refresh cannot be null');
        }

        if (($refresh > 604800)) {
            throw new \InvalidArgumentException('invalid value for $refresh when calling ZoneZoneReadZoneListZoneRecordRead., must be smaller than or equal to 604800.');
        }
        if (($refresh <= 60)) {
            throw new \InvalidArgumentException('invalid value for $refresh when calling ZoneZoneReadZoneListZoneRecordRead., must be bigger than 60.');
        }

        $this->container['refresh'] = $refresh;

        return $this;
    }

    /**
     * Gets retry
     *
     * @return int
     */
    public function getRetry()
    {
        return $this->container['retry'];
    }

    /**
     * Sets retry
     *
     * @param int $retry retry
     *
     * @return self
     */
    public function setRetry($retry)
    {
        if (is_null($retry)) {
            throw new \InvalidArgumentException('non-nullable retry cannot be null');
        }

        if (($retry > 604800)) {
            throw new \InvalidArgumentException('invalid value for $retry when calling ZoneZoneReadZoneListZoneRecordRead., must be smaller than or equal to 604800.');
        }
        if (($retry <= 60)) {
            throw new \InvalidArgumentException('invalid value for $retry when calling ZoneZoneReadZoneListZoneRecordRead., must be bigger than 60.');
        }

        $this->container['retry'] = $retry;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return int
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param int $expire expire
     *
     * @return self
     */
    public function setExpire($expire)
    {
        if (is_null($expire)) {
            throw new \InvalidArgumentException('non-nullable expire cannot be null');
        }

        if (($expire > 604800)) {
            throw new \InvalidArgumentException('invalid value for $expire when calling ZoneZoneReadZoneListZoneRecordRead., must be smaller than or equal to 604800.');
        }
        if (($expire <= 60)) {
            throw new \InvalidArgumentException('invalid value for $expire when calling ZoneZoneReadZoneListZoneRecordRead., must be bigger than 60.');
        }

        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return int
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param int $ttl ttl
     *
     * @return self
     */
    public function setTtl($ttl)
    {
        if (is_null($ttl)) {
            throw new \InvalidArgumentException('non-nullable ttl cannot be null');
        }

        if (($ttl > 604800)) {
            throw new \InvalidArgumentException('invalid value for $ttl when calling ZoneZoneReadZoneListZoneRecordRead., must be smaller than or equal to 604800.');
        }
        if (($ttl <= 60)) {
            throw new \InvalidArgumentException('invalid value for $ttl when calling ZoneZoneReadZoneListZoneRecordRead., must be bigger than 60.');
        }

        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets masterIpAddresses
     *
     * @return string[]|null
     */
    public function getMasterIpAddresses()
    {
        return $this->container['masterIpAddresses'];
    }

    /**
     * Sets masterIpAddresses
     *
     * @param string[]|null $masterIpAddresses IP addresses of master DNS servers. Required for slave zones.
     *
     * @return self
     */
    public function setMasterIpAddresses($masterIpAddresses)
    {
        if (is_null($masterIpAddresses)) {
            array_push($this->openAPINullablesSetToNull, 'masterIpAddresses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('masterIpAddresses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['masterIpAddresses'] = $masterIpAddresses;

        return $this;
    }

    /**
     * Gets records
     *
     * @return \NETZFABRIK\Model\ZoneRecordZoneReadZoneListZoneRecordRead[]|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \NETZFABRIK\Model\ZoneRecordZoneReadZoneListZoneRecordRead[]|null $records records
     *
     * @return self
     */
    public function setRecords($records)
    {
        if (is_null($records)) {
            throw new \InvalidArgumentException('non-nullable records cannot be null');
        }
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets nameservers
     *
     * @return \NETZFABRIK\Model\ZoneNameserverZoneReadZoneListZoneRecordRead[]|null
     */
    public function getNameservers()
    {
        return $this->container['nameservers'];
    }

    /**
     * Sets nameservers
     *
     * @param \NETZFABRIK\Model\ZoneNameserverZoneReadZoneListZoneRecordRead[]|null $nameservers nameservers
     *
     * @return self
     */
    public function setNameservers($nameservers)
    {
        if (is_null($nameservers)) {
            throw new \InvalidArgumentException('non-nullable nameservers cannot be null');
        }
        $this->container['nameservers'] = $nameservers;

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


