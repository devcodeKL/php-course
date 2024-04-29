<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Class and Objects</title>
</head>
<body>
	<h1>Classes and Objects</h1>
	<h2>Objects as Variables</h2>
	<pre><?php var_dump($buildingObj); ?></pre>
	<p>Building Name: <?= $buildingObj->name; ?></p>

	<h2>Objects from Classes</h2>
	<pre><?php var_dump($building); ?></pre>
	<p>printName() Method: <?= $building->printName(); ?></p>

	<h1>Inheritance (Condominium Object)</h1>
	<pre><?php var_dump($condominium); ?></pre>

	<p>Condominium name: <?= $condominium->name; ?></p>
	<p>Condominum floors: <?= $condominium->floors; ?></p>

	<h2>Polymorphism (Overriding the behavior of the printName() method)</h2>
	<p>printName() method of Condominum: <?= $condominium->printName(); ?></p>
</body>
</html>