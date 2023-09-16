<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get("/blogs", function () {
    $data = [
        [
            "id" => 1,
            "title" => "Laravel Dersleri",
            "description" => "Nice Framework",
            "likeCount" => 50,
            "active" => true,
        ],
        [
            "id" => 2,
            "title" => "Django Dersleri",
            "description" => "Nice Framework",
            "likeCount" => 41,
            "active" => true,
        ],
        [
            "id" => 3,
            "title" => "React Dersleri",
            "description" => "Nice Framework",
            "likeCount" => 30,
            "active" => true,
        ],
    ];
    return view("blogs", ["blogs" => $data]); // use square brackets because it is an array.? 
});

Route::get("/blogs/{id}", function (int $id) {
    $data = [
        "id" => $id,
        "title" => "Laravel Dersleri",
        "description" => "Nice Framework",
        "likeCount" => 50,
        "active" => true,
    ];
    return view("blogs-details", $data);
});
