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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tasks', 'TaskControllrer@index')->name('tasks.index');
Route::get('/tasks/create', 'TaskControllrer@create')->name('tasks.create');
Route::post('/tasks', 'TaskControllrer@store')->name('tasks.store');
