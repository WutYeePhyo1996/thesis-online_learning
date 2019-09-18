<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{AudioLesson, Speaker};
use App\Service\UploadService;
use Storage;

class AudioLessonController extends Controller
{
  
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
        $file = $request->file;
        $data = $request->all();
        $data['file'] = $file->getClientOriginalName();

        AudioLesson::create($data);
        UploadService::fileUpload($file, $path);
        return redirect('admin/audio_lessons');
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

        $data['file'] = UploadService::checkFileExist($request->file, $lesson['file'], $path);
        $lesson->update($data);
        return redirect('admin/audio_lessons');

    }

    public function destroy($id)
    {
        $data = AudioLesson::findOrFail($id);
        Storage::delete('/public/audios/'.$data['file']);
        $data->delete();
        return back();
    }
}
