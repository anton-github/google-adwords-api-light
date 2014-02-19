<?php


/**
 * Represents a simple height-width dimension.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class Dimensions
{
    /**
     * @access public
     * @var integer
     */
    public $width;

    /**
     * @access public
     * @var integer
     */
    public $height;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "Dimensions";
    }

    public function __construct($width = null, $height = null)
    {
        $this->width = $width;
        $this->height = $height;
    }
}