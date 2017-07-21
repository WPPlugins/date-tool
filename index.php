<?php
/*
Plugin Name: Date Tool
Plugin URI: 
Description: A simple plugin that returns the current date/time in a variety of different ways.
Version: 1.0
Author: Gordon McNevin
Author URI: 
License: GPL2
*/

// **************************************
// DATE TOOL
// **************************************

function datetool_current($args)
{
	global $wp_query;
	
	$output = "";
	extract(shortcode_atts(array(
		'format' => '',
	), $args));
	
	return date($format);
}
add_shortcode('datetool_current', 'datetool_current');
?>