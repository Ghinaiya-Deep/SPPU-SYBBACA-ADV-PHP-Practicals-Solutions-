<?php

class mycalculator
{
        private $a,$b;
        public function __construct($a,$b)
        {
            $this->a=$a;
            $this->b=$b;
        }

        public function add()
        {
            return $this->a+$this->b;
        }

        public function sub()
        {
            return $this->a-$this->b;
        }

        public function mul()
        {
            return $this->a*$this->b;
        }

        public function div()
        {
            return $this->a/$this->b;
        }
}

$mycal=new mycalculator(10,5);
echo "<br>Addition is : ".$mycal->add();
echo "<Br><br>Subtraction is : ".$mycal->sub();
echo "<Br><br>Multiplication is : ".$mycal->mul();
echo "<br><Br>Division is : ".$mycal->div();
?>