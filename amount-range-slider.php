<?php
/*
Plugin Name: Amount Range Slider Plugin
Description: A plugin that provides a range slider to calculate 1% [You can change from backend] and 3% [You can change from backend] of the selected value.
Version: 1.0
Author: Alpesh Vasan
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


require_once plugin_dir_path(__FILE__) . 'includes/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

function range_slider_plugin_enqueue_scripts() {

    wp_enqueue_script('range-slider-script', plugin_dir_url(__FILE__) . 'js/range-slider.js', array('jquery'), '1.0', true);
    wp_enqueue_style('range-slider-style', plugin_dir_url(__FILE__) . 'css/range-slider.css');
}

add_action('wp_enqueue_scripts', 'range_slider_plugin_enqueue_scripts');  
