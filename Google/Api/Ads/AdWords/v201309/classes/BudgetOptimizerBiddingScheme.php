<?php


/**
 * In budget optimizer, Google automatically places bids for the user based on
 * their daily/monthly budget.
 * <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BudgetOptimizerBiddingScheme extends BiddingScheme
{
    /**
     * @access public
     * @var Money
     */
    public $bidCeiling;

    /**
     * @access public
     * @var boolean
     */
    public $enhancedCpcEnabled;

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
        return "BudgetOptimizerBiddingScheme";
    }

    public function __construct($bidCeiling = null, $enhancedCpcEnabled = null, $BiddingSchemeType = null)
    {
        parent::__construct();
        $this->bidCeiling = $bidCeiling;
        $this->enhancedCpcEnabled = $enhancedCpcEnabled;
        $this->BiddingSchemeType = $BiddingSchemeType;
    }
}