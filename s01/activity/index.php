<?php require_once "./code.php"; ?>

<!DOCTYPE html>

<html>

    <head>

        <title>S01: PHP Basics and Selection Control Structures (Activity)</title>
    
    </head>

    <body>
        
        <h1>Full Address</h1>

        <p><?php echo getFullAddress('3F Caswynn Bldg., Timog Avenue', 'Quezon City', 'Metro Manila', 'Philippines'); ?></p>

        <p><?php echo getFullAddress('3F Enzo Bldg., Buendia Avenue', 'Makati City', 'Metro Manila', 'Philippines'); ?></p>

        <h1>Letter-Based Grading</h1>

        <p>87 is equivalent to <?php echo getLetterGrade(87); ?></p>

        <p>94 is equivalent to <?php echo getLetterGrade(94); ?></p>

        <p>74 is equivalent to <?php echo getLetterGrade(74); ?></p>

    </body>

</html>