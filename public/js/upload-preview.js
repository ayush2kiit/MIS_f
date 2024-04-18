function togglePreview() {
    var previewSection = document.getElementById('preview-section');
    if (previewSection.style.display === 'none') {
        // Show preview section
        previewSection.style.display = 'block';
        // Send AJAX request to fetch and display preview data
        var formData = new FormData();
        var fileInput = document.querySelector('input[type="file"]');
        formData.append('csv_file', fileInput.files[0]);
        fetch('{{ route("upload.preview") }}', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            previewSection.innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    } else {
        // Hide preview section
        previewSection.style.display = 'none';
    }
}
