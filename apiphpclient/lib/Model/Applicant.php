<?php
/**
 * Applicant
 *
 * PHP version 5
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Onfido API
 *
 * The Onfido API is used to submit check requests.
 *
 * The version of the OpenAPI document: 3.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Onfido\Model;

use \ArrayAccess;
use \Onfido\ObjectSerializer;

/**
 * Applicant Class Doc Comment
 *
 * @category Class
 * @package  Onfido
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Applicant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'applicant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'delete_at' => '\DateTime',
        'href' => 'string',
        'sandbox' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'dob' => '\DateTime',
        'address' => '\Onfido\Model\Address',
        'id_numbers' => '\Onfido\Model\IdNumber[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'delete_at' => 'date-time',
        'href' => null,
        'sandbox' => null,
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'dob' => 'date',
        'address' => null,
        'id_numbers' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_at' => 'created_at',
        'delete_at' => 'delete_at',
        'href' => 'href',
        'sandbox' => 'sandbox',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'dob' => 'dob',
        'address' => 'address',
        'id_numbers' => 'id_numbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'delete_at' => 'setDeleteAt',
        'href' => 'setHref',
        'sandbox' => 'setSandbox',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'dob' => 'setDob',
        'address' => 'setAddress',
        'id_numbers' => 'setIdNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'delete_at' => 'getDeleteAt',
        'href' => 'getHref',
        'sandbox' => 'getSandbox',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'dob' => 'getDob',
        'address' => 'getAddress',
        'id_numbers' => 'getIdNumbers'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['delete_at'] = isset($data['delete_at']) ? $data['delete_at'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['id_numbers'] = isset($data['id_numbers']) ? $data['id_numbers'] : null;
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
     * @param string|null $id The unique identifier for the applicant. Read-only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when this applicant was created. Read-only.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets delete_at
     *
     * @return \DateTime|null
     */
    public function getDeleteAt()
    {
        return $this->container['delete_at'];
    }

    /**
     * Sets delete_at
     *
     * @param \DateTime|null $delete_at The date and time when this applicant is scheduled to be deleted. Read-only.
     *
     * @return $this
     */
    public function setDeleteAt($delete_at)
    {
        $this->container['delete_at'] = $delete_at;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The uri of this resource. Read-only.
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool|null
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool|null $sandbox Read-only.
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The applicant’s first name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The applicant’s surname
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The applicant’s email address. Required if doing a US check, or a UK check for which `applicant_provides_data` is `true`.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return \DateTime|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param \DateTime|null $dob The applicant’s date of birth
     *
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Onfido\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Onfido\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets id_numbers
     *
     * @return \Onfido\Model\IdNumber[]|null
     */
    public function getIdNumbers()
    {
        return $this->container['id_numbers'];
    }

    /**
     * Sets id_numbers
     *
     * @param \Onfido\Model\IdNumber[]|null $id_numbers id_numbers
     *
     * @return $this
     */
    public function setIdNumbers($id_numbers)
    {
        $this->container['id_numbers'] = $id_numbers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

