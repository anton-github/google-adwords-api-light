<?php


/**
 * <span class="constraint Required">This field is required and should not be {@code null}.</span>
 *
 *
 *
 * Returns a list of bid landscapes for the criteria specified in the selector.
 *
 * @param serviceSelector Selects the entities to return bid landscapes for.
 *
 * @return A list of bid landscapes.
 * @throws ApiException when there is at least one error with the request.
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class getCriterionBidLandscape
{
    /**
     * @access public
     * @var Selector
     */
    public $serviceSelector;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/cm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "";
    }

    public function __construct($serviceSelector = null)
    {
        $this->serviceSelector = $serviceSelector;
    }
}