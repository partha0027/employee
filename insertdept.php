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
$name = $_POST["name"];
 $query = "INSERT INTO department (id,name)
           VALUES ('$id','$name') ON DUPLICATE KEY UPDATE name='$name'";


 if ($conn->query($query) === TRUE) {
    echo "Department details inserted/Updated successfully!";
 } else {
     echo "Error inserting Department details: " . $connection->error;
 }



?>