<?php

class student{
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname,$lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __unset($property){
        unset($this->$property);
    }
}

$test = new student();
// unset($test->course);
// echo $test->course;

$test->setName("Rakesh","Raut");

unset($test->first_name);
print_r($test);


?>