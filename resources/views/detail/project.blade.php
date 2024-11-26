<h1>Project Details</h1>
<p><strong>Name:</strong> {{ $project->title }}</p>
<p><strong>Description:</strong> {{ $project->content }}</p>
@if($project->path)
    <p><strong>Image:</strong></p>
    <img src="{{ asset('storage/public/' . $project->path) }}" alt="Project Image" style="max-width: 400px;">
@endif
<a href="{{ route('project.show') }}">Back to Projects</a>
