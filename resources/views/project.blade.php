<link rel="stylesheet" href="{{asset('css/project.css')}}">
<h1>Project form </h1>
<form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
   @csrf 
   <label for="name">Name</label>
   <input type="text" name="title" placeholder="Enter your project name"  required>
   <label for="description"> Client name</label>
   <input type="text" name="name" placeholder="Enter your client name"  required>

   <label for="description"> Location</label>
   <input type="text" name="location" placeholder="Enter your project location"  required>

   <label for="description"> ENTER value of project</label>
   <input type="text" name="value" placeholder="Enter your project value"  required>
  
   <div>
    <label for="Category">Category:</label>
    <div>
        <label>
            <input type="radio" name="Category" value="Construction"> 
            Construction
        </label>
    </div>
    <div>
        <label>
            <input type="radio" name="Category" value="Automotive">
            Automotive
        </label>
    </div>
    <div>
        <label>
            <input type="radio" name="Category" value="Industrial">
            Industrial
        </label>
    </div>
    <div>
        <label>
            <input type="radio" name="Category" value="Mechanics">
            Mechanics
        </label>
    </div>
</div>

   <label for="image">PROJECT IMAGE</label>
   <input type="file" name="file">
   <button>project</button>
</form>

   