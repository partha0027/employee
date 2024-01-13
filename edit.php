<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $employeeId = $_GET["id"];

   
    $sql = "SELECT * FROM employee WHERE id = $employeeId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "Employee not found.";
    }
}

$conn->close();
?>