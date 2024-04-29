<?php require_once "./code.php"?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>S02: Repetition Control Structures and Array Manipulation (Activity)</title>
    </head>
    <body>
        <h1>Divisible of Five</h1>
        <p><?php echo printDivisibleOfFive(); ?></p>

        <h1>Array Manipulation</h1>

        <?php array_push($students, 'John Smith'); ?>

        <p><?php var_dump($students); ?></p>

        <p><?php echo count($students); ?></p>

        <?php array_push($students, 'Jane Smith'); ?>

        <p><?php var_dump($students); ?></p>

        <p><?php echo count($students); ?></p>

        <?php array_shift($students); ?>

        <p><?php var_dump($students); ?></p>

        <p><?php echo count($students); ?></p>

    </body>
</html>