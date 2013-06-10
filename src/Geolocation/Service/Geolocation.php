<?php

namespace Geolocation\Service;


use Zend\Uri\Uri;
use Zend\Json\Json;
use Zend\Http\Client as HttpClient;

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
   public  function __construct( $url ) 
	{
        $this->url = $url;
    }

	/**
	*
	*/
	public function setIp( $ip )
	{
		$this->ip = $ip;
	}
   

    // --------------------------------------------------------------------

    public function getLocation()
	{
		
		$uri = new Uri();
		$uri->setHost( $this->url.'/json/'.$this->ip );

        $httpClient = new HttpClient();
		$httpClient->resetParameters();
		$httpClient->setUri( $uri->toString() );
		$stream = $httpClient->send();
		
		$body = Json::decode( $stream->getBody(), Json::TYPE_OBJECT);
		//$body = $stream->getBody();
		
		$this->location = new Location( $body );
		
		return $this->location;
	}

}
