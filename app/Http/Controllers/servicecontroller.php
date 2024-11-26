<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage; 

class servicecontroller extends Controller
{
    function serviceadd(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048', 
        ]);

$path=$request->file('file')->store('public','public');
$imagarray=explode('/',$path);
$image=$imagarray[1];
$imge=new Service();
$imge->title=$request->title;
$imge->content=$request->content;
$imge->path=$image;

$imge->save();
return redirect('pageshow');

    }
    public function servicesshow(){
        $blogs=Service::all();
        return view('homeshow.service',['blogs'=>$blogs]);

    }
    public function detail($id)
                {
                    $detail = Service::findOrFail($id);
                    return view('detail.services', ['show' => $detail]); 
                }
                public function servicepage(Request  $request){
                    $blogs=Service::all();
                    return view('shows.services',['blogs'=>$blogs]);
            
                }
                function delete($id){
                    $user=Service::destroy($id);
                    return redirect('pageshow');
            
                    }
                    function edit($id)
                    {
                        $user=Service::find($id);
                        return view('edit.services',['blog'=>$user]);
                    }
                    function update(Request $request,$id)
        {
    
         $blog = Service::findOrFail($id);
 
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
         $blog->save();
         return redirect('pageshow');
        }   
        function savepage(){
            $service=Service::all();
            return view('homeshow.service',['blogs'=>$service]);
        }
        function singlepage(){
            $service=Service::latest()->take(1)->get();
            return view('singleservice',['single'=>$service]);
        }
        
}
