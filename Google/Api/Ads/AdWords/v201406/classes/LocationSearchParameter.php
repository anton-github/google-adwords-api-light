<?php


  /**
   * A {@link SearchParameter} for both {@code PLACEMENT} and {@code KEYWORD}
   * {@link IdeaType}s used to indicate the locations being targeted. This can
   * be used, for example, to search for {@code KEYWORD} {@link IdeaType}s that
   * are best for Japan and Los Angeles.
   *
   * <p>This parameter replaces the {@code CountryTargetSearchParameter}.
   *
   * <p>Warning: Not all back-ends support sub-country precision.
   *
   * <p>The service allows up to 10 locations to be targeted for KEYWORD requests and 50 locations
   * for PLACEMENT requests.
   * <p>This search parameter can be used in bulk keyword requests through the {@link com.google.ads.api.services.targetingideas.TargetingIdeaService#getBulkKeywordIdeas(TargetingIdeaSelector)} method. It must be single-valued when used in a call to that method.
   * <p>This element is supported by following {@link IdeaType}s: KEYWORD, PLACEMENT.
   * <p>This element is supported by following {@link RequestType}s: IDEAS, STATS.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class LocationSearchParameter extends SearchParameter
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/o/v201406";
    const XSI_TYPE = "LocationSearchParameter";

    /**
     * @access public
     * @var Location[]
     */
    public $locations;

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

    public function __construct($locations = null, $SearchParameterType = null)
    {
      parent::__construct();
      $this->locations = $locations;
      $this->SearchParameterType = $SearchParameterType;
    }

  }
