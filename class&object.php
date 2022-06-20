<?php
class person{
    public $name;
    function show(){
        echo "Your Name is: " . $this->name . "\n";
    }
}

$p1 = new person();
$p1->name= "Rakesh Raut";
$p1->show();

class person1{
    public $nam;
    function __construct($n){
        $this->name=$n;
    }
    function show(){
        echo "Your Name is : " .$this->name;
    }
}
    $p2 = new person1("Rakesh");
    $p2->show();
?>