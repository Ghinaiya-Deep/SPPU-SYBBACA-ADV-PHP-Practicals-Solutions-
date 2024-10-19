<html>

<body>

    <?php

    $xml = simplexml_load_file("1.xml") or die("cannot die");

    ?>



        <h1></b>CD details</b></h1>

    <table border="1">

        <th>cdcode</th>

        <th>mname</th>

        <th>ryear</th>

        <th>aname</th>

        <?php

        foreach ($xml->category  as $a) {

            echo "<tr><td>" . $a['code'] . "</td>";

            echo "<td>" . $a->mname . "</td>";

            echo "<td>" . $a->ryear . "</td>";

            echo "<td>" . $a->aname . "</td></tr>";
        }

        ?>

    </table>

</body>

</html>