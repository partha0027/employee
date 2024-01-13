<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Employee</title>
</head>

<body>
    <div class="container-fluid mt-2">
        <h1 class="alert-info mb-3 p-3 text-center">
            Employee Directory
        </h1>

        <div class="row">
            <div class="col-sm-3">
                <h3 class="alert-warning p-2 text-center" style="color: grey;">Add/Update Employee</h3>
            <form action="" class="bg-dark text-white p-3"  id="myForm">
                <div>
                    <label for="studId" class="form-label" style="display: none">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" style="display: none" />
                    <label for="nameId" class="form-label">Name:</label>
                    <input type="text" class="form-control bg-dark text-white" id="name" name="name" />
                </div>
                <div>
                    <label for="emailId" class="form-label">Mobile:</label>
                    <input type="text" class="form-control bg-dark text-white" id="mobile" name="mobile" />
                </div>
                <div>
                    <label for="passwordId" class="form-label">Email:</label>
                    <input type="email" class="form-control bg-dark text-white" id="email" name="email" />
                </div>
                <div>
                    <label for="passwordId" class="form-label">Department:</label>
                    <select name="department" id="department" class="form-control bg-dark text-white">
                        <option value="">Select</option>
                        <option value="HR">HR</option>
                        <option value="IT">IT</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Design">Design</option>
                    </select>
                </div>
                <div>
                    <label for="passwordId" class="form-label">Designation:</label>
                    <select name="designation" id="designation" class="form-control bg-dark text-white">
                        <option value="">Select</option>
                        <option value="Manager">Manager</option>
                        <option value="Developer">Developer</option>
                        <option value="Analyst">Analyst</option>
                        <option value="Graphic Designer">Graphic Designer</option>
                    </select>

                </div>



                <div>
                    <label for="passwordId" class="form-label">Basic Salary:</label>
                    <input type="text" class="form-control bg-dark text-white" id="basicSalary" name="basicSalary" />
                </div>

                <div>
                    <label for="passwordId" class="form-label">Joining Date:</label>
                    <input type="date" class="form-control bg-dark text-white" id="joiningDate" name="joiningDate" />
                </div>

                <div>
                    <label for="passwordId" class="form-label">Address:</label>
                    <textarea  class="form-control bg-dark text-white" id="address" name="address"></textarea>
                </div>
                <div>
                    <label for="passwordId" class="form-label">Photo:</label>
                    <input type="file" class="form-control bg-dark text-white" id="photo" name="photo" />
                </div>


                <div class="mt-3">
                    <label for="" class="form-label"></label>
                    <button class="btn btn-primary" id="btnadd">Save</button>
                </div>

                <div id="msg"></div>
             </form>
                
            </div>
              
            <div class="col-sm-9 text-center">
                <h3 class="alert-warning p-2" style="color: grey;">Show Employee Information</h3>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Department</th>
                            <th scope="col">Basic Salary</th>
                            <th scope="col">Joining Date</th>
                            <th scope="col">Adress</th>
                            <th scope="col">Photo</th>
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
    <script src="jqajax.js"></script>
</body>

</html>