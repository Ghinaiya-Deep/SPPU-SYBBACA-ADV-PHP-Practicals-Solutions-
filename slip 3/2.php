<?php
$xml=simplexml_load_file('2.xml') or die('Unable to connect file');

$xmlstr=$xml->asXML();
echo "<br>".$xmlstr;
?>