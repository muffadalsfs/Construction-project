<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage; 
class ProjectController extends Controller
{
    public function store(Request $request)
    {
    
        $path = $request->file('file')->store('public', 'public');
        $imageArray = explode('/', $path);
        $image = $imageArray[1];
    
        $project = new Project();
        $project->title = $request->title;
        $project->name = $request->name;
        $project->path = $image;
        $project->location=$request->location;
        $project->value=$request->value;
        $project->save();
    
        return redirect()->route('project.show')->with('success', 'Project added successfully!');
    }
    
    public function projectshow()
    {
        $projects = Project::all();
        return view('shows.project', ['products' => $projects]);
    }
    public function destroy($id)
{
    $project = Project::findOrFail($id);

    // Delete the file from storage
    if ($project->path) {
        \Storage::delete('public/' . $project->path);
    }

    $project->delete();

    return redirect()->route('project.show')->with('success', 'Project deleted successfully!');
}
           // Show the edit form
public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('edit.project', compact('project'));
}

// Update the project
public function update(Request $request, $id)
{
   

    $project = Project::findOrFail($id);

    // If a new file is uploaded, replace the old one
    if ($request->hasFile('file')) {
        if ($project->path) {
            \Storage::delete('public/' . $project->path);
        }
        $path = $request->file('file')->store('public', 'public');
        $imageArray = explode('/', $path);
        $project->path = $imageArray[1];
    }

    $project->title = $request->title;
    $project->name=$request->name;
    $project->value=$request->value;
    $project->Location=$request->Location;
    $project->save();

    return redirect()->route('project.show')->with('success', 'Project updated successfully!');
}
public function detail($id)
{
    $project = Project::findOrFail($id);
    return view('detail.project', compact('project'));
}


function sp(){
    $service=Project::all();
    return view('homeshow.project',['products'=>$service]);
}
function singlepage(){
    $service=Project::latest()->take(1)->get();
    return view('single.project',['single'=>$service]);
}

    function element (){
        $project=Project::all();
        return view('element.project',['products'=>$project]);
    }
}
 