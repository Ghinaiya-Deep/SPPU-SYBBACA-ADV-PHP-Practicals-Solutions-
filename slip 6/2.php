<?php


if(!empty($_GET['ename'])){
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'test';
	$conn = new mysqli($host,$user,$pass,$dbname);
	if($conn->connect_error)
	{
		die("Connection Fail...<br>Error::" . $conn->connect_error);
	}
	$ename = $_GET['ename'];;
	

	$sql = "SELECT * FROM employee WHERE ename = '$ename'";
	$result = $conn->query($sql);
  
    echo "<table border=1 cellspacing=2>
    <tr>
    <th>Eid</th>
    <th>Employee Name</th>
    <th>Designation</th>
    <th>Salary</th></tr>";

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<td>".$row['eno']."</td>";
            echo "<td>".$row['ename']."</td>";
            echo "<td>".$row['designation']."</td>";
            echo "<td>".$row['salary']."</td>";
		
		}
	}
    
	else
	{
		echo "No Recors Found";
	}
}
else
{
	echo "Please Enter a employee name";
}
echo "</table>";
?>