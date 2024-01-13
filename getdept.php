<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM department";
$result = $conn->query($sql);
$options = '<option value="">Select Department</option>';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '"> ' . $row['name'] . '</option>';
}

echo $options;

$conn->close();






?>