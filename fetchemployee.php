<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["employeeId"]) && isset($_GET["month"])) {
    $employeeId = $_GET["employeeId"];
    $month = $_GET["month"];

  
    $sql = "SELECT * FROM `salary` WHERE `employeeId` = '$employeeId' AND `month` = '$month'";
    $result = $conn->query($sql);

    $salaryData = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $salaryData[] = $row;
        }
        echo json_encode($salaryData);
    } else {
        echo json_encode(array());
    }
}

$conn->close();
?>
