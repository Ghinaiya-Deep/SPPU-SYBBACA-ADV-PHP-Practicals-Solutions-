<?php

class myclass
{
    public $a;
    public $b=1;
    public $c="Deep";
    function myclass()
    {
        //myclass function
    }

    function myfunction1()
    {
        //function 1
    }

    function myfunction2()
    {
        //function 2
    }
}

$class=get_declared_classes();
foreach($class as $cname)
{
    echo "$cname<br>";
}
echo "<br><br>Class Methods are : <br>";
$m=get_class_methods('Myclass');
foreach($m as $mname)
{
    echo "$mname<br>";
}

$cv=get_class_vars('Myclass');
echo "<br><br>Class variables are : <br>";
foreach($cv as $cvname)
{
    echo "$cvname <br>";
}



?>