<h1>service form</h1>
<form action="{{route('servicestore')}}" method="post" enctype="multipart/form-data">
@csrf 
<label for="name">service name</label>
<input type="text" name="name" placeholder="enter your service name">
<label for="content">service description</label>
<textarea name="content" class="textarea-field" placeholder="Write your service content"></textarea>
<label for="image">Image</label>
<input type="file" name="file" placeholder="enter your service image">
<button>service add </button>

</form>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    font-size: 32px;
    color: #333;
    margin-top: 20px;
    margin-bottom: 20px;
}

form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"], 
textarea.textarea-field, 
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

textarea.textarea-field {
    resize: vertical;
    min-height: 120px;
}

button {
    display: block;
    width: 100%;
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

button:hover {
    background-color: #218838;
}

</style>