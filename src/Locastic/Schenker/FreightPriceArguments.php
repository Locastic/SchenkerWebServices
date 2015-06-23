<?php

namespace Locastic\Schenker;

class FreightPriceArguments
{

    /**
     * @var string $Customnumber
     * @access public
     */
    public $Customnumber = null;

    /**
     * @var string $PaymentCode
     * @access public
     */
    public $PaymentCode = null;

    /**
     * @var float $Weight
     * @access public
     */
    public $Weight = null;

    /**
     * @var float $Volumd3
     * @access public
     */
    public $Volumd3 = null;

    /**
     * @var string $ProductCode
     * @access public
     */
    public $ProductCode = null;

    /**
     * @var string $TypeOfGoods
     * @access public
     */
    public $TypeOfGoods = null;

    /**
     * @var string $HandleCodeOfPackes
     * @access public
     */
    public $HandleCodeOfPackes = null;

    /**
     * @var string $ConsignorPostCode
     * @access public
     */
    public $ConsignorPostCode = null;

    /**
     * @var string $ConsigneePostCode
     * @access public
     */
    public $ConsigneePostCode = null;

    /**
     * @var \DateTime $AcceptanceDate
     * @access public
     */
    public $AcceptanceDate = null;

    /**
     * @var int $NumberOfPackages
     * @access public
     */
    public $NumberOfPackages = null;

    /**
     * @var int $UnitNumbers
     * @access public
     */
    public $UnitNumbers = null;

    /**
     * @var string $UnitCode
     * @access public
     */
    public $UnitCode = null;

    /**
     * @param string $Customnumber
     * @param string $PaymentCode
     * @param float $Weight
     * @param float $Volumd3
     * @param string $ProductCode
     * @param string $TypeOfGoods
     * @param string $HandleCodeOfPackes
     * @param string $ConsignorPostCode
     * @param string $ConsigneePostCode
     * @param \DateTime $AcceptanceDate
     * @param int $NumberOfPackages
     * @param int $UnitNumbers
     * @param string $UnitCode
     * @access public
     */
    public function __construct(
        $Customnumber,
        $PaymentCode,
        $Weight,
        $Volumd3,
        $ProductCode,
        $TypeOfGoods,
        $HandleCodeOfPackes,
        $ConsignorPostCode,
        $ConsigneePostCode,
        $AcceptanceDate,
        $NumberOfPackages,
        $UnitNumbers,
        $UnitCode
    ) {
        $this->Customnumber = $Customnumber;
        $this->PaymentCode = $PaymentCode;
        $this->Weight = $Weight;
        $this->Volumd3 = $Volumd3;
        $this->ProductCode = $ProductCode;
        $this->TypeOfGoods = $TypeOfGoods;
        $this->HandleCodeOfPackes = $HandleCodeOfPackes;
        $this->ConsignorPostCode = $ConsignorPostCode;
        $this->ConsigneePostCode = $ConsigneePostCode;
        $this->AcceptanceDate = $AcceptanceDate;
        $this->NumberOfPackages = $NumberOfPackages;
        $this->UnitNumbers = $UnitNumbers;
        $this->UnitCode = $UnitCode;
    }

}
