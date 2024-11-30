<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Enginner;
class AboutController extends Controller
{
    public function about(){
        $service=Service::all();
        $enginner=Enginner::all();

        return view('About',['service'=>$service, 'enginner'=>$enginner] );
    }
}
