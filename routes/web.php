<?php

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
    $posts = App\Post::latest('published_at')->with('category', 'tags')->get();
    return view('welcome', compact('posts'));
});
Route::get('admin', function () {
    return view('admin.dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
