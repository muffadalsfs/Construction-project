
    <h1>Edit Tool: {{ $tool->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tools.update', $tool->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Tool Name</label>
        <input type="text" name="name" value="{{ $tool->name }}" required>

        <label for="description">Description</label>
        <textarea name="price" required>{{ $tool->price }}</textarea>

        <label for="file">Replace Image (Optional)</label>
        <input type="file" name="file">

        @if ($tool->path)
            <p>Current Image:</p>
            <img src="{{ asset('storage/public/' . $tool->path) }}" alt="Current Tool Image" style="max-width: 200px;">
        @endif

        <button type="submit">Update Tool</button>
    </form>

