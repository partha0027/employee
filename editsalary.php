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
    $salaryId = $_GET["id"];

  
    $sql = "SELECT * FROM salary WHERE id = $salaryId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $salaryData = $result->fetch_assoc();
        echo json_encode($salaryData);
    } else {
        echo "Student not found.";
    }
}

$conn->close();

?>