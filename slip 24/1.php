<?php

$xml = simplexml_load_file("1.xml") or die("Unable to connect the file");


echo "<table border=1 cellpadding=3>";
echo "<tr><th>Sr.No</th><th>College Name</th>
          <th>College City</th>
          <th>Rank</th></tr>";

          $sr=1;
foreach ($xml->college as $val) {
    echo "<tr><td>$sr</td><td>$val->cname</td>
            <td>$val->city</td>
            <td>$val->rank</td></tr>";
            $sr++;
}

echo "</table>";

?>
