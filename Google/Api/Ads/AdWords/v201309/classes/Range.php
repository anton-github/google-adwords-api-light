<?php


/**
 * Represents a range of values that has either an upper or a lower bound.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Range
{
    /**
     * @access public
     * @var ComparableValue
     */
    public $min;

    /**
     * @access public
     * @var ComparableValue
     */
    public $max;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/o/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Range";
    }

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}