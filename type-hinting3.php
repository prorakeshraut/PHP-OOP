<?php

class school{
    public function getNames($names){
        foreach($names->Names() as $name){
            echo $name . "<br>";        
        }
    }
}

class student{
    public function Names(){
        return ["Ram","Hari","Rakesh"];
    }
}

function wow(hello $c){
    $c->sayhello();
}


$stu = new student();
$sch = new school();

$sch->getNames($stu);
?>