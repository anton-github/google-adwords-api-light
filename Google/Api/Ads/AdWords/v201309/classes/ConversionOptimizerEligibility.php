<?php


/**
 * Eligibility data for Campaign to transition to Conversion Optimizer
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class ConversionOptimizerEligibility
{
    /**
     * @access public
     * @var boolean
     */
    public $eligible;

    /**
     * @access public
     * @var tnsConversionOptimizerEligibilityRejectionReason[]
     */
    public $rejectionReasons;

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
        return "ConversionOptimizerEligibility";
    }

    public function __construct($eligible = null, $rejectionReasons = null)
    {
        $this->eligible = $eligible;
        $this->rejectionReasons = $rejectionReasons;
    }
}