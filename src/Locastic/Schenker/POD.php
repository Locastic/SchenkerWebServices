<?php

namespace Locastic\Schenker;

class POD
{

    /**
     * @var string $ConsignmentNo
     * @access public
     */
    public $ConsignmentNo = null;

    /**
     * @var string $DocumentType
     * @access public
     */
    public $DocumentType = null;

    /**
     * @var \DateTime $RegDT
     * @access public
     */
    public $RegDT = null;

    /**
     * @var string $URIToTiffImage
     * @access public
     */
    public $URIToTiffImage = null;

    /**
     * @param string $ConsignmentNo
     * @param string $DocumentType
     * @param \DateTime $RegDT
     * @param string $URIToTiffImage
     * @access public
     */
    public function __construct($ConsignmentNo, $DocumentType, $RegDT, $URIToTiffImage)
    {
        $this->ConsignmentNo = $ConsignmentNo;
        $this->DocumentType = $DocumentType;
        $this->RegDT = $RegDT;
        $this->URIToTiffImage = $URIToTiffImage;
    }

}
