<?php
/**
 * VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead
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
 * VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  NETZFABRIK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VirtualMachine-cloud-server.list_region.read_timestampable.created_at.read_timestampable.updated_at.read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'name' => 'string',
        'cpu' => 'int',
        'ramMb' => 'int',
        'diskMb' => 'int',
        'ipV4' => '\NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4',
        'ipV6' => '\NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4',
        'architecture' => 'string',
        'vmUuid' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'region' => '\NETZFABRIK\Model\RegionCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead'
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
        'status' => null,
        'name' => null,
        'cpu' => null,
        'ramMb' => null,
        'diskMb' => null,
        'ipV4' => null,
        'ipV6' => null,
        'architecture' => null,
        'vmUuid' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'region' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'status' => false,
		'name' => false,
		'cpu' => false,
		'ramMb' => false,
		'diskMb' => false,
		'ipV4' => true,
		'ipV6' => true,
		'architecture' => false,
		'vmUuid' => true,
		'createdAt' => false,
		'updatedAt' => false,
		'region' => false
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
        'status' => 'status',
        'name' => 'name',
        'cpu' => 'cpu',
        'ramMb' => 'ramMb',
        'diskMb' => 'diskMb',
        'ipV4' => 'ipV4',
        'ipV6' => 'ipV6',
        'architecture' => 'architecture',
        'vmUuid' => 'vmUuid',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'region' => 'region'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'name' => 'setName',
        'cpu' => 'setCpu',
        'ramMb' => 'setRamMb',
        'diskMb' => 'setDiskMb',
        'ipV4' => 'setIpV4',
        'ipV6' => 'setIpV6',
        'architecture' => 'setArchitecture',
        'vmUuid' => 'setVmUuid',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'region' => 'setRegion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'name' => 'getName',
        'cpu' => 'getCpu',
        'ramMb' => 'getRamMb',
        'diskMb' => 'getDiskMb',
        'ipV4' => 'getIpV4',
        'ipV6' => 'getIpV6',
        'architecture' => 'getArchitecture',
        'vmUuid' => 'getVmUuid',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'region' => 'getRegion'
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

    public const STATUS_PENDING = 'pending';
    public const STATUS_STARTING = 'starting';
    public const STATUS_CREATING = 'creating';
    public const STATUS_RUNNING = 'running';
    public const STATUS_REBOOTING = 'rebooting';
    public const STATUS_STOPPING = 'stopping';
    public const STATUS_STOPPED = 'stopped';
    public const STATUS_DELETING = 'deleting';
    public const STATUS_SHUTTING_DOWN = 'shutting-down';
    public const STATUS_DELETED = 'deleted';
    public const ARCHITECTURE_X86_64 = 'x86_64';
    public const ARCHITECTURE_AARCH64 = 'aarch64';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_STARTING,
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_REBOOTING,
            self::STATUS_STOPPING,
            self::STATUS_STOPPED,
            self::STATUS_DELETING,
            self::STATUS_SHUTTING_DOWN,
            self::STATUS_DELETED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getArchitectureAllowableValues()
    {
        return [
            self::ARCHITECTURE_X86_64,
            self::ARCHITECTURE_AARCH64,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('cpu', $data ?? [], null);
        $this->setIfExists('ramMb', $data ?? [], null);
        $this->setIfExists('diskMb', $data ?? [], null);
        $this->setIfExists('ipV4', $data ?? [], null);
        $this->setIfExists('ipV6', $data ?? [], null);
        $this->setIfExists('architecture', $data ?? [], null);
        $this->setIfExists('vmUuid', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getArchitectureAllowableValues();
        if (!is_null($this->container['architecture']) && !in_array($this->container['architecture'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'architecture', must be one of '%s'",
                $this->container['architecture'],
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cpu
     *
     * @return int|null
     */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
     * Sets cpu
     *
     * @param int|null $cpu cpu
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
     * Gets ramMb
     *
     * @return int|null
     */
    public function getRamMb()
    {
        return $this->container['ramMb'];
    }

    /**
     * Sets ramMb
     *
     * @param int|null $ramMb ramMb
     *
     * @return self
     */
    public function setRamMb($ramMb)
    {
        if (is_null($ramMb)) {
            throw new \InvalidArgumentException('non-nullable ramMb cannot be null');
        }
        $this->container['ramMb'] = $ramMb;

        return $this;
    }

    /**
     * Gets diskMb
     *
     * @return int|null
     */
    public function getDiskMb()
    {
        return $this->container['diskMb'];
    }

    /**
     * Sets diskMb
     *
     * @param int|null $diskMb diskMb
     *
     * @return self
     */
    public function setDiskMb($diskMb)
    {
        if (is_null($diskMb)) {
            throw new \InvalidArgumentException('non-nullable diskMb cannot be null');
        }
        $this->container['diskMb'] = $diskMb;

        return $this;
    }

    /**
     * Gets ipV4
     *
     * @return \NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4|null
     */
    public function getIpV4()
    {
        return $this->container['ipV4'];
    }

    /**
     * Sets ipV4
     *
     * @param \NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4|null $ipV4 ipV4
     *
     * @return self
     */
    public function setIpV4($ipV4)
    {
        if (is_null($ipV4)) {
            array_push($this->openAPINullablesSetToNull, 'ipV4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipV4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipV4'] = $ipV4;

        return $this;
    }

    /**
     * Gets ipV6
     *
     * @return \NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4|null
     */
    public function getIpV6()
    {
        return $this->container['ipV6'];
    }

    /**
     * Sets ipV6
     *
     * @param \NETZFABRIK\Model\VirtualMachineCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtReadIpV4|null $ipV6 ipV6
     *
     * @return self
     */
    public function setIpV6($ipV6)
    {
        if (is_null($ipV6)) {
            array_push($this->openAPINullablesSetToNull, 'ipV6');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipV6', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipV6'] = $ipV6;

        return $this;
    }

    /**
     * Gets architecture
     *
     * @return string|null
     */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
     * Sets architecture
     *
     * @param string|null $architecture architecture
     *
     * @return self
     */
    public function setArchitecture($architecture)
    {
        if (is_null($architecture)) {
            throw new \InvalidArgumentException('non-nullable architecture cannot be null');
        }
        $allowedValues = $this->getArchitectureAllowableValues();
        if (!in_array($architecture, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'architecture', must be one of '%s'",
                    $architecture,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['architecture'] = $architecture;

        return $this;
    }

    /**
     * Gets vmUuid
     *
     * @return string|null
     */
    public function getVmUuid()
    {
        return $this->container['vmUuid'];
    }

    /**
     * Sets vmUuid
     *
     * @param string|null $vmUuid UUID of the virtual machine
     *
     * @return self
     */
    public function setVmUuid($vmUuid)
    {
        if (is_null($vmUuid)) {
            array_push($this->openAPINullablesSetToNull, 'vmUuid');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vmUuid', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vmUuid'] = $vmUuid;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets region
     *
     * @return \NETZFABRIK\Model\RegionCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param \NETZFABRIK\Model\RegionCloudServerListRegionReadTimestampableCreatedAtReadTimestampableUpdatedAtRead|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

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


