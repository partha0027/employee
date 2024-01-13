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
    $deptId = $_GET["id"];

  
    $sql = "SELECT * FROM designation WHERE id = $deptId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $deptData = $result->fetch_assoc();
        echo json_encode($deptData);
    } else {
        echo "Data not found.";
    }
}

$conn->close();

?>