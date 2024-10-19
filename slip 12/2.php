<?php
$fp = fopen('conatact.dat', 'r');

echo "<table border=1>";
echo "<tr><th>Sr. No.</th><th>Name</th><th>Residence No.</th><th>Mob. no.</th></tr>";


while ($row = fgetcsv($fp, 0, ' ')) { // Assuming space is the delimiter
    echo "<tr>";
   
    foreach ($row as $data) 
    {
        echo "<td>$data</td>";
    }
    echo "</tr>";
    
}

echo "</table>";

fclose($fp);
?>
