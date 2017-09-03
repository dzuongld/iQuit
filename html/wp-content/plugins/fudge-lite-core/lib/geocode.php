<?php

class Fudge_Lite_Core_Geocoder {

    static private $url = "http://maps.google.com/maps/api/geocode/json?address=";

    static public function getLocation($address) {
	$url		 = self::$url . urlencode($address);
	$resp_json	 = wp_remote_get($url);
	if ($resp_json && !empty($resp_json['body'])) {
	    $resp = json_decode($resp_json['body'], true);
	    if ($resp['status'] == 'OK') {
		return $resp['results'][0]['geometry']['location'];
	    } else {

		return false;
	    }
	} else {
	    return false;
	}
    }

}
