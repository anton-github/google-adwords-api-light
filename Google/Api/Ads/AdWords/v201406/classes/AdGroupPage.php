<?php


  /**
   * Contains a subset of adgroup resulting from the filtering and paging of the
   * {@link com.google.ads.api.services.campaignmgmt.adgroup.AdGroupService#get} call
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupPage extends Page
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupPage";

    /**
     * @access public
     * @var AdGroup[]
     */
    public $entries;

    /**
     * Gets the namesapce of this class
     * @return the namespace of this class
     */
    public function getNamespace()
    {
      return self::WSDL_NAMESPACE;
    }

    /**
     * Gets the xsi:type name of this class
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
      return self::XSI_TYPE;
    }

    public function __construct($entries = null, $totalNumEntries = null, $PageType = null)
    {
      parent::__construct();
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
