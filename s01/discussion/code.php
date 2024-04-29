<?php
// [SECTION] Comments
// Single-line comment denoted by two forward slashes cmd + /
/* Multi-line comment denoted by a slash and asterisk cmd + option + / */

// [SECTION] Variables
// Variables in PHP are defined using dollar($) notation before the name of the variable.
$name = 'John Smith';
$email = 'johnsmith@gmail.com';

// [SECTION] Constants
// Constants are defined using the define() function
	// Naming conventions for "constant" variables should be in ALL CAPS.
	// It doesn't use the $ notation before the variable name. 
define('PI', 3.1416);
// Variable vs Constant
	// Constant do not follow any variable scoping rules, and they can be defined and accessed anywhere
	// Variables can be declared anywhere in the program, but they following variable scoping rules.

// [SECTION] Data Types
// Strings
$state = 'New York';
$country = 'United States of America';
$address = $state.', '.$country;  // Concatenation via . sign
$address = "$state, $country"; // Concatenation via double quotes.

// Integers
$age = 31;
$headcount = 26;

// Floats
$grade = 98.2;
$distanceInKilometers = 1342.12;

// Boolean
$hasTravelledAbroad = false;
$haveSymptoms = true;

// Arrays
// array() function is used to create an array in PHP
	// '[]' will also work in creating array
$grades = array(98.7, 92.1, 90.2, 94.6);

// Null
$spouse = null;
$middleName = null;

// Objects 
// Objects in PHP are used to model more complex data and structures and encapsulate data and behavior together.
// fat arrow (=>) is used to assign key value pairs
$gradesObj = (object)[
	'firstGrading' => 98.7,
	'secondGrading' => 92.1,
	'thirdGrading' => 90.2,
	'fourthGrading' => 94.6
];

$personObj = (object)[
	'fullName' => 'John Smith',
	'isMarried' => false,
	'age' => 35,
	'address' => (object)[
		'state' => 'New York',
		'country' => 'United States of America'
	]
];

// [SECTION] Operators

// Assignment Operators
// They are used to assign values to a variables
$x = 1342.14;
$y = 1268.24;

$isLegalAge = true;
$isRegistered = false;

// [SECTION] Functions
// functions are used tp make reusable code
function getFullName($firstName, $middleInitial, $lastName){
	return "$lastName, $firstName, $middleInitial";
}

// [SECTION] Selection Control Structures
// Selection control structures are used to make code execution dynamic according to pre-defined conditions

// If-Else Statement
function determineTyphoonIntensity($windSpeed){
	if($windSpeed < 30){
		return 'Not a typhoon yet';
	} else if($windSpeed <= 61){
		return 'Tropical depression detected.';
	} else if($windSpeed >= 62 && $windSpeed <= 88){
		return 'Tropical storm detected';
	} else if($windSpeed >= 89 && $windSpeed <= 117){
		return 'Severe Tropical storm detected';
	} else{
		return 'Typhoon detected';
	}
}

// Conditional (Ternary) Operator
function isUnderAge($age){
	return ($age < 18) ? true : false;
}

// Switch Statement
function determineComputerUser($computerNumber){
	switch ($computerNumber){
		case 1:
			return 'Linus Torvalds';
			break;
		case 2:
			return 'Steve Jobs';
			break;
		case 3:
			return 'Sid Meier';
			break;
		case 4:
			return 'Onel de Guzman';
			break;
		case 5:
			return 'Christian Salvador';
			break;
		default:
			return $computerNumber.'is out of bounds.';
			break;
	}
}

// Try-Catch-Finally Statement
function greeting($str){
	try{
		if(gettype($str) === "string"){
			echo $str;
		}else{
			throw new Exception("Ooops!");
		}
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
	finally{
		echo " I did it again!";
	}
}
?>