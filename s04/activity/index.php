<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers and Encapsulation</title>
</head>
<body>
	<h1>Display Information</h1>

	<h2>Person Information</h2>
    <p>Name: <?php echo $person->getName(); ?></p>
    <p>Age: <?php echo $person->getAge(); ?></p>
    <p>Address: <?php echo $person->getAddress(); ?></p>

    <h2>Student Information</h2>
    <p><?php $student->setStudentId('2023-1980'); ?></p>
    
    <p>Name: <?php echo $student->getName(); ?></p>
    <p>Age: <?php echo $student->getAge(); ?></p>
    <p>Student ID: <?php echo $student->getStudentId(); ?></p>
    <p>Address: <?php echo $student->getAddress(); ?></p>

    <h2>Employee Information</h2>
    <p><?php $employee->setTeam('Tech Team'); ?></p>
    <p><?php $employee->setRole('Team Lead'); ?></p>

    <p>Name: <?php echo $employee->getName(); ?></p>
    <p>Age: <?php echo $employee->getAge(); ?></p>
    <p>Team: <?php echo $employee->getTeam(); ?></p>
    <p>Role: <?php echo $employee->getRole(); ?></p>
    <p>Address: <?php echo $employee->getAddress(); ?></p>
</body>
</html>