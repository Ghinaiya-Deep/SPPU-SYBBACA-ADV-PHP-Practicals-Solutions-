<?php
$una=$_GET['num1'];
$ps=$_GET['num2'];
$sn="localhost";
$un="root";
$pas="";
$dbn="test";
if((!empty($una)) && (!empty($ps)))
{
$con=mysqli_connect($sn,$un,$pas,$dbn);
$sql="select * from up where username='$una' and password='$ps'";
$r=mysqli_query($con,$sql);
if (mysqli_num_rows($r) > 0)
{
echo "Login Successfully....";
}
else
{
echo "Login Invalid...";
}
}
else
{
echo "Enter both Username& pass";
}
?>