<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'categories' => Category::all()
        ];
        return view('back.categories',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create-category');
    }

    public function edit(Category $category)
    {
        return view('back.create-category', [
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());

        if(Category::create([
            "name" => $request->input('name'),
            "type" => $request->type,
        ])){
            return redirect()->route('dashboard.categories.all');
        }else{
            return redirect()->back()->withErrors(__('Cannot create category'))->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        $request->validate($this->rules());

        $category->update([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('dashboard.categories.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    protected function rules(): array
    {
        return [
            'name.en' => 'required|max:50',
            'name.fr' => 'nullable|max:50',
            'name.ar' => 'nullable|max:50',
            'type' => 'required',
        ];
    }
}
