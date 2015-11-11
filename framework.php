<?php

require_once(__DIR__ . '/src/Zepi/Turbo/Framework.php');
$framework = \Zepi\Turbo\Framework::getFrameworkInstance(__DIR__);

// Register the framework modules
$framework->getModuleManager()->registerModuleDirectory(__DIR__ . '/modules/');

// Activate the framework core module
$framework->getModuleManager()->activateModule('Zepi\\Core\\Defaults');
$framework->getModuleManager()->activateModule('Zepi\\Core\\AccessControl', true);
$framework->getModuleManager()->activateModule('Zepi\\Core\\Management', true);
