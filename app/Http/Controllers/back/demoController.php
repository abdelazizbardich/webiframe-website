<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;

class demoController extends Controller
{
    public function index(){
        $data = [
            "demos" => Demo::with(['category'])->get()
        ];
        return view('back.demos',$data);
    }
}
