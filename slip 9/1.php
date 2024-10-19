<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 
a) Write a PHP program to create a Class Calculator which will accept two values from user and pass as
an argument through parameterized constructor and do the following task:
a) Add
b) Subtract
c) Multiply them together or divide them on request.
     -->
    <title>Document</title>
</head>
<body>
  <form method = 'post' action = '<?php echo $_SERVER['PHP_SELF']; ?>'>
  Enter Number 1 : 
   <input type = 'text' name = 'n1'><br><br>
    <select name = 'ch'>
	<option value = '+'>+</option>
	<option value = '-'>-</option>
	<option value = '*'>*</option>
	<option value = '/'>/</option>
    </select><br><Br>
    Enter Number 2 :  
    <input type = 'text' name = 'n2'>
    <br><Br><br><Br>
    <input type = 'submit' name = 'sub'>
</form>
</body>
</html>

<?php
class calculater
{
	protected $n1,$n2;
	public function __construct($n1,$n2)
	{
		$this->n1 = $n1;
		$this->n2 = $n2;
	}
	public function substract()
	{
		echo "<br>Substraction : " . ($this->n1 - $this->n2);
	}
	public function add()
	{
		echo "<br>Addition : " . ($this->n1 + $this->n2);
	}
	public function multiply()
	{
		echo "<br>Multiplication : " . ($this->n1 * $this->n2);
	}
	public function div()
	{
		echo "<br>Division : " . ($this->n1 / $this->n2);
	}
}
if(isset($_POST['sub']))
{
	if(!empty($_POST['n1']) && !empty($_POST['n2']))
	{
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$ch = $_POST['ch'];
		$c = new calculater($n1,$n2);
		switch($ch)
		{
			case '+':
			     $c->add();
			break;
			case '-':
			     $c->substract();
			break;
			case '*':
			     $c->multiply();
			break;
			case '/':
			     $c->div();
			break;
				
		}
	} else {
		echo "<br>Please Fill All Fields";
	}
}

?>