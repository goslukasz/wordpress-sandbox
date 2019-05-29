<?php

namespace PluginBoilerplate\Boilerplate\Administration;

/**
 * Class Admin
 * @package PluginBoilerplate\Boilerplate\Administration
 *
 * Responsible for admin section logic
 */
class Admin
{

  /**
   * The ID of this plugin.
   *
   * @var string
   */
  private $pluginName;

  /**
   * The version of this plugin.
   *
   * @var string
   */
  private $version;

  public function __construct($pluginName, $version)
  {
    $this->pluginName = $pluginName;
    $this->version = $version;
  }

  /**
   * Register the stylesheets for the admin area.
   */
  public function enqueueStyles() {
    //wp_enqueue_style( $this->pluginName, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );
  }

  /**
   * Register the JavaScript for the admin area.
   */
  public function enqueueScripts() {
    //wp_enqueue_script( $this->pluginName, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );
  }

}
