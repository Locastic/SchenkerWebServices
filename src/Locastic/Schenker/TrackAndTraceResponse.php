<?php

namespace Locastic\Schenker;

class TrackAndTraceResponse
{

    /**
     * @var TrackAndTraceResultat $TrackAndTraceResult
     * @access public
     */
    public $TrackAndTraceResult = null;

    /**
     * @param TrackAndTraceResultat $TrackAndTraceResult
     * @access public
     */
    public function __construct($TrackAndTraceResult)
    {
        $this->TrackAndTraceResult = $TrackAndTraceResult;
    }

}
