<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'test';
$pname = $_GET['pname'];
$conn = new mysqli($host,$user,$pass,$dbname);
if($conn->connect_error)
{
	die("connection Fail..<br>Error::" . $conn->connect_error);
}
$sql = "SELECT * FROM stud,proj where stud.p_group_no = proj.p_group_no AND project_title = '$pname'";
$result = $conn->query($sql);

if($result)
{
	if($result->num_rows)
	{
		while($row = $result->fetch_assoc())
		{
			echo "p_group_no : " . $row['project_title'];
		}
	}
	else 
	{
		echo "No Data found";
	}
}
else
{
	echo "Query exiction error : ". $conn->error;
}
?>