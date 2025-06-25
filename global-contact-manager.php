<?php
/**
 * Plugin Name: Global Contact Manager
 * Description: Enter global contact info and use shortcodes to display them site-wide.
 * Version: 1.0
 * Author: Mohammad Rahim
 * Author URI: https://www.linkedin.com/in/mohammad-rah1m/
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

define('GCM_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once GCM_PLUGIN_DIR . 'includes/functions.php';
require_once GCM_PLUGIN_DIR . 'includes/shortcodes.php';
require_once GCM_PLUGIN_DIR . 'admin/settings-page.php';
