<?php

namespace PluginBoilerplate\Boilerplate;

/**
 * Class Deactivator
 * @package PluginBoilerplate\Boilerplate
 *
 * Fired during plugin deactivation.
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 */
class Deactivator
{

  /**
   * @var Deactivator
   */
  private static $instance;

  final public static function init($pluginFile): Deactivator
  {
    self::$instance = self::$instance ?? new static($pluginFile);
    return self::$instance;
  }

  private function __construct($pluginFile)
  {
    register_deactivation_hook(plugin_dir_path( dirname( __FILE__ ) ), [$this, 'deactivate']);
  }

  public function deactivate()
  {
    // @TODO code implementation for deactivation_HOOK
    echo 'plugin deactivated'; exit;
  }

}


