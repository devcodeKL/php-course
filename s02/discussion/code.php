<?php
// [SECTION] Repetition Control Structures
// Repetition control structures are used to execute code multiple times.

// While Loop
// A while loop takes a single condition.
function whileLoop(){
	$count = 5;

	while($count != 0){
		echo $count.'<br/>';
		$count--;
	}
}

// Do-While Loop
// A do-while loop works a lot like the while loop. However, do-while loops guarantee that the code will be executed at least once.
function doWhileLoop(){
	$count = 20;

	do {
		echo $count.'<br/>';
		$count--;
	} while ($count > 0);
}

// For Loop
// A for loop is more flexible than while and do-while loops. It consists of three parts:
/*
	- initial value
	- condition
	- iteration
*/

function forLoop(){
	for($count = 0; $count <= 20; $count++){
		echo $count.'<br/>';
	}
}

// Continue and Break
/*
	- Continue is a keyword that allows the code to go to the next loop without finishing the current code block.
	- Break on the other hand is a keyword that ends the execution of the current loop.
*/

function modifiedForLoop(){
	for($count = 0; $count <= 20; $count++){
		if($count % 2 === 0){
			continue;
		}
		echo $count.'<br/>';
		if($count > 10){
			break;
		}
	}
}

// [SECTION] Array
// Arrays are declared using array() function or square brackets '[]'

$studentNumbers = array('2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1927'); // before PHP 5.4
$studentNumbers = ['2020-1923', '2020-1924', '2020-1925', '2020-1926', '2020-1927']; // introduced on PHP 5.4

// There are three different kind of arrays and each array value is accessed using an ID which is called array index.

// Simple Array (or Numeric Array)
$grades = [98.5, 94.3, 89.2, 90.1];
$computerBrands = ['Acer', 'Asus', 'Lenovo', 'Neo', 'Redfox', 'Gateway', 'Toshiba', 'Fujitsu'];
$tasks = ['drink html', 'eat javascript', 'inhale css', 'bake sass'];

// Associative Array
// Associative Array is an array with string as index where it stores element values in association with key values rather than in a strict linear index order.
$gradePeriods = ['firstGrading' => 98.5, 'secondGrading' => 94.3, 'thirdGrading' => 89.2, 'fourthGrading' => 90.1];

// Two-Dimensional Simple Array
$heroes = [
	['iron man', 'thor', 'hulk'],
	['wolverine', 'cyclops', 'jean grey'],
	['batman', 'superman', 'wonder woman']
];

// Two-Dimensional Associative Array
$ironManPowers = [
	'regular' => ['repulsor blast', 'rocket punch'],
	'signature' => ['unibeam']
];

// Array Mutation
// Sorting Arrays
$sortedBrands = $computerBrands;
$reverseSortedBrands = $computerBrands;

sort($sortedBrands);
rsort($reverseSortedBrands);

// Other Array Functions
// in_array()
function searchBrand($brands, $brand){
	return (in_array($brand, $brands)) ? "$brand is in the array." : "$brand is not in the array.";
}

// array_reverse()
array_reverse($computerBrands);
$reversedComputerBrands = array_reverse($computerBrands);

?>