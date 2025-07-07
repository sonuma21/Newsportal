<?php

use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/category/{slug}',[PageController::class,'category'])->name('category');
Route::get('/compare',[PageController::class,'compare'])->name('compare');
Route::get('/article/{id}',[PageController::class,'article'])->name('article');



Route::get('/dashboard', function () {
    $articles = Article::all();
    return view('dashboard', compact('articles'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin/company',CompanyController::class)->names('admin.company');
    Route::resource('/admin/category',CategoryController::class)->names('admin.category');
    Route::resource('/admin/advertise',AdvertiseController::class)->names('admin.advertise');
    Route::resource('/admin/article',ArticleController::class)->names('admin.article');

});

require __DIR__.'/auth.php';
