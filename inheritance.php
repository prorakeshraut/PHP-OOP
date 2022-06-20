<?php

    class employee{
        public $name;
        public $age;
        public $salary;


        function __construct($n, $a, $s){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
        }

        function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name: " . $this->name . "<br>";
            echo "Employee Age: " . $this->age . "<br>";
            echo "Employee salary: " . $this->salary . "<br>";
        }

        function info1(){
            echo "Hello";
        }
    }

    class manager extends employee{
        public $ta = 10000;
        public $phone = 300;
        public $totalSalry;

        function info(){
           $this->totalSalary = $this->salary + $this->ta + $this->phone;
           echo "<h3>Manager Profile</h3>";
            echo "Employee Name: " . $this->name . "<br>";
            echo "Employee Age: " . $this->age . "<br>";
            echo "Employee salary: " . $this->totalSalary . "<br>";
        }
    }

        $e1 = new manager("Rakesh",23,20000);
        $e2 = new employee("hari",22,10000);
        $e1->info();
        $e2->info();

        echo "<br>";
        echo "calling info1 function from object of manager class";
        echo "<br>";
        $e1->info1();
?>