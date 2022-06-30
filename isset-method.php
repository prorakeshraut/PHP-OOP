<?php

class student{
    public $course;
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;

    }

    public function __isset($property){
        echo isset($this->$property);
    }
}


$test = new student();
// $test->course = "PHP";

$test->setName("Rakesh","Raut");

echo isset($test->first_name);

?>