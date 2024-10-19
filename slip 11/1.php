

<html>
    <body>
        <form method="post" action="1.php">

Enter radius of circle : 
<input type="text" name="r"><br><br>

Select Options :<br><br>

<input type="radio" name="r1" value="1">Circumference of a circle<br>
<input type="radio" name="r1" value="2">Area of a circle<br><Br><br>

<input type="submit" value="submit">

        </form>
    </body>
</html>   

<?php

class circle
{
    private $radius;

    public function __construct($r)
    {
        $this->radius=$r;
    }

    public function find_circumference()
    {
        return 2 * M_PI * $this->radius;
    }

    public function find_area()
    {
        return M_PI * $this->radius * $this->radius;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $r = $_POST['r'];
    $classcircle = new circle($r);
    $ch = $_POST['r1'];
    switch($ch)
    {
        case 1:
            echo "Circumference of the circle: " . round($classcircle->find_circumference());
            break;

        case 2:
            echo "Area of the circle: " . round($classcircle->find_area());
            break;

        default:
            echo "Invalid choice.....";
    }
}
?>
