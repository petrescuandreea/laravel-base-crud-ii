<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@home') -> name('home');
Route::get('/user/show/{id}', 'HomeController@show') -> name('show');

Route::get('user/create', 'HomeController@create') -> name('create');
Route::post('user/store', 'HomeController@store') -> name('store');

Route::get('user/edit/{id}', 'HomeController@edit') -> name('edit');
Route::post('user/update/{id}', 'HomeController@update') -> name('update');

Route::get('user/delete/{id}', 'HomeController@delete') -> name('delete');