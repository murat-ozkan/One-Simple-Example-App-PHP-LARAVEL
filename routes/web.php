<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
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

//? Basit olarak hangi url hangi fonksiyonu tetikleyecek...
Route::get('/',  [HomeController::class, "index"]);
Route::get('/index', [HomeController::class, "index"]);
Route::get('/contact', [HomeController::class, "contact"]);
Route::get("/blogs/{id}", [BlogController::class, "show"]);
Route::get("/blogs", [BlogController::class, "index"]);
Route::get("/form", [FormController::class, "index"]);
Route::post("/form", [FormController::class, "formData"]);
Route::get("/responses", function () {
    return redirect("/form");
});
