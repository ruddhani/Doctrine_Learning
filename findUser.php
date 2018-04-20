<?php


require_once "bootstrap.php";

$uid = $argv[1];
$user = $entityManager->find("User", $uid);


if (!empty($user)) {
    echo "Users found having name as :" . $user->getName();
}