<?php

abstract class Shape {
    abstract public function area();
    abstract public function volume();
}

class Rectangle extends Shape {
    protected $length;
    protected $breath;

    public function __construct($length, $breath) {
        $this->length = $length;
        $this->breath = $breath;
    }

    public function area() {
        return $this->length * $this->breath;
    }

    public function volume() {
        return 0; // Volume of a rectangle is not applicable
    }
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return M_PI * $this->radius * $this->radius;
    }

    public function volume() {
        return 0; // Volume of a circle is not applicable
    }
}

class Cylinder extends Circle {
    protected $height;

    public function __construct($radius, $height) {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function volume() {
        return parent::area() * $this->height;
    }
}

// Creating instances of each shape
$rectangle = new Rectangle(5, 4);
$circle = new Circle(3);
$cylinder = new Cylinder(2, 6);

// Calculating and printing area and volume for each shape
echo "<Br><BR>Rectangle Area: " . $rectangle->area() . "\n";
echo "<br>Rectangle Volume: " . $rectangle->volume() . "\n";

echo "<br><br>Circle Area: " . $circle->area() . "\n";
echo "<br>Circle Volume: " . $circle->volume() . "\n";

echo "<br><br>Cylinder Area: " . $cylinder->area() . "\n";
echo "<br>Cylinder Volume: " . $cylinder->volume() . "\n";

?>
