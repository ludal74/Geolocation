<?php

namespace GMaps\Service;

/**
 * GMaps\Service\GoogleMap
 *
 * Zend Framework2 Google Map Class  (Google Maps API v3)
 *
 * An open source application development framework for PHP 5.1.6 or newer
 * 
 * This class enables the creation of google maps
 *
 * @package		Zend Framework 2
 * @author		Ramkumar 
 */
 
class GoogleMap {

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
