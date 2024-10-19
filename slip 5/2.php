<?php

$hostname = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'test';
if(!empty($_GET['sname']))
{

    $conn = new Mysqli($hostname,$username,$pass,$dbname); //or die("connection Fail..<br>Error:: $conn->connect_error");
    if($conn->connect_error)
        die ("Connection fail:<br>Error :: " . $conn->connect_error);
    $sname = $_GET['sname'];
    // echo $sname;

    $sql = "SELECT * FROM student WHERE sname = '$sname'";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<br>Roll no :", $row['sno'];
            echo "<br>Student Name : ", $row['sname'] ;
            echo "<br>Standard : ", $row['standard'] ;
            echo "<br>Address : ", $row['address'] ;
            echo "<BR>Marks : ", $row['marks'];
            echo "<br>Percentage : ", $row['percentage'];
        }
    }
    else
    {
        echo "<br>No Data Found";
    }
}
else{
    echo "<b>Please Enter Name</b></br>";

    $conn->close();
}

?>
