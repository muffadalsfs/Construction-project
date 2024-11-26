<h1 class="form-title">Edit Tool</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tools.update', $tool->id) }}" method="POST" enctype="multipart/form-data" class="edit-tool-form">
    @csrf
    @method('PUT')

    <label for="name">Tool Name</label>
    <input type="text" name="name" value="{{ $tool->name }}" required>

    <label for="description">Description</label>
    <textarea name="price" required>{{ $tool->price }}</textarea>

    <label for="file">Replace Image (Optional)</label>
    <input type="file" name="file">

    @if ($tool->path)
        <p>Current Image:</p>
        <img src="{{ asset('storage/public/' . $tool->path) }}" alt="Current Tool Image" style="max-width: 200px;">
    @endif

    <button type="submit">Update Tool</button>
</form>

<style>
/* Center the form title */
.form-title {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Form styling */
.edit-tool-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #f9f9fc;
}

/* Label and input styling */
.edit-tool-form label {
    display: block;
    margin-top: 10px;
    font-size: 16px;
}

.edit-tool-form input[type="text"],
.edit-tool-form textarea,
.edit-tool-form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Submit button styling */
.edit-tool-form button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.edit-tool-form button:hover {
    background-color: #0056b3;
}

/* Image preview styling */
.edit-tool-form img {
    display: block;
    margin: 10px auto;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>
