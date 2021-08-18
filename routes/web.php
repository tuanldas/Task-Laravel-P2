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


Route::prefix('tasks')->group(function () {

    Route::get('/', 'LoginController@index');

    Route::get('/list', 'TaskController@index')->name('list');

    Route::get('search', 'TaskController@search')->name('search');

    Route::get('{id}/delete/', 'TaskController@destroy')->name('delete');

    Route::get('/add', 'TaskController@create')->name('add');

    Route::post('/adddata', 'TaskController@store')->name('addData');

    Route::get('{id1}/update/', 'TaskController@edit')->name('update');

    Route::post('{id1}/update/', 'TaskController@update')->name('updateData');

    Route::post('/login', 'LoginController@checkLoginOrSignUp')->name('login');
});