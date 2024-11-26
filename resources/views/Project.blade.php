<h1>project form </h1>
<form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
   @csrf 
   <label for="name">Name</label>
   <input type="text" name="title" placeholder="enter your project name">
   <label for="description"> client name</label>
   <input type="text" name="name" placeholder="enter your client name">

   <label for="description"> location</label>
   <input type="text" name="location" placeholder="enter your project location">

   <label for="description"> value of project</label>
   <input type="number" name="value" placeholder="enter your project value">

   <label for="image">image</label>
   <input type="file" name="file">
   <button>project</button>
</form>
<style>
   <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
        color: #343a40;
    }

    form {
        max-width: 500px;
        margin: 30px auto;
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #495057;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        font-size: 16px;
        color: #495057;
    }

    input::placeholder {
        color: #adb5bd;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: bold;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

</style>
   