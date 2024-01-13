<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$employeeId = $_POST["id"];

$sql = "DELETE FROM employee WHERE id = $employeeId";

if ($conn->query($sql) === TRUE) {
    echo "Employee deleted successfully.";
} else {
    echo "Error deleting Employee: " . $conn->error;
}

$conn->close();
?>
