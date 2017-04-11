<?php

use App\Article;

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

Route::get('/', function () {
    $articles=Article::latest()->get();
    return view('articles.index', compact('articles'));
});

Route::get('/about', function (){

    return view('articles.about');
});

Route::resource('articles', 'ArticlesController');

Route::post('/articles/{article}/comments','CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index');
