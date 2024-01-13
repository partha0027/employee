$(document).ready(function () {
  $.ajax({
    type: "GET",
    url: "getemployee.php",
    success: function (data) {
      $("#employeeId").html(data);
    },
  });

  $("#employeeId").on("change", function () {
    var employeeId = $(this).val();
    $.ajax({
      type: "GET",
      url: "getbasicsalary.php",
      data: { employeeId: employeeId },
      success: function (data) {
        $("#basicsalary").html(data);
      },
    });
  });

  $("#myForm").submit(function (event) {
    event.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: "insertsalary.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        $("#msg").html(response);

        $("#myForm")[0].reset();
        fetchsalary();
      },
      error: function (_error) {},
    });
  });

  function fetchsalary() {
    $.ajax({
      url: "fetchsalary.php",
      method: "GET",
      success: function (data) {
        $("#tbody").html(data);
      },
      error: function (_error) {},
    });
  }
  fetchsalary();

  $(document).on("click", ".delete-btn", function () {
    var salaryId = $(this).data("id");
    if (confirm("Are you sure you want to delete this student?")) {
      $.ajax({
        url: "deletesalary.php",
        method: "POST",
        data: { id: salaryId },
        success: function (response) {
          $("#msg").html(response);
          fetchsalary();
        },
        error: function (_error) {},
      });
    }
  });

  $(document).on("click", ".edit-btn", function () {
    var salaryId = $(this).data("id");

    $.ajax({
      url: "editsalary.php",
      type: "GET",
      data: { id: salaryId },
      success: function (response) {
        var salary = JSON.parse(response);

        $("#id").val(salary.id);
        $("#employeeId").val(salary.employeeId);
        $("#basicsalary").val(salary.basicsalary);
        $("#attendance").val(salary.attendance);
        $("#month").val(salary.month);
        $("#year").val(salary.year);
        console.log(salary.basicsalary);
        console.log(response);
        fetchsalary();
      },
      error: function (_error) {},
    });
  });
});
