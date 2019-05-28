<?php

namespace Boilerplate;

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

  public function __construct($pluginName, $version, $pluginPath)
  {
    $this->pluginName = $pluginName;
    $this->version = $version;
    $this->pluginPath = $pluginPath;

    $this->loadDependencies();
  }

  /**
   * Executes all logic related to that plugin
   */
  public function run()
  {
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
    // @TODO implement admin area
    // @TODO implement public ared
  }
}
