<?php

namespace Locastic\Schenker;

class FreightPriceResultat
{

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
     * @var float $Grossfreight
     * @access public
     */
    public $Grossfreight = null;

    /**
     * @var float $Discount
     * @access public
     */
    public $Discount = null;

    /**
     * @var float $Freight
     * @access public
     */
    public $Freight = null;

    /**
     * @var float $Netfreight
     * @access public
     */
    public $Netfreight = null;

    /**
     * @var float $PrivateDeliverySurcharge
     * @access public
     */
    public $PrivateDeliverySurcharge = null;

    /**
     * @var float $ParcelVolumSurcharge
     * @access public
     */
    public $ParcelVolumSurcharge = null;

    /**
     * @var float $GiroServiceSurcharge
     * @access public
     */
    public $GiroServiceSurcharge = null;

    /**
     * @var float $ConsigneeToPay
     * @access public
     */
    public $ConsigneeToPay = null;

    /**
     * @var float $CollectionSurcharge
     * @access public
     */
    public $CollectionSurcharge = null;

    /**
     * @param int $MessageId
     * @param string $Message
     * @param float $Grossfreight
     * @param float $Discount
     * @param float $Freight
     * @param float $Netfreight
     * @param float $PrivateDeliverySurcharge
     * @param float $ParcelVolumSurcharge
     * @param float $GiroServiceSurcharge
     * @param float $ConsigneeToPay
     * @param float $CollectionSurcharge
     * @access public
     */
    public function __construct(
        $MessageId,
        $Message,
        $Grossfreight,
        $Discount,
        $Freight,
        $Netfreight,
        $PrivateDeliverySurcharge,
        $ParcelVolumSurcharge,
        $GiroServiceSurcharge,
        $ConsigneeToPay,
        $CollectionSurcharge
    ) {
        $this->MessageId = $MessageId;
        $this->Message = $Message;
        $this->Grossfreight = $Grossfreight;
        $this->Discount = $Discount;
        $this->Freight = $Freight;
        $this->Netfreight = $Netfreight;
        $this->PrivateDeliverySurcharge = $PrivateDeliverySurcharge;
        $this->ParcelVolumSurcharge = $ParcelVolumSurcharge;
        $this->GiroServiceSurcharge = $GiroServiceSurcharge;
        $this->ConsigneeToPay = $ConsigneeToPay;
        $this->CollectionSurcharge = $CollectionSurcharge;
    }

}
