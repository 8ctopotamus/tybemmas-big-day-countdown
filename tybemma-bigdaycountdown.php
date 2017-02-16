<?php
/*
 * Plugin Name: Tybemma's Big Day CountDown
 * Plugin URI: https://github.com/8ctopotamus/tybemmas-big-day-countdown
 * Description: Learn how to create shortcodes and retrieve data from the web.
 * Version: 1.0
 * Author: zenva
 * Author URI: https://github.com/8ctopotamus/
 * License: GPL2
 */

add_action('wp_enqueue_scripts', 'tybemmasbdcd_register_scripts');
function tybemmasbdcd_register_scripts() {
	wp_enqueue_style( 'simply-countdown-style', plugins_url( '/css/simplyCountdown.theme.default.css',  __FILE__ ));
	wp_enqueue_script( 'simply-countdown-script', plugins_url( '/js/simplyCountdown.js',  __FILE__ ), array(), '', true);
	wp_enqueue_script( 'tybemmas-bdcd-main', plugins_url( '/js/tybemmas-bdcd-main.js',  __FILE__ ), array(), '', true);
}

add_action('init', 'tybemmasbdcd_register_shortcode');
function tybemmasbdcd_register_shortcode() {
	add_shortcode('tybemmas_big_day_countdown', 'tybemmasbdcd_countdown');
}

function tybemmasbdcd_countdown() {
	return '<div id="tybemmas-big-day-countdown"></div>';
}

?>
