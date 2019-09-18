<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AudioLesson;

class AudioLessonController extends Controller
{
  
    public function index()
    {
        $lessons = AudioLesson::all();
        return view('admin.audio_lessons.index', compact('lessons'));
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
