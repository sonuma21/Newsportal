<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

public function __construct()
{

$categories= Category::all();
$company= Company::first();
View::share([
    'categories'=>$categories,
    'company'=>$company

]);
}
public function home(){
    $latest_article=Article::where('status','approved')->orderBy('id','desc')->first();
    $latest_articles=Article::where('status','approved')->orderBy('id','desc')->limit(10)->get();
    $trending_articles=Article::where('status','approved')->orderBy('views','desc')->limit(8)->get();
    return view('frontend.home',compact('latest_article','trending_articles','latest_articles'));
}
public function category($slug){
    $category= Category::where('slug',$slug)->first();
    $articles= $category->articles()->paginate(8);
    return view('frontend.category',compact('articles'));
}
public function article($id){
    $article = Article::find($id);
    $advertises = Advertise::where('status','approved')->orderBy('id','desc')->limit(3)->get();
    $cookie_data = Cookie::get("post$id");
    if(!$cookie_data){
        $article->increment('views');
        Cookie::queue("post$id", $id);
    }
    return view('frontend.article',compact('article','advertises'));
}
}
