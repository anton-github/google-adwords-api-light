<?php


  /**
   * A placement request and response value indicating the type of site or other medium
   * (for example, a web page, in a feed, in a video) where ads will appear.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class SiteConstantsPlacementType
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "SiteConstants.PlacementType";

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

    public function __construct()
    {
    }

  }
