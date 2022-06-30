<?php

class myclass{
    public $test;
}

class_alias("myclass", "mc");

$a = new myclass();
$b = new mc();

$a->test = "hello";
echo $a->test;
?>