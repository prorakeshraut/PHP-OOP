<?php

    function fruits(array $names){
        foreach ($names as $name){
            echo $name . "<br>";
        }
    }

    $test = ["apple","banana","orange"];

    fruits($test);
?>