<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;

class AssignmentController extends Controller
{
    
    public function index()
    {
        $assignments =Assignment::all();
        return view('admin.assignment.index', compact('assignments'));
    }

 
    public function create()
    {
        $assignment = new Assignment;
        return view('admin.assignment.create', compact('assignment'));
    }

    public function store(Request $request)
    {
        parent::upload_document($request->file,
        ['name'=>rand(),
        'id'=>$request->id,
        'data_id'=> $request->id,
        'path'=>'/public/assignment/',
        'obj'=>'App\Assignment',
        'file'=>'file']);
        return redirect('secureadmin/assignment');
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
