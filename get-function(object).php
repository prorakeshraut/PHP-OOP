<?php

class objec{
    public $var1;
    public $var2 = "hello";
    public $var3 = 50;
    private $var4;
//THis function is to see the private variables
    function __construct(){
        $this->var1 = "Rakesh";
        $this->var2 = "Raut";
        print_r(get_object_vars($this));
    }

}
$obj = new objec();
$class_vars = get_object_vars($obj);
print_r($class_vars);

?>
