<?php

    trait hello{
        private function sayhello(){
            echo "hello from rakesh";
        }
    }

    class base{
        use hello{
            hello::sayhello as public newhello;
        }
    }
    class child extends base{
        use hello;
        public function sayhello(){
            echo "hello form rakesh raut";
        }
    }

    $test = new base();
    $test->newhello();
    echo "<br><br>";

    

?>