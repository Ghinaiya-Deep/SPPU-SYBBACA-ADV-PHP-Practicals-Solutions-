<?php

interface ResultInterface
{
    public function calculateTotalMarks();
    public function calculatePercentage();
    public function calculateGrade();
}

class Student
{
    public $rollNo;
    public $name;
    public $prn;

    public function __construct($rollNo, $name, $prn)
    {
        $this->rollNo = $rollNo;
        $this->name = $name;
        $this->prn = $prn;
    }
}

class Marks extends Student
{
    public $mPhp;
    public $mOs;
    public $mCpp;
    public $mNetworking;

    public function __construct($rollNo, $name, $prn, $mPhp, $mOs, $mCpp, $mNetworking)
    {
        parent::__construct($rollNo, $name, $prn);
        $this->mPhp = $mPhp;
        $this->mOs = $mOs;
        $this->mCpp = $mCpp;
        $this->mNetworking = $mNetworking;
    }
}

class Result extends Marks implements ResultInterface
{
    public $totalMarks;
    public $percentage;
    public $grade;

    public function __construct($rollNo, $name, $prn, $mPhp, $mOs, $mCpp, $mNetworking)
    {
        parent::__construct($rollNo, $name, $prn, $mPhp, $mOs, $mCpp, $mNetworking);
        $this->calculateTotalMarks();
        $this->calculatePercentage();
        $this->calculateGrade();
    }

    public function calculateTotalMarks()
    {
        $this->totalMarks = $this->mPhp + $this->mOs + $this->mCpp + $this->mNetworking;
    }

    public function calculatePercentage()
    {
        $this->percentage = ($this->totalMarks / 400) * 100;
    }

    public function calculateGrade()
    {
        if ($this->percentage >= 80) {
            $this->grade = 'A';
        } elseif ($this->percentage >= 60) {
            $this->grade = 'B';
        } elseif ($this->percentage >= 40) {
            $this->grade = 'C';
        } else {
            $this->grade = 'D';
        }
    }
}

// Processing form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollNo = $_POST['rollNo'];
    $name = $_POST['name'];
    $prn = $_POST['prn'];
    $mPhp = $_POST['mPhp'];
    $mOs = $_POST['mOs'];
    $mCpp = $_POST['mCpp'];
    $mNetworking = $_POST['mNetworking'];

    $student = new Result($rollNo, $name, $prn, $mPhp, $mOs, $mCpp, $mNetworking);
}

?>


<html>

<body>
    <h1>Student Result</h1>
        <h2>Student Information with Result:</h2>
        <strong>Roll No:</strong> <?php echo $student->rollNo; ?><br><br>
        <strong>Name:</strong> <?php echo $student->name; ?><br><br>
        <strong>PRN:</strong> <?php echo $student->prn; ?><br><br>
        <strong>Marks (PHP):</strong> <?php echo $student->mPhp; ?><br><br>
        <strong>Marks (OS):</strong> <?php echo $student->mOs; ?><br><br>
        <strong>Marks (CPP):</strong> <?php echo $student->mCpp; ?><br><br>
        <strong>Marks (Networking):</strong> <?php echo $student->mNetworking; ?><br><br>
        <strong>Total Marks:</strong> <?php echo $student->totalMarks; ?><br><br>
        <strong>Percentage:</strong> <?php echo $student->percentage; ?>%<br><br>
        <strong>Grade:</strong> <?php echo $student->grade; ?><br><br>
    
</body>

</html>