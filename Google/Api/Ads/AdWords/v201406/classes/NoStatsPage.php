<?php


  /**
   *
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class NoStatsPage extends Page
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/express/v201406";
    const XSI_TYPE = "NoStatsPage";

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

    public function __construct($totalNumEntries = null, $PageType = null)
    {
      parent::__construct();
      $this->totalNumEntries = $totalNumEntries;
      $this->PageType = $PageType;
    }

  }
