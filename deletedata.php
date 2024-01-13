<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dataId = $_POST["id"];

$sql = "DELETE FROM systemsettings WHERE id = $dataId";

if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully.";
} else {
    echo "Error deleting Data: " . $conn->error;
}

$conn->close();
?>