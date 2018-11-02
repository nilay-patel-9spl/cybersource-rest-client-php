<?php
/**
 * InlineResponse2002OrderInformationInvoiceDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * InlineResponse2002OrderInformationInvoiceDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002OrderInformationInvoiceDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_orderInformation_invoiceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchaseOrderNumber' => 'string',
        'purchaseOrderDate' => 'string',
        'taxable' => 'bool',
        'vatInvoiceReferenceNumber' => 'string',
        'commodityCode' => 'string',
        'merchandiseCode' => 'float',
        'transactionAdviceAddendum' => '\CyberSource\Model\V2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[]',
        'level3TransmissionStatus' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'purchaseOrderNumber' => null,
        'purchaseOrderDate' => null,
        'taxable' => null,
        'vatInvoiceReferenceNumber' => null,
        'commodityCode' => null,
        'merchandiseCode' => null,
        'transactionAdviceAddendum' => null,
        'level3TransmissionStatus' => null
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
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'purchaseOrderDate' => 'purchaseOrderDate',
        'taxable' => 'taxable',
        'vatInvoiceReferenceNumber' => 'vatInvoiceReferenceNumber',
        'commodityCode' => 'commodityCode',
        'merchandiseCode' => 'merchandiseCode',
        'transactionAdviceAddendum' => 'transactionAdviceAddendum',
        'level3TransmissionStatus' => 'level3TransmissionStatus'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'purchaseOrderDate' => 'setPurchaseOrderDate',
        'taxable' => 'setTaxable',
        'vatInvoiceReferenceNumber' => 'setVatInvoiceReferenceNumber',
        'commodityCode' => 'setCommodityCode',
        'merchandiseCode' => 'setMerchandiseCode',
        'transactionAdviceAddendum' => 'setTransactionAdviceAddendum',
        'level3TransmissionStatus' => 'setLevel3TransmissionStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'purchaseOrderDate' => 'getPurchaseOrderDate',
        'taxable' => 'getTaxable',
        'vatInvoiceReferenceNumber' => 'getVatInvoiceReferenceNumber',
        'commodityCode' => 'getCommodityCode',
        'merchandiseCode' => 'getMerchandiseCode',
        'transactionAdviceAddendum' => 'getTransactionAdviceAddendum',
        'level3TransmissionStatus' => 'getLevel3TransmissionStatus'
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
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['purchaseOrderDate'] = isset($data['purchaseOrderDate']) ? $data['purchaseOrderDate'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['vatInvoiceReferenceNumber'] = isset($data['vatInvoiceReferenceNumber']) ? $data['vatInvoiceReferenceNumber'] : null;
        $this->container['commodityCode'] = isset($data['commodityCode']) ? $data['commodityCode'] : null;
        $this->container['merchandiseCode'] = isset($data['merchandiseCode']) ? $data['merchandiseCode'] : null;
        $this->container['transactionAdviceAddendum'] = isset($data['transactionAdviceAddendum']) ? $data['transactionAdviceAddendum'] : null;
        $this->container['level3TransmissionStatus'] = isset($data['level3TransmissionStatus']) ? $data['level3TransmissionStatus'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['purchaseOrderNumber']) && (strlen($this->container['purchaseOrderNumber']) > 25)) {
            $invalid_properties[] = "invalid value for 'purchaseOrderNumber', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['purchaseOrderDate']) && (strlen($this->container['purchaseOrderDate']) > 10)) {
            $invalid_properties[] = "invalid value for 'purchaseOrderDate', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['vatInvoiceReferenceNumber']) && (strlen($this->container['vatInvoiceReferenceNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'vatInvoiceReferenceNumber', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['commodityCode']) && (strlen($this->container['commodityCode']) > 4)) {
            $invalid_properties[] = "invalid value for 'commodityCode', the character length must be smaller than or equal to 4.";
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

        if (strlen($this->container['purchaseOrderNumber']) > 25) {
            return false;
        }
        if (strlen($this->container['purchaseOrderDate']) > 10) {
            return false;
        }
        if (strlen($this->container['vatInvoiceReferenceNumber']) > 15) {
            return false;
        }
        if (strlen($this->container['commodityCode']) > 4) {
            return false;
        }
        return true;
    }


    /**
     * Gets purchaseOrderNumber
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     * @param string $purchaseOrderNumber Value used by your customer to identify the order. This value is typically a purchase order number. CyberSource recommends that you do not populate the field with all zeros or nines.  For processor-specific information, see the user_po field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        if (!is_null($purchaseOrderNumber) && (strlen($purchaseOrderNumber) > 25)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderNumber when calling InlineResponse2002OrderInformationInvoiceDetails., must be smaller than or equal to 25.');
        }

        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets purchaseOrderDate
     * @return string
     */
    public function getPurchaseOrderDate()
    {
        return $this->container['purchaseOrderDate'];
    }

    /**
     * Sets purchaseOrderDate
     * @param string $purchaseOrderDate Date the order was processed. `Format: YYYY-MM-DD`.  For processor-specific information, see the purchaser_order_date field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setPurchaseOrderDate($purchaseOrderDate)
    {
        if (!is_null($purchaseOrderDate) && (strlen($purchaseOrderDate) > 10)) {
            throw new \InvalidArgumentException('invalid length for $purchaseOrderDate when calling InlineResponse2002OrderInformationInvoiceDetails., must be smaller than or equal to 10.');
        }

        $this->container['purchaseOrderDate'] = $purchaseOrderDate;

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
     * @param bool $taxable Flag that indicates whether an order is taxable. This value must be true if the sum of all _lineItems[].taxAmount_ values > 0.  If you do not include any _lineItems[].taxAmount_ values in your request, CyberSource does not include _invoiceDetails.taxable_ in the data it sends to the processor.  For processor-specific information, see the tax_indicator field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets vatInvoiceReferenceNumber
     * @return string
     */
    public function getVatInvoiceReferenceNumber()
    {
        return $this->container['vatInvoiceReferenceNumber'];
    }

    /**
     * Sets vatInvoiceReferenceNumber
     * @param string $vatInvoiceReferenceNumber VAT invoice number associated with the transaction.  For processor-specific information, see the vat_invoice_ref_number field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setVatInvoiceReferenceNumber($vatInvoiceReferenceNumber)
    {
        if (!is_null($vatInvoiceReferenceNumber) && (strlen($vatInvoiceReferenceNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $vatInvoiceReferenceNumber when calling InlineResponse2002OrderInformationInvoiceDetails., must be smaller than or equal to 15.');
        }

        $this->container['vatInvoiceReferenceNumber'] = $vatInvoiceReferenceNumber;

        return $this;
    }

    /**
     * Gets commodityCode
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->container['commodityCode'];
    }

    /**
     * Sets commodityCode
     * @param string $commodityCode International description code of the overall orderâ€™s goods or services or the Categorizes purchases for VAT reporting. Contact your acquirer for a list of codes.  For processor-specific information, see the summary_commodity_code field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setCommodityCode($commodityCode)
    {
        if (!is_null($commodityCode) && (strlen($commodityCode) > 4)) {
            throw new \InvalidArgumentException('invalid length for $commodityCode when calling InlineResponse2002OrderInformationInvoiceDetails., must be smaller than or equal to 4.');
        }

        $this->container['commodityCode'] = $commodityCode;

        return $this;
    }

    /**
     * Gets merchandiseCode
     * @return float
     */
    public function getMerchandiseCode()
    {
        return $this->container['merchandiseCode'];
    }

    /**
     * Sets merchandiseCode
     * @param float $merchandiseCode Identifier for the merchandise. Possible value:   - 1000: Gift card  This field is supported only for **American Express Direct**.
     * @return $this
     */
    public function setMerchandiseCode($merchandiseCode)
    {
        $this->container['merchandiseCode'] = $merchandiseCode;

        return $this;
    }

    /**
     * Gets transactionAdviceAddendum
     * @return \CyberSource\Model\V2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[]
     */
    public function getTransactionAdviceAddendum()
    {
        return $this->container['transactionAdviceAddendum'];
    }

    /**
     * Sets transactionAdviceAddendum
     * @param \CyberSource\Model\V2paymentsOrderInformationInvoiceDetailsTransactionAdviceAddendum[] $transactionAdviceAddendum
     * @return $this
     */
    public function setTransactionAdviceAddendum($transactionAdviceAddendum)
    {
        $this->container['transactionAdviceAddendum'] = $transactionAdviceAddendum;

        return $this;
    }

    /**
     * Gets level3TransmissionStatus
     * @return bool
     */
    public function getLevel3TransmissionStatus()
    {
        return $this->container['level3TransmissionStatus'];
    }

    /**
     * Sets level3TransmissionStatus
     * @param bool $level3TransmissionStatus Indicates whether CyberSource sent the Level III information to the processor. The possible values are:  If your account is not enabled for Level III data or if you did not include the purchasing level field in your request, CyberSource does not include the Level III data in the request sent to the processor.  For processor-specific information, see the bill_purchasing_level3_enabled field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setLevel3TransmissionStatus($level3TransmissionStatus)
    {
        $this->container['level3TransmissionStatus'] = $level3TransmissionStatus;

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

