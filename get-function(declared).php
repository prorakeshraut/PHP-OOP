<?php
interface test{

}
class abc{
    
}

class xyz extends abc{

}


print_r(get_declared_classes()) . "<br>";
echo "<br><br>";
//////////////////////////////////
//get declared interfaces

class def{
    
}

class ghi extends def{

}
print_r(get_declared_interfaces());
echo "<br><br>";

////////////////////////////////
// get declared traits

trait test1{

}
class jkl{
    use test1;
}

class mno extends jkl{

}
print_r(get_declared_traits());

?>