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

Route::get('/admin', function () {
    return 'Welcome From Admin';
});

Route::get('/test', function () {
    return 'hamza';
});

//'/test{id}' = requierd parameter 
Route::get('/test2/{id}', function ($id) {
    return $id;
});

//'/test{id?}' = not requierd parameter
Route::get('/test3/{id?}', function () {
    return 'hamza';
});

Route::get('show.num/{id?}', function ($id) {
    return 'First Route';
})->name('show');

Route::get('show.string', function () {
    return 'Second Route';
})->name('show');