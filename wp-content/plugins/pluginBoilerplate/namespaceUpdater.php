<?php
define('PLUGIN_NAMESPACE', 'NewNamespace');

$filesToUpdate = [
  './pluginBoilerplate.php',
  './includes/Activator.php',
  './includes/Deactivator.php',
  './includes/Loader.php',
  './includes/MainPlugin.php',
  './admin/Admin.php',
  './public/Front.php',
  './composer.json',
];

foreach($filesToUpdate as $path) {
  echo "Processing: $path\n";
  $str = file_get_contents($path);
  $str = str_replace("Boilerplate", PLUGIN_NAMESPACE, $str);
  file_put_contents($path, $str);
}

echo "Removing 'namespaceUpdater.php' for security reasons.\n";
unlink(__FILE__);

echo "DONE\n";
