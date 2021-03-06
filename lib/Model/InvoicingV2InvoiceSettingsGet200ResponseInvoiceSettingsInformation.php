<?php
/**
 * InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'invoicingV2InvoiceSettingsGet200Response_invoiceSettingsInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantLogo' => 'string',
        'merchantDisplayName' => 'string',
        'customEmailMessage' => 'string',
        'enableReminders' => 'bool',
        'headerStyle' => '\CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantLogo' => null,
        'merchantDisplayName' => null,
        'customEmailMessage' => null,
        'enableReminders' => null,
        'headerStyle' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantLogo' => 'merchantLogo',
        'merchantDisplayName' => 'merchantDisplayName',
        'customEmailMessage' => 'customEmailMessage',
        'enableReminders' => 'enableReminders',
        'headerStyle' => 'headerStyle'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantLogo' => 'setMerchantLogo',
        'merchantDisplayName' => 'setMerchantDisplayName',
        'customEmailMessage' => 'setCustomEmailMessage',
        'enableReminders' => 'setEnableReminders',
        'headerStyle' => 'setHeaderStyle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantLogo' => 'getMerchantLogo',
        'merchantDisplayName' => 'getMerchantDisplayName',
        'customEmailMessage' => 'getCustomEmailMessage',
        'enableReminders' => 'getEnableReminders',
        'headerStyle' => 'getHeaderStyle'
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
        $this->container['merchantLogo'] = isset($data['merchantLogo']) ? $data['merchantLogo'] : null;
        $this->container['merchantDisplayName'] = isset($data['merchantDisplayName']) ? $data['merchantDisplayName'] : null;
        $this->container['customEmailMessage'] = isset($data['customEmailMessage']) ? $data['customEmailMessage'] : null;
        $this->container['enableReminders'] = isset($data['enableReminders']) ? $data['enableReminders'] : null;
        $this->container['headerStyle'] = isset($data['headerStyle']) ? $data['headerStyle'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['merchantLogo']) && (strlen($this->container['merchantLogo']) > 10000000)) {
            $invalid_properties[] = "invalid value for 'merchantLogo', the character length must be smaller than or equal to 10000000.";
        }

        if (!is_null($this->container['merchantDisplayName']) && (strlen($this->container['merchantDisplayName']) > 100)) {
            $invalid_properties[] = "invalid value for 'merchantDisplayName', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['customEmailMessage']) && (strlen($this->container['customEmailMessage']) > 2000)) {
            $invalid_properties[] = "invalid value for 'customEmailMessage', the character length must be smaller than or equal to 2000.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['merchantLogo']) > 10000000) {
            return false;
        }
        if (strlen($this->container['merchantDisplayName']) > 100) {
            return false;
        }
        if (strlen($this->container['customEmailMessage']) > 2000) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantLogo
     * @return string
     */
    public function getMerchantLogo()
    {
        return $this->container['merchantLogo'];
    }

    /**
     * Sets merchantLogo
     * @param string $merchantLogo The image file, which must be encoded in Base64 format. Supported file formats are `png`, `jpg`, and `gif`. The image file size restriction is 1 MB.
     * @return $this
     */
    public function setMerchantLogo($merchantLogo)
    {
        if (!is_null($merchantLogo) && (strlen($merchantLogo) > 10000000)) {
            throw new \InvalidArgumentException('invalid length for $merchantLogo when calling InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation., must be smaller than or equal to 10000000.');
        }

        $this->container['merchantLogo'] = $merchantLogo;

        return $this;
    }

    /**
     * Gets merchantDisplayName
     * @return string
     */
    public function getMerchantDisplayName()
    {
        return $this->container['merchantDisplayName'];
    }

    /**
     * Sets merchantDisplayName
     * @param string $merchantDisplayName The merchant's display name shown on the invoice.
     * @return $this
     */
    public function setMerchantDisplayName($merchantDisplayName)
    {
        if (!is_null($merchantDisplayName) && (strlen($merchantDisplayName) > 100)) {
            throw new \InvalidArgumentException('invalid length for $merchantDisplayName when calling InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation., must be smaller than or equal to 100.');
        }

        $this->container['merchantDisplayName'] = $merchantDisplayName;

        return $this;
    }

    /**
     * Gets customEmailMessage
     * @return string
     */
    public function getCustomEmailMessage()
    {
        return $this->container['customEmailMessage'];
    }

    /**
     * Sets customEmailMessage
     * @param string $customEmailMessage The content of the email message that we send to your customers.
     * @return $this
     */
    public function setCustomEmailMessage($customEmailMessage)
    {
        if (!is_null($customEmailMessage) && (strlen($customEmailMessage) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $customEmailMessage when calling InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformation., must be smaller than or equal to 2000.');
        }

        $this->container['customEmailMessage'] = $customEmailMessage;

        return $this;
    }

    /**
     * Gets enableReminders
     * @return bool
     */
    public function getEnableReminders()
    {
        return $this->container['enableReminders'];
    }

    /**
     * Sets enableReminders
     * @param bool $enableReminders Whether you would like us to send an auto-generated reminder email to your invoice recipients. Currently, this reminder email is sent five days before the invoice is due and one day after it is past due.
     * @return $this
     */
    public function setEnableReminders($enableReminders)
    {
        $this->container['enableReminders'] = $enableReminders;

        return $this;
    }

    /**
     * Gets headerStyle
     * @return \CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle
     */
    public function getHeaderStyle()
    {
        return $this->container['headerStyle'];
    }

    /**
     * Sets headerStyle
     * @param \CyberSource\Model\InvoicingV2InvoiceSettingsGet200ResponseInvoiceSettingsInformationHeaderStyle $headerStyle
     * @return $this
     */
    public function setHeaderStyle($headerStyle)
    {
        $this->container['headerStyle'] = $headerStyle;

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
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


