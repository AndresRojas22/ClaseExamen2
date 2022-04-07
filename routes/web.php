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
    return view('main');
})->name('main');

Route::get('/Histioria', function () {
    return view('Historia');
})->name('Historia');

Route::get('/Cintas', function () {
    return view('Cintas');
})->name('Cintas');

Route::get('/Reglas', function () {
    return view('Reglas');
})->name('Reglas');

Route::get('/Patadas', function () {
    return view('Patadas');
})->name('Patadas');
