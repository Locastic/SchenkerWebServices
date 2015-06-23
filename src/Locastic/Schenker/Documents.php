<?php

namespace Locastic\Schenker;

class Documents
{

    /**
     * @var POD[] $PODs
     * @access public
     */
    public $PODs = null;

    /**
     * @var ColliObservation[] $ColliObservations
     * @access public
     */
    public $ColliObservations = null;

    /**
     * @param POD[] $PODs
     * @param ColliObservation[] $ColliObservations
     * @access public
     */
    public function __construct($PODs, $ColliObservations)
    {
        $this->PODs = $PODs;
        $this->ColliObservations = $ColliObservations;
    }

}
