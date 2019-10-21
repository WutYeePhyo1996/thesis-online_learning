<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{AudioLesson, Speaker};
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
        // parent::upload_document($request->file,
        // ['name'=>rand(),
        // 'id'=>'speaker_id',
        // 'data_id'=> $request->speaker_id,
        // 'path'=>'/public/audios',
        // 'obj'=>'App\AudioLesson',
        // 'file'=>'file']);
        // dd("file");
        // return redirect('/secureadmin/audio_lessons/1');

        $path = "/public/audios";
        $files = $request->file;
        $data = $request->all();
         $data_id = $request->speaker_id;
       
        $data['file'] = $files[0]->getClientOriginalName();

        
        foreach($files as $file) {
            UploadService::fileUpload($file, $path);
        }
      
        AudioLesson::create($data);
        return redirect('secureadmin/audio_lessons/'. $request->speaker_id);
    }

    public function create_file($id){
        $speaker = Speaker::where('id', $id)->first();       
        $lesson = AudioLesson::all();
        return view('admin.audio_lessons.create', compact( 'lesson', 'speaker'));
    }

    public function show($id)
    {
        $lessons = AudioLesson::where('speaker_id', $id)->get();
        return view('admin.audio_lessons.index', compact('lessons', 'id'));
    }


    public function edit($id)
    {
        $lesson = AudioLesson::findOrFail($id);
        $speakers = new Speaker();
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
