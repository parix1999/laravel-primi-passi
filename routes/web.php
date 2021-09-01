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
    return view('home',
    [
        "name" => "pageHomeIt'sMe!"
    ]
    );
});

Route::get('/about-us', function () {
    return view('about-us',
    [
        "src" => "https://i.ytimg.com/vi/8EzvnuqcIpI/maxresdefault.jpg",
        "backSrc" => "https://www.fumettologica.it/wp-content/uploads/2021/08/spider-man-no-way-home-1.jpg",
        "link" => "https://www.youtube.com/watch?v=vPgPGC8HGpc"

    ]
    );
});