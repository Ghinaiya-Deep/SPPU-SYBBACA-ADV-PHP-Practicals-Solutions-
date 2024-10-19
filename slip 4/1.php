<?php

class employee
{
    private $eid,$ename,$edept,$esal;
    function __construct($a,$b,$c,$d)
    {
        $this->eid=$a;
        $this->ename=$b;
        $this->edept=$c;
        $this->esal=$d;
    }

    public function getdata()
    {
        return $this->esal;
    }

    public function display()
    {
        echo $this->eid."\t";
        echo $this->ename."\t";
        echo $this->edept."\t";
    }
}

class manager extends employee
{
    private $bonus;
    public static $total1=0;
    function __construct($a,$b,$c,$d,$e)
    {
    parent::__construct($a,$b,$c,$d);
    $this->bonus=$e;
    }

    public function max($ob)
    {
        $sal=$this->getdata();
        $total=$sal+$this->bonus;
        if($total>self::$total1)
        {
            self::$total1=$total;
            return $this;
        }
        else
        {
            return $ob;
        }
    }

    public function display()
    {
        parent::display();
        echo self::$total1;
    }
}

$ob=new manager(1,"Deep","computer",12000,20000);
$ob=$ob->max($ob);
$ob2=new manager(2,"Guarav","HR",12000,14000);
$ob=$ob2->max($ob);
$ob3=new manager(3,"Sameer","Tester",10000,12000);
$ob=$ob3->max($ob);
$ob4=new manager(4,"Chirag","HR",8000,12000);
$ob=$ob4->max($ob);
$ob5=new manager(5,"Ramesh","Comnputer",9000,8000);
$ob=$ob5->max($ob);
$ob->display();








?>