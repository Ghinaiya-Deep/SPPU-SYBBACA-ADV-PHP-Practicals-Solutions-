<?php
$a= array("Pune", "Mumbai", "Banglore", "Chennai", "Kolkata", "Jaipur", "Surat", "Indore", "Lucknow", 
"Chandigarh", "Bhopal", "Patna" , "Kochi");
$search =  $_REQUEST["txt"];
$hint= " ";
if($search !== " ")
{
$len=strlen($search);
foreach($a as $name)
{
if (stristr($search, substr($name , 0 , $len)))
{
if($hint === " ")
{
$hint= $name;
}
else
{
$hint .= " , $name";
}
}
}
}
echo $hint === " " ? "no suggestion" : $hint;
?>