<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class projectController extends Controller
{
    public function index(){
        $data = [
            "projects" => Project::with(["category"])->get()
        ];
        return view('back.projects',$data);
    }

    public function create(){
        return view('back.create-project');
    }
}
