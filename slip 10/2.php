<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <strong>Select Options : </strong><br><br>
        <input type="radio" value="push" name="d1">Push<br>
        <input type="radio" value="pop" name="d1">Pop <br>
        <input type="radio" value="display" name="d1">Display<br><br>
        <input type="submit">
    </form>

    <?php

    echo "<br><br>Index array is : <Br>";
    $a = array(1, 2, 3, 4, 5);
    print_r($a);
    echo "<Br><br>";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $ch = $_POST['d1'];
        if ($ch == 'push') {
            array_push($a, 11);
            print_r($a);
        } else if ($ch == 'pop') {
            array_pop($a);
            print_r($a);
        } else if ($ch == 'display') {
            print_r($a);
        }
    }


    ?>
</body>
</html> 

