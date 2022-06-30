<?php

class myclass{

}

if(class_exists('myclass')){
    echo "This class Exists" . "<br>";
}else{
    echo "This class doesn't Exists" . "<br>";
}
////////////////
interface myinterface{

}
class myinter{

}

if(interface_exists('myinterface')){
    echo "This Interface Exists" . "<br>";
}else{
    echo "This Interface doesn't Exists" . "<br>";
}
//////////////////

class mymethod{
    public function method(){

    }
}

$obj = new mymethod();

if(method_exists($obj,'method')){
    echo "This Method Exists" . "<br>";
}else{
    echo "This Method doesn't Exists" . "<br>";
}
////////////////////////////////////


class property{
    public $test;
}

if(property_exists('property', 'test')){
    echo "This property exists" . "<br>";
}else{
    echo "This property doesnt exists" . "<br>";
}

//////////////////////////////

class is{
    public $test;
}

$obj = new is();

if(is_a($obj, 'is')){
    echo "This object is of class is ". "<br>";
}else{
    echo "This object is not of class is " . "<br>";
}

///////////////////////////////////////////////////

class parentclass{

}

class childclass extends parentclass{

}

$obj = new childclass();


if(is_subclass_of($obj, 'parentclass')){
    echo "This \$obj is a object of subclass of parentclass". "<br>";
}else{
    echo "This \$obj is not object of subclass of parentclass " . "<br>";
}

?>