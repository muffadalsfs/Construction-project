
    <h1>All Tools</h1>
    
    @foreach($tools as $tool)
        <div>
            <h2>{{ $tool->name }}</h2>
            <p>{{ $tool->price }}</p>
            <img src="{{ asset('storage/public/' . $tool->path) }}" alt="Project Image" style="max-width: 200px;">
            
            <a href="{{ route('tools.edit', $tool->id) }}">Edit</a>
            
            <form action="{{ route('tools.delete', $tool->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
        @endforeach
