<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "nep_title" => "required|max:50",
            "eng_title" => "required|max:50",
            "meta_keywords" => "required|max:1000",
            "meta_description" => "required|max:1000",
        ]);

        $category = new Category();
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;


        $category->save();
        return redirect()->back();
    }



    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view("admin.category.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nep_title" => "required|max:50",
            "eng_title" => "required|max:50",
            "meta_keywords" => "required|max:50",
            "meta_description" => "required|max:50"

        ]);

        $category = Category::find($id);
        $category->nep_title = $request->nep_title;
        $category->eng_title = $request->eng_title;
        $category->slug = Str::slug($request->eng_title);
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;

        $category->update();
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
