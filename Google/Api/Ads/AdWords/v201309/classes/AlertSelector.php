<?php


/**
 * Selector for querying for alerts.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class AlertSelector
{
    /**
     * @access public
     * @var AlertQuery
     */
    public $query;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "https://adwords.google.com/api/adwords/mcm/v201309";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "AlertSelector";
    }

    public function __construct($query = null, $paging = null)
    {
        $this->query = $query;
        $this->paging = $paging;
    }
}