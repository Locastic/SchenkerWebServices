<?php

namespace Locastic\Schenker;

class PriceAndTimeTableResult
{

    /**
     * @var string $ResponseCode
     * @access public
     */
    public $ResponseCode = null;

    /**
     * @var string $ResponseMessage
     * @access public
     */
    public $ResponseMessage = null;

    /**
     * @var FreightPriceResultat $price
     * @access public
     */
    public $price = null;

    /**
     * @var ScheduledDeliveryTimeResultat $timeTable
     * @access public
     */
    public $timeTable = null;

    /**
     * @param string $ResponseCode
     * @param string $ResponseMessage
     * @param FreightPriceResultat $price
     * @param ScheduledDeliveryTimeResultat $timeTable
     * @access public
     */
    public function __construct($ResponseCode, $ResponseMessage, $price, $timeTable)
    {
        $this->ResponseCode = $ResponseCode;
        $this->ResponseMessage = $ResponseMessage;
        $this->price = $price;
        $this->timeTable = $timeTable;
    }

}
