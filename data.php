<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>System Settings</title>
</head>

<body>
    <div class="container-fluid mt-2">
        <h1 class="alert-info mb-3 p-3 text-center">
            Department
        </h1>

        <div class="row">
            <div class="col-sm-4">
                <h3 class="alert-warning p-2 text-center">Add/Update Departmnet</h3>
                <form action="" class="bg-dark text-white p-3" id="myForm">
                    <div>
                        <label for="studId" class="form-label" style="display: none">ID:</label>
                        <input type="text" class="form-control" id="id" name="id" style="display: none" />
                    </div>

                    <div>
                        <label for="passwordId" class="form-label">Dearness Allowance:</label>
                        <input type="text" class="form-control bg-dark text-white" id="da" name="da" />
                    </div>
                    <div>
                        <label for="passwordId" class="form-label">Travel Allowance</label>
                        <input type="text" class="form-control bg-dark text-white" id="ta" name="ta" />
                    </div>


                    <div class="mt-3">
                        <label for="" class="form-label"></label>
                        <button class="btn btn-primary" id="btnadd">Save</button>
                    </div>

                    <div id="msg"></div>

                </form>

            </div>



            <div class="col-sm-8 text-center">
                <h3 class="alert-warning p-2">Show Departmnet Information</h3>

                <table class="table table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Dearness Allowance(%)</th>
                            <th scope="col">Travel Allowance(%)</th>
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
    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: "insertdata.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $("#msg").html(response);
                    fetchdata();
                    $("#myForm")[0].reset();

                },
                error: function(error) {},
            });
        });

        function fetchdata() {
            $.ajax({
                url: "fetchdata.php",
                method: "GET",
                success: function(data) {
                    $("#tbody").html(data);
                },
                error: function(error) {},
            });
        }
        fetchdata();

        $(document).on("click", ".delete-btn", function() {
            var dataId = $(this).data("id");
            if (confirm("Are you sure you want to delete this student?")) {
                $.ajax({
                    url: "deletedata.php",
                    method: "POST",
                    data: {
                        id: dataId
                    },
                    success: function(response) {
                        $("#msg").html(response);
                        fetchdata();
                    },
                    error: function(error) {},
                });
            }
        });

        $(document).on("click", ".edit-btn", function() {
            var deptId = $(this).data("id");

            $.ajax({
                url: "editdata.php",
                type: "GET",
                data: {
                    id: deptId
                },
                success: function(response) {
                    var dept = JSON.parse(response);

                    $("#id").val(dept.id);
                    $("#da").val(dept.da);
                    $("#ta").val(dept.ta);

                    console.log(response);
                    fetchdata();
                },
                error: function(error) {},
            });
        });

    });
    </script>

</body>

</html>