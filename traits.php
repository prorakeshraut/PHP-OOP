<?php

trait hello{
    public function sayhello(){
        echo "Hello Everybody ";
    }

    public function sayhi(){
        echo "Hello It's Rakesh ";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye Everybody ";
    }
}


class base{
    use hello, bye;
}

class base2{
    use hello;
}

$test = new base();
// $test2 = new base2;

$test->sayhello();
echo "<br>";
$test->saybye();
echo "<br>";
$test->sayhi();

?>