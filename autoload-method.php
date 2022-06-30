<?php

    // require "classes/first.php";
    // require "classes/second.php";
function __autoload($class){
    require "classes/" . $class . ".php";
}

    $test = new first();
    echo "<br>";
    $test1 = new second();

?>