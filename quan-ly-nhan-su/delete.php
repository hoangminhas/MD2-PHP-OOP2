<?php
include_once 'EmployeeManager.php';

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST['id'];
    $manager = new EmployeeManager();

    $manager->deleteEmployee($id);
    header("location:index.php");
}
