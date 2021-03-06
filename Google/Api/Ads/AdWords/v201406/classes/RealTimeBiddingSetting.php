<?php


  /**
   * Settings for Real-Time Bidding, a feature only available for campaigns
   * targeting the Ad Exchange network.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class RealTimeBiddingSetting extends Setting
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "RealTimeBiddingSetting";

    /**
     * @access public
     * @var boolean
     */
    public $optIn;

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

    public function __construct($optIn = null, $SettingType = null)
    {
      parent::__construct();
      $this->optIn = $optIn;
      $this->SettingType = $SettingType;
    }

  }
