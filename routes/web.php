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
    return view('welcome');
});

Route::get('/about', function () {
    return view('public pages/about');
});

Route::get('/portfolio', function () {
    return view('public pages/portfolio');
});

Route::get('/materials', function () {
    return view('public pages/materials');
})->name('materials');

Route::get('/contact', function () {
    return view('public pages/contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
