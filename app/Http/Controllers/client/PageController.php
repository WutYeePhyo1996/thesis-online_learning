<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        return view('client.about');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function thesis()
    {
        return view('client.thesis.index')
                ->withTheses(\App\Thesis::all());
    }

    public function client_speaker(){
        return view('client.audio_lessons.speakers')
                ->withSpeakers(\App\Speaker::all());

    }

}
