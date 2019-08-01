<?php
/**
 * Ptsv2paymentsPaymentInformationTokenizedCard
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
 * Ptsv2paymentsPaymentInformationTokenizedCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsPaymentInformationTokenizedCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_paymentInformation_tokenizedCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number' => 'string',
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'type' => 'string',
        'cryptogram' => 'string',
        'requestorId' => 'string',
        'transactionType' => 'string',
        'assuranceLevel' => 'string',
        'storageMethod' => 'string',
        'securityCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number' => null,
        'expirationMonth' => null,
        'expirationYear' => null,
        'type' => null,
        'cryptogram' => null,
        'requestorId' => null,
        'transactionType' => null,
        'assuranceLevel' => null,
        'storageMethod' => null,
        'securityCode' => null
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
        'number' => 'number',
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'type' => 'type',
        'cryptogram' => 'cryptogram',
        'requestorId' => 'requestorId',
        'transactionType' => 'transactionType',
        'assuranceLevel' => 'assuranceLevel',
        'storageMethod' => 'storageMethod',
        'securityCode' => 'securityCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'type' => 'setType',
        'cryptogram' => 'setCryptogram',
        'requestorId' => 'setRequestorId',
        'transactionType' => 'setTransactionType',
        'assuranceLevel' => 'setAssuranceLevel',
        'storageMethod' => 'setStorageMethod',
        'securityCode' => 'setSecurityCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'type' => 'getType',
        'cryptogram' => 'getCryptogram',
        'requestorId' => 'getRequestorId',
        'transactionType' => 'getTransactionType',
        'assuranceLevel' => 'getAssuranceLevel',
        'storageMethod' => 'getStorageMethod',
        'securityCode' => 'getSecurityCode'
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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cryptogram'] = isset($data['cryptogram']) ? $data['cryptogram'] : null;
        $this->container['requestorId'] = isset($data['requestorId']) ? $data['requestorId'] : null;
        $this->container['transactionType'] = isset($data['transactionType']) ? $data['transactionType'] : null;
        $this->container['assuranceLevel'] = isset($data['assuranceLevel']) ? $data['assuranceLevel'] : null;
        $this->container['storageMethod'] = isset($data['storageMethod']) ? $data['storageMethod'] : null;
        $this->container['securityCode'] = isset($data['securityCode']) ? $data['securityCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['number']) && (strlen($this->container['number']) > 20)) {
            $invalid_properties[] = "invalid value for 'number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['expirationMonth']) && (strlen($this->container['expirationMonth']) > 2)) {
            $invalid_properties[] = "invalid value for 'expirationMonth', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['expirationYear']) && (strlen($this->container['expirationYear']) > 4)) {
            $invalid_properties[] = "invalid value for 'expirationYear', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['cryptogram']) && (strlen($this->container['cryptogram']) > 40)) {
            $invalid_properties[] = "invalid value for 'cryptogram', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['requestorId']) && (strlen($this->container['requestorId']) > 11)) {
            $invalid_properties[] = "invalid value for 'requestorId', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['transactionType']) && (strlen($this->container['transactionType']) > 1)) {
            $invalid_properties[] = "invalid value for 'transactionType', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['assuranceLevel']) && (strlen($this->container['assuranceLevel']) > 2)) {
            $invalid_properties[] = "invalid value for 'assuranceLevel', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['storageMethod']) && (strlen($this->container['storageMethod']) > 3)) {
            $invalid_properties[] = "invalid value for 'storageMethod', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['securityCode']) && (strlen($this->container['securityCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'securityCode', the character length must be smaller than or equal to 4.";
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

        if (strlen($this->container['number']) > 20) {
            return false;
        }
        if (strlen($this->container['expirationMonth']) > 2) {
            return false;
        }
        if (strlen($this->container['expirationYear']) > 4) {
            return false;
        }
        if (strlen($this->container['cryptogram']) > 40) {
            return false;
        }
        if (strlen($this->container['requestorId']) > 11) {
            return false;
        }
        if (strlen($this->container['transactionType']) > 1) {
            return false;
        }
        if (strlen($this->container['assuranceLevel']) > 2) {
            return false;
        }
        if (strlen($this->container['storageMethod']) > 3) {
            return false;
        }
        if (strlen($this->container['securityCode']) > 4) {
            return false;
        }
        return true;
    }


    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number Customer’s payment network token value.
     * @return $this
     */
    public function setNumber($number)
    {
        if (!is_null($number) && (strlen($number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 20.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth One of two possible meanings: - The two-digit month in which a token expires. - The two-digit month in which a card expires. Format: `MM` Possible values: `01` through `12`  **NOTE** The meaning of this field is dependent on the payment processor that is returning the value in an authorization reply. Please see the processor-specific details below.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (`01` through `12`) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (`card_type=039`), if there is no expiration date on the card, use `12`.\\ **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  #### Samsung Pay and Apple Pay Month in which the token expires. CyberSource includes this field in the reply message when it decrypts the payment blob for the tokenized transaction.  For processor-specific information, see the `customer_cc_expmo` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        if (!is_null($expirationMonth) && (strlen($expirationMonth) > 2)) {
            throw new \InvalidArgumentException('invalid length for $expirationMonth when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 2.');
        }

        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear One of two possible meanings: - The four-digit year in which a token expires. - The four-digit year in which a card expires. Format: `YYYY` Possible values: `1900` through `3000` Data type: Non-negative integer  **NOTE** The meaning of this field is dependent on the payment processor that is returning the value in an authorization reply. Please see the processor-specific details below.  #### Barclays and Streamline For Maestro (UK Domestic) and Maestro (International) cards on Barclays and Streamline, this must be a valid value (1900 through 3000) but is not required to be a valid expiration date. In other words, an expiration date that is in the past does not cause CyberSource to reject your request. However, an invalid expiration date might cause the issuer to reject your request.  #### Encoded Account Numbers For encoded account numbers (`card_ type=039`), if there is no expiration date on the card, use `2021`.  #### FDC Nashville Global and FDMS South You can send in 2 digits or 4 digits. When you send in 2 digits, they must be the last 2 digits of the year.  #### Samsung Pay and Apple Pay Year in which the token expires. CyberSource includes this field in the reply message when it decrypts the payment blob for the tokenized transaction.  **Important** It is your responsibility to determine whether a field is required for the transaction you are requesting.  For processor-specific information, see the `customer_cc_expyr` or `token_expiration_year` field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        if (!is_null($expirationYear) && (strlen($expirationYear) > 4)) {
            throw new \InvalidArgumentException('invalid length for $expirationYear when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 4.');
        }

        $this->container['expirationYear'] = $expirationYear;

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
     * @param string $type Three-digit value that indicates the card type.  Type of card to authorize. - 001 Visa - 002 Mastercard - 003 Amex - 004 Discover - 005: Diners Club - 007: JCB - 024: Maestro (UK Domestic) - 039 Encoded account number - 042: Maestro (International)  For the complete list of possible values, see `card_type` field description in the [Credit Card Services Using the SCMP API Guide.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cryptogram
     * @return string
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     * @param string $cryptogram This field is used internally.
     * @return $this
     */
    public function setCryptogram($cryptogram)
    {
        if (!is_null($cryptogram) && (strlen($cryptogram) > 40)) {
            throw new \InvalidArgumentException('invalid length for $cryptogram when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 40.');
        }

        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets requestorId
     * @return string
     */
    public function getRequestorId()
    {
        return $this->container['requestorId'];
    }

    /**
     * Sets requestorId
     * @param string $requestorId Value that identifies your business and indicates that the cardholder’s account number is tokenized. This value is assigned by the token service provider and is unique within the token service provider’s database.  **Note** This field is supported only for **Visa Platform Connect** and **FDC Nashville Global**.
     * @return $this
     */
    public function setRequestorId($requestorId)
    {
        if (!is_null($requestorId) && (strlen($requestorId) > 11)) {
            throw new \InvalidArgumentException('invalid length for $requestorId when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 11.');
        }

        $this->container['requestorId'] = $requestorId;

        return $this;
    }

    /**
     * Gets transactionType
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     * @param string $transactionType Type of transaction that provided the token data. This value does not specify the token service provider; it specifies the entity that provided you with information about the token.  Set the value for this field to 1. An application on the customer’s mobile device provided the token data.
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        if (!is_null($transactionType) && (strlen($transactionType) > 1)) {
            throw new \InvalidArgumentException('invalid length for $transactionType when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 1.');
        }

        $this->container['transactionType'] = $transactionType;

        return $this;
    }

    /**
     * Gets assuranceLevel
     * @return string
     */
    public function getAssuranceLevel()
    {
        return $this->container['assuranceLevel'];
    }

    /**
     * Sets assuranceLevel
     * @param string $assuranceLevel Confidence level of the tokenization. This value is assigned by the token service provider.  **Note** This field is supported only for **Visa Platform Connect** and **FDC Nashville Global**.
     * @return $this
     */
    public function setAssuranceLevel($assuranceLevel)
    {
        if (!is_null($assuranceLevel) && (strlen($assuranceLevel) > 2)) {
            throw new \InvalidArgumentException('invalid length for $assuranceLevel when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 2.');
        }

        $this->container['assuranceLevel'] = $assuranceLevel;

        return $this;
    }

    /**
     * Gets storageMethod
     * @return string
     */
    public function getStorageMethod()
    {
        return $this->container['storageMethod'];
    }

    /**
     * Sets storageMethod
     * @param string $storageMethod Type of technology used in the device to store token data. Possible values:  - `001`: Secure Element (SE). Smart card or memory with restricted access and encryption to prevent data tampering. For storing payment    credentials, a SE is tested against a set of requirements defined by the payment networks.     **Note** This field is supported only for _FDC Compass_.  - 002: Host Card Emulation (HCE). Emulation of a smart card by using software to create a virtual and exact representation of the card. Sensitive data is stored in a database that is hosted in the cloud. For storing payment credentials, a database must meet very stringent security requirements that exceed PCI DSS.  **Note** This field is supported only for _FDC Compass_.
     * @return $this
     */
    public function setStorageMethod($storageMethod)
    {
        if (!is_null($storageMethod) && (strlen($storageMethod) > 3)) {
            throw new \InvalidArgumentException('invalid length for $storageMethod when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 3.');
        }

        $this->container['storageMethod'] = $storageMethod;

        return $this;
    }

    /**
     * Gets securityCode
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->container['securityCode'];
    }

    /**
     * Sets securityCode
     * @param string $securityCode Card Verification Number (CVN).  #### Ingenico ePayments Do not include this field when **commerceIndicator=recurring**. **Note** Ingenico ePayments was previously called _Global Collect_.  For details, see `customer_cc_cv_number` field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setSecurityCode($securityCode)
    {
        if (!is_null($securityCode) && (strlen($securityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $securityCode when calling Ptsv2paymentsPaymentInformationTokenizedCard., must be smaller than or equal to 4.');
        }

        $this->container['securityCode'] = $securityCode;

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


