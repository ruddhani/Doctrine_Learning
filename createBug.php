<?php
// create_user.php
require_once "bootstrap.php";

$bugdesc = $argv[1];
$uid = $argv[2];
$user = $entityManager->find("User", $uid);
$bug = new Bug();
$bug->setDescription($bugdesc);
$bug->setCreated(new \DateTime());
$bug->setStatus(1);
$bug->setReportedBy($user);

$entityManager->persist($bug);
$entityManager->flush();

echo "Created bug with ID " . $bug->getId() . "\n";