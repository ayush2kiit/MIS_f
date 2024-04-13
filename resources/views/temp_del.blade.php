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
            @if($data->temp_del == 0)
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
                        <a href="{{url('/bin')}}/{{$data->adm_no}}">
                            <button type="submit" class="btn badge-danger">move to database</button>
                        </a>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>


</body>
</html>