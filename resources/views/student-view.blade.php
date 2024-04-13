<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
                <div class="row m-2">
                    <form action="" class="col-9">
                    <div class="form-group">
                <label for="adm_no_search">Search by Admission Number</label>
                <input type="search" name="search_adm_no" id="adm_no_search" class="form-control" placeholder="Search by adm_no" value="{{$search_adm_no}}" >
                </div>

                <div class="form-group">
                    <label for="name_search">Search by Name</label>
                    <input type="search" name="search_name" id="name_search" class="form-control" placeholder="Search by name" value="{{$search_name}}" >
                </div>

                <div class="form-group">
                    <label for="certificate_number_search">Search by Certificate Number</label>
                    <input type="search" name="search_certificate_number" id="certificate_number_search" class="form-control" placeholder="Search by certificate number" value="{{$search_certificate_number}}" >
                </div>

                <div class="form-group">
                    <label for="course_search">Search by Course</label>
                    <input type="search" name="search_course" id="course_search" class="form-control" placeholder="Search by course" value="{{$search_course}}" >
                </div>

                <div class="form-group">
                    <label for="branch_search">Search by Branch</label>
                    <input type="search" name="search_branch" id="branch_search" class="form-control" placeholder="Search by branch" value="{{$search_branch}}" >
                </div>

                <div class="form-group">
                    <label for="start_ogpa">Start Overall GPA</label>
                    <input type="number" name="start_ogpa" id="start_ogpa" class="form-control" placeholder="Start overall GPA" value="{{$start_ogpa}}" step="0.01">
                </div>

                <div class="form-group">
                     <label for="end_ogpa">End Overall GPA</label>
                     <input type="number" name="end_ogpa" id="end_ogpa" class="form-control" placeholder="End overall GPA" value="{{$end_ogpa}}" step="0.01">
                </div>


                <div class="form-group">
                    <label for="another_gpa_search">Search by Another GPA</label>
                    <input type="search" name="search_another_gpa" id="another_gpa_search" class="form-control" placeholder="Search by another GPA" value="{{$search_another_gpa}}" >
                </div>

                <div class="form-group">
                    <label for="final_gpa_search">Search by Final GPA</label>
                    <input type="search" name="search_final_gpa" id="final_gpa_search" class="form-control" placeholder="Search by final GPA" value="{{$search_final_gpa}}" >
                </div>

                <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{$start_date}}">
                </div>

                 <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="{{$end_date}}">
                </div>



                <div class="form-group">
                    <label for="start_year_of_passing">Start Year of Passing</label>
                    <input type="number" name="start_year_of_passing" id="start_year_of_passing" class="form-control" placeholder="Start year of passing" value="{{$start_year_of_passing}}" min="0" oninput="validity.valid||(value='');">
                </div>

                <div class="form-group">
                    <label for="end_year_of_passing">End Year of Passing</label>
                    <input type="number" name="end_year_of_passing" id="end_year_of_passing" class="form-control" placeholder="End year of passing" value="{{$end_year_of_passing}}" min="0" oninput="validity.valid||(value='');">
                </div>


                <div class="form-group">
                    <label for="dept_id_search">Search by Department ID</label>
                    <input type="search" name="search_dept_id" id="dept_id_search" class="form-control" placeholder="Search by department ID" value="{{$search_dept_id}}" >
                </div>

                <div class="form-group">
                    <label for="course_id_search">Search by Course ID</label>
                    <input type="search" name="search_course_id" id="course_id_search" class="form-control" placeholder="Search by course ID" value="{{$search_course_id}}" >
                </div>

                <div class="form-group">
                    <label for="branch_id_search">Search by Branch ID</label>
                    <input type="search" name="search_branch_id" id="branch_id_search" class="form-control" placeholder="Search by branch ID" value="{{$search_branch_id}}" >
                </div>

                <div class="form-group">
                    <label for="department_name_search">Search by Department Name</label>
                    <input type="search" name="search_department_name" id="department_name_search" class="form-control" placeholder="Search by department name" value="{{$search_department_name}}" >
                </div>

            <button class="btn btn-primary">Submit</button>
            
            <a href="{{ route('bin.view') }}" class="btn btn-primary">See trash</a>


        </form>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Admission Number</th>
            <th>Name</th>
            <th>Certificate Number</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Overall GPA</th>
            <th>Another GPA</th>
            <th>Final GPA</th>
            <th>Date of Result</th>
            <th>Year of Passing</th>
            <th>Department ID</th>
            <th>Course ID</th>
            <th>Branch ID</th>
            <th>Department Name</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($student as $data)
            @if($data->temp_del == 1)
                <tr>
                    <td>{{ $data->adm_no }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->certificate_number }}</td>
                    <td>{{ $data->course }}</td>
                    <td>{{ $data->branch }}</td>
                    <td>{{ $data->ogpa_h }}</td>
                    <td>{{ $data->final_ogpa }}</td>
                    <td>{{ $data->ogpa }}</td>
                    <td>{{ $data->date_of_result }}</td>
                    <td>{{ $data->yop }}</td>
                    <td>{{ $data->dept_id }}</td>
                    <td>{{ $data->course_id }}</td>
                    <td>{{ $data->branch_id }}</td>
                    <td>{{ $data->department_name }}</td>
                    <td>
                        <a href="{{url('/student/delete/')}}/{{$data->adm_no}}">
                            <button type="submit" class="btn badge-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
