<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'welcome'], function() {
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/detail/{id}', [WelcomeController::class, 'detail'])->name('welcome.detail');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'article'], function() {
    Route::get('/',[ArticleController::class,'index'])->name('article.index');
    Route::get('/create',[ArticleController::class,'create'])->name('article.create');
    Route::post('/store',[ArticleController::class,'store'])->name('article.store');
    Route::get('/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
    Route::post('/update/{id}',[ArticleController::class,'update'])->name('article.update');
    Route::get('/destroy/{id}',[ArticleController::class,'destroy'])->name('article.destroy');
});

