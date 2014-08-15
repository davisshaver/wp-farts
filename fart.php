<?php
/*
Plugin Name: WP Farts
Plugin URI: https://github.com/davisshaver/wp-farts
Description: Make your WordPress site fart on scroll.
Version: .01
Author: Davis Shaver
Author URI: http://www.davisshaver.com
License: GPL2
*/

if ( !is_admin() ) {

	function fart_js(){

		wp_register_script('fart', plugins_url().'/fart/fart.js', false, false, true);
		wp_enqueue_script('fart', plugins_url().'/fart/fart.js', array('jQuery'), false, true);

	}

	add_action('wp_enqueue_scripts', 'fart_js');
}

function fart_control() {
    echo '<script>jQuery(document).ready(function() {jQuery(document).fartscroll(800);});</script>';
}

add_action('wp_footer', 'fart_control');