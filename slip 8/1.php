<?php

class shape
{
    function calculateArea()
    {
        return 0;
    }
}

class triangle extends shape
{
    protected $base, $height;
    function __construct($b, $h)
    {
        $this->base = $b;
        $this->height = $h;
    }
    function calculateArea()
    {
        return ($this->base * $this->height) / 2;
    }
}

class square extends shape
{
    protected $side;
    function __construct($s)
    {
        $this->side = $s;
    }
    function calculateArea()
    {
        return $this->side * $this->side;
    }
}

class circle extends shape
{
    protected $radius;
    function __construct($r)
    {
        $this->radius = $r;
    }
    function calculateArea()
    {
        return 3.14 * $this->radius * $this->radius;
    }
}

$t = new triangle(7, 6);
echo "Area of triangle : " . $t->calculateArea() . "<br>";

$s = new square(7);
echo "Area of Square : " . $s->calculateArea() . "<br>";

$c = new circle(7);
echo "Area of Circle : " . $c->calculateArea() . "<br>";

?>
