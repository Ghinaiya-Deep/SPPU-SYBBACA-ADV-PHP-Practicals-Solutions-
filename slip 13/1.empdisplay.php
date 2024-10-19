<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>

<h2>Employee Details</h2>
<table border="1" cellspacing=1 cellpadding=2>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>
    <tr>
        <td><?php echo $_POST['name']; ?></td>
        <td><?php echo  $_POST['age']; ?></td>
        <td><?php echo  $_POST['designation']; ?></td>
        <td><?php echo  $_POST['salary']; ?></td>
    </tr>
</table>

</body>
</html>
