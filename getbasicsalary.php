<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$employeeId = $_GET['employeeId'];

$sql= "SELECT basicsalary FROM employee WHERE id = '$employeeId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<option value="' . $row['basicsalary'] . '">' . $row['basicsalary'] . '</option>';
} else {
    echo '<option value="">No data available</option>';
}

$conn->close();



?>