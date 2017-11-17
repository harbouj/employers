<?php


Route::get('/', 'EmployerController@index');

Route::get('/employers/create', 'EmployerController@create')->name('create');
Route::post('/employers/create', 'EmployerController@store');

Route::get('/employers/edit/{id}', 'EmployerController@edit')->name('edit');
Route::post('/employers/edit', 'EmployerController@update');

Route::get('/employers/delete/{id}', 'EmployerController@destroy')->name('delete');

