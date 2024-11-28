<h1>Blogs</h1>
<a href="{{ route('blogs.create') }}">Create Blog</a>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
@foreach($blogs as $blog)
    <div>
        <h2>{{ $blog->title }}</h2>
        
        <img src="{{ asset('storage/public/' . $blog->path) }}" alt="Project Image" style="max-width: 200px;">
        
        <p>{{ Str::limit($blog->content, 100) }}</p>

        <a href="{{ url('delete', $blog->id) }}" class="delete-button" >Delete</a>
        <a href="{{ url('edit', $blog->id) }}" class="delete-button" >edit</a>
        <a href="{{ route('blog.detail', $blog->id) }}">Detail</a>
   

@endforeach
