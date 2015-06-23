<?php

namespace Locastic\Schenker;

class ColliObservation
{

    /**
     * @var string $kollinr
     * @access public
     */
    public $kollinr = null;

    /**
     * @var string $obstype
     * @access public
     */
    public $obstype = null;

    /**
     * @var string $obstypekode
     * @access public
     */
    public $obstypekode = null;

    /**
     * @var \DateTime $obsdato
     * @access public
     */
    public $obsdato = null;

    /**
     * @var string $obssted
     * @access public
     */
    public $obssted = null;

    /**
     * @var string $TilleggsInfo
     * @access public
     */
    public $TilleggsInfo = null;

    /**
     * @var string $Breddegrad
     * @access public
     */
    public $Breddegrad = null;

    /**
     * @var string $Lengdegrad
     * @access public
     */
    public $Lengdegrad = null;

    /**
     * @param string $kollinr
     * @param string $obstype
     * @param string $obstypekode
     * @param \DateTime $obsdato
     * @param string $obssted
     * @param string $TilleggsInfo
     * @param string $Breddegrad
     * @param string $Lengdegrad
     * @access public
     */
    public function __construct(
        $kollinr,
        $obstype,
        $obstypekode,
        $obsdato,
        $obssted,
        $TilleggsInfo,
        $Breddegrad,
        $Lengdegrad
    ) {
        $this->kollinr = $kollinr;
        $this->obstype = $obstype;
        $this->obstypekode = $obstypekode;
        $this->obsdato = $obsdato;
        $this->obssted = $obssted;
        $this->TilleggsInfo = $TilleggsInfo;
        $this->Breddegrad = $Breddegrad;
        $this->Lengdegrad = $Lengdegrad;
    }

}
