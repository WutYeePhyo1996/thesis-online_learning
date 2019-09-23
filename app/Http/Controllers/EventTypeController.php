<?php

namespace App\Http\Controllers;

use App\EventType;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }

    public function index()
    {
        $eventTypes = EventType::all();
        return view('admin.eventType.index', compact('eventTypes'));
    }

    public function create()
    {
        $eventType =new EventType();
        return view('admin.eventType.create-edit', compact('eventType'));
    }

    public function store(Request $request)
    {
        EventType::create($request->all());
        return redirect('/secureadmin/eventType');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $eventType = EventType::findOrFail($id);
        return view('admin.eventType.create-edit', compact('eventType'));
    }

    public function update(Request $request, $id)
    {
        EventType::findOrFail($id)->update($request->all());
        return redirect('secureadmin/eventType');
    }
    public function destroy($id)
    {
        EventType::findOrFail($id)->delete();
        return back();
    }
}
