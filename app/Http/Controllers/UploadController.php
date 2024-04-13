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
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt'
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
}
