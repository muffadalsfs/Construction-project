<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Enginner;
use App\Models\Tool;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 
class Blogcontroller extends Controller
{
   public function add(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', 
        ]);

            $path=$request->file('file')->store('public','public');
            $imagarray=explode('/',$path);
            $image=$imagarray[1];
            $imge=new Blog();
            $imge->title=$request->title;
            $imge->content=$request->content;
            $imge->path=$image;
            $imge->user_id = Auth::id();
            $imge->save();
            return redirect()->route('blog.show');


            }

            //SHOW BLOG
            public function show (Request $request){
                $user=Blog::all();
                return view('show',['blog'=>$user]);

            }
            //DELETE BLOG

            public function delete($id){
            $user=Blog::destroy($id);
            return redirect()->route('blog.show');
            }
            //EDIT BLOG
                    function edit($id)
                    {
                        $user=Blog::find($id);
                        return view('edit',['blog'=>$user]);
                    }
                    //UPDATE BLOG
           public function update(Request $request,$id)
            {

            $blog = Blog::findOrFail($id);

            // Update the title and content
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');

            // Check if the user wants to remove the current image
            if ($request->filled('remove_image') && $request->remove_image == 1) 
            {
                if ($blog->path) {
                    Storage::delete('public/' . $blog->path); // Delete the old image
                    $blog->path = null; // Clear the path in the database
                }
            }

            // If a new file is uploaded, store it
            if ($request->hasFile('file') && $request->file('file')->isValid())
            {
                if ($blog->path) {
                    Storage::delete('public/' . $blog->path); // Delete the old image
                }
                $filePath = $request->file('file')->store('public', 'public');
                $blog->path = basename($filePath); // Save new image path
            }

            // Save the updated blog post
            $blog->save();

            return redirect()->route('blog.show');
        }

        //DETAIL BLOG 
        public function detail($id)
        {
          
            $detail = Blog::findOrFail($id);

            return view('detail', ['show' => $detail]); 
        }

        //SHOW CURRENT THREE BLOG IN HOME PAGE
   
    public function home()
    {
        $enginner=Enginner::all();
         $tool=Tool::all();
        $blog=Blog::latest()->take(3)->get();
        $project=Project::latest()->take(5)->get();

        return view('welcome',['Project'=>$project,'enginner'=>$enginner,'tool'=>$tool,'blog'=>$blog,
    
    ]);
        
    }
    public function all()
    {
        $blog=Blog::all();
        return view('element.blog',['blog'=>$blog]);
    }
    public function homeblog()
    {
        $blog=Blog::all();
        return view('homeshow.blog',['blog'=>$blog]);
    }
    public function singlepage()
    {
        $blog=Blog::latest()->take(1)->get();
        return view('single.blog',['single'=>$blog]);
    }
}
