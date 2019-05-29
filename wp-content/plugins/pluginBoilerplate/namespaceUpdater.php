<?php
$pluginNamespace = ucfirst(basename(getcwd() ) );
echo "Detected namespace: " . $pluginNamespace . "\n";

if (strcmp($pluginNamespace, 'pluginBoilerplate') !== 0) {
  echo "Please change directory name of this plugin.\n";
  exit;
}

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
  $str = str_replace("PluginBoilerplate", $pluginNamespace, $str);
  file_put_contents($path, $str);
}

echo "Removing 'namespaceUpdater.php' for security reasons.\n";
unlink(__FILE__);

echo "DONE\n";
