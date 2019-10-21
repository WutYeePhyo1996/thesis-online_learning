<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Speaker, Classes};

class SpeakerController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }

    public function index()
    {
        $speakers = Speaker::all();
        $class = Classes::all();
        return view('admin.speakers.index', compact('speakers', 'class'));
    }

    public function create_file($id){
       
        $class = Classes::where('id', $id)->first();
        $speaker = new Speaker();
        return view('admin.speakers.create-edit', compact('class','speaker'));
        
    }

    public function create()
    {
      
    }

    public function store(Request $request)
    {
      Speaker::create($request->all());

        return redirect('secureadmin/speakers/'.$request->class_id);
    }

    public function show($id)
    {
        $speakers = Speaker::where('class_id', $id)->get();
        return view('admin.speakers.index', compact('speakers', 'id'));
    }

    public function edit($id)
    {
        $speaker = Speaker::findOrFail($id);
        return view('admin.speakers.create-edit', compact('speaker'));
    }

    public function update(Request $request, $id)
    {
        Speaker::findOrFail($id)->update($request->all());
        return redirect('secureadmin/speakers');
    }

    public function destroy($id)
    {
        Speaker::findOrFail($id)->delete();
        return back();
    }
}
