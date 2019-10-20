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
    Route::get('assignment/create/{class_id}', 'AssignmentController@create_assignment');
    Route::get('assignment/showByClass/{class_id}', 'AssignmentController@showByClass')->name('show-by-class');
    Route::resource('/class', 'ClassController');
    Route::post('login','AdminController@postLogin')->name('adminLogin');

    Route::get('/event_images/create/{id}', 'EventImageController@create_file');
    Route::get('/speakers/create/{id}','SpeakerController@create_file');
    Route::get('/audio_lessons/create/{id}','AudioLessonController@create_file');
    Route::resource('/feedback', 'FeedbackController');
});


// ================ Client =================
Route::get('/about', 'client\PageController@about')->name('about');

//=================Lecture=====================

Route::get('/1beit', 'client\PageController@onebeit')->name('1-beit');
Route::get('/2beit', 'client\PageController@twobeit')->name('2-beit');
Route::get('/3beit', 'client\PageController@threebeit')->name('3-beit');
Route::get('/4beit', 'client\PageController@fourbeit')->name('4-beit');
Route::get('/5beit', 'client\PageController@fivebeit')->name('5-beit');
Route::get('/6beit', 'client\PageController@sixbeit')->name('6-beit');

//===============end lecture=======================

//=================Assignment=====================

//===============end Assignment=======================

Route::get('/contact', 'client\PageController@contact')->name('contact');
Route::get('/thesis/{id}', 'client\PageController@thesis')->name('thesis-get');
Route::get('/client_speakers', 'client\PageController@client_speaker')->name('client-speakers');
Route::get('/', 'client\PageController@home')->name('home');
Route::get('/thesis_link', 'client\PageController@thesis_link')->name('thesis-link');
Route::get('/event_detail/{id}', 'client\PageController@event_detail');
Route::get('/event','client\PageController@events')->name('event');
Route::post('/thesis/search', 'client\ThesisController@search');
Route::get('/thesis', 'client\ThesisController@index');

// ================End Client =================

// ================ Student ===================
Route::get('/register', 'client\UserController@index')->name('register');
Route::post('/register', 'client\UserController@create')->name('postRegister');
