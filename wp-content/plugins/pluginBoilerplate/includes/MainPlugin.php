<?php

namespace Boilerplate;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin area, public area, etc.
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
   * The current version of the plugin.
   *
   * @var string
   */
  private $version;

  public function __construct($pluginName, $version)
  {
    $this->pluginName = $pluginName;
    $this->version = $version;
  }

  public function run()
  {

  }
}
