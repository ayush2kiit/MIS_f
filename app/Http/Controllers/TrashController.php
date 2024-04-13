<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Std;
use resources\views;



class TrashController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }




    public function view(Request $request)
{
    $students = Std::all();
    return view('temp_del', ['student' => $students]);
   
}




public function move_to_database($adm_no){
    // Find the student with the provided admission number
    $student = Std::where('adm_no', $adm_no)->first();
    //dd($student);
    
    // Check if the student exists
    if ($student) {
        // Update the temp_del parameter to 1
        $student->temp_del = 1;
        $student->save();
        
        // Redirect back to the previous page
        return redirect()->back();
    } else {
        // Redirect back to the previous page with an error message
        return redirect()->back()->with('error', 'Student not found.');
    }
}


   



   
    
    
    
    
}
