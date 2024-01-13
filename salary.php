<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Salary</title>
</head>

<body>
    <div class="container-fluid mt-2">
        <h1 class="alert-info mb-3 p-3 text-center">
            Employee Salary
        </h1>

        <div class="row">
            <div class="col-sm-4">
                <h3 class="alert-warning p-2 text-center" style="color: gray;">Add/Update Employee</h3>
                <form action="" class="bg-dark text-white p-3" id="myForm">
                    <div>
                        <label for="studId" class="form-label" style="display: none">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" style="display: none" />

                    </div>
                    <div>
                        <label for="employeeId" class="form-label">Employee ID & Name:</label>
                        <select id="employeeId" name="employeeId" class="form-control  bg-dark text-white">
                            <option value="">Select an employee</option>
                        </select>

                    </div>
                    <div>
                        <label for="basicsalary" class="form-label">Basic Salary:</label>
                        <select id="basicsalary" name="basicsalary" class="form-control  bg-dark text-white"></select>
                    </div>

                    <div>
                        <label for="attendance" class="form-label">Attendance:</label>
                        <input type="text" class="form-control  bg-dark text-white" id="attendance" name="attendance" />
                    </div>
                    <div>
                        <label for="passwordId" class="form-label">Month:</label>
                        <input type="text" class="form-control  bg-dark text-white" id="month" name="month" />
                    </div>
                    <div>
                        <label for="passwordId" class="form-label">Year:</label>
                        <input type="text" class="form-control  bg-dark text-white" id="year" name="year" />
                    </div>

                    <div class="mt-3">
                        <label for="" class="form-label"></label>
                        <button class="btn btn-primary" id="btnadd">Save</button>
                    </div>

                    <div id="msg"></div>

                </form>


            </div>


            <div class="col-sm-8 text-center">
                <h3 class="alert-warning p-2" style="color: grey;">Show Employee Information</h3>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Employee ID</th>
                            <th scope="col">Basic Salary</th>
                            <th scope="col">Attendance</th>
                            <th scope="col">Month</th>
                            <th scope="col">Year</th>
                            <th scope="col">Total Salary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>