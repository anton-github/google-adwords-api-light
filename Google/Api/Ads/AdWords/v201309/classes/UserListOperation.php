<?php


/**
 * UserList operations for adding/updating UserList entities.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class UserListOperation extends Operation
{
    /**
     * @access public
     * @var UserList
     */
    public $operand;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/rm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "UserListOperation";
    }

    public function __construct($operand = null, $operator = null, $OperationType = null)
    {
        parent::__construct();
        $this->operand = $operand;
        $this->operator = $operator;
        $this->OperationType = $OperationType;
    }
}