<?php

require_once "bootstrap.php";

use Doctrine\ORM\Tools\Pagination\Paginator;

$dql = "SELECT b, e FROM Bug b JOIN b.reportedBy e ".
        "ORDER BY b.created DESC";
$query = $entityManager->createQuery($dql)
            ->setFirstResult(0)
            ->setMaxResults(2);

$paginator = new Paginator(
    $query, 
    $fetchJoinCollection = true
);

$c = count($paginator);
foreach ($paginator as $bug) {
    echo $bug->getDescription()." - ".
    $bug->getCreated()->format('d-m-Y').
    "\n Reported by: ".
    $bug->getReportedBy()->getName()."\n\n";
}