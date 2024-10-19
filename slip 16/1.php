<?php
// Initialize variables
$string1 = "";
$string2 = "";
$matchResult = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    // Check if strings match
    if ($string1 === $string2) {
        $matchResult = "Strings match!";
    } else {
        $matchResult = "Strings do not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Matching</title>
</head>
<body>
    <h2>String Matching</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="string1">Enter String 1:</label>
        <input type="text"  name="string1" value="<?php echo htmlspecialchars($string1); ?>"><br><br>

        <label for="string2">Enter String 2:</label>
        <input type="text" name="string2" value="<?php echo htmlspecialchars($string2); ?>"><br><br>

        <input type="submit" value="Check">
    </form>
    <br>
    <?php echo $matchResult; ?>
</body>
</html>
