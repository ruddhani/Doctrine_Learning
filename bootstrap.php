<?php

// bootstrap.php
require_once "packages/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'your_db_name',
);
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    array(__DIR__."/src"), 
    $isDevMode, 
    null, 
    null, 
    false
);
$entityManager = EntityManager::create($dbParams, $config);

