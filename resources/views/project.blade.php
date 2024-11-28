<link rel="stylesheet" href="{{asset('css/project.css')}}">
<h1>Project form </h1>
<form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
   @csrf 
   <label for="name">Name</label>
   <input type="text" name="title" placeholder="Enter your project name">
   <label for="description"> Client name</label>
   <input type="text" name="name" placeholder="Enter your client name">

   <label for="description"> Location</label>
   <input type="text" name="location" placeholder="Enter your project location">

   <label for="description"> ENTER value of project</label>
   <input type="text" name="value" placeholder="Enter your project value">

   <label for="image">PROJECT IMAGE</label>
   <input type="file" name="file">
   <button>project</button>
</form>

   