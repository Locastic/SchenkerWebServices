<?php

namespace Locastic\Schenker;

class TrackAndTraceResultat
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
     * @var int $AmountOfShipments
     * @access public
     */
    public $AmountOfShipments = null;

    /**
     * @var Shipment[] $Shipments
     * @access public
     */
    public $Shipments = null;

    /**
     * @param string $ResponseCode
     * @param string $ResponseMessage
     * @param int $AmountOfShipments
     * @param Shipment[] $Shipments
     * @access public
     */
    public function __construct($ResponseCode, $ResponseMessage, $AmountOfShipments, $Shipments)
    {
        $this->ResponseCode = $ResponseCode;
        $this->ResponseMessage = $ResponseMessage;
        $this->AmountOfShipments = $AmountOfShipments;
        $this->Shipments = $Shipments;
    }

}
