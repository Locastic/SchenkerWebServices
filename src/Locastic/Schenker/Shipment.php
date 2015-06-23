<?php

namespace Locastic\Schenker;

class Shipment
{

    /**
     * @var int $AmountOfPods
     * @access public
     */
    public $AmountOfPods = null;

    /**
     * @var int $AmountOfKollies
     * @access public
     */
    public $AmountOfKollies = null;

    /**
     * @var string $ShipmentMessage
     * @access public
     */
    public $ShipmentMessage = null;

    /**
     * @var string $Fraktbrevnr
     * @access public
     */
    public $Fraktbrevnr = null;

    /**
     * @var string $SendersRef
     * @access public
     */
    public $SendersRef = null;

    /**
     * @var string $SendKundenv
     * @access public
     */
    public $SendKundenv = null;

    /**
     * @var string $ProduktKD
     * @access public
     */
    public $ProduktKD = null;

    /**
     * @var string $ProduktKDTxt
     * @access public
     */
    public $ProduktKDTxt = null;

    /**
     * @var string $IlevStedNr
     * @access public
     */
    public $IlevStedNr = null;

    /**
     * @var string $PostStednv
     * @access public
     */
    public $PostStednv = null;

    /**
     * @var \DateTime $InnlevDt
     * @access public
     */
    public $InnlevDt = null;

    /**
     * @var \DateTime $UtlevDt
     * @access public
     */
    public $UtlevDt = null;

    /**
     * @var string $UtlevKl
     * @access public
     */
    public $UtlevKl = null;

    /**
     * @var string $UlevSignNv
     * @access public
     */
    public $UlevSignNv = null;

    /**
     * @var int $Vekt
     * @access public
     */
    public $Vekt = null;

    /**
     * @var int $Volum
     * @access public
     */
    public $Volum = null;

    /**
     * @var int $Kolli
     * @access public
     */
    public $Kolli = null;

    /**
     * @var string $MottKundenv
     * @access public
     */
    public $MottKundenv = null;

    /**
     * @var string $UlevAdrNv
     * @access public
     */
    public $UlevAdrNv = null;

    /**
     * @var string $UlevAdrNv2
     * @access public
     */
    public $UlevAdrNv2 = null;

    /**
     * @var string $UtlevStedNr
     * @access public
     */
    public $UtlevStedNr = null;

    /**
     * @var string $UtlevStedNv
     * @access public
     */
    public $UtlevStedNv = null;

    /**
     * @var string $GiroKidTx
     * @access public
     */
    public $GiroKidTx = null;

    /**
     * @var string $GarOppfyltJn
     * @access public
     */
    public $GarOppfyltJn = null;

    /**
     * @var int $AmountOfKolliesDelivered
     * @access public
     */
    public $AmountOfKolliesDelivered = null;

    /**
     * @var float $NetFreight
     * @access public
     */
    public $NetFreight = null;

    /**
     * @var float $CollectionSurcharge
     * @access public
     */
    public $CollectionSurcharge = null;

    /**
     * @var Documents $Documents
     * @access public
     */
    public $Documents = null;

    /**
     * @var string $OrdreReferanse
     * @access public
     */
    public $OrdreReferanse = null;

    /**
     * @var string $SendingTilstandKd
     * @access public
     */
    public $SendingTilstandKd = null;

    /**
     * @var string $SendingTilstand
     * @access public
     */
    public $SendingTilstand = null;

    /**
     * @var string $TilstandAvvikJN
     * @access public
     */
    public $TilstandAvvikJN = null;

    /**
     * @var string $UtslippCo2Kg
     * @access public
     */
    public $UtslippCo2Kg = null;

    /**
     * @param int $AmountOfPods
     * @param int $AmountOfKollies
     * @param string $ShipmentMessage
     * @param string $Fraktbrevnr
     * @param string $SendersRef
     * @param string $SendKundenv
     * @param string $ProduktKD
     * @param string $ProduktKDTxt
     * @param string $IlevStedNr
     * @param string $PostStednv
     * @param \DateTime $InnlevDt
     * @param \DateTime $UtlevDt
     * @param string $UtlevKl
     * @param string $UlevSignNv
     * @param int $Vekt
     * @param int $Volum
     * @param int $Kolli
     * @param string $MottKundenv
     * @param string $UlevAdrNv
     * @param string $UlevAdrNv2
     * @param string $UtlevStedNr
     * @param string $UtlevStedNv
     * @param string $GiroKidTx
     * @param string $GarOppfyltJn
     * @param int $AmountOfKolliesDelivered
     * @param Documents $Documents
     * @param string $OrdreReferanse
     * @param string $SendingTilstandKd
     * @param string $SendingTilstand
     * @param string $TilstandAvvikJN
     * @param string $UtslippCo2Kg
     * @access public
     */
    public function __construct(
        $AmountOfPods,
        $AmountOfKollies,
        $ShipmentMessage,
        $Fraktbrevnr,
        $SendersRef,
        $SendKundenv,
        $ProduktKD,
        $ProduktKDTxt,
        $IlevStedNr,
        $PostStednv,
        $InnlevDt,
        $UtlevDt,
        $UtlevKl,
        $UlevSignNv,
        $Vekt,
        $Volum,
        $Kolli,
        $MottKundenv,
        $UlevAdrNv,
        $UlevAdrNv2,
        $UtlevStedNr,
        $UtlevStedNv,
        $GiroKidTx,
        $GarOppfyltJn,
        $AmountOfKolliesDelivered,
        $Documents,
        $OrdreReferanse,
        $SendingTilstandKd,
        $SendingTilstand,
        $TilstandAvvikJN,
        $UtslippCo2Kg
    ) {
        $this->AmountOfPods = $AmountOfPods;
        $this->AmountOfKollies = $AmountOfKollies;
        $this->ShipmentMessage = $ShipmentMessage;
        $this->Fraktbrevnr = $Fraktbrevnr;
        $this->SendersRef = $SendersRef;
        $this->SendKundenv = $SendKundenv;
        $this->ProduktKD = $ProduktKD;
        $this->ProduktKDTxt = $ProduktKDTxt;
        $this->IlevStedNr = $IlevStedNr;
        $this->PostStednv = $PostStednv;
        $this->InnlevDt = $InnlevDt;
        $this->UtlevDt = $UtlevDt;
        $this->UtlevKl = $UtlevKl;
        $this->UlevSignNv = $UlevSignNv;
        $this->Vekt = $Vekt;
        $this->Volum = $Volum;
        $this->Kolli = $Kolli;
        $this->MottKundenv = $MottKundenv;
        $this->UlevAdrNv = $UlevAdrNv;
        $this->UlevAdrNv2 = $UlevAdrNv2;
        $this->UtlevStedNr = $UtlevStedNr;
        $this->UtlevStedNv = $UtlevStedNv;
        $this->GiroKidTx = $GiroKidTx;
        $this->GarOppfyltJn = $GarOppfyltJn;
        $this->AmountOfKolliesDelivered = $AmountOfKolliesDelivered;
        $this->Documents = $Documents;
        $this->OrdreReferanse = $OrdreReferanse;
        $this->SendingTilstandKd = $SendingTilstandKd;
        $this->SendingTilstand = $SendingTilstand;
        $this->TilstandAvvikJN = $TilstandAvvikJN;
        $this->UtslippCo2Kg = $UtslippCo2Kg;
    }

}
