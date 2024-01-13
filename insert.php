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
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$designation = $_POST["designation"];
$department = $_POST["department"];
$basicSalary = $_POST["basicSalary"];
$joiningDate = $_POST["joiningDate"];
$address = $_POST["address"];

$photoName = $_FILES["photo"]["name"];
$photoTmpName = $_FILES["photo"]["tmp_name"];
$photoType = $_FILES["photo"]["type"];
$photoSize = $_FILES["photo"]["size"];
$photoError = $_FILES["photo"]["error"];

if ($photoError === 0) {
    $uploadPath = "uploads/" . basename($photoName);
    move_uploaded_file($photoTmpName, $uploadPath);
} else {
    echo "Error uploading photo.";
    exit;
}






$sql = "INSERT INTO employee (id, name, mobile, email, designation, department, basicsalary, joiningdate, address, photo)
        VALUES ( '$id','$name', '$mobile', '$email', '$designation', '$department', '$basicSalary', '$joiningDate', '$address', '$uploadPath')
        ON DUPLICATE KEY
        UPDATE name = '$name', mobile='$mobile', designation ='$designation', department='$department', basicsalary='$basicSalary', 
        joiningdate='$joiningDate', address='$address', photo='$uploadPath'";

if ($conn->query($sql) === TRUE) {
    echo "Employee Data inserted/Updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
