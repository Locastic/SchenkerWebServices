<?php

namespace Locastic\Schenker;

class PriceAndTimeTableResponse
{

    /**
     * @var PriceAndTimeTableResult $PriceAndTimeTableResult
     * @access public
     */
    public $PriceAndTimeTableResult = null;

    /**
     * @param PriceAndTimeTableResult $PriceAndTimeTableResult
     * @access public
     */
    public function __construct($PriceAndTimeTableResult)
    {
        $this->PriceAndTimeTableResult = $PriceAndTimeTableResult;
    }

}
