
<link rel="stylesheet" href="{{ asset('css/engineer-form.css') }}">

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

    <form action="{{ isset($enginner) ? route('enginners.update', $enginner->id) : route('enginners.store') }}" method="POST" enctype="multipart/form-data" class="engineer-form">
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
                </div>
            @endif
        </div>

        <button type="submit" class="submit-button">{{ isset($enginner) ? 'Update' : 'Add' }}</button>
    </form>
</div>

<style>
    /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9fc;
    margin: 0;
    padding: 0;
}

/* Form container */
.form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Title styling */
.form-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333333;
}

/* Form styling */
.engineer-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Form group styling */
.form-group {
    text-align: left;
}

.form-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
    color: #555555;
}

.form-group input[type="text"],
.form-group input[type="file"] {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Current image styling */
.current-image {
    margin-top: 10px;
    text-align: center;
}

.current-image img {
    max-width: 100px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Submit button styling */
.submit-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #0056b3;
}

/* Alert styling */
.alert.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: left;
}

/* Responsive design */
@media (max-width: 768px) {
    .form-container {
        padding: 15px;
    }

    .form-title {
        font-size: 20px;
    }

    .submit-button {
        font-size: 14px;
        padding: 8px 16px;
    }
}

</style>