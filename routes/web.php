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
    return view('index');
});
Route::get('/explore', function () {
    return view('explore');
});
Route::get('/start-project', function () {
    return view('edit');
});
Route::get('/about-us', function () {
    return view('about');
});