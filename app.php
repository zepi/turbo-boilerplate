<?php

// Load the autoloader
require 'vendor/autoload.php';

// Start the framework
$framework = \Zepi\Turbo\Framework::getFrameworkInstance(__DIR__);

// Register the framework modules
$framework->getModuleManager()->registerModuleDirectory(__DIR__ . '/vendor/');
$framework->getModuleManager()->registerModuleDirectory(__DIR__ . '/modules/');

// Activate the framework core module
$framework->getModuleManager()->activateModule('Zepi\\Core\\Defaults');
$framework->getModuleManager()->activateModule('Zepi\\Core\\AccessControl', true);
$framework->getModuleManager()->activateModule('Zepi\\Core\\Management', true);
$framework->getModuleManager()->activateModule('Zepi\\Web\\AccessControl', true);

// Activate project modules
$framework->getModuleManager()->activateModule('Zepi\\Starter', true);

// Execute the main work
if (!defined('EXECUTION_DISABLED') || !EXECUTION_DISABLED) {
    $framework->execute();
}
