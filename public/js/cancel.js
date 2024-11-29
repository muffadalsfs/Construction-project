document.getElementById('removeImageBtn').addEventListener('click', function() {
    document.getElementById('currentImage').style.display = 'none';
    this.style.display = 'none';

    document.getElementById('removeImageCheckbox').checked = true;
    document.getElementById('fileInput').style.display = 'block';
    document.getElementById('fileLabel').style.display = 'block';
});

document.getElementById('fileInput').addEventListener('change', function() {
    if (this.files.length === 0) {
        document.getElementById('fileInput').style.display = 'none';
        document.getElementById('fileLabel').style.display = 'block';
    }
});

function validateForm() {
    const removeImageCheckbox = document.getElementById('removeImageCheckbox');
    const fileInput = document.getElementById('fileInput');

    // If image is marked for removal and no new file is selected, prevent submission
    if (removeImageCheckbox.checked && fileInput.files.length === 0) {
        alert("Please upload a new image or cancel the removal of the current image.");
        return false;
    }
    return true;
}