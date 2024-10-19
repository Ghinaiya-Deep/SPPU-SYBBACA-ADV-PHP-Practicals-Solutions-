<?php
class Myclass
{
            public $a;
            public $b=305;
            public $c='Akshay';
            function Myclass()
    {
                        //Myclass function
            }
            function myfun1()
    {
                        //functin
    }
            function myfun2()
    {
                        //functin
    }
}
            $class=get_declared_classes();
            echo "<h2>Declared Class are : </h2>";
            foreach($class as $cname)
            {
                        echo"$cname<br>";
            }
            echo"<h2><br>Class Methods are : <br></h2>";
            $m=get_class_methods('Myclass');
            foreach($m as $mname)
            {
                        echo"$mname<br>";
            }
            $cp=get_class_vars('Myclass');
            echo"<h2>class variables are :<br></h2>";
            foreach($cp as $cpname => $v)
            {
                        echo"$cpname : $v <br>";
            }

?>
