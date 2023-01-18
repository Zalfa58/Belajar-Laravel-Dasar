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

Route::get('/tester', function() {
    return view('Laravel1', [
        "name" => "My name is Hitori D Zaru",
        "email" => "and this my Email : Hitori@gmail.com",
        "image" => "Hitori.jpg",
        "Hello" => "Nice To meet you EveryOne"
    ]);
});


Route::get('/tester2', function() {
    return view('Laravel2');
});

Route::get('/main', function() {
    return view('Layouts/main');
});