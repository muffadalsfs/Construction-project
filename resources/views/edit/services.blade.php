<link rel="stylesheet" href="{{ asset('css/edit/blog.css') }}">
<h2 class="edit-title">EDIT PAGE</h2>
<form action="{{ route('updateservice', $service->id) }}" method="POST" class="edit-form" onsubmit="return validateForm()">
    @csrf
    @method('PUT') <!-- Use PUT method for updating -->

    <label for="name">Service Name:</label>
    <input type="text" id="name" name="name" value="{{ $service->name }}" required class="input-field">

    <label for="description">Description:</label>
    <textarea id="content" name="content" class="textarea-field" required>{{ $service->content }}</textarea>
    @if($service->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $service->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif
    <label for="file" id="fileLabel" style="display: {{ $service->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $service->path ? 'none' : 'block' }};">

    <button type="submit" class="submit-button">Update</button>
    <a href="{{ route('showservice') }}" class="cancel-link">Cancel</a>

</form>
<script src="{{asset('js/cancel.js')}}"> </script>