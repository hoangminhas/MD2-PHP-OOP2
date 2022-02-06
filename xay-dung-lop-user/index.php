<?php

use Models\User;

include_once "User.php";

$hoangminh = new User();
$hoangminh->setName('minh nguyen hoang');
$hoangminh->setEmail('hoangminh6996@gmail.com');
echo "<pre>";
echo $hoangminh->getInfo();
echo $hoangminh->isAdmin();
$hoangminh->setRole(1);
echo "<br>";
echo $hoangminh->isAdmin();
echo $hoangminh->name();