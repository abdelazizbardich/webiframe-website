<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class projectController extends Controller
{
    public function index()
    {
        $data = [
            "projects" => Project::with(["category"])->orderBy('id', 'DESC')->get()
        ];
        return view('back.projects', $data);
    }

    public function create()
    {
        $data = [
            "categories" => \App\Models\Category::where('type', 'project')->get()
        ];
        return view('back.create-project', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:70",
            "short_description" => "required|max:300",
            "thumbnail" => "required",
            "full_thumbnail" => "required",
            "url" => "required",
            "category_id" => "required|exists:categories,id",
            "full_description" => "required",
        ]);
        if (
            Project::create([
                "title" => $request->input('title'),
                "slug" => strtolower(urlencode(str_replace(' ', '-', $request->input('title')))),
                "short_description" => $request->input('short_description'),
                "full_description" => $request->input('full_description'),
                "thumbnail" => $request->file('thumbnail')->store('/projects', ['disk' => 'public']),
                "full_thumbnail" => $request->file('full_thumbnail')->store('/projects', ['disk' => 'public']),
                "url" => $request->input('url'),
                "category_id" => $request->input('category_id')
            ])
        ) {
            return redirect()->route('dashboard.project.all');
        } else {
            return redirect()->back()->withErrors(__('back.Cannot create porject'))->withInput();
        }
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->back();
    }
}
