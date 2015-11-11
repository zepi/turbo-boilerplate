<?php

require_once(__DIR__ . '/framework.php');

$framework->getModuleManager()->activateModule('Zepi\\Web\\AccessControl', true);
$framework->getModuleManager()->activateModule('Zepi\\Web\\Starter', true);

// Execute the main work
$framework->execute();
