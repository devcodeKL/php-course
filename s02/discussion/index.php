<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repetition Control Structures and Array Manipulation</title>
</head>
<body>
	<h1>Repetition Control Structures</h1>

	<h2>While Loop</h2>
	<?php whileLoop(); ?>

	<h2>Do-While Loop</h2>
	<?php doWhileLoop(); ?>

	<h2>For Loop</h2>
	<?php forLoop(); ?>

	<h2>Continue and Break</h2>
	<?php modifiedForLoop(); ?>

	<h1>Array</h1>
	<h2>Student Array: <?php print_r($studentNumbers); ?></h2>

	<h2>Types of Arrays</h2>
	<h3>Simple Array</h3>
	<ul>
		<?php foreach($computerBrands as $brand) { ?>	
			<li><?= $brand; ?></li>
		<?php } ?>
	</ul>
	<h3>Associative Array</h3>
	<ul>
		<?php foreach($gradePeriods as $period => $grade) { ?>
			<li>Grade in <?= $period ?> is <?= $grade ?></li>
		<?php } ?>
	</ul>
	<h3>Multidimensional Super Array</h3>
	<ul>
		<?php 
			foreach($heroes as $team){
				forEach($team as $member){
		?>
			<li><?= $member ?></li>
		<?php 
			} 
		}
		?>	
	</ul>
	<h3>Multidimensional Associative Array</h3>
	<ul>
		<?php
			foreach($ironManPowers as $label => $powerGroup){
				forEach($powerGroup as $power){
		?>
			<li><?= "$label: $power" ?></li>
		<?php 
			}
		}
		?>
	</ul>

	<h2>Array Functions/Methods</h2>	
	<h3>Original Array</h3>

	<pre><?php print_r($computerBrands); ?></pre>

	<h3>Append</h3>
	
	<h4>Add one or more element on the end of an array.</h4>
	<p>Array length after array_push(): <?= array_push($computerBrands, 'Apple'); ?></p>
	
	<h4>Add one or more element on the start of an array.</h4>
	<p>Array length after array_unshift(): <?= array_unshift($computerBrands, 'Dell'); ?></p>

	<pre><?php print_r($computerBrands); ?></pre>

	<h3>Remove</h3>
	<h4>Remove the element off in the end of an array.</h4>
	<p>Removed item after array_pop(): <?= array_pop($computerBrands); ?></p>

	<h4>Remove the element off in the start of an array.</h4>
	<p>Remove item after array_shift(): <?= array_shift($computerBrands); ?></p>
	<pre><?php print_r($computerBrands); ?></pre>

	<h3>Sort in Ascending Order</h3>
	<pre><?php print_r($sortedBrands); ?></pre>

	<h3>Sort in Descending Order</h3>
	<pre><?php print_r($reverseSortedBrands); ?></pre>

	<h3>Other Array Functions</h3>
	<h4>Count</h4>
	<pre>Total length of $computerBrands: <?= count($computerBrands); ?></pre>

	<h4>In Array</h4>
	<pre><?= searchBrand($computerBrands, 'HP'); ?></pre>
	<pre><?= searchBrand($computerBrands, 'Acer'); ?></pre>

	<h4>Reverse Order(not sorting)</h4>
	<pre><?php print_r($computerBrands); ?></pre>
	<pre><?php print_r($reversedComputerBrands); ?></pre>
</body>
</html>