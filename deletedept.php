<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$deptId = $_POST["id"];

$sql = "DELETE FROM department WHERE id = $deptId";

if ($conn->query($sql) === TRUE) {
    echo "Department deleted successfully.";
} else {
    echo "Error deleting Department: " . $conn->error;
}

$conn->close();
?>