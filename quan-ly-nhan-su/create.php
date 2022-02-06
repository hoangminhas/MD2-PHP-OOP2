<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="firstName" placeholder="first name"><br>
    <input type="text" name="lastName" placeholder="last name"><br>
    <input type="text" name="dob" placeholder="dd/mm/yy"><br>
    <input type="text" name="address" placeholder="address"><br>
    <input type="text" name="position" placeholder="position"><br>
    <button>Add</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $position = $_POST["position"];
    $manager = new EmployeeManager();

    $employee = new Employee($firstName, $lastName, $dob, $address, $position);
    $manager->addEmployee($employee);
    header("location:index.php");
}
?>