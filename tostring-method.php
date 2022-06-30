<?php

class abc{
    public function __toString(){
        return "Cannot print object as string: " . get_class($this);
    }
}

$test = new abc();

echo $test;

?>