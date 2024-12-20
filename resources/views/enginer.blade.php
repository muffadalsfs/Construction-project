<link rel="stylesheet" href="{{ asset('css/create_engineer.css') }}">

<div class="form-container">
    <h1>Create New Engineer</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('enginners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Engineer Name" required>
        </div>

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" accept="image/*">
        </div>

        <button type="submit" class="btn-submit">Add Engineer</button>
    </form>
</div>
<style>
    /* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9fc;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Form container */
.form-container {
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

/* Title styling */
.form-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333333;
}

/* Error alert styling */
.alert {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.alert ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

/* Form group styling */
.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
}

/* Submit button */
.btn-submit {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

.btn-submit:hover {
    background-color: #0056b3;
}

/

</style>