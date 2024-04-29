<?php

function printDivisibleOfFive(){
    for($count = 0; $count <= 1000; $count++){
        if($count % 5 == 0){
            echo $count . " ";
        }

        if ($count == 100){
            break;
        }
    }
}

$students = [];

?>