<?php

namespace Locastic\Schenker;

class TrackAndTracePODsResponse
{

    /**
     * @var TrackAndTracePODsResultat $TrackAndTracePODsResult
     * @access public
     */
    public $TrackAndTracePODsResult = null;

    /**
     * @param TrackAndTracePODsResultat $TrackAndTracePODsResult
     * @access public
     */
    public function __construct($TrackAndTracePODsResult)
    {
        $this->TrackAndTracePODsResult = $TrackAndTracePODsResult;
    }

}
