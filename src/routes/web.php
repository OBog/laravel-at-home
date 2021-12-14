<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::post('/search',[SearchController::class,'search'])->name('search');

Route::prefix('articles')->name('articles.')->group(function(){
    Route::get('/',[ArticleController::class,'list'])->name('list');
    Route::get('/{id}',[ArticleController::class,'article'])->name('article');
});

Route::get('/',[ArticleController::class,'list'])->name('list');;


