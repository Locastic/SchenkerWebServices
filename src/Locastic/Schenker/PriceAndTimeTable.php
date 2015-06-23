<?php

namespace Locastic\Schenker;

class PriceAndTimeTable
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
     * @var FreightPriceArguments $kriterie
     * @access public
     */
    public $kriterie = null;

    /**
     * @param string $username
     * @param string $password
     * @param FreightPriceArguments $kriterie
     * @access public
     */
    public function __construct($username, $password, $kriterie)
    {
        $this->username = $username;
        $this->password = $password;
        $this->kriterie = $kriterie;
    }

}
