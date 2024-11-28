<link rel="stylesheet" href="{{asset('css/service.css')}}">
<h1>service form</h1>
<form action="{{route('servicestore')}}" method="post" enctype="multipart/form-data">
@csrf 
<label for="name">Service name</label>
<input type="text" name="name" placeholder="Enter your service name">
<label for="content">Service description</label>
<textarea name="content" class="textarea-field" placeholder="Write your service content"></textarea>
<label for="image">Image</label>
<input type="file" name="file" placeholder="Enter your service image">
<button>service add </button>

</form>
