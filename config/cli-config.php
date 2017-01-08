<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

define('EXECUTION_DISABLED', true);
require_once __DIR__ . '/../app.php';

$entityManager = $framework->getInstance('\\Zepi\\DataSource\\Doctrine\\Manager\\EntityManager');
return ConsoleRunner::createHelperSet($entityManager->getDoctrineEntityManager());
