<?php
include_once "EmployeeManager.php";
include_once "Employee.php";

$manager = new EmployeeManager();
$employees = $manager->loadData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<a href="create.php">
    <button>Add Employee</button>
</a>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>First Name</th>
<!--        <th>Last Name</th>-->
<!--        <th>Date Of Birth</th>-->
<!--        <th>Address</th>-->
<!--        <th>Position</th>-->
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $employee['firstName'] ?></td>
<!--            <td>--><?php //echo $employee['lastName'] ?><!--</td>-->
<!--            <td>--><?php //echo $employee['dob'] ?><!--</td>-->
<!--            <td>--><?php //echo $employee['address'] ?><!--</td>-->
<!--            <td>--><?php //echo $employee['position'] ?><!--</td>-->
            <td><a href="update.php?id=<?php echo $key;?>">Update</a></td>
            <td><a href="detail.php?id=<?php echo $key;?>">Detail</a></td>
            <td><a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $key;?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

