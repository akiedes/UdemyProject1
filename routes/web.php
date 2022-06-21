<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/contact', function () {
//    return view('welcome');
    return "Hi Contact";
});

Route::get('/about', function () {
//    return view('welcome');
    return "Hello about!";
});

Route::get('/post/{id}/{name}', function($id, $name){
    return "This is post: " . $id . " and name: " . $name;
});

// How to nickname routes
Route::get('admin/posts/example', array('as'=>'admin.home', function(){
    $url = route('admin.home');

    return 'This is url: ' . $url;
}));
*/

Route::get('/posts/{id}', '\App\Http\Controllers\PostsController@index');
