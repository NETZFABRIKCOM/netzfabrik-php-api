<?php
/**
 * IpAddress
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
 * IpAddress Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  NETZFABRIK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IpAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IpAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'customer' => 'string',
        'ipAddress' => 'string',
        'subnet' => 'string',
        'gateway' => 'string',
        'netmask' => 'string',
        'ptrRecord' => 'string',
        'type' => 'string',
        'ipAddressPool' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
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
        'customer' => 'iri-reference',
        'ipAddress' => null,
        'subnet' => null,
        'gateway' => null,
        'netmask' => null,
        'ptrRecord' => null,
        'type' => null,
        'ipAddressPool' => 'iri-reference',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'customer' => true,
		'ipAddress' => false,
		'subnet' => false,
		'gateway' => false,
		'netmask' => false,
		'ptrRecord' => true,
		'type' => false,
		'ipAddressPool' => true,
		'createdAt' => false,
		'updatedAt' => false
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
        'customer' => 'customer',
        'ipAddress' => 'ipAddress',
        'subnet' => 'subnet',
        'gateway' => 'gateway',
        'netmask' => 'netmask',
        'ptrRecord' => 'ptrRecord',
        'type' => 'type',
        'ipAddressPool' => 'ipAddressPool',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customer' => 'setCustomer',
        'ipAddress' => 'setIpAddress',
        'subnet' => 'setSubnet',
        'gateway' => 'setGateway',
        'netmask' => 'setNetmask',
        'ptrRecord' => 'setPtrRecord',
        'type' => 'setType',
        'ipAddressPool' => 'setIpAddressPool',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customer' => 'getCustomer',
        'ipAddress' => 'getIpAddress',
        'subnet' => 'getSubnet',
        'gateway' => 'getGateway',
        'netmask' => 'getNetmask',
        'ptrRecord' => 'getPtrRecord',
        'type' => 'getType',
        'ipAddressPool' => 'getIpAddressPool',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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

    public const TYPE_IPV4 = 'ipv4';
    public const TYPE_IPV6 = 'ipv6';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IPV4,
            self::TYPE_IPV6,
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
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('ipAddress', $data ?? [], null);
        $this->setIfExists('subnet', $data ?? [], null);
        $this->setIfExists('gateway', $data ?? [], null);
        $this->setIfExists('netmask', $data ?? [], null);
        $this->setIfExists('ptrRecord', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('ipAddressPool', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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
     * Gets customer
     *
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets ipAddress
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string|null $ipAddress ipAddress
     *
     * @return self
     */
    public function setIpAddress($ipAddress)
    {
        if (is_null($ipAddress)) {
            throw new \InvalidArgumentException('non-nullable ipAddress cannot be null');
        }
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets subnet
     *
     * @return string|null
     */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
     * Sets subnet
     *
     * @param string|null $subnet subnet
     *
     * @return self
     */
    public function setSubnet($subnet)
    {
        if (is_null($subnet)) {
            throw new \InvalidArgumentException('non-nullable subnet cannot be null');
        }
        $this->container['subnet'] = $subnet;

        return $this;
    }

    /**
     * Gets gateway
     *
     * @return string|null
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string|null $gateway The gateway IP address
     *
     * @return self
     */
    public function setGateway($gateway)
    {
        if (is_null($gateway)) {
            throw new \InvalidArgumentException('non-nullable gateway cannot be null');
        }
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets netmask
     *
     * @return string|null
     */
    public function getNetmask()
    {
        return $this->container['netmask'];
    }

    /**
     * Sets netmask
     *
     * @param string|null $netmask netmask
     *
     * @return self
     */
    public function setNetmask($netmask)
    {
        if (is_null($netmask)) {
            throw new \InvalidArgumentException('non-nullable netmask cannot be null');
        }
        $this->container['netmask'] = $netmask;

        return $this;
    }

    /**
     * Gets ptrRecord
     *
     * @return string|null
     */
    public function getPtrRecord()
    {
        return $this->container['ptrRecord'];
    }

    /**
     * Sets ptrRecord
     *
     * @param string|null $ptrRecord The reverse DNS PTR record
     *
     * @return self
     */
    public function setPtrRecord($ptrRecord)
    {
        if (is_null($ptrRecord)) {
            array_push($this->openAPINullablesSetToNull, 'ptrRecord');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ptrRecord', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ptrRecord'] = $ptrRecord;

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
     * Gets ipAddressPool
     *
     * @return string|null
     */
    public function getIpAddressPool()
    {
        return $this->container['ipAddressPool'];
    }

    /**
     * Sets ipAddressPool
     *
     * @param string|null $ipAddressPool ipAddressPool
     *
     * @return self
     */
    public function setIpAddressPool($ipAddressPool)
    {
        if (is_null($ipAddressPool)) {
            array_push($this->openAPINullablesSetToNull, 'ipAddressPool');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ipAddressPool', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ipAddressPool'] = $ipAddressPool;

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


