<?php


  /**
   * Specifies additional criteria for selecting bulk mutate jobs.
   * @package Google_Api_Ads_AdWords_v201406
   * @subpackage v201406
   */
  class BulkMutateJobSelector extends JobSelector
  {
    const WSDL_NAMESPACE = "https://adwords.google.com/api/adwords/cm/v201406";
    const XSI_TYPE = "BulkMutateJobSelector";

    /**
     * @access public
     * @var integer[]
     */
    public $jobIds;

    /**
     * @access public
     * @var integer
     */
    public $resultPartIndex;

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

    public function __construct($jobIds = null, $resultPartIndex = null, $includeHistory = null, $includeStats = null, $JobSelectorType = null)
    {
      parent::__construct();
      $this->jobIds = $jobIds;
      $this->resultPartIndex = $resultPartIndex;
      $this->includeHistory = $includeHistory;
      $this->includeStats = $includeStats;
      $this->JobSelectorType = $JobSelectorType;
    }

  }
