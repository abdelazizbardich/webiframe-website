<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;

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

    public function edit(Project $project)
    {
        return view('back.create-project', [
            'project' => $project,
            'categories' => \App\Models\Category::where('type', 'project')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate($this->rules());

        if (
            Project::create([
                "title" => $request->input('title'),
                "slug" => Str::slug($this->primaryTranslation($request->input('title'))),
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

    public function update(Request $request, Project $project)
    {
        $request->validate($this->rules(true));

        $payload = [
            'title' => $request->input('title'),
            'slug' => Str::slug($this->primaryTranslation($request->input('title'))),
            'short_description' => $request->input('short_description'),
            'full_description' => $request->input('full_description'),
            'url' => $request->input('url'),
            'category_id' => $request->input('category_id'),
        ];

        if ($request->hasFile('thumbnail')) {
            $payload['thumbnail'] = $request->file('thumbnail')->store('/projects', ['disk' => 'public']);
        }

        if ($request->hasFile('full_thumbnail')) {
            $payload['full_thumbnail'] = $request->file('full_thumbnail')->store('/projects', ['disk' => 'public']);
        }

        $project->update($payload);

        return redirect()->route('dashboard.project.all');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->back();
    }

    protected function rules(bool $isUpdate = false): array
    {
        return [
            'title.en' => 'required|max:100',
            'title.fr' => 'nullable|max:100',
            'title.ar' => 'nullable|max:100',
            'short_description.en' => 'required|max:300',
            'short_description.fr' => 'nullable|max:300',
            'short_description.ar' => 'nullable|max:300',
            'full_description.en' => 'required',
            'full_description.fr' => 'nullable',
            'full_description.ar' => 'nullable',
            'thumbnail' => ($isUpdate ? 'nullable' : 'required') . '|file',
            'full_thumbnail' => ($isUpdate ? 'nullable' : 'required') . '|file',
            'url' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    protected function primaryTranslation(?array $translations): string
    {
        foreach (['en', 'fr', 'ar'] as $locale) {
            $value = $translations[$locale] ?? null;

            if (filled($value)) {
                return $value;
            }
        }

        return '';
    }
}
