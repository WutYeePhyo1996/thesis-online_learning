<?php

namespace App\Http\Controllers\client;
use App\{Thesis, Event, EventImage, AudioLesson, Classes};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        $classes = Classes::all();
        return view('client.about', compact('classes'));
    }

    public function onebeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.1beit', compact('audios'));
    }

    public function twobeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.2beit', compact('audios'));
    }

    public function threebeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.3beit', compact('audios'));
    }

    public function fourbeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.4beit', compact('audios'));
    }

    public function fivebeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.5beit', compact('audios'));
    }

    public function sixbeit()
    {
        $audios = AudioLesson::all();
        return view('client.lecture.6beit', compact('audios'));
    }


    public function contact()
    {
        $classes = Classes::all();
        return view('client.contact',compact('classes'));
    }

    public function thesis($id)
    {
        $thesis = Thesis::where('id', $id)->first();
        return view('client.thesis.index', compact('thesis'));
    }

    public function client_speaker(){
        return view('client.audio_lessons.speakers')
                ->withSpeakers(\App\Speaker::all());

    }

    public function home(){
        $classes = Classes::all();
        $events = Event::all();
        return view('client.home', compact('events', 'classes'));
    }

    public function thesis_link(){
        return view('client.thesis.thesis_link')
                ->withTheses(\App\Thesis::all());
    }

    public function events(){
        $classes = Classes::all();
        return view('client.event', compact('classes'))
                ->withEvents(\App\Event::all());
    }

    public function event_detail($id)
    {   $classes = Classes::all();
        $event = Event::where('id', $id)->first();
        $event_images = EventImage::where('event_id', $id)->get();
        return view('client.event_detail', compact('event', 'event_images','classes'));
    }
}
