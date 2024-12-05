<link rel="stylesheet" href="{{asset('css\tool.css')}}">
<h1>Tool form</h1>
<form action="Tool" method="post" enctype="multipart/form-data">
    @csrf 
    <label for="name">name</label>
    <input type="text" name="name" placeholder="enter your name" required>
    <label for="price">Price</label>
    <input type="text" name="price" placeholder="enter your tools price" required>
    <label for="image">Upload your Image</label>
    <input type="file" name="file"   required>
<a href="">cancel</a>
    <button>Add tool </button>
</form>