<?php

class student{
    private $first_name;
    private $last_name;
     

    private function setName($fname, $lname){
        $this->$first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args){
        // echo "This is private: $method";
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
        }else{
            echo "Method dose not exist: $method";
        }
        
    }
}

$test = new student();

$test->setName("Rakesh Raut");
// $test->hello();

echo "<pre>";
print_r($test);
echo "</pre>";

?>