<?php
trait mytrait(){
    public function trai(){

    }
}



if(trait_exists('mytrait')){
    echo "This trait Exists" . "<br>";
}else{
    echo "This trait doesn't Exists" . "<br>";
}

////////////////////



?>