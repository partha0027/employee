<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM designation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo '<td>
                <button class="btn btn-sm btn-primary edit-btn" data-id="' . $row["id"] . '">Edit</button>
                <button class="btn btn-sm btn-danger delete-btn" data-id="' . $row["id"] . '">Delete</button>
              </td>';
        echo "</tr>";
       
     
       
    }
} else {
    echo "<tr><td colspan='11'>No records found</td></tr>";
}

$conn->close();





?>