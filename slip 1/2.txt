

<html>
<body >
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        Select Cource : 
        <select name = "ch">
            <option value="">--Select--</option>
            <option value="BBACA">BBA(CA)</option>
            <option value="BBA">BBA</option>
            <option value="BBAIB">BBA(IB)</option>
        </select>
        <Br><Br>
        <input type="submit" value="Search" name = "sub"><br><br>
    </form>
</body>
</html>

 <?php

if(isset($_GET['sub'])) {
    $ch = $_GET['ch'];
    $xml = simplexml_load_file('2.xml');
    echo "
    <table border='1' cellpadding='2'>
        <tr align='center'>
            <th>Roll No</th>
            <th>Name</th>
            <th>Address</th>
            <th>College</th>
            <th>Course</th>
        </tr>
    ";
    
    function printData($val) {
        echo "
            <tr align='center'>
                <td>$val->roll</td>
                <td>$val->name</td>
                <td>$val->address</td>
                <td>$val->college</td>
                <td>$val->course</td>
            </tr>
        ";
    }
    
    foreach($xml->children() as $val) {
        if($ch == $val->course) {
            printData($val);
        }
    }
    echo "</table>";
}

?>
