<link rel="stylesheet" href="{{ asset('css/edit/tool.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/blog.css') }}">
<h1 class="form-title">Edit Tool</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tools.update', $tool->id) }}" method="POST" enctype="multipart/form-data" class="edit-tool-form" onsubmit="return validateForm()">
    @csrf
    @method('PUT')

    <label for="name">Tool Name</label>
    <input type="text" name="name" value="{{ $tool->name }}" required>

    <label for="name">Tool Name</label>
    <input type="text" name="price" value="{{ $tool->price }}" required>

    @if($tool->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $tool->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif
    <label for="file" id="fileLabel" style="display: {{ $tool->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $tool->path ? 'none' : 'block' }};">
    <button type="submit">Update Tool</button>
    <a href="{{route('tools.index') }}" class="cancel-link">Cancel</a>
</form>
<script src="{{asset('js/cancel.js')}}"></script>
   



