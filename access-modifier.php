<?php

    class base{
        protected $name;

        public function __construct($n){
            $this->name = $n;
        }

        protected function show(){
            echo "Your Name: " . $this->name . "<br>";
        }
    }

    class derived extends base{
        public function get(){
            echo "Your Name is: " . $this->name . "<br>";
        }
    }

    $p1 = new derived("rakesh raut");
    // $p1->name = "raut rakesh";
    $p1->get();

echo "pirvate access";
    class base{
        private $name;

        public function __construct($n){
            $this->name = $n;
        }

        protected function show(){
            echo "Your Name: " . $this->name . "<br>";
        }
    }

    class derived extends base{
        public function get(){
            echo "Your Name is: " . $this->name . "<br>";
        }
    }

    $p1 = new derived("rakesh raut");
    // $p1->name = "raut rakesh";
    $p1->get();
?>