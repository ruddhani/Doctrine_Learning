<?php

require_once "bootstrap.php";

use Doctrine\ORM\Query\ResultSetMapping;

$name = $argv[1];

$rsm = new ResultSetMapping();
$rsm->addEntityResult('User', 'u');
$rsm->addFieldResult('u', 'id', 'id');
$rsm->addFieldResult('b', 'user_id', 'reportedBy');
$rsm->addFieldResult('u', 'name', 'name');

$query = $entityManager->createNativeQuery(
    'SELECT id, name FROM users WHERE '.
    'name = ?', $rsm
);
$query->setParameter(1, $name);

$users = $query->getResult();

echo 'User '.$name . " having id: " . 
$users[0]->getId() . " and name : " 
. $users[0]->getName();

