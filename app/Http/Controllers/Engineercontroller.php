<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enigenner;
use Illuminate\Support\Facades\Storage;

class Engineercontroller extends Controller
{
    public function create()
    {
        return view('enginer');
    }
    public function store(Request $request){
        $path=$request->file('file')->store('public','public');
        $imagarray=explode('/',$path);
        $image=$imagarray[1];
        $eg=new Enigenner();
        $eg->name=$request->name;
        $eg->path=$image;
       $eg->save();
       return redirect()->route('enginners.index')->with('success', 'Engineer added successfully!');
    }
    public function index()
    {
        $enginner = Enigenner::all();
        return view('shows.enginner', compact('enginner'));
    }
    public function destroy($id)
    {
        $enginner = Enigenner::findOrFail($id);

        if ($enginner->path) {
            Storage::delete('public/' . $enginner->path); // Delete old image
        }

        $enginner->delete();

        return redirect()->route('enginners.index')->with('success', 'Engineer deleted successfully!');
    }

    public function edit($id)
    {
        $enginner = Enigenner::findOrFail($id);
        return view('edit.enginner', compact('enginner'));
    }

    public function update(Request $request, $id)
    {
        $enginner = Enigenner::findOrFail($id);
      $enginner->name=$request->name;

        if ($request->hasFile('file')) {
            if ($enginner->path) {
                Storage::delete('public/' . $enginner->path); // Delete old image
            }
            $path = $request->file('file')->store('public', 'public');
            $enginner->path = basename($path);
        }
         $enginner->save();

        return redirect()->route('enginners.index')->with('success', 'Engineer updated successfully!');
    }
      public function element(){
        $enginner=Enigenner::all();
        return view('element.card',['enginner'=>$enginner]);
      }
}
