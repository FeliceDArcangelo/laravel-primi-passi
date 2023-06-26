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
    return view('home');
});
Route::get('/chisiamo', function () {
    return view('chisiamo');
});
Route::get('/prodotti', function () {
    return view('prodotti');
});
Route::get('/trovarci', function () {
    return view('trovarci');
});
Route::get('/contattaci', function () {
    return view('contattaci');
});
