<?php
include_once "EmployeeManager.php";

if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $manager = new EmployeeManager();
    $employee = $manager->showEmployee($id);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
<a href="index.php">
    <button>Back</button>
</a>
<table border="5px">
    <thead>
    <tr>
        <th>STT</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Of Birth</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $id+1; ?></td>
            <td><?php echo $employee['firstName']; ?></td>
            <td><?php echo $employee['lastName']; ?></td>
            <td><?php echo $employee['dob']; ?></td>
            <td><?php echo $employee['address']; ?></td>
            <td><?php echo $employee['position']; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>
