<?php

namespace Geolocation\Service;

/**
 * Geolocation\Service\Geolocation
 *
 * Zend Framework2 Geolocation  Class  ( freegeoip )
 *
 * An open source application development framework for PHP 5.1.6 or newer
 * 
 *
 * @package		Zend Framework 2
 * @author		Ludal74 
 */
 
class Geolocation {

    var $url = '';
	var $ip = '';

    /**
     * Constructor
     */
    function __construct( $url ) 
	{
        $this->url = $url;
    }

	/**
	*
	*/
	function setIp( $ip )
	{
		$this->ip = $ip;
	}
   

    // --------------------------------------------------------------------

    function getLocation()
	{
		$result = $this->url.'/json/'.$this>ip;
		return $result;
	}

}
