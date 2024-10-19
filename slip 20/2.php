<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series and Sum of Digits</title>
</head>

<body>
    <h2>Enter a Number</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Function to calculate Fibonacci series
    function fibonacci($n)
    {
        $fib = array();
        $fib[0] = 0;
        $fib[1] = 1;
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    // Function to calculate sum of digits
    function sumOfDigits($number)
    {
        $sum = 0;
        while ($number != 0) {
            $sum += $number % 10;
            $number = (int)($number / 10);
        }
        return $sum;
    }

    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $fibonacciSeries = fibonacci($number);
        $sumOfDigits = sumOfDigits($number);

        // Display Fibonacci series
        echo "<h2>Fibonacci Series:</h2>";
        echo implode(", ", $fibonacciSeries);

        // Display sum of digits
        echo "<h2>Sum of Digits:</h2>";
        echo "Sum of digits of $number is $sumOfDigits";
    }
    ?>
</body>

</html>