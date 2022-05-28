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
/*
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



Route::namespace('Front')->group( function () {

    Route::get('users', 'UserController@showUserName');
});


//دا اول شكل للجروب بيتكتب بنفس الطريقه الموجوده تحت 
Route::prefix('users') ->group(function () {
    Route::get('/', function() {return 'USERS PAGE';});
    Route::get('show', function() {return 'SHOW USERS';});
    //Route::delete('delete', function () {return 'delete all users';});
});

//دا تاني شكل وهنا نقدر نضيف البريفكس والنيمسبيس و ميديلوير جوه جروب واحد 
Route::group(['prefix' => 'users',
             'namespace' => 'Front', 
             'middleware' => 'auth'], function() {

    //Route::get('/', 'UserController@showUserName');
    //Route::get('show', function() {return 'SHOW USERS';});
    //Route::delete('delete', function () {return 'delete all users';});
});

Route::group(['namespace' => 'Front'], function() {
    Route::get('sek', 'FirstController@showName');
});*/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/redirect/{service}', 'SocialController@redirect');

Route::get('/callback/{service}', 'SocialController@callback');


