
<link rel="stylesheet" href="{{ asset('css/engineer-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/enginner.css') }}">
<div class="form-container">
    <h1 class="form-title">{{ isset($enginner) ? 'Edit Engineer' : 'Add New Engineer' }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($enginner) ? route('enginners.update', $enginner->id) : route('enginners.store') }}" method="POST" enctype="multipart/form-data" class="engineer-form">
        @csrf
        @if (isset($enginner))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $enginner->name ?? '' }}" required>
        </div>

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" id="file">
            @if (isset($enginner) && $enginner->path)
                <div class="current-image">
                    <p>Current Image:</p>
                    <img src="{{ url('storage/public/' . $enginner->path) }}" alt="Engineer Image">
                </div>
            @endif
        </div>

        <button type="submit" class="submit-button">{{ isset($enginner) ? 'Update' : 'Add' }}</button>
    </form>
</div>

<style>


</style>