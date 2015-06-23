<?php

namespace Locastic\Schenker;

class ScheduledDeliveryTimeResultat
{

    /**
     * @var \DateTime $ScheduledDeliveryTime
     * @access public
     */
    public $ScheduledDeliveryTime = null;

    /**
     * @var int $MessageId
     * @access public
     */
    public $MessageId = null;

    /**
     * @var string $Message
     * @access public
     */
    public $Message = null;

    /**
     * @param \DateTime $ScheduledDeliveryTime
     * @param int $MessageId
     * @param string $Message
     * @access public
     */
    public function __construct($ScheduledDeliveryTime, $MessageId, $Message)
    {
        $this->ScheduledDeliveryTime = $ScheduledDeliveryTime;
        $this->MessageId = $MessageId;
        $this->Message = $Message;
    }

}
