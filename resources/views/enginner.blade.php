<link rel="stylesheet" href="{{ asset('css/create_engineer.css') }}">
<link rel="stylesheet" href="{{asset('css/enginer.css')}}">
<div class="form-container">
    <h1>Create New Engineer</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('enginners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Engineer Name" required>
        </div>

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" accept="image/*">
        </div>

        <button type="submit" class="btn-submit">Add Engineer</button>
    </form>
</div>
