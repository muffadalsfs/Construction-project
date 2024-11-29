<link rel="stylesheet" href="{{ asset('css/engineer-form.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/enginner.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/blog.css') }}">

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

    <form action="{{ isset($enginner) ? route('engineers.update', $enginner->id) : route('enginners.store') }}" method="POST" enctype="multipart/form-data" class="engineer-form" id="engineerForm" onsubmit="return validateForm()">
        @csrf
        @if (isset($enginner))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $enginner->name ?? '' }}" required>
        </div>
        @if($enginner->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $enginner->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif

    <label for="file" id="fileLabel" style="display: {{ $enginner->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $enginner->path ? 'none' : 'block' }};">
        <button type="submit" class="submit-button">{{ isset($enginner) ? 'Update' : 'Add' }}</button>
    </form>
</div>
<script src="{{asset('js/cancel.js')}}">
   
</script>

