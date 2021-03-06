<?php


  /**
   * AdGroupAd service operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class AdGroupAdOperation extends Operation
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "AdGroupAdOperation";

    /**
     * @access public
     * @var AdGroupAd
     */
    public $operand;

    /**
     * @access public
     * @var ExemptionRequest[]
     */
    public $exemptionRequests;

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

    public function __construct($operand = null, $exemptionRequests = null, $operator = null, $OperationType = null)
    {
      parent::__construct();
      $this->operand = $operand;
      $this->exemptionRequests = $exemptionRequests;
      $this->operator = $operator;
      $this->OperationType = $OperationType;
    }

  }
