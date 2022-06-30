<?php

// class abc{
//     private $name = "Rakesh";

//     public function __get($property){
//         echo "You are trying to access Non existing or private property($property)";
//     }
// }

// $test = new abc();
// $test -> name;


// class abc{
//     public $data = ["name"=>"rakesh","from"=>"ktm"];

//     public function __get($property){
//         echo "You are trying to access Non existing or private property($property)";
//     }
// }

// $test = new abc();
// print_r($test->data);


class abc{
    private $data = ["name"=>"rakesh","from"=>"ktm"];

    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "This key($key) is not defined";
        }
    }
}

$test = new abc();
echo $test->name;

?>