<?php
/*
Plugin Name: CI Proportion calculator
Plugin URI: https://www.calculator.io/proportion-calculator/
Description: The ratio calculator finds a missing ratio number based on the given proportion. The calculator can also scale ratios, enlarging or shrinking them.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_proportion_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Proportion Calculator  by Calculator.iO";

function display_ci_proportion_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Proportion Calculator </h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_proportion_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_proportion_calculator', 'display_ci_proportion_calculator' );