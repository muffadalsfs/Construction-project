<link rel="stylesheet" href="{{ asset('css/blogedit.css') }}">

<h1>Edit Your Blog</h1>
<form action="/update/{{$blog->id}}" method="POST" enctype="multipart/form-data" class="edit-form" onsubmit="return validateForm()">
    @csrf
    @method('PUT')
    
    <label for="title">name</label>
    <input type="text" name="title" value="{{ $blog->title }}" required class="input-field">

    <label for="content">content</label>
    <textarea name="content" required class="textarea-field">{{ $blog->content }}</textarea>

    @if($blog->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $blog->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif

    <label for="file" id="fileLabel" style="display: {{ $blog->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $blog->path ? 'none' : 'block' }};">
    
    <button type="submit" class="submit-button">Update Blog</button>
    <a href="{{ url('list') }}" class="cancel-link">Cancel</a>
</form>

<script>
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
</script>
<style>
    /* General Page Styling */
/* Edit Page Title */
.edit-title {
    text-align: center;
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
    font-family: Arial, sans-serif;
    
}

/* Form Styling */
.edit-form {
    max-width: 600px;
    margin: 0 auto;
    background: #fff;
    padding: 20px 30px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Form Labels */
.edit-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: bold;
    color: #555;
}

/* Input Fields */
.input-field, 
.textarea-field, 
.file-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Textarea Field */
.textarea-field {
    height: 120px;
    resize: none;
}

/* Current Image Container */
.image-container {
    margin-bottom: 15px;
    text-align: center;
}

.current-image-thumbnail {
    max-width: 100%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
}

/* Remove Image Button */
.remove-image-btn {
    background: #ff4d4d;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    position: relative;
    top: -20px;
    left: 10px;
}

.remove-image-btn:hover {
    background: #e60000;
}

/* Submit Button */
.submit-button {
    display: block;
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background: #0056b3;
}

/* Cancel Link */
.cancel-link {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    font-size: 14px;
    color: #555;
    text-align: center;
}

.cancel-link:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .edit-form {
        padding: 15px 20px;
    }
    
    .edit-title {
        font-size: 24px;
    }
}

</style>