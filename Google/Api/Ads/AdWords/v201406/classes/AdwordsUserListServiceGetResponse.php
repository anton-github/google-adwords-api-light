<?php


  /**
   *
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdwordsUserListServiceGetResponse
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/rm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var UserListPage
     */
    public $rval;

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

    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

  }
