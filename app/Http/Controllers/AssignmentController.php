<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Assignment, Classes};
use App\Service\UploadService;
use Storage;

class AssignmentController extends Controller
{

    public function index()
    {
        // $assignments =Assignment::all();
        //  $classes = StudentClass::all();
        // return view('admin.assignment.index', compact('assignments'));
    }

    public function list($class_id){

        $assignments = Assignment::findOrFail($class_id);
        return view ('admin.assignment.list', compact('assignments'));
    }

    public function create(){

    }

    public function create_assignment($class_id)
    {
        $assignment = new Assignment;
        $classes = Classes::all();
        return view('admin.assignment.create', compact('assignment', 'classes'));
    }

    public function store(Request $request)
    {
        $path = "/public/assignment";
        $file = $request->file;
        $data = $request->all();
        $data['file'] = $file->getClientOriginalName();

        $assignment = Assignment::create($data);
        UploadService::fileUpload($file, $path);
        return redirect('secureadmin/assignment/showByClass/'.$assignment->class_id);
    }

    public function show($id)
    {
        //
    }

    public function showByClass($class_id)
    {

        $assignments  = Assignment::where('class_id', $class_id)->get();
        return view('admin.assignment.list',compact('assignments','class_id'));
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

    public function onebeit(){
        $assignment = new Assignment;
        return view('admin.assignment.create-edit', compact('assignment'));
    }
}
