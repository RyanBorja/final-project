<?php

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
    return view('landingContent/welcome');
});

Route::get('/about', function () {
    return view('public pages/about');
});

Route::get('/portfolio', function () {
    return view('public pages/portfolio');
});

Route::get('/materials', function () {
    $stones = \App\Stone::orderBy('name')->get();
    return view('public pages/materials', compact('stones'));
});

Route::get('/contact', function () {
    return view('public pages/contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
