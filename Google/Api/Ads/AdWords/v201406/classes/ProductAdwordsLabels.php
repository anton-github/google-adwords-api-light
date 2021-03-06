<?php


  /**
   * An {@code adwords labels} string. Not supported by campaigns of
   * {@link AdvertisingChannelType#SHOPPING}.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ProductAdwordsLabels extends ProductDimension
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "ProductAdwordsLabels";

    /**
     * @access public
     * @var string
     */
    public $value;

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

    public function __construct($value = null, $ProductDimensionType = null)
    {
      parent::__construct();
      $this->value = $value;
      $this->ProductDimensionType = $ProductDimensionType;
    }

  }
