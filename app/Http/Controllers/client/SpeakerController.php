<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Speaker;

class SpeakerController extends Controller
{
   
    public function index()
    {
        $speakers = Speaker::all();
        return view('client.audio_lessons.speakers', compact('speakers'));
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
       
        $speaker = Speaker::findOrFail($id);
    return view('client.audio_lessons.lessons', compact('speaker'));
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
