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
Route::get('/home', function () {
    //return view('home');
    return [
        "nume" => 'gigle'
    ];
});

Route::get('test', function () {
    $age = request('age');
    $name = 'Eric Zemmour';
    return view('test', ['name' => $name, 'age' => $age]);
});

/* Route::get('/posts/{post}/{age}', function ($post, $age) {
    $posts = [
        'first-post' => 'This is the first post',
        'second-post' => 'This is the second post'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, "Sorry, this post doesn't exist!");
    }

    return view('post', ['post' => $posts[$post], 'age' => $age]);
}); */

Route::get('posts/{post}/{age?}', 'PostsController@show');
