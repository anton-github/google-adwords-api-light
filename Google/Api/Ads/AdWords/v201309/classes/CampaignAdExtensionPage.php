<?php


/**
 * Represents a page of {@link CampaignAdExtension}s resulting from the query
 * done by {@link CampaignAdExtensionService}.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class CampaignAdExtensionPage extends Page
{
    /**
     * @access public
     * @var CampaignAdExtension[]
     */
    public $entries;

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
        return "CampaignAdExtensionPage";
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
        parent::__construct();
        $this->entries = $entries;
        $this->totalNumEntries = $totalNumEntries;
        $this->PageType = $PageType;
    }
}