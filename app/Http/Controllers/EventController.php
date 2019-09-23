<?php

namespace App\Http\Controllers;

use App\{EventType, Event};
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }

    public function index()
    {
        $events = Event::all();
        $eventTypes = EventType::all();
        return view('admin.event.index', compact('events', 'eventTypes'));
    }


    public function create()
    {
        // $event =new Event();
        // $eventTypes = EventType::all();
        return view('admin.event.create-edit')
                ->withEvent(new Event())
                ->withEventTypes(EventType::all());
    }


    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect('secureadmin/event');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $eventTypes = EventType::all();
        return view('admin.event.create-edit', compact('event', 'eventTypes'));
    }

    public function update(Request $request, $id)
    {
        Event::findOrFail($id)->update($request->all());
        return redirect('secureadmin/event');
    }

    public function destroy($id)
    {
         Event::findOrFail($id)->delete();
         return back();
    }
}
