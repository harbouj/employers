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

Route::get('/', 'EmployerController@index');

Route::get('/employers/create', 'EmployerController@create')->name('create');
Route::post('/employers/create', 'EmployerController@store');

Route::get('/employers/edit/{id}', 'EmployerController@edit')->name('edit');
Route::post('/employers/edit', 'EmployerController@update');

Route::get('/employers/delete/{id}', 'EmployerController@destroy')->name('delete');

