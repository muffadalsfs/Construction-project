
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">

<link rel="stylesheet" href="{{ asset('css/edit/project.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit/blog.css') }}">
<div class="edit-container">
    <h1>Edit Project</h1>
    <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Project name</label>
            <input type="text" name="title" value="{{ $project->title }}" required>
        </div>

        <div class="form-group">
            <label for="title">Customername</label>
            <input type="text" name="name" value="{{ $project->name }}" required>
        </div>
        <div class="form-group">
            <label for="title">Location</label>
            <input type="text" name="Location" value="{{ $project->Location }}" required>
        </div>
        <div class="form-group">
            <label for="title">Projectvalue</label>
            <input type="text" name="value" value="{{ $project->value }}" required>
        </div>
        <div class="category-container">
    <label for="Category" class="category-label">Category:</label>
    <div class="radio-group">
        <label class="radio-label">
            <input type="radio" name="Category" value="Construction" 
                   {{ $project->category == 'Construction' ? 'checked' : '' }}>
            Construction
        </label>
    </div>
    <div class="radio-group">
        <label class="radio-label">
            <input type="radio" name="Category" value="Automotive" 
                   {{ $project->category == 'Automotive' ? 'checked' : '' }}>
            Automotive
        </label>
    </div>
    <div class="radio-group">
        <label class="radio-label">
            <input type="radio" name="Category" value="Industrial" 
                   {{ $project->category == 'Industrial' ? 'checked' : '' }}>
            Industrial
        </label>
    </div>
    <div class="radio-group">
        <label class="radio-label">
            <input type="radio" name="Category" value="Mechanics" 
                   {{ $project->category == 'Mechanics' ? 'checked' : '' }}>
            Mechanics
        </label>
    </div>
</div>


        @if($project->path)
        <div class="image-container">
            <div class="current-image-wrapper">
                <img src="{{ asset('storage/public/' . $project->path) }}" alt="Image" class="current-image-thumbnail" id="currentImage">
                
                <button type="button" class="remove-image-btn" id="removeImageBtn">&times;</button>
            </div>
            
            <input type="checkbox" name="remove_image" id="removeImageCheckbox" value="1" style="display: none;">
        </div>
    @endif
    <label for="file" id="fileLabel" style="display: {{ $project->path ? 'none' : 'block' }};">Upload Image</label>
    <input type="file" name="file" class="file-input" id="fileInput" style="display: {{ $project->path ? 'none' : 'block' }};">
    
    <button type="submit" class="submit-button">Update Blog</button>
    <a href="{{route('project.show')}}">cancel</a>
    </form>
</div>
<script src="{{asset('js/cancel.js')}}">
  
</script>


