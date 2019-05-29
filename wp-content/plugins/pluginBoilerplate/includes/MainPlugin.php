<?php

namespace PluginBoilerplate\Boilerplate;

use PluginBoilerplate\Boilerplate\Administration\Admin;
use PluginBoilerplate\Boilerplate\PublicSection\Front;

/**
 * The core plugin class.
 *
 * Class MainPlugin
 * @package PluginBoilerplate\Boilerplate
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

  /**
   * Object which represents public section of the plugin
   *
   * @var PublicSection\Front
   */
  private $publicSection;

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

    // @TODO implement internationalization

    /**
     * Admin is main object for administration section
     */
    $this->adminSection = new Admin($this->pluginName, $this->version);

    /**
     * Front is main object for public section
     */
    $this->publicSection = new Front($this->pluginName, $this->version);
  }

  /**
   * Register all of the hooks related to the admin area functionality of the plugin.
   */
  private function defineAdminHooks()
  {
    $this->loader->addAction('admin_enqueue_scripts', $this->adminSection, 'enqueueStyles');
    $this->loader->addAction('admin_enqueue_scripts', $this->adminSection, 'enqueueScripts');
  }

  /**
   * Register all of the hooks related to the public area functionality of the plugin.
   */
  private function definePublicHooks()
  {
    $this->loader->addAction('wp_enqueue_scripts', $this->publicSection, 'enqueueStyles');
    $this->loader->addAction('wp_enqueue_scripts', $this->publicSection, 'enqueueScripts');
  }
}
