
    <h1>{{ $blog->title }}</h1>
    <img src="{{ url('storage/public/' . $blog->path) }}" alt="Blog Image" style="max-width: 300px;">
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.index') }}">Back to All Blogs</a>
