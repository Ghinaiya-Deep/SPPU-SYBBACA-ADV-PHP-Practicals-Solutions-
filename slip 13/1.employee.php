<!DOCTYPE html>
<html>
<head>
    <title>Employee Details Form</title>
</head>
<body>

<form action="1.empdisplay.php" method="post">
    <label for="name">Name:</label>
    <input type="text"  name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"><br><br>

    <label for="age">Age:</label>
    <input type="text"  name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>"><br><br>

    <label for="designation">Designation:</label>
    <input type="text" name="designation" value="<?php echo isset($_POST['designation']) ? $_POST['designation'] : ''; ?>"><br><br>

    <label for="salary">Salary:</label>
    <input type="text" name="salary" value="<?php echo isset($_POST['salary']) ? $_POST['salary'] : ''; ?>"><br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>
