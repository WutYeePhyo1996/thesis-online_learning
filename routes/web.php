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



Auth::routes();

Route::group(['prefix' => 'secureadmin'], function () {
    Route::get('home','AdminController@index');
    Route::get('login','AdminController@login');
    Route::get('/','AdminController@login');
    Route::resource('/audio_lessons','AudioLessonController');
    Route::resource('/speakers','SpeakerController');
    Route::resource('/thesis','ThesisController');
    Route::post('login','AdminController@postLogin')->name('adminLogin');
});

Route::get('admin', function() {
    return 'work';
});

// Route::get('protected', ['middleware' => ['auth', 'admin'], function() { return "this page requires that you be logged in and an Admin";
//  }]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', function() {
    $active = 'about';
    return view('client.about',compact('active'));
});
Route::get('/', function() {
    return view('client.home');
});
Route::get('/contact', function() {
    $active = 'contact';
    return view('client.contact',compact('active'));
});
