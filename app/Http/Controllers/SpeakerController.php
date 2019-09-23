<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speaker;

class SpeakerController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }

    public function index()
    {
        $speakers = Speaker::all();
        return view('admin.speakers.index', compact('speakers'));
    }


    public function create()
    {
        $speaker = new Speaker;
        return view('admin.speakers.create-edit', compact('speaker'));
    }

    public function store(Request $request)
    {
        Speaker::create($request->all());
        return redirect('secureadmin/speakers');
    }

    public function show($id)
    {
        //
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
