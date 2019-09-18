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

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('home','AdminController@index');
    Route::get('login','AdminController@login');
    Route::post('login','AdminController@postLogin')->name('adminLogin');
});



// Route::get('protected', ['middleware' => ['auth', 'admin'], function() { return "this page requires that you be logged in and an Admin";
//  }]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', function() {
    return view('client.about');
});
Route::get('/', function() {
    return view('client.home');
});
