<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$salaryId = $_POST["id"];

$sql = "DELETE FROM salary WHERE id = $salaryId";

if ($conn->query($sql) === TRUE) {
    echo "Salary deleted successfully.";
} else {
    echo "Error deleting Salary: " . $conn->error;
}

$conn->close();
?>