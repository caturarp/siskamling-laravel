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
    return view('/layout/beranda');
});
Route::get('/kelas', function () {
    return view('/layout/kelas');
});
Route::get('/transkrip', function () {
    return view('/layout/transkrip');
});
Route::get('/lapor', function () {
    return view('/layout/lapor');
});