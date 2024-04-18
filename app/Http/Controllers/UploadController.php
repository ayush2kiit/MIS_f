<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use resources\views;



use App\Models\Std; // Make sure to import your Student model

class UploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

   
    public function upload(Request $request)
    {


      // dd( $request->file('csv_file')->getPathname());
    //     dd($request);

    //    echo($request);
        $request->validate([
             'csv_file' => 'required|mimes:csv,txt'
             
            // 'csv_file' => 'required'
        ]);

        if (($handle = fopen($request->file('csv_file')->getPathname(), 'r')) !== false) {
            $headers = fgetcsv($handle); // Read the header row
            while (($data = fgetcsv($handle)) !== false) {
                $row = array_combine($headers, $data); // Combine header with data
                // Create a new Student record
                Std::create($row);
            }
            fclose($handle);
        }

        return redirect()->route('upload.form')->with('success', 'CSV file uploaded successfully');
    }

    //

//no need of this

//     public function uploadCsv(Request $request)
// {
//     $csvData = $request->input('csv_file'); // Assuming 'csv_file' is the key for the CSV string in the request payload

//     // Split the CSV string into an array of rows
//     $rows = explode("\r\n", $csvData);

//     // Extract headers from the first row
//     $headers = str_getcsv(array_shift($rows));

//     // Process each row and store in the database
//     foreach ($rows as $row) {
//         $rowData = str_getcsv($row);
//         if (count($rowData) !== count($headers)) {
//             // Skip rows that do not have the same number of columns as headers
//             continue;
//         }
//         $data = array_combine($headers, $rowData);

//         // Create a new Std model instance and fill it with data
//         $std = new Std();
//         foreach ($data as $key => $value) {
//             $std->{$key} = $value;
//         }
//         $std->save();
//     }

//     return response()->json(['message' => 'CSV data stored successfully']);
// }
//
}
