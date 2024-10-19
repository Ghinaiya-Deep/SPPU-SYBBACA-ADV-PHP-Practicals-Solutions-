<?php

$xml = simplexml_load_file("2.xml") or die("Cannot connect the xml file");
echo "<table border=1 align=center cellpadding=5 cellspacin=36767677676>";
echo "<tr>
<th>University Name </th>
<th>City</th>
<th>Rank</th></tr>";
foreach ($xml->children() as $uni) {
    echo "<tr>
    <td>$uni->uname</td>
    <td>$uni->city</td>
    <td>$uni->rank</td></tr>";
}

echo "</table>";
