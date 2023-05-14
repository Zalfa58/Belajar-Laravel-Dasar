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

Route::get('/About', function() {
    return view('About', [
        "name" => "My name is Hitori D Zaru",
        "email" => "and this my Email : Hitori@gmail.com",
        "image" => "Hitori.jpg",
        "Hello" => "Nice To meet you EveryOne"
    ]);
});


Route::get('/posts', function() {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hitori D",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magnam unde quam maxime quis tenetur delectus! Ea consequatur pariatur, ipsum aut ipsam doloremque amet fugiat animi magnam eveniet fuga esse."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hitori D",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo corporis reprehenderit laborum esse temporibus rerum alias, tempore consequuntur, enim fuga delectus, architecto nobis harum hic dignissimos eos?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('/main', function() {
    return view('Layouts/main');
});

Route::get('/profile', function() {
    return view('profilUnit');
});

// halaman post

Route::get('post/{slig}', function($slug){
    return voew('post', [
        "title" => "Sigle Post"
    ]);
});