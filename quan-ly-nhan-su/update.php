<?php
include_once "Employee.php";
include_once "EmployeeManager.php";

$manager = new EmployeeManager();

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST['id'];
    $employee = $manager->showEmployee($id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $position = $_POST['position'];

    $employee = new Employee($firstName, $lastName, $dob, $address, $position);
    $manager->modifyEmployee($id, $employee);
    header("location:index.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="firstName" value="<?php echo $employee["firstName"]?>"><br>
    <input type="text" name="lastName" value="<?php echo $employee["lastName"]?>"><br>
    <input type="text" name="dob" value="<?php echo $employee["dob"]?>"><br>
    <input type="text" name="address" value="<?php echo $employee["address"]?>"><br>
    <input type="text" name="position" value="<?php echo $employee["position"]?>"><br>
    <button>Update</button>
</form>
</body>
</html>
<?php

?>
