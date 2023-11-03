<?php

use App\Http\Middleware\AfterMiddleware;
use App\Http\Middleware\BeforeMiddleware;
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
    return view('welcome');
})->middleware(['BeforeMiddleware','AfterMiddleware']);

Route::get('HOME', function () {
    return view('home');
});


Route::get('GOOD', function () {
    return view('good');
})->middleware(AfterMiddleware::class, BeforeMiddleware::class);