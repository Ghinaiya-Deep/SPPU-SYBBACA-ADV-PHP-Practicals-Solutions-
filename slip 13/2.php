<?php
$name=$_GET['txt1'];
$age=$_GET['txt2'];
$nationality=$_GET['txt3'];
$hint="";
if($name==="")
	$hint="<br>Enter name";
else if(!preg_match("/^([A-Z\sA-Z']+)$/",$name))
	$hint='<br>Please enter valid name.';
if($age==="")
	$hint.="<br>Enter age";
else if($age<18)
{
	
	$hint.='<br>Please enter valid age';
}

if($nationality==="")
	$hint.="<br>Enter Nationality";
else
	if($nationality!="Indian")
	$hint.='<br>Please enter valid nationality';
	echo $hint===""?"<br>Valid input no suggestion":$hint;
	?> 