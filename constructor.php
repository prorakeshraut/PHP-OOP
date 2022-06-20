<?php
    echo "Using no constructor";
    echo "<br>";

    class person{
        public $name = "No Name";
        public $age = "0";

        function show(){
            echo $this->name . " - " . $this->age;
        }
    }


    $p1 = new person();

    $p1->name = "Rakesh Raut";
    $p1->age = "20";

    $p1->show();
    echo "<br>";

    echo "Using constructor";
echo "<br>";
    class person1{
        public $name;
        public $age;
    
        function __construct($name="No Name", $age="0"){
            $this->name = $name;
            $this->age = $age;
        }
        function show(){
            echo $this->name . "-" . $this->age . "<br>";
        }
    }

    $p2 = new person1("rakesh",23);
    $p3 = new person1("milan",16);

    $p2->show();
    $p3->show();
?>