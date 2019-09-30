<?php





Auth::routes();

Route::group(['prefix' => 'secureadmin'], function () {
    Route::get('home','AdminController@index');
    Route::get('login','AdminController@login');
    Route::get('/','AdminController@index');
    Route::resource('user','UserController');
    Route::resource('/audio_lessons','AudioLessonController');
    Route::resource('/speakers','SpeakerController');
    Route::resource('/thesis','ThesisController');
    Route::resource('/teacher','TeacherController');
    Route::resource('/eventType', 'EventTypeController');
    Route::resource('/event', 'EventController');
    Route::resource('/event_images', 'EventImageController');
    Route::get('/event_images/create/{id}', 'EventImageController@create_file');
    Route::post('login','AdminController@postLogin')->name('adminLogin');
});


// ================ Client =================
Route::get('/about', 'client\PageController@about');

//=================Lecture=====================

Route::get('/1beit', 'client\PageController@onebeit');
Route::get('/2beit', 'client\PageController@twobeit');
Route::get('/3beit', 'client\PageController@threebeit');
Route::get('/4beit', 'client\PageController@fourbeit');
Route::get('/5beit', 'client\PageController@fivebeit');
Route::get('/6beit', 'client\PageController@sixbeit');

//===============end lecture=======================

Route::get('/contact', 'client\PageController@contact');
Route::get('/thesis/{id}', 'client\PageController@thesis');
Route::get('/client_speakers', 'client\PageController@client_speaker');
Route::get('/', 'client\PageController@home');
Route::get('/thesis_link', 'client\PageController@thesis_link');
Route::get('/event_detail/{id}', 'client\PageController@event_detail');
Route::get('/event','client\PageController@events');

// ================End Client =================

// Route::get('/about', function() {
//     $active = 'about';
//     return view('client.about',compact('active'));
// });
// Route::resource('/', 'client\TeacherController');
// Route::get('/contact', function() {
//     $active = 'contact';
//     return view('client.contact',compact('active'));
// });

// Route::get('/thesis', 'client\ThesisController@index');
// Route::post('/thesis/search', 'client\ThesisController@search');

// Route::resource('/client_speakers', 'client\SpeakerController');
