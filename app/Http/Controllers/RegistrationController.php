<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Std;
use resources\views;



class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $std = new Std;
        $std->adm_no = $request['adm_no'];
        $std->name = $request['name'];
        $std->certificate_number = $request['certificate_number'];
        $std->course = $request['course'];
        $std->branch = $request['branch'];
        $std->ogpa = $request['ogpa'];
        $std->ogpa_h = $request['ogpa_h'];
        $std->final_ogpa = $request['final_ogpa'];
        $std->date_of_result = $request['date_of_result'];
        $std->yop = $request['yop'];
        $std->dept_id = $request['dept_id'];
        $std->course_id = $request['course_id'];
        $std->branch_id = $request['branch_id'];
        $std->department_name = $request['department_name'];
        
        $std->save();

        return redirect('/students/view');
        
    }


    public function view(Request $request)
{
    $search_adm_no = $request->input('search_adm_no', ''); // Get the value of the 'search_adm_no' input from the request
    $search_name = $request->input('search_name', ''); // Get the value of the 'search_name' input from the request
    $search_certificate_number = $request->input('search_certificate_number', ''); // Get the value of the 'search_certificate_number' input from the request
    $search_course = $request->input('search_course', ''); // Get the value of the 'search_course' input from the request
    $search_branch = $request->input('search_branch', ''); // Get the value of the 'search_branch' input from the request
    $search_overall_gpa = $request->input('search_overall_gpa', ''); // Get the value of the 'search_overall_gpa' input from the request
    $search_another_gpa = $request->input('search_another_gpa', ''); // Get the value of the 'search_another_gpa' input from the request
    $search_final_gpa = $request->input('search_final_gpa', ''); // Get the value of the 'search_final_gpa' input from the request
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');
    $start_year_of_passing = $request->input('start_year_of_passing', ''); // Get the value of the 'search_year_of_passing' input from the request
    $end_year_of_passing = $request->input('end_year_of_passing', '');
    $search_dept_id = $request->input('search_dept_id', ''); // Get the value of the 'search_dept_id' input from the request
    $search_course_id = $request->input('search_course_id', ''); // Get the value of the 'search_course_id' input from the request
    $search_branch_id = $request->input('search_branch_id', ''); // Get the value of the 'search_branch_id' input from the request
    $search_department_name = $request->input('search_department_name', ''); // Get the value of the 'search_department_name' input from the request
    $start_ogpa = $request->input('start_ogpa');
    $end_ogpa = $request->input('end_ogpa');

    // Initialize query builder
    $query = Std::query();

    // Apply search conditions if provided
    if (!empty($search_adm_no)) {
        $query->where('adm_no', '=', $search_adm_no);
    }

    if (!empty($search_name)) {
        $query->where('name', '=', $search_name);
    }

    if (!empty($search_certificate_number)) {
        $query->where('certificate_number', '=', $search_certificate_number);
    }

    if (!empty($search_course)) {
        $query->where('course', '=', $search_course);
    }

    if (!empty($search_branch)) {
        $query->where('branch', '=', $search_branch);
    }

    if (!empty($start_ogpa) || !empty($end_ogpa)) {
        $start_ogpa = !empty($start_ogpa) ? $start_ogpa : 0;
        $end_ogpa = !empty($end_ogpa) ? $end_ogpa : 10;
        $query->whereBetween('ogpa', [$start_ogpa, $end_ogpa]);
    }

    if (!empty($search_another_gpa)) {
        $query->where('ogpa_h', '=', $search_another_gpa);
    }

    if (!empty($search_final_gpa)) {
        $query->where('final_ogpa', '=', $search_final_gpa);
    }

    if (!empty($start_date) || !empty($end_date)) {
        $start_date = !empty($start_date) ? $start_date : '1900-01-01';
        $end_date = !empty($end_date) ? $end_date : '2050-12-12';

        $query->whereBetween('date_of_result', [$start_date, $end_date]);
    }

    if (!empty($start_year_of_passing) || !empty($end_year_of_passing)) {

        $start_year_of_passing = !empty($start_year_of_passing) ? $start_year_of_passing : 0;
        $end_year_of_passing = !empty($end_year_of_passing) ? $end_year_of_passing : 3000;

        $query->whereBetween('yop', [$start_year_of_passing, $end_year_of_passing]);
    }

    if (!empty($search_dept_id)) {
        $query->where('dept_id', '=', $search_dept_id);
    }

    if (!empty($search_course_id)) {
        $query->where('course_id', '=', $search_course_id);
    }

    if (!empty($search_branch_id)) {
        $query->where('branch_id', '=', $search_branch_id);
    }

    if (!empty($search_department_name)) {
        $query->where('department_name', '=', $search_department_name);
    }

    // Get the results
    $students = $query->get();

    return view('student-view', [
        'student' => $students,
        'search_adm_no' => $search_adm_no,
        'search_name' => $search_name,
        'search_certificate_number' => $search_certificate_number,
        'search_course' => $search_course,
        'search_branch' => $search_branch,
        'search_overall_gpa' => $search_overall_gpa,
        'search_another_gpa' => $search_another_gpa,
        'search_final_gpa' => $search_final_gpa,
        
        'start_ogpa' => $start_ogpa,
        'end_ogpa' => $end_ogpa,


        'start_date'=>$start_date,
        'end_date'=>$end_date,
       // 'search_year_of_passing' => $search_year_of_passing,
        'start_year_of_passing'=> $start_year_of_passing,
        'end_year_of_passing'=> $end_year_of_passing,

        'search_dept_id' => $search_dept_id,
        'search_course_id' => $search_course_id,
        'search_branch_id' => $search_branch_id,
        'search_department_name' => $search_department_name
    ]);
}


   


//this was the view by adm_no

//     public function view(Request $request)
// {
//     $search = $request->input('search', ''); // Get the value of the 'search' input from the request

//     // Perform search if search term is provided
//     if ($search != "") {
//         $students = Std::where('adm_no', '=', $search)->get();
//     } else {
//         // Fetch all students when no search is performed
//         $students = Std::all();
//     }

//     return view('student-view', ['student' => $students, 'search' => $search]);
// }

    

    // public function delete($adm_no){
    //     // Find the student with the provided admission number
    //     $student = Std::where('adm_no', $adm_no)->first();
        
    //     // Check if the student exists
    //     if ($student) {
    //         // Delete the student record
    //         $student->delete();
            
    //         // Redirect back to the previous page
    //         return redirect()->back()->with('success', 'Student deleted successfully.');
    //     } else {
    //         // Redirect back to the previous page with an error message
    //         return redirect()->back()->with('error', 'Student not found.');
    //     }
    // }


    public function delete($adm_no){
        // Find the student with the provided admission number
        $student = Std::where('adm_no', $adm_no)->first();
        
        // Check if the student exists
        if ($student) {
            // Update the temp_del parameter to 0
            $student->temp_del = 0;
            $student->save();
            
            // Redirect back to the previous page
            return redirect()->back()->with('success', 'Student marked as deleted successfully.');
        } else {
            // Redirect back to the previous page with an error message
            return redirect()->back()->with('error', 'Student not found.');
        }
    }
    
    
    
    
}
