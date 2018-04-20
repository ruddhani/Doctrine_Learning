<?php

require_once "bootstrap.php";

$dql = "SELECT b, e FROM Bug b JOIN b.reportedBy e ORDER BY b.created DESC";

$query = $entityManager->createQuery($dql);
$query->setMaxResults(30);
$resultSet = $query->getResult();

foreach ($resultSet as $bug) {
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d-m-Y')."\n";
    echo "    Reported by: ".$bug->getReportedBy()->getName()."\n";
    echo "\n";
}