<?php

class myclass{
    function name(){
        echo "Class Name: " . get_class($this) . "<br>";
}
}

$obj = new myclass();
$obj->name();

/////////////////

class abc{

}

class xyz extends abc{
    function nam (){
        echo "Parent Class Name: " . get_parent_class($this) . "<br>";
}
}

$obj = new xyz();
$obj->nam();

//////////////////
class cm{
    function __construct(){
        print_r(get_class_methods($this));
    }

    function myfunc1(){

    }

   private function myfunc2(){

    }
}
$obj = new cm();

$class_methods = get_class_methods('cm');
// print_r($class_methods);

foreach($class_methods as $methods){
    echo $methods . "<br>";
}
/////////////////////////////////////

class variabl{
    public $var1;
    public $var2 = "hello";
    public $var3 = 50;
    private $var4;
//THis function is to see the private variables
    function __construct(){
        $this->var1 = "Rakesh";
        $this->var2 = "Raut"
        print_r(get_class_vars(__CLASS__));
    }

}
$obj = new variabl();
$class_vars = get_class_vars(get_class($obj));
print_r($class_vars);

/////////////////////////////////////

class objec{
    public $var1;
    public $var2 = "hello";
    public $var3 = 50;
    private $var4;
//THis function is to see the private variables
    function __construct(){
        $this->var1 = "Rakesh";
        $this->var2 = "Raut";
    }

}
$obj = new objec();
$class_vars = get_object_vars($obj);
print_r($class_vars);

?>