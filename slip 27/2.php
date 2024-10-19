<?php

$xml=simplexml_load_file("2.xml");

echo "<table border=1 cellpadding=3>";
echo "<tr><th>Book Code</th>
<th>Book Name</th>
<th>Book Author</th>
<th>Book Year</th>
<th>Book Price</th></tr>";


foreach($xml->bookinfo as $val)
{
echo "<tr align=center><td>$val->bcode</td>
<td>$val->bname</td>
<td>$val->author</td>
<td>$val->year</td>
<td>$val->price</td></tr>";
}
echo "</table>";



?>