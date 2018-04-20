<?php

require_once "bootstrap.php";

$name = $argv[1];

$user = $entityManager->getRepository('User')
                    ->findOneBy(array('name' => $name));

if (!empty($user)) {
    echo "Users =>" . $user->getId() ." having name as :" . $user->getName();
} else {
    echo "No such user in database";
}