<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST["id"];
$da = $_POST["da"];
$ta = $_POST["ta"];
 $query = "INSERT INTO `systemsettings` (id,da,ta)
           VALUES ('$id','$da','$ta') ON DUPLICATE KEY UPDATE da='$da', ta='$ta'";


 if ($conn->query($query) === TRUE) {
    echo "Data inserted successfully!";
 } else {
     echo "Error inserting  details: " . $connection->error;
 }



?>