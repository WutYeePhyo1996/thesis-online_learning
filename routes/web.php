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
    Route::resource('/assignment', 'AssignmentController');
<<<<<<< HEAD
    // Route::get('assignment/create/{class_id}', 'AssignmentController@create_assignment'); // change
    // Route::resource('assignment/{class_id}', 'AssignmentController@list');
=======
    Route::get('assignment/create/{class_id}', 'AssignmentController@create_assignment');
    Route::get('assignment/showByClass/{class_id}', 'AssignmentController@showByClass')->name('show-by-class');
>>>>>>> 4444736b525943205cfc4d22f71cfb8ca20eaa4c
    Route::resource('/class', 'ClassController');
    Route::post('login','AdminController@postLogin')->name('adminLogin');

    Route::get('/event_images/create/{id}', 'EventImageController@create_file');
    Route::get('/audio_lessons/create/{id}','AudioLessonController@create_file');
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

//=================Assignment=====================

//===============end Assignment=======================

Route::get('/contact', 'client\PageController@contact');
Route::get('/thesis/{id}', 'client\PageController@thesis');
Route::get('/client_speakers', 'client\PageController@client_speaker');
Route::get('/', 'client\PageController@home');
Route::get('/thesis_link', 'client\PageController@thesis_link');
Route::get('/event_detail/{id}', 'client\PageController@event_detail');
Route::get('/event','client\PageController@events');
Route::post('/thesis/search', 'client\ThesisController@search');
Route::get('/thesis', 'client\ThesisController@index');

// ================End Client =================

// ================ Student ===================
Route::get('/register', 'client\UserController@index')->name('register');
Route::post('/register', 'client\UserController@create')->name('postRegister');
