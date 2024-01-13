<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST["id"];
$employeeId = $_POST["employeeId"];
$basicsalary= $_POST["basicsalary"];  
$attendance = $_POST["attendance"];
$month = $_POST["month"];            
$year = $_POST["year"];
$daPercentage = 40;
$taPercentage = 20;
$daAmount = ($daPercentage / 100) * $basicsalary;
$taAmount = ($taPercentage / 100) * $basicsalary;

$totalWorkingDays = 22;

$totalSalary = $basicsalary * ($attendance / $totalWorkingDays) + $daAmount + $taAmount;

// $query = "INSERT INTO Salary (employeeId, basicsalary, attendance, month, year, totalsalary)
//           VALUES ('$employeeId', '$basicsalary', '$attendance', '$month', '$year', '$totalSalary')";


// if ($conn->query($query) === TRUE) {
//     echo "Salary details inserted successfully!";
// } else {
//     echo "Error inserting salary details: " . $connection->error;
// }

$sql = "INSERT INTO salary (id, employeeId, basicsalary, attendance, month, year, totalsalary)
        VALUES ( '$id','$employeeId', '$basicsalary', '$attendance', '$month', '$year', '$totalSalary')
        ON DUPLICATE KEY
        UPDATE employeeId = '$employeeId', basicsalary='$basicsalary', attendance ='$attendance', month='$month', year='$year', 
        totalsalary='$totalSalary'";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted/Updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

  



?>