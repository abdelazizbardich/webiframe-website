<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class postsController extends Controller
{
    public function index(){
        $data = [
            "posts" => Post::get()
        ];
        return view('back.posts',$data);
    }
}
