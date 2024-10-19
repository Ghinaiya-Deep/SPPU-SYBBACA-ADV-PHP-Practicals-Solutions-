<html>
    <body>

<?php

$xml=simplexml_load_file("1.xml") or die("Unable to connect file");


echo "<table border=1 cellpadding=2>";

echo "<tr>
    <th>Sport Code</th>
    <th>Sport Name</th>
    <th>Captain Name</th>
</tr>";


foreach($xml->sport as $a)
{
    echo "<tr align=center><td>".$a['code']."</td>";
    echo "<td>".$a->sname."</td>";
    echo "<td>".$a->captain."</td></tr>";
}

echo "</table>";
?>
    </body>
</html>