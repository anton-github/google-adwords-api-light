<?php


  /**
   * <span class="constraint Required">This field is required and should not be {@code null}.</span>
   *
   *
   *
   * Returns a list of experiments specified by the experiment selector from
   * the customer's account.
   * @param serviceSelector The selector specifying the {@link Experiment}s to return.
   * If selector is empty, all experiments are returned.
   * @return List of experiments meeting all the criteria of each selector.
   * @throws ApiException if problems occurred while fetching experiment information.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class ExperimentServiceGet
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "";

    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

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

    public function __construct($serviceSelector = null)
    {
      $this->serviceSelector = $serviceSelector;
    }

  }
