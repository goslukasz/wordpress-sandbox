<?php

namespace Boilerplate;

use Boilerplate\Administration\Admin;

/**
 * The core plugin class.
 *
 * Class MainPlugin
 * @package Boilerplate
 */
class MainPlugin
{
  /**
   * The unique identifier of this plugin.
   *
   * @var string
   */
  private $pluginName;

  /**
   * Path to plugin directory
   *
   * @var string
   */
  private $pluginPath;

  /**
   * The current version of the plugin.
   *
   * @var string
   */
  private $version;

  /**
   * The loader that's responsible for maintaining and registering all hooks.
   *
   * @var Loader
   */
  private $loader;

  /**
   * Object which represents administration section of the plugin
   *
   * @var Administration\Admin
   */
  private $adminSection;

  public function __construct($pluginName, $version, $pluginPath)
  {
    $this->pluginName = $pluginName;
    $this->version = $version;
    $this->pluginPath = $pluginPath;

    $this->loadDependencies();
    $this->defineAdminHooks();
  }

  /**
   * Executes all logic related to that plugin
   */
  public function run()
  {

    /**
     * Registering all actions and filters added to loader
     */
    $this->loader->run();
  }

  /**
   * Load required dependencies for that plugin
   */
  private function loadDependencies()
  {

    /**
     * This object is responsible for orchestrating the actions and filters of the core plugin.
     */
    $this->loader = new Loader();

    $this->adminSection = new Admin($this->pluginName, $this->version);

    // @TODO implement internationalization
    // @TODO implement public ared
  }

  /**
   * Register all of the hooks related to the admin area functionality
   * of the plugin.
   *
   * @since    1.0.0
   * @access   private
   */
  private function defineAdminHooks()
  {
    $this->loader->addAction('admin_enqueue_scripts', $this->adminSection, 'enqueueStyles');
    $this->loader->addAction('admin_enqueue_scripts', $this->adminSection, 'enqueueScripts');
  }
}
