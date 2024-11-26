<link rel="stylesheet" href="{{asset('css/blog.css')}}">
<h2 class="blog-form-title">serviec FORM</h2>
<div>
   <form action="service" method="post" enctype="multipart/form-data"  class="blog-form" >
    @csrf 
    <label for="title">name of service</label>
    <input type="text" name="title" placeholder="ENTER YOUR TITLE" class="input-field" value="{{old('title')}}">
    <span style="color:red;">@error('title'){{ $message }}@enderror</span>

    <label for="CONTENT">service information</label>
    <textarea name="content" class="textarea-field" placeholder="Write your blog content">{{old('content')}}</textarea>
    <span style="color:red;">@error('content'){{ $message }}@enderror</span>
    <label for="image">Image</label>
    <input type="file" name="file" class="file-input">
    <span style="color:red;">@error('file'){{ $message }}@enderror</span>
    <button class="submit-button">submit</button>
    <a href="show" class="cancel-link">back</a>
   </form>
</div>
