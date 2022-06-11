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

Route::get('/', function () {return view('welcome');});

Route::get('/', 'NoteController@getNote')->name('welcome');
Route::delete('/delete/id', 'NoteController@delete')->name('delete');
Route::put('/edit/id', 'NoteController@edit')->name('edit');
Route::get('/create', 'NoteController@create')->name('create');
Route::post('/store', 'NoteController@store')->name('store');