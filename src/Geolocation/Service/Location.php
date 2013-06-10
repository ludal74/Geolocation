<?php

namespace Geolocation\Service;
 
class Location {

    public $ip = '';
	public $country_code = '';
	public  $country_name = '';
	public  $region_code = '';
	public  $regiony_name = '';
	public  $city = '';
	public  $zipcode = '';
	public  $latitude = '';
	public  $longitude = '';
 	public  $metroCode = '';
	public  $areaCode = '';

    /**
     * Constructor
     */
   public  function __construct( $response ) 
   {
        foreach( $response as $key => $value)
		{
			$this->$key = $value;
		}
   }
}
