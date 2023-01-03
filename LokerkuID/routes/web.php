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
    return view('index');
});
Route::get('/findjob', function () {
    return view('findjob');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobdetail', function () {
    return view('jobdetail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
