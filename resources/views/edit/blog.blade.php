
    <h1>{{ isset($blog) ? 'Edit Blog' : 'Create Blog' }}</h1>

    <form action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($blog))
            @method('PUT')
        @endif

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $blog->title ?? '' }}" required>
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" required>{{ $blog->content ?? '' }}</textarea>
        </div>

        <div>
            <label for="file">Image</label>
            <input type="file" name="file">
            @if (isset($blog) && $blog->path)
                <p>Current Image:</p>
                <img src="{{ $blog->path ? (file_exists(public_path('storage/public/' . $blog->path)) ? url('storage/public/' . $blog->path) : asset('Images/t6.jpg')) : asset('Images/t6.jpg') }}" alt="{{ $blog->title }}">

            @endif
        </div>

        <button type="submit">{{ isset($blog) ? 'Update' : 'Create' }}</button>
    </form>

