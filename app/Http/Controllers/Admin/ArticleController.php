<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $articles = Article::orderBy("id","desc")->get();

    return view("admin.article.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::all();
      return  view("admin.article.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request-> validate ([
            "title"=> "required|max:50",
            "meta_keywords"=> "required|max:50",
            "meta_description"=> "required|max:50",
            "image"=> "required|max:1024",
            "categories"=>"required"
        ]);

        $article = New Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;

        $file = $request->file('image');
        if($file){
            $newName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $article->image='images/'.$newName;
        }
        $article->save();
        $article->categories()->attach($request->categories);
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::findOrFail($id);
        $categories = Category::all();
        return view("admin.article.edit", compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate ([
            "title"=> "required|max:50",
            "meta_keywords"=> "required|max:50",
            "meta_description"=> "required|max:50",
            "image"=> "required|max:1024",

        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->status = $request->status;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;
        $file = $request->file('image');
        if($file){
            $newName = time().".".$file->getClientOriginalExtension();
            $file->move('images',$newName);
            $article->image='images/'.$newName;
        }
        $article->update();
        $article->categories()->sync($request->categories);
        return redirect()->route('admin.article.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Article::find($id);
            $article->delete();
            return redirect()->route('admin.article.index');
    }
}
