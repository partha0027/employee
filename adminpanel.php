<?php
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"])) {
    
    header("Location: admin.php");
    exit();
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <header>
        <h1>Employee Directory</h1>
        <h2>Welcome, <?php echo $_SESSION["user_name"]; ?>!</h2>
    </header>

    <main>


        <div class="employee-card bg-dark">
            <img src="PNG.jpg" alt="Employee Photo">
            <p><a href="employee.php">Add/Update Employee Data</a>
            <p>



        </div>
        <div class="employee-card bg-dark">
            <img src="PNG.jpg" alt="Employee Photo">
            <p><a href="salary.php">Add/Update Salary Data</a>
            <p>

        </div>

        <div class="employee-card bg-dark">
            <img src="PNG.jpg" alt="Employee Photo">
            <p><a href="department.php">Add/Update Department</a>
            <p>

        </div>
        <div class="employee-card bg-dark">
            <img src="PNG.jpg" alt="Employee Photo">
            <p><a href="designation.php">Add/Update Designation</a>
            <p>

        </div>
        <div class="employee-card bg-dark">
            <img src="PNG.jpg" alt="Employee Photo">
            <p><a href="data.php">Add/Update System</a>
            <p>

        </div>

    </main>
    <footer>
        <p>&copy; 2023 Employee Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
</body>

</html>


