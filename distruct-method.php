<?php

class abc{

private $conn;

    public function __construct(){
        // echo "This Is Conctruct function<br>";
        $this->conn = mysqli_connect();
    }
    public function hello(){
        echo "Hello Everyone";
    }
    public function __destruct(){
        // echo "This is destruct function";
        mysqli_close($this->conn);
    }
}

$test = new abc();
$test->hello();
echo "<br>";
$test->hello();
echo "<br>";
$test->hello();
echo "<br>";

?>