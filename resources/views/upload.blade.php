<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Styles for file upload and preview buttons */
        #upload-btn,
        #preview-btn,
        #see-all,
        #reg {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        #upload-btn:hover,
        #preview-btn:hover,
        #see-all:hover,
        #reg:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Upload form with Preview and Upload buttons -->
<form id="upload-form" action="{{ route('upload.process') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" id="csv-file" accept=".csv">
    <button type="submit" id="upload-btn">Upload</button>
    <button type="button" id="preview-btn">Preview</button>
    <button type="button" id="see-all">See All</button>
    <button type="button" id="reg">Register New Student</button>
</form>

<!-- Preview content -->
<div id="preview-content"></div>

<!-- JavaScript for handling the preview and upload -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Listen for click on the Preview button
    document.getElementById('preview-btn').addEventListener('click', function() {
        // Get the selected file
        let file = document.getElementById('csv-file').files[0];
        
        // Check if a file is selected
        if (!file) {
            alert('Please select a CSV file.');
            return;
        }
        
        // Read the file content
        let reader = new FileReader();
        reader.onload = function(event) {
            // Split the CSV content by lines
            let lines = event.target.result.split('\n');

            // Create a table element
            let table = '<table>';

            // Loop through each line
            lines.forEach(function(line) {
                // Split the line by commas
                let cells = line.split(',');

                // Create a table row for each line
                table += '<tr>';

                // Loop through each cell
                cells.forEach(function(cell) {
                    // Add the cell content within table data (td)
                    table += '<td>' + cell + '</td>';
                });

                // Close the table row
                table += '</tr>';
            });

            // Close the table element
            table += '</table>';

            // Display the table in the preview-content div
            document.getElementById('preview-content').innerHTML = table;
        };
        reader.readAsText(file);
    });

    // Redirect to another route to view all students
    document.getElementById('see-all').addEventListener('click', function() {
        window.location.href = "{{ route('students.view') }}";
    });

    // Redirect to another route to register a new student
    document.getElementById('reg').addEventListener('click', function() {
        window.location.href = "{{ route('register') }}";
    });
});
</script>

</body>
</html>
