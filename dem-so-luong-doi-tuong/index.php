<?php
include_once "Application.php";
echo "<pre>";
echo "Tong so Objects ban dau: " .Application::$count;
$object1 = new Application("number_one");
echo "<br>";
echo $object1->__toString() . "<br>";
echo "Tong so Objects: " .Application::$count. "<br>";
$object2 = new Application('number_two');
echo $object2->__toString() . "<br>";
echo "Tong so Objects: " .Application::$count. "<br>";
