<?php

	// [SECTION] Super Global Variables
	
	// echo '$_GET: </br>';
	// var_dump($_GET);

	// echo '</br></br>';

	// echo '$_POST: </br>';
	// var_dump($_POST);

	$tasks = ['Get Git', 'Bake HTML', 'Eat CSS', 'Learn PHP'];

	// $indexGet = $_GET['index'];

	// echo "The retrieved task from GET is $tasks[$indexGet]";

	if(isset($_GET['index'])) {

		$indexGet = $_GET['index'];

		echo "The retrieved task from GET is $tasks[$indexGet]";
	}

	if(isset($_POST['index'])) {

		$indexPost = $_POST['index'];
		
		echo "The retrieved task from POST is $tasks[$indexPost]";
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client-Server Communications (GET and POST)</title>
</head>
<body>

	<h1>Task index from GET</h1>
	<form method="GET">

	    <select name="index" required>
	        <option value="0">0</option>
	        <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	    </select>

	    <button type="submit">GET</button>
	</form>

	<h1>Task index from POST</h1>
	</form>

	<form method="POST">

	    <select name="index" required>
	        <option value="0">0</option>
	        <option value="1">1</option>
	        <option value="2">2</option>
	        <option value="3">3</option>
	    </select>

	    <button type="submit">POST</button>
	    
	</form>

</body>
</html>