<?php

echo "Line Number: " . __LINE__ . "<br>";
echo "File Path: " . __FILE__ . "<br>";
echo "Main Folder Path: " . __DIR__ . "<br>";

function MyFunction(){
    echo "The Function Name Is: " . __FUNCTION__ . "<br>";
}

MyFunction();

class myclass{
    public function classname(){
        return  "The Name Of Class Is: ". __CLASS__ . "<br>";
    }
}


$obj = new myclass();
echo $obj->classname();

////////////////////////////

class methodname{
    public function Method(){
        return  "The Name Of Method Is: ". __METHOD__ . "<br>";
    }
}


$obj = new methodname();
echo $obj->Method();

/////////////////////////
// It should be on top of the file.
// namespace mynamespace;
// class myname{
//     public function namespace(){
//         return  "The Name Of Namespace Is: ". __NAMESPACE__ . "<br>";
//     }
// }


// $obj = new mynamespace();
// echo $obj->namespace();

/////////////////////////////

trait mytrait{
    public function getTraitName(){
        return "The Name Of Trait Is: ". __TRAIT__ . "<br>";
    }
}

class hello{
    use mytrait;
}

$obj = new hello();
echo $obj->getTraitName();

?>