<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{AudioLesson, Speaker,Classes};
use App\Service\UploadService;
use Storage;

class AudioLessonController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }

    public function index()
    {
        $lessons = AudioLesson::all();
        return view('admin.audio_lessons.index', compact('lessons'));
    }

    public function create()
    {
        $lesson = new AudioLesson;
        $speakers = Speaker::all();
        return view('admin.audio_lessons.create', compact('lesson', 'speakers'));
    }


    public function store(Request $request)
    {

        $path = "/public/audios";
        $files = $request->file;
        $data = $request->all();
         $data_id = $request->speaker_id;
       
        $data['file'] = $files[0]->getClientOriginalName();

        
        foreach($files as $file) {
            UploadService::fileUpload($file, $path);
        }
        
        AudioLesson::create($data);
        
        return redirect('secureadmin/audio_lessons');
    }

    public function create_file($id){
        $classes = Classes::where('id', $id)->first();
        // $lesson = AudioLesson::where('class_id', $id)->get();
        $lesson = AudioLesson::where('class_id', $id)->get()->first();
        return view('admin.audio_lessons.create', compact( 'classes', 'lesson', 'speakers'));
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $lesson = AudioLesson::findOrFail($id);
        $speakers = Speaker::all();
        return view('admin.audio_lessons.create', compact('lesson', 'speakers'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $lesson = AudioLesson::findOrFail($id);
        $path = '/public/audios';

        foreach($request->file as $file)
        {
            $data['file'] = UploadService::checkFileExist($file, $lesson['file'], $path);
        }
        
        $lesson->update($data);
        return redirect('secureadmin/audio_lessons');

    }

    public function destroy($id)
    {
        $data = AudioLesson::findOrFail($id);
        Storage::delete('/public/audios/'.$data['file']);
        $data->delete();
        return back();
    }
}
