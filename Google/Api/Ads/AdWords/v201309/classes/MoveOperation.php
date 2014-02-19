<?php


/**
 * Operation for moving ManagedCustomer links. See {@link ManagedCustomerService#mutateManager}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class MoveOperation extends Operation
{
    /**
     * @access public
     * @var ManagedCustomerLink
     */
    public $operand;

    /**
     * @access public
     * @var integer
     */
    public $oldManagerCustomerId;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "MoveOperation";
    }

    public function __construct($operand = null, $oldManagerCustomerId = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->oldManagerCustomerId = $oldManagerCustomerId;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}