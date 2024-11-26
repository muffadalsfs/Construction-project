<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('shows.blog', compact('blogs'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        return view('blogs.create');
    }

    // Store a newly created blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;

        // Handle file upload
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('public/blogs');
            $blog->path = basename($path);
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully!');
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }
    
    // Update the specified blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
    
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('public/blogs');
            $blog->path = basename($path);
        }
    
        $blog->save();
    
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }
    

    // Remove the specified blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete image if exists
        if ($blog->path) {
            Storage::delete('public/blogs/' . $blog->path);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
