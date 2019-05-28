<?php

namespace Boilerplate;

/**
 * Class Activator
 * @package pluginBoilerplate
 *
 * Fired during plugin activation.
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class Activator
{

  /**
   * @var Activator
   */
  private static $instance;

  final public static function init($pluginFile): Activator
  {
    self::$instance = self::$instance ?? new static($pluginFile);
    return self::$instance;
  }

  private function __construct($pluginFile)
  {
    register_activation_hook($pluginFile, [$this, 'activate']);
  }

  public function activate()
  {
    // @TODO code implementation for activation_HOOK
  }

}


