<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;

class demoController extends Controller
{
    public function index(){
        $data = [
            "demos" => Demo::with(['category'])->orderBy('id','DESC')->get()
        ];
        return view('back.demos.all',$data);
    }

    public function create(){
        $data = [
            "categories" => \App\Models\Category::where('type','demo')->get()
        ];
        return view('back.demos.create',$data);
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required|max:70",
            "url" => "required",
            "category_id" => "required|exists:categories,id",
            "short_description" => "required|max:300",
            "full_description" => "required",
            "thumbnail" => "required",
            "full_thumbnail" => "required",
            "screenshots" => "required",
        ]);
        $secreenshots = [];
        foreach($request->file('screenshots') as $secreenshot){
            array_push($secreenshots,$secreenshot->store('/demos',['disk'=>'public']));
        }
        if(Demo::create([
            "title" => $request->input('title'),
            "slug" => strtolower(urlencode(str_replace(' ','-',$request->input('title')))),
            "thumbnail" => $request->file('thumbnail')->store('/demo',['disk'=>'public']),
            "full_thumbnail" => $request->file('full_thumbnail')->store('/demo',['disk'=>'public']),
            "short_description" => $request->input('short_description'),
            "full_description" => $request->input('full_description'),
            "url" => $request->input('url'),
            "category_id" => $request->input('category_id'),
            "screenshots" => json_encode($secreenshots),
        ])){
            return redirect()->route('dashboard.demo.all');
        }else{
            return redirect()->back()->withErrors(__('Cannot create demo'))->withInput();
        }
    }
}
