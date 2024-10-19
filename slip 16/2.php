<?php
$user = $_GET['txt'];
if ($user === "")
    $str = "Enter user name";
else if (strlen($user) < 3)
    $str = "User name is too short";
else
    $str = "Valid username";
echo $str === "" ? "no suggestion" : $str;
?>