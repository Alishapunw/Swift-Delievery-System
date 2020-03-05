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

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/map2', function () {
    return view('map2');
})->name('map2');


Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/adddata', function () {
    return view('adddata');
})->name('adddata');

Route::get('/homep', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/sendVal','HomeController@sendVal')->name('val');