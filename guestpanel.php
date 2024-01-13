<?php
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"])) {
 
    header("Location: guest.php");
    exit();
}

?>

<!DOCTYPE html>
    <html>

    <head>
        <title>Guest Panel</title>

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
                
                <input type="hidden" id="employeeIdFilter" value="<?php echo $_SESSION["user_id"];?>" name="employeeIdFilter" class="form-control bg-dark text-white" required
                    autocomplete="off" placeholder="Enter Your ID">
                <!-- <select id="employeeIdFilter" class="form-control">
                        <option value="0">Select Employee ID/Name</option>
                        <option value="3">3-Paban Saharia</option>
                        <option value="1">1-Parha Pratim Mali</option>
                        <option value="6">6-Priyanka Kalita</option>
                        <option value="7">7-Bikash Das</option>
                        <option value="9">9-Bidisha Deka</option>
                        Populate options with employee IDs -->
                <!-- </select> -->

                <select id="monthFilter" class="form-control mt-1 form-control bg-dark text-white">
                    <option value="">Select Month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="Aprils">Aprils</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>

                </select>
                <button id="fetchDataBtn" class="btn btn-primary mt-1">Fetch Employee Data</button>
            </div>
        </main>

        

        <div class="container-fluid">
            <div class="row">


                <div class="col-sm-12 text-center">

                    <table class="table w-100 table-dark table-striped" style="display: none;">
                        <thead>
                            <tr>
                               
                                <th scope="col">Basic Salary</th>
                                <th scope="col">Attendance</th>
                                <th scope="col">Month</th>
                                <th scope="col">Year</th>
                                <th scope="col">Total Salary</th>

                            </tr>
                        </thead>
                        <tbody id="tbody"></tbody>
                    </table>
                </div>
            </div>
        </div>

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

        <script>
        $(document).ready(function() {
            $("#fetchDataBtn").click(function() {
                var employeeId = $("#employeeIdFilter").val();
                var month = $("#monthFilter").val();

                $.ajax({
                    type: "GET",
                    url: "fetchemployee.php",
                    data: {
                        employeeId: employeeId,
                        month: month
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#tbody").empty();

                        for (var i = 0; i < data.length; i++) {
                            var employee = data[i];
                            var row = `<tr>
                         
                            <td>${employee.basicsalary}</td>
                            <td>${employee.attendance}</td>
                            <td>${employee.month}</td>
                            <td>${employee.year}</td>
                            <td>${employee.totalsalary}</td>
                        </tr>`;
                            $("#tbody").append(row);
                        }
                        $(".table").show();
                    },
                    error: function(error) {
                        console.log("Error:", error);
                    }
                });
            });
        });
        </script>
    </body>

    </html>


