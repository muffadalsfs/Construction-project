<link rel="stylesheet" href="{{ asset('css/edit/blog.css') }}">

<h2 class="edit-title">EDIT PAGE</h2>
<form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="edit-form" onsubmit="return validateForm()">
    @csrf
    @method('PUT')
    
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $blog->title }}" required class="input-field">

    <label for="content">Content</label>
    <textarea name="content" required class="textarea-field">{{ $blog->content }}</textarea>

    @if($blog->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $blog->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif

    <label for="file" id="fileLabel" style="display: {{ $blog->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $blog->path ? 'none' : 'block' }};">
    
    <button type="submit" class="submit-button">Update Blog</button>
    <a href="{{ url('show') }}" class="cancel-link">Cancel</a>
</form>

<script src="{{asset('js/cancel.js')}}">
   
</script>
