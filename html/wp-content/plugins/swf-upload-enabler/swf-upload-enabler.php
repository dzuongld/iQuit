<?php

/*
Plugin Name: Swf Upload Enabler
Version: 1.0
Plugin URI: http://wordpress.org/extend/plugins/swf-upload-enabler/
Description: Allow user to upload SWF file in the Upload panel.
Author: Adrian Ianculescu
Author URI: http://phphtml.info
*/

function swf_upload_enabler_upload_mimes ( $existing_mimes=array() ) {
 
	$existing_mimes['swf'] = 'application/x-shockwave-flash';
	return $existing_mimes;
}

add_filter('upload_mimes','swf_upload_enabler_upload_mimes');

?>