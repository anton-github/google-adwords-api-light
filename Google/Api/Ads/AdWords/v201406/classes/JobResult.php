<?php


  /**
   * Represents the result data of a job. This contains both the results of
   * successfully processed operations as well as errors returned by failed
   * operations.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class JobResult
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "JobResult";

    /**
     * @access public
     * @var SimpleMutateResult
     */
    public $SimpleMutateResult;

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

    public function __construct($SimpleMutateResult = null)
    {
      $this->SimpleMutateResult = $SimpleMutateResult;
    }

  }
