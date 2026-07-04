<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use Illuminate\Support\Str;

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

    public function edit(Demo $demo){
        return view('back.demos.create', [
            'demo' => $demo,
            'categories' => \App\Models\Category::where('type', 'demo')->get(),
        ]);
    }

    public function store(Request $request){
        $request->validate($this->rules());

        $secreenshots = [];
        foreach($request->file('screenshots') as $secreenshot){
            array_push($secreenshots,$secreenshot->store('/demos',['disk'=>'public']));
        }
        if(Demo::create([
            "title" => $request->input('title'),
            "slug" => Str::slug($this->primaryTranslation($request->input('title'))),
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

    public function update(Request $request, Demo $demo)
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
            $payload['thumbnail'] = $request->file('thumbnail')->store('/demo', ['disk' => 'public']);
        }

        if ($request->hasFile('full_thumbnail')) {
            $payload['full_thumbnail'] = $request->file('full_thumbnail')->store('/demo', ['disk' => 'public']);
        }

        if ($request->hasFile('screenshots')) {
            $screenshots = [];

            foreach ($request->file('screenshots') as $screenshot) {
                $screenshots[] = $screenshot->store('/demos', ['disk' => 'public']);
            }

            $payload['screenshots'] = $screenshots;
        }

        $demo->update($payload);

        return redirect()->route('dashboard.demo.all');
    }

    public function delete(Demo $demo){
        $demo->delete();
        return redirect()->back();
    }

    protected function rules(bool $isUpdate = false): array
    {
        return [
            'title.en' => 'required|max:100',
            'title.fr' => 'nullable|max:100',
            'title.ar' => 'nullable|max:100',
            'url' => 'required',
            'category_id' => 'required|exists:categories,id',
            'short_description.en' => 'required|max:300',
            'short_description.fr' => 'nullable|max:300',
            'short_description.ar' => 'nullable|max:300',
            'full_description.en' => 'required',
            'full_description.fr' => 'nullable',
            'full_description.ar' => 'nullable',
            'thumbnail' => ($isUpdate ? 'nullable' : 'required') . '|file',
            'full_thumbnail' => ($isUpdate ? 'nullable' : 'required') . '|file',
            'screenshots' => ($isUpdate ? 'nullable' : 'required') . '|array',
            'screenshots.*' => 'file',
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
