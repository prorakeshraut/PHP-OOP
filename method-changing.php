<?php

class abc{
    public function first(){
        echo "This is First Function<br>";
        return $this;
    }
    public function second(){
        echo "This is second function<br>";
        return $this;
    }
    public function third(){
        echo "This is third function";
    }
} 

$test = new abc();
$test->first()->second()->third();
?>