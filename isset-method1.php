<?php

class student{
    public $course;
    private $first_name;
    private $last_name;
    private $detail = ['name'=>'Rakesh', 'age'=>'23'];

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;

    }

    public function __isset($name){
        echo isset($this->detail[$name]);
    }
}


$test = new student();
// $test->course = "PHP";

// $test->setName("Rakesh","Raut");

echo isset($test->name);

?>