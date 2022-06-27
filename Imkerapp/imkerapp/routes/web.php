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
    return view('homepage');
});
Route::get('/basiscursus', function () {
    return view('basiscursus');
});
Route::get('/basiscursus', function () {
    return view('basiscursus');
});
Route::get('/imkerbenodigheden', function () {
    return view('imkerbenodigheden');
});
Route::get('/lidmaatschap', function () {
    return view('lidmaatschap');
});
Route::get('/bijenzwerm-hommelnest', function () {
    return view('bijenzwerm-hommelnest');
});
Route::get('/alles-over-bijen', function () {
    return view('alles-over-bijen');
});
Route::get('/links', function () {
    return view('links');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/artikelen', function () {
    return view('artikelen');
});
Route::get('/verslagen', function () {
    return view('verslagen');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
