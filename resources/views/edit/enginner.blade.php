<link rel="stylesheet" href="{{ asset('css/engineer-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/enginner.css') }}">

<div class="form-container">
    <h1 class="form-title">{{ isset($enginner) ? 'Edit Engineer' : 'Add New Engineer' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($enginner) ? route('engineers.update', $enginner->id) : route('enginners.store') }}" method="POST" enctype="multipart/form-data" class="engineer-form" id="engineerForm">
        @csrf
        @if (isset($enginner))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $enginner->name ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" id="file">
            
            @if (isset($enginner) && $enginner->path)
                <div class="current-image">
                    <p>Current Image:</p>
                    <img src="{{ url('storage/public/' . $enginner->path) }}" alt="Engineer Image">
                    <button type="button" class="cancel-button" id="cancelButton">&#10006;</button>
                </div>
            @endif
        </div>

        <button type="submit" class="submit-button">{{ isset($enginner) ? 'Update' : 'Add' }}</button>
    </form>
</div>

<style>
    /* Styling for cancel button in the top-right corner */
    .current-image {
        position: relative;
        display: inline-block;
    }

    .cancel-button {
        position: absolute;
        top: 45px;
        right: 5px;
        background: none;
        border: none;
        color: red;
        font-size: 24px;
        cursor: pointer;
    }

    .cancel-button:hover {
        color: darkred;
    }

    /* Initially hide the upload button if an image exists */
    #file {
        display: block;
    }

    .hide-upload {
        display: none;
    }

    /* Error styling */
    .error-message {
        color: red;
        font-size: 14px;
        margin-top: 10px;
    }
</style>

<script>
    // Get elements
    const fileInput = document.getElementById('file');
    const cancelButton = document.getElementById('cancelButton');
    const currentImageDiv = document.querySelector('.current-image');
    const form = document.getElementById('engineerForm');
    const uploadButton = document.getElementById('file');  // Upload button
    let isImageRemoved = false;

    // Initially hide the upload button if there's a current image
    if (currentImageDiv) {
        uploadButton.classList.add('hide-upload');
    }

    // Remove image and reset file input when cancel button is clicked
    if (cancelButton) {
        cancelButton.addEventListener('click', () => {
            fileInput.value = ''; // Reset file input
            currentImageDiv.style.display = 'none'; // Hide current image display
            uploadButton.classList.remove('hide-upload'); // Show the upload button again
            isImageRemoved = true; // Flag that image is removed
        });
    }

    // Show the upload button if no image is selected
    fileInput.addEventListener('change', () => {
        if (fileInput.files.length) {
            uploadButton.classList.add('hide-upload'); // Hide the upload button after selecting a file
        }
    });

    // Form validation before submission
    form.addEventListener('submit', function(event) {
        if (isImageRemoved && !fileInput.files.length) {
            event.preventDefault(); // Prevent form submission
            alert("Please upload a new image or keep the existing one.");
        }
    });
</script>
