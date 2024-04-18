<!-- <form method="POST" action="{{ route('store_student') }}">
    @csrf
    <label for="adm_no">Admission Number:</label>
    <input type="text" id="adm_no" name="adm_no" required><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="certificate_number">Certificate Number:</label>
    <input type="text" id="certificate_number" name="certificate_number" required><br>

    <label for="course">Course:</label>
    <input type="text" id="course" name="course" required><br>

    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch" required><br>

    <label for="ogpa">OGPA:</label>
    <input type="text" id="ogpa" name="ogpa" required><br>

    <label for="ogpa_h">OGPA_H:</label>
    <input type="text" id="ogpa_h" name="ogpa_h" required><br>

    <label for="final_ogpa">Final OGPA:</label>
    <input type="text" id="final_ogpa" name="final_ogpa" required><br>

    <label for="date_of_result">Date of Result:</label>
    <input type="date" id="date_of_result" name="date_of_result" required><br>

    <label for="yop">Year of Passing:</label>
    <input type="text" id="yop" name="yop" required><br>

    <label for="dept_id">Department ID:</label>
    <input type="text" id="dept_id" name="dept_id" required><br>

    <label for="course_id">Course ID:</label>
    <input type="text" id="course_id" name="course_id" required><br>

    <label for="branch_id">Branch ID:</label>
    <input type="text" id="branch_id" name="branch_id" required><br>

    <label for="department_name">Department Name:</label>
    <input type="text" id="department_name" name="department_name" required><br>

    <button type="submit">Submit</button>
</form> -->
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<form action="{{url('/')}}/register" method="post">
@csrf
    <div class="container">
        <h1 class="text-center">reg</h1>


        <div class="form-group">
    <label for="adm_no">Admission Number</label>
    <input type="text" name="adm_no" id="" class="form-control" placeholder="Enter admission number" aria-describedby="admNoHelp">
    <small id="admNoHelp" class="text-muted">Enter admission number (max 20 characters)</small>
</div>

<div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Help text</small>
        </div>


<div class="form-group">
    <label for="certificate_number">Certificate Number</label>
    <input type="text" name="certificate_number" id="" class="form-control" placeholder="Enter certificate number" aria-describedby="certificateNumberHelp">
    <small id="certificateNumberHelp" class="text-muted">Enter certificate number (max 20 characters)</small>
</div>

<div class="form-group">
    <label for="course">Course</label>
    <input type="text" name="course" id="" class="form-control" placeholder="Enter course" aria-describedby="courseHelp">
    <small id="courseHelp" class="text-muted">Enter course name (max 20 characters)</small>
</div>

<div class="form-group">
    <label for="branch">Branch</label>
    <input type="text" name="branch" id="" class="form-control" placeholder="Enter branch" aria-describedby="branchHelp">
    <small id="branchHelp" class="text-muted">Enter branch name (max 20 characters)</small>
</div>

<div class="form-group">
    <label for="ogpa">Overall Grade Point Average</label>
    <input type="number" name="ogpa" id="" class="form-control" placeholder="Enter OGPA" aria-describedby="ogpaHelp" step="0.01">
    <small id="ogpaHelp" class="text-muted">Enter overall grade point average (e.g., 5.00)</small>
</div>

<div class="form-group">
    <label for="ogpa_h">Another Grade Point Average</label>
    <input type="number" name="ogpa_h" id="" class="form-control" placeholder="Enter OGPA_H" aria-describedby="ogpaHHelp" step="0.01">
    <small id="ogpaHHelp" class="text-muted">Enter another grade point average (e.g., 5.00)</small>
</div>

<div class="form-group">
    <label for="final_ogpa">Final Grade Point Average</label>
    <input type="number" name="final_ogpa" id="" class="form-control" placeholder="Enter final OGPA" aria-describedby="finalOgpaHelp" step="0.01">
    <small id="finalOgpaHelp" class="text-muted">Enter final grade point average (e.g., 5.00)</small>
</div>

<div class="form-group">
    <label for="date_of_result">Date of Result</label>
    <input type="date" name="date_of_result" id="" class="form-control" aria-describedby="dateOfResultHelp">
    <small id="dateOfResultHelp" class="text-muted">Select date of result</small>
</div>

<div class="form-group">
    <label for="yop">Year of Passing</label>
    <input type="number" name="yop" id="" class="form-control" placeholder="Enter year of passing" aria-describedby="yopHelp">
    <small id="yopHelp" class="text-muted">Enter year of passing (e.g., 2022)</small>
</div>

<div class="form-group">
    <label for="dept_id">Department ID</label>
    <input type="text" name="dept_id" id="" class="form-control" placeholder="Enter department ID" aria-describedby="deptIdHelp">
    <small id="deptIdHelp" class="text-muted">Enter department ID (max 10 characters)</small>
</div>

<div class="form-group">
    <label for="course_id">Course ID</label>
    <input type="text" name="course_id" id="" class="form-control" placeholder="Enter course ID" aria-describedby="courseIdHelp">
    <small id="courseIdHelp" class="text-muted">Enter course ID (max 10 characters)</small>
</div>

<div class="form-group">
    <label for="branch_id">Branch ID</label>
    <input type="text" name="branch_id" id="" class="form-control" placeholder="Enter branch ID" aria-describedby="branchIdHelp">
    <small id="branchIdHelp" class="text-muted">Enter branch ID (max 10 characters)</small>
</div>

<div class="form-group">
    <label for="department_name">Department Name</label>
    <input type="text" name="department_name" id="" class="form-control" placeholder="Enter department name" aria-describedby="departmentNameHelp">
    <small id="departmentNameHelp" class="text-muted">Enter department name</small>
</div>


        <button class="btn btn-primary" id="submit"> submit</button>


    </div>

</form>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Listen for click on the Preview button
    


    document.getElementById('submit').addEventListener('click', function() {
        // Redirect to another route
        window.location.href = "{{ route('students.view') }}";
    });

    //
});
</script>

      
   
  </body>
</html>