<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage; 
class servicecontroller extends Controller
{
    public function service(){
        return view('service');
    }
    public function servicestore(Request $request){
        $path = $request->file('file')->store('public', 'public');
        $imageArray = explode('/', $path);
        $image = $imageArray[1];
        $service=new Service();
       $service->name=$request->name;
       $service->content=$request->content;
       $service->path=$image;
       $service->save();
       return redirect()->route('showservice');
    }
     public function showservice(Request $request){
        $service=Service::all();
        return view('shows.service',['service'=>$service]);
     }
     public function delete($id)
     {
         $service = Service::findOrFail($id);
     
         $service->delete();
     
         return redirect()->route('showservice')->with('success', 'Service deleted successfully.');
     }
     public function edit($id)
     {
         $service = Service::findOrFail($id);
     
         return view('edit.services', compact('service'));
     }
     public function update(Request $request, $id)
     {
         // Find the service by ID
         $service = Service::findOrFail($id);
         
         // Update name and content
         $service->name = $request->name;
         $service->content = $request->content;
         
         // Check if remove_image flag is set
         if ($request->filled('remove_image') && $request->remove_image == 1) {
             // Delete the existing image if it exists
             if ($service->path) {
                 Storage::delete('public/' . $service->path);
                 $service->path = null;  // Remove the image path, but check if a new file is uploaded
             }
         }
         
         // Check if a new file is uploaded
         if ($request->hasFile('file')) {
             // Store the new image
             $path = $request->file('file')->store('public/services');
             
             // Extract the filename from the path
             $imageArray = explode('/', $path);
             $image = $imageArray[1]; // The image file name
             
             // Update the service with the new image path
             $service->path = $image;
         }
         
         // If path is still null (i.e., no new image uploaded and remove_image flag was set), 
         // you may want to keep the old path or set a default value.
         if ($service->path === null) {
             $service->path = $service->getOriginal('path');  // Retain original path
         }
     
         // Save the updated service
         $service->save();
         
         // Redirect back with a success message
         return redirect()->route('showservice')->with('success', 'Service updated successfully.');
     }
     
     
     public function detail($id)
     {
        $detail = Service::findOrFail($id);
        return view('detail.services',['service'=>$detail]);
    }
    public function all()
    {
        $service=Service::all();
        return view('homeshow.service',['service'=>$service]);
    }
     public function single()
     {
        $service=Service::latest()->take(1)->get();
        return view('single.service',['single'=>$service]);
     }
     public function elementservice()
     {
         $service=Service::all();
         return view('element.service',['service'=>$service]);
     }
}
