<?php
/*
  Plugin Name: SN Facebook Like
  Plugin URI: http://wp-extend.info/plugins/facebook/sn-facebook-like/
  Description: SN Facebook Like box / button.
  Author: Mateusz Lerczak
  Author URI: http://wp-extend.info/
  Version: 1.5.4
  Text Domain: SNFL
  Domain Path: /lang/
 */
global $wp_version;

if (version_compare($wp_version, "3.0", "<")) {
    exit(_e('"SN Facebook Like" works on WP 3.0+'));
}

require_once 'define.php';
require_once 'sn-facebook-like-admin.php';
require_once 'sn-facebook-like-functions.php';

$options = get_option("SNFL_Settings");
if ($options['pageURL']) {
    add_action('init', 'SNFL_CSS');
    add_action('init', 'RetioSlider_CSS');
    add_action('init', 'RetioSlider_JS');
    add_action('wp_footer', 'SNFL_INIT');
    add_action('plugins_loaded', 'SNFL_WidgetInit');
}

load_plugin_textdomain('SNFL', null, SNFL_DIR . '/lang/');