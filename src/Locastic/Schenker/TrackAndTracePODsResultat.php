<?php

namespace Locastic\Schenker;

class TrackAndTracePODsResultat
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
     * @var int $AmountOfPODs
     * @access public
     */
    public $AmountOfPODs = null;

    /**
     * @var POD[] $PODs
     * @access public
     */
    public $PODs = null;

    /**
     * @param string $ResponseCode
     * @param string $ResponseMessage
     * @param int $AmountOfPODs
     * @param POD[] $PODs
     * @access public
     */
    public function __construct($ResponseCode, $ResponseMessage, $AmountOfPODs, $PODs)
    {
        $this->ResponseCode = $ResponseCode;
        $this->ResponseMessage = $ResponseMessage;
        $this->AmountOfPODs = $AmountOfPODs;
        $this->PODs = $PODs;
    }

}
