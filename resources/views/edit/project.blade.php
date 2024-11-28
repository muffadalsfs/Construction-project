
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">

<link rel="stylesheet" href="{{ asset('css/edit/project.css') }}">
<div class="edit-container">
    <h1>Edit Project</h1>
    <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
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
       

        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" name="file" accept="image/*">
            @if($project->path)
            <div class="current-image">
                <p>Current Image:</p>
                <img src="{{ asset('storage/public/' . $project->path) }}" alt="Project Image">
            </div>
            @endif
        </div>

        <button type="submit" class="btn-submit">Update Project</button>
    </form>
</div>

