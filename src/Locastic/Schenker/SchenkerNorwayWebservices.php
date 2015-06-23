<?php

namespace Locastic\Schenker;

/**
 * You must have a valid <b>user</b> and <b>password</b> to use these services.<br>
 */
class SchenkerNorwayWebservices extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'TrackAndTrace' => '\TrackAndTrace',
        'TrackAndTraceResponse' => '\TrackAndTraceResponse',
        'TrackAndTraceResultat' => '\TrackAndTraceResultat',
        'Shipment' => '\Shipment',
        'Documents' => '\Documents',
        'POD' => '\POD',
        'ColliObservation' => '\ColliObservation',
        'TrackAndTracePODs' => '\TrackAndTracePODs',
        'TrackAndTracePODsResponse' => '\TrackAndTracePODsResponse',
        'TrackAndTracePODsResultat' => '\TrackAndTracePODsResultat',
        'PriceAndTimeTable' => '\PriceAndTimeTable',
        'FreightPriceArguments' => '\FreightPriceArguments',
        'PriceAndTimeTableResponse' => '\PriceAndTimeTableResponse',
        'PriceAndTimeTableResult' => '\PriceAndTimeTableResult',
        'FreightPriceResultat' => '\FreightPriceResultat',
        'ScheduledDeliveryTimeResultat' => '\ScheduledDeliveryTimeResultat',
        'PriceAndTimeTableV2' => '\PriceAndTimeTableV2',
        'FreightPriceArgumentsV2' => '\FreightPriceArgumentsV2',
        'PriceAndTimeTableV2Response' => '\PriceAndTimeTableV2Response'
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(
        array $options = array(),
        $wsdl = 'http://webservices.eschenker.no/PublicMethodes.asmx?WSDL'
    ) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * With this services You can track and trace on a given item observed in Norway. Input is shipment number, consigment number or collinumber. Yoy MUST use a valid User and Password , given by Schenker
     *
     * @param TrackAndTrace $parameters
     * @access public
     * @return TrackAndTraceResponse
     */
    public function TrackAndTrace(TrackAndTrace $parameters)
    {
        return $this->__soapCall('TrackAndTrace', array($parameters));
    }

    /**
     * This service gives You one or more POD URI's to tiff images. Input is shipment number, consigment number or collinumber
     *
     * @param TrackAndTracePODs $parameters
     * @access public
     * @return TrackAndTracePODsResponse
     */
    public function TrackAndTracePODs(TrackAndTracePODs $parameters)
    {
        return $this->__soapCall('TrackAndTracePODs', array($parameters));
    }

    /**
     * Price and timetable
     *
     * @param PriceAndTimeTable $parameters
     * @access public
     * @return PriceAndTimeTableResponse
     */
    public function PriceAndTimeTable(PriceAndTimeTable $parameters)
    {
        return $this->__soapCall('PriceAndTimeTable', array($parameters));
    }

    /**
     * Price and timetable version 2
     *
     * @param PriceAndTimeTableV2 $parameters
     * @access public
     * @return PriceAndTimeTableV2Response
     */
    public function PriceAndTimeTableV2(PriceAndTimeTableV2 $parameters)
    {
        return $this->__soapCall('PriceAndTimeTableV2', array($parameters));
    }

}
