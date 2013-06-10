zf2-geolocation
================

#### Geolocation - ZF2  Module 

A zend framework 2 module for geolocation.

Installation
------------

### Main Setup

#### By cloning project

1. This module is available on [Packagist](https://github.com/gowsram/zf2-google-maps-).
In your project's `composer.json` use:

	```json
    {   
        "require": {
			"php": ">=5.3.3",
			"zendframework/zendframework": "*",
			"geolocation/freegeoip": "dev-master"
    }
	```
2. Or clone this project into your `./vendor/` directory.

Usage:


2. In the controller 

        $geoloc = $this->getServiceLocator()->get('Geolocation\Service\Geolocation'); 
        $geoloc->setIp( $ip);                                        
        $result = $geoloc->getLocation();                                          

