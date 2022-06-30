<?php

class student{
    private $name;

    public function __get($property){
        echo "You are trying to access private property($property)";
    }

    public function __set($property, $value){
        echo "This is non existing or private property: $property";
    }
}

$test = new student();
$test->name = "Rakesh";

?>