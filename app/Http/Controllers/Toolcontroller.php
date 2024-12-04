<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

use Illuminate\Support\Facades\Storage; 
class Toolcontroller extends Controller
{
    public function create()
    {
        return view('tool');
    }
    function Tooladd(Request $request){
        $path=$request->file('file')->store('public','public');
        $imagarray=explode('/',$path);
        $image=$imagarray[1];
        $to=new Tool();
        $to->name=$request->name;
        $to->path=$image;
        $to->price=$request->price;
        $to->save();
        return redirect()->route('tools.index');

    }
    public function index()
    {
        $tools = Tool::all();
        return view('shows.tools', compact('tools'));
    }
    public function destroy($id)
    {
        $tool = Tool::findOrFail($id);

        
        if ($tool->path) {
            Storage::delete('public/' . $tool->path); // Delete image
        }

        $tool->delete();

        return redirect()->route('tools.index')->with('success', 'Tool deleted successfully!');
    }
    public function edit($id)
    {
        $tool = Tool::findOrFail($id);

        

        return view('edit.tool', compact('tool'));
    }

    // Update a tool
    public function update(Request $request, $id)
    {
        $tool = Tool::findOrFail($id);

        $tool->name=$request->name;
        $tool->price=$request->price;

        if ($request->hasFile('file')) {
            if ($tool->path) {
                Storage::delete('public/' . $tool->path); 
            }
            $tool->path = basename($request->file('file')->store('public', 'public'));
        }
         $tool->save();
        

        return redirect()->route('tools.index')->with('success', 'Tool updated successfully!');
    }
    public function show($id)
    {
        $tool = Tool::findOrFail($id);
        return view('show.tool', compact('tool')); 
    }
    
}
