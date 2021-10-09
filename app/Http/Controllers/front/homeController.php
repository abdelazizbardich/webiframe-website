<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Project;

class homeController extends Controller
{

    // Show home page
    public function index()
    {
        $data = [
            "demos" => Demo::orderBy('id','DESC')->limit(6)->get(),
            "projects" => Project::orderBy('id','DESC')->limit(6)->get()
        ];
        return view('front.home',$data);
    }

}
