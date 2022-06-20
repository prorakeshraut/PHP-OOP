<?php

    class base{
        protected static $name = "Rakesh";
        
        public function show(){
            echo self::$name;
            echo static::$name;
        }
    }

    class derived extends base{
        protected static $name = "Raut";
    }

    $test = new derived();

    $test->show();
?>