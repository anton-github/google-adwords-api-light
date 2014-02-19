<?php


/**
 * An event defined by a status change of a bulk mutate job.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage v201309
 */
class BulkMutateJobEvent extends JobEvent
{
    /**
     * @access public
     * @var tnsBasicJobStatus
     */
    public $status;

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
        return "BulkMutateJobEvent";
    }

    public function __construct($status = null, $dateTime = null, $JobEventType = null)
    {
        parent::__construct();
        $this->status = $status;
        $this->dateTime = $dateTime;
        $this->JobEventType = $JobEventType;
    }
}