<?php

namespace Locastic\Schenker;

class TrackAndTrace
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
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $id
     * @access public
     */
    public function __construct($username, $password, $id)
    {
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;
    }

}
