<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Enigenner;
use App\Models\Tool;

use Illuminate\Support\Facades\Storage;

class Blogcontroller extends Controller
{
    public function create()
    {
        return view('blog');
    }
    // Store a new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $path = $request->file('file')->store('public', 'public');
        $image = basename($path);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->path = $image;

        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }
    

    // Show all blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('shows.blog', compact('blogs'));
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('detail.blog', compact('blog'));
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->path) {
            Storage::delete('public/' . $blog->path);
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('edit.blog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
       $blog->title=$request->title;
       $blog->content=$request->content;
 
        if ($request->hasFile('file')) {
            if ($blog->path) {
                Storage::delete('public/' . $blog->path);
            }
            $path = $request->file('file')->store('public', 'public');
            $blog->path = basename($path);
        }
           $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function home()
    {
        $enginner=Enigenner::all();
         $tool=Tool::all();
        $blog=Blog::latest()->take(3)->get();
        $project=Project::latest()->take(5)->get();

        return view('welcome',['Project'=>$project,'enginner'=>$enginner,'tool'=>$tool,'blog'=>$blog,
    
    ]);

    }
    public function detail($id)
{
    $project = Blog::findOrFail($id);
    return view('detail.blog', compact('project'));
} 
public function blogshow()
{
    $blogs = Blog::all();
    return view('shows.blog', compact('blogs'));
}
}
