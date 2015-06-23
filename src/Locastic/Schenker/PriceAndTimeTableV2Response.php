<?php

namespace Locastic\Schenker;

class PriceAndTimeTableV2Response
{

    /**
     * @var PriceAndTimeTableResult $PriceAndTimeTableV2Result
     * @access public
     */
    public $PriceAndTimeTableV2Result = null;

    /**
     * @param PriceAndTimeTableResult $PriceAndTimeTableV2Result
     * @access public
     */
    public function __construct($PriceAndTimeTableV2Result)
    {
        $this->PriceAndTimeTableV2Result = $PriceAndTimeTableV2Result;
    }

}
