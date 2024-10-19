<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $factorial = 1;

    if ($number >= 0) {
        for ($i = 2; $i <= $number; $i++) {
            $factorial *= $i;
        }
        echo "Factorial of $number is $factorial";
    } else {
        echo "Please enter a non-negative integer.";
    }
} else {
    echo "Please provide a number.";
}
?>
