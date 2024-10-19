<?php

class calculator
{
    public $a,$b;
    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b=$b;
    }

    function add()
    {
        $add=$this->a+$this->b;
        echo "<Br>Addition is : ".$add;
    }

    function sub()
    {
        $sub=$this->a-$this->b;
        echo "<Br>Subtraction is : ".$sub;
    }

    function mul()
    {
        $mul=$this->a*$this->b;
        echo "<Br>Multiplication is : ".$mul;
    }

    function div()
    {
        $div=$this->a/$this->b; 
        echo "<Br>Division is : ".$div;
    }
}

$num1=$_POST['n1'];
$num2=$_POST['n2'];
$cal=new calculator($num1,$num2);

$cal->add();
$cal->sub();
$cal->mul();
$cal->div();
?>