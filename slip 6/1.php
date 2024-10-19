<!-- 

Write a PHP script, which will return the following component of the URL (Using response header)
http://www.college.com/Science/CS.php
List of Components: scheme, host, path
Expected output: Scheme: http
Host: www.college.com
Path: /Science/CS.php -->

<?php

// header("Content-type:text/plain");
$url='http://www.college.com/Science/CS.php';
$url=parse_url($url);
echo "<br>Sceheme : ".$url['scheme'];
echo "<br>Host : ".$url['host'];
echo "<br>Path : ".$url['path'];

?>
