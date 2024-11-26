
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">

<div class="edit-container">
    <h1>Edit Project</h1>
    <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="title" value="{{ $project->title }}" required>
        </div>

        <div class="form-group">
            <label for="content">Project Description</label>
            <textarea name="content" rows="4" required>{{ $project->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" accept="image/*">
            @if($project->path)
            <div class="current-image">
                <p>Current Image:</p>
                <img src="{{ asset('storage/public/' . $project->path) }}" alt="Project Image">
            </div>
            @endif
        </div>

        <button type="submit" class="btn-submit">Update Project</button>
    </form>
</div>

<style>
    /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Centered container */
.edit-container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px 40px;
    width: 400px;
    text-align: center;
}

/* Form title */
.edit-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Form group styling */
.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
}

.form-group textarea {
    resize: none;
}

/* Current image section */
.current-image {
    text-align: center;
    margin-top: 10px;
}

.current-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-top: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Submit button */
.btn-submit {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
}

.btn-submit:hover {
    background-color: #0056b3;
}

/* Responsive design */
@media (max-width: 768px) {
    .edit-container {
        width: 90%;
        padding: 15px;
    }

    .btn-submit {
        font-size: 14px;
    }
}

</style>