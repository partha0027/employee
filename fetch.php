<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directory";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["mobile"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["designation"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td>" . $row["basicsalary"] . "</td>";
        echo "<td>" . $row["joiningdate"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo '<td><img src="' . $row["photo"] . '" alt="Photo" width="50" height="50"></td>';
        echo '<td>
                <button class="btn btn-sm btn-primary edit-btn" data-id="' . $row["id"] . '">Edit</button>
                <br>
                <button class="btn btn-sm mt-1 btn-danger delete-btn" data-id="' . $row["id"] . '">Delete</button>
              </td>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='11'>No records found</td></tr>";
}

$conn->close();
?>
