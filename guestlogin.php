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
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username= $_POST["username"];
    $password= $_POST["password"];
    
    $sql= "SELECT * FROM `guest` WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        if (password_verify($password, $hashedPassword)) {
            
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["username"];

            
            header("Location: guestpanel.php");
            exit();
        } else {
            $_SESSION["login_error"] = "Invalid password. Please try again.";
            header("Location: guest.php");
            exit();
          
        }
    } else {
        $_SESSION["login_error"] = "User not found. Please sign up.";
        header("Location: guest.php");
        exit();
        
    }
}





?>