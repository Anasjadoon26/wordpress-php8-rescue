<?php
/**
 * Plugin Name: PHP 8 Compatibility Test
 * Description: Controlled PHP 8 compatibility test for the rescue lab.
 * Version: 1.0.0
 */

defined('ABSPATH') || exit;

function php8_rescue_test() {
    $legacy_value = 'legacy string';

    // Intentional PHP 8 compatibility issue.
   $count = is_countable($legacy_value) ? count($legacy_value) : 0;

    return $count;
}

add_shortcode('php8_rescue_test', 'php8_rescue_test');