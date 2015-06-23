<?php

namespace Locastic\Schenker;

class PriceAndTimeTableV2
{

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @var FreightPriceArgumentsV2 $kriterie
     * @access public
     */
    public $kriterie = null;

    /**
     * @param string $username
     * @param string $password
     * @param FreightPriceArgumentsV2 $kriterie
     * @access public
     */
    public function __construct($username, $password, $kriterie)
    {
        $this->username = $username;
        $this->password = $password;
        $this->kriterie = $kriterie;
    }

}
