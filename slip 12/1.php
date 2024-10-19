<html>

<body>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        fahrenheit temperature:
        <input type="text" name="f" value="<?php if (isset($_POST['f'])) {  echo $fahr;} ?>">
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['f'])) {
        $fahr = $_POST['f'];
        $c = ($fahr - 32) * 5 / 9;
        echo "<br>Temperature  fahrenheit to celsius conversion is : " . $c;
    }
    ?>
</body>

</html>