<?php


/**
 * Contains a list of campaigns to perform a traffic estimate on.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class TrafficEstimatorSelector
{
    /**
     * @access public
     * @var CampaignEstimateRequest[]
     */
    public $campaignEstimateRequests;

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
        return "TrafficEstimatorSelector";
    }

    public function __construct($campaignEstimateRequests = null)
    {
        $this->campaignEstimateRequests = $campaignEstimateRequests;
    }
}