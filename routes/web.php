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

use App\Todo;

Route::get('/', function () {
    $todos = Todo::orderBy('created_at', 'DESC')->get();
    return view('welcome')->with('todos', $todos);
})->name('home');

Route::post('/store', 'PagesController@store')->name('store-todo');

Route::get('/new', 'PagesController@new')->name('new-todo');
