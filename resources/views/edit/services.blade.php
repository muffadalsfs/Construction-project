<form action="{{ route('updateservice', $service->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Use PUT method for updating -->

    <label for="name">Service Name:</label>
    <input type="text" id="name" name="name" value="{{ $service->name }}" required>

    <label for="description">Description:</label>
    <textarea id="content" name="content" required>{{ $service->content }}</textarea>

    <button type="submit">Update</button>
</form>
