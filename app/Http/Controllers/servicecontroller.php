<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
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
        $service = Service::findOrFail($id);
        $service->name=$request->name;
        $service->content=$request->content;
        if ($request->filled('remove_image') && $request->remove_image == 1) 
        {
            if ($service->path) {
                Storage::delete('public/' . $service->path); 
                $service->path = null; 
            }
        }
        
        if ($request->hasFile('file') && $request->file('file')->isValid())
         {
            if ($service->path) {
                Storage::delete('public/' . $service->path); 
            }
            $filePath = $request->file('file')->store('public', 'public');
            $service->path = basename($filePath); 
        }
        $service->save();
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
