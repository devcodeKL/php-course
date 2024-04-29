<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Basics and Selection Control Structures</title>
</head>
<body>
	<!-- <h1>Hello World!</h1> -->
	<h1>Echoing Values</h1>

	<!-- Double quotes can easily read variables -->
	<p><?php echo "Good day $name! Your given email is $email." ?></p>

	<!-- Variables can be used to outpud data in DOUBLE QUOTES while SINGE QUOTES do not. -->
	<p><?php echo 'Good day $name! Your given email is $email.' ?></p>
	<!-- Single quotes can be used but concatenation is needed -->
	<!-- dot (.) is used for concatenation in php -->
	<p><?php echo 'Good day ' . $name.'!' . 'Your given email is ' . $email .'.' ?></p>

	<!-- For constant variable dot(.) is used to display its value. -->
	<p><?php echo "The value of PI is " .  PI; ?></p>

	<h1>Data Types</h1>

	<!-- Normal echoing of boolean and null variables will not make it visible to the webpage. -->
	<p>hasTravelledAbroad: <?php echo "$hasTravelledAbroad"; ?></p>
	<p>spouse: <?php echo "$spouse"; ?></p>

	<!-- gettype() function it only displays the data type of the variable -->
	<p>hasTravelledAbroad: <?php echo gettype($hasTravelledAbroad); ?></p>
	<p>spouse: <?php echo gettype($spouse); ?></p>

	<!-- var_dump() function it displays the structured information about variables/expressions including its type and value -->
	<p>hasTravelledAbroad: <?php echo var_dump($hasTravelledAbroad); ?></p>
	<p>spouse: <?php echo var_dump($spouse); ?></p>

	<!-- To display the value of an object propert, the arrow notation (->) can be used. -->
	<p><?php echo $gradesObj->firstGrading; ?></p>
	<p><?php echo $personObj->address->state; ?></p>

	<p><?php echo $grades[3] ?></p>
	<p><?php echo $grades[2] ?></p>

	<p><?php var_dump($gradesObj); ?></p>
	<p><?php var_dump($grades); ?></p>

	<!-- print_r() displays information about a variable in a way that's readable by humans -->
	<p><?php print_r($gradesObj); ?></p>
	<p><?php print_r($grades); ?></p>

	<h1>Operators</h1>

	<p>X: <?php echo $x; ?></p>
	<p>Y: <?php echo $y; ?></p>

	<p>Is Legal Age: <?php echo var_dump($isLegalAge); ?></p>
	<p>Is Registered: <?php echo var_dump($isRegistered); ?></p>

	<h2>Arithmetic Operators</h2>
	<p>Sum: <?php echo $x + $y; ?></p>
	<p>Difference: <?php echo $x - $y; ?></p>
	<p>Product: <?php echo $x * $y; ?></p>
	<p>Quotient: <?php echo $x / $y; ?></p>
	<!-- Deprecated: Implicit conversion from float to int loses precision -->
	<p>Modulo: <?php echo $x % $y; ?></p>
	<!-- To resolve warning -->
	<p>Modulo: <?php echo (int)$x % (int)$y; ?></p>

	<h2>Equality Operators</h2>
	<p>Loose Equality: <?php var_dump($x == '500') ?></p>
	<p>Stict Equality: <?php var_dump($x === '500') ?></p>
	<p>Loose Inquality: <?php var_dump($x != '500') ?></p>
	<p>Stict Inequality: <?php var_dump($x !== '500') ?></p>

	<h3>Greater/Lesser Operators</h3>
	<p>Is Lesser: <?php var_dump($x < $y); ?></p>
	<p>Is Greater: <?php var_dump($x > $y); ?></p>

	<p>Is Lesser or Equal: <?php var_dump($x <= $y); ?></p>
	<p>Is Greater or Equal: <?php var_dump($x >= $y); ?></p>

	<h2>Logical Operators</h2>
	<p>Are All Requirements: <?php var_dump($isLegalAge && $isRegistered); ?></p>
	<p>Are Some Requirements Met: <?php var_dump($isLegalAge || $isRegistered); ?></p>
	<p>Are Some Requirements NOT Met: <?php var_dump(!$isLegalAge && !$isRegistered); ?></p>

	<h1>Function</h1>
	<p>Full Name: <?php echo getFullName('John', 'D', "Smith"); ?></p>
	<p><?php?></p>

	<h1>Selection Control Structures</h1>
	<h2>If-Else Statement</h2>
	<p><?php echo determineTyphoonIntensity(12); ?></p>

	<h2>Ternary Sample (Is Underage?)</h2>
	<p>78: <?php var_dump(isUnderAge(78)) ?></p>
	<p>17: <?php var_dump(isUnderAge(17)) ?></p>

	<h2>Switch</h2>
	<p><?php echo determineComputerUser(5); ?></p>

	<h2>Try-Catch-Finally Statement</h2>
	<p><?php greeting("Hello"); ?></p>
	<p><?php greeting(25); ?></p>
</body>
</html>