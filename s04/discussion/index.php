<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers and Encapsulation</title>
</head>
<body>
	<h1>Access Modifiers</h1>
	<p>
		<em>Access Modifiers that sepcify the scope of a class propeties or methods and how they can be accessed.</em>
	</p>

	<h2>Building Object</h2>
	<p><?= $building->printName(); ?></p>
	<p><?= var_dump($building); ?></p>

	<h2>Condominium Object</h2>
	<p><?= $condominium->printName(); ?></p>
	<p><?= var_dump($condominium); ?></p>

	<h2>Building Variable</h2>
	<p><?= $building->getName(); ?></p>

	<h2>Condominium Variable</h2>
	<p><?= $condominium->getName(); ?></p>

	<h1>Encapsulation</h1>
	<!-- Mini-Activity -->
	<!-- Display the value of the name, floors and address property on the condominium object -->
    <p>The name of the condominium is <?php echo $condominium->getName(); ?>.</p>

    <p>The <?php echo $condominium->getName(); ?> is <?php echo $condominium->getFloors(); ?> stories high.</p>

    <?php $condominium->setName('Enzo Tower'); ?>
    <?php $condominium->setFloorsExternally(10); ?>
    <?php $condominium->setAddress('Laguna'); ?>

    <p>The name of the condominium has been changed to <?= $condominium->getName(); ?> </p>
    <p>The floors of the condominium has been changed to <?= $condominium->getFloors(); ?> </p>
    <p>The address of the condominium has been changed to <?= $condominium->getAddress(); ?> </p>

</body>
</html>