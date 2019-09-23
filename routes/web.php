<?php





Auth::routes();

Route::group(['prefix' => 'secureadmin'], function () {
    Route::get('home','AdminController@index');
    Route::get('login','AdminController@login');
    Route::get('/','AdminController@index');
    Route::resource('/audio_lessons','AudioLessonController');
    Route::resource('/speakers','SpeakerController');
    Route::resource('/thesis','ThesisController');
    Route::resource('/teacher','TeacherController');
    Route::resource('/eventType', 'EventTypeController');
    Route::resource('/event', 'EventController');
    Route::post('login','AdminController@postLogin')->name('adminLogin');
});


// ================ Client =================
Route::get('/about', 'client\PageController@about');
Route::get('/contact', 'client\PageController@contact');
Route::get('/thesis', 'client\PageController@thesis');
Route::get('/client_speakers', 'client\PageController@client_speaker');
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
