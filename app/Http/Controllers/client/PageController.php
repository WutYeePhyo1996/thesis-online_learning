<?php

namespace App\Http\Controllers\client;
use App\{Thesis, Event};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        return view('client.about');
    }

    public function onebeit()
    {
        return view('client.lecture.1beit');
    }

    public function twobeit()
    {
        return view('client.lecture.2beit');
    }

    public function threebeit()
    {
        return view('client.lecture.3beit');
    }

    public function fourbeit()
    {
        return view('client.lecture.4beit');
    }

    public function fivebeit()
    {
        return view('client.lecture.5beit');
    }

    public function sixbeit()
    {
        return view('client.lecture.6beit');
    }


    public function contact()
    {
        return view('client.contact');
    }

    public function thesis($id)
    {
        $thesis = Thesis::where('id', $id)->first();
        return view('client.thesis.index', compact('thesis'));


                // $event = Event::where('id',$id)->first();
                // $event_images = EventImage::where('event_id', $id)->get();

                // return view('client.news_detail', compact('event_images', 'event'));
    }

    public function client_speaker(){
        return view('client.audio_lessons.speakers')
                ->withSpeakers(\App\Speaker::all());

    }

    public function home(){
        $events = Event::all();
        return view('client.home', compact('events'));
    }

    public function thesis_link(){
        return view('client.thesis.thesis_link')
                ->withTheses(\App\Thesis::all());
    }

    public function events(){
        return view('client.event')
                ->withEvents(\App\Event::all());
    }

    public function event_detail($id)
    {
        $event = Event::where('id', $id)->first();
        return view('client.event.index', compact('event'));
    }
}
