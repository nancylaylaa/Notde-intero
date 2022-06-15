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

Route::get('/', 'NoteController@getNote')->name('welcome');
Route::get('/destroy/{id}', 'NoteController@Destroy')->name('destroy');
Route::get('/edit/{id}', 'NoteController@Edit')->name('edit');
Route::post('/update/{id}', 'NoteController@Update')->name('update');
Route::get('/create', 'NoteController@Create')->name('create');
Route::post('/store', 'NoteController@Store')->name('store');