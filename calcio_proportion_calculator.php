<?php
/*
Plugin Name: Proportion Calculator  by Calculator.iO
Plugin URI: https://www.calculator.io/proportion-calculator/
Description: Solve missing ratio values instantly with our free Proportion Calculator. Easily scale, enlarge, or shrink proportions and solve complex ratio equations.
Version: 1.0.0
Author: www.calculator.io / Proportion Calculator 
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_proportion_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Proportion Calculator  by www.calculator.io";

function calcio_proportion_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Proportion Calculator </h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_proportion_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_proportion_calculator', 'calcio_proportion_calculator_shortcode' );