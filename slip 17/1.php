<html>

<body>
    <table border="1">
        <tr>
            <th>PHP_SELF</th>
            <th>SERVER_NAME</th>
            <th>HTTP_HOST</th>
            <th>SCRIPT_NAME</th>
            <th>HTTP_REFERER</th>
            <th>HTTP_USER_AGENT</th>
        </tr>
        <tr>
            <?php
            echo "<td>" . $_SERVER['PHP_SELF'] . "</td>";
            echo "<td>" . $_SERVER['SERVER_NAME'] . "</td>";
            echo "<td>" . $_SERVER['HTTP_HOST'] . "</td>";
            echo "<td>" . $_SERVER['SCRIPT_NAME'] . "</td>";
            echo  "<td>" . $_SERVER['HTTP_REFERER'] . "</td>";

            echo "<td>" . $_SERVER['HTTP_USER_AGENT'] . "<\td>";


            ?>
        </tr>
    </table>
</body>

</html>