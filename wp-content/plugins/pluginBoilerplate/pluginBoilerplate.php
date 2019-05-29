<?php

namespace PluginBoilerplate;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @package           PluginBoilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Łukasz Gos
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0
 * Rename this for your plugin and update it as you release new versions.
 */
define('PLUGIN_BOILERPLATE_VERSION', '1.0.0');

define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));

require_once PLUGIN_DIR_PATH . 'vendor/autoload.php';

/**
 * This Object is used during plugin activation.
 */
Boilerplate\Activator::init(__FILE__);

/**
 * This Object is used during plugin deactivation.
 */
Boilerplate\Deactivator::init(__FILE__);


/**
 * Core plugin object used for initialization all necessary logic
 */
$plugin = new Boilerplate\MainPlugin('pluginBoilerplate', PLUGIN_BOILERPLATE_VERSION, PLUGIN_DIR_PATH);
$plugin->run();
