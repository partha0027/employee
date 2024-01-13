$(document).ready(function () {
  $("#myForm").submit(function (event) {
    event.preventDefault();

    var formData = new FormData(this);
    var photoInput = $("#photo")[0].files[0];
    formData.append("photo", photoInput);

    $.ajax({
      url: "insert.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        $("#msg").html(response);
        fetchemployee();
        $("#myForm")[0].reset();

      
      },
      error: function (_error) {},
    });
  });

  function fetchemployee() {
    $.ajax({
      url: "fetch.php",
      method: "GET",
      success: function (response) {
        $("#tbody").html(response);
      },
      error: function (_error) {},
    });
  }
  fetchemployee();

  $(document).on("click", ".delete-btn", function () {
    var employeeId = $(this).data("id");
    if (confirm("Are you sure you want to delete this student?")) {
      $.ajax({
        url: "delete.php",
        method: "POST",
        data: { id: employeeId },
        success: function (response) {
          $("#msg").html(response);
          fetchemployee();
        },
        error: function (_error) {},
      });
    }
  });

  $(document).on("click", ".edit-btn", function () {
    var employeeId = $(this).data("id");

    $.ajax({
      url: "edit.php",
      type: "GET",
      data: { id: employeeId },
      success: function (response) {
        var employee = JSON.parse(response);

        $("#id").val(employee.id);
        $("#name").val(employee.name);
        $("#mobile").val(employee.mobile);
        $("#email").val(employee.email);
        $("#designation").val(employee.designation);
        $("#department").val(employee.department);
        $("#basicSalary").val(employee.basicsalary);
        $("#joiningDate").val(employee.joiningdate);
        $("#address").val(employee.address);
        $("#photo").val(employee.photo);
        fetchemployee();
      },
      error: function (_error) {},
    });
  });
});
