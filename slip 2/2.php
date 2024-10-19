<?php

$dom=new DOMDocument();
$dom->load('student.XML');
print $dom->saveXML()."<br><Br>";
print $dom->save('student.doc');



?>