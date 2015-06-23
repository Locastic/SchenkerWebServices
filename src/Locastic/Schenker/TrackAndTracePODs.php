<?php

namespace Locastic\Schenker;

class TrackAndTracePODs
{

    /**
     * @var string $user
     * @access public
     */
    public $user = null;

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
     * @param string $user
     * @param string $password
     * @param string $id
     * @access public
     */
    public function __construct($user, $password, $id)
    {
        $this->user = $user;
        $this->password = $password;
        $this->id = $id;
    }

}
