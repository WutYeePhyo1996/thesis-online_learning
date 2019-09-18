<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thesis;
use App\Service\UploadService;
use App\Http\Requests\{ThesisFormStore,ThesisFormUpdate};
use Storage;

class ThesisController extends Controller
{
    
    public function index()
    {
        $all_thesis = \App\Thesis::all();
        return view('admin.thesis.index', compact('all_thesis'));
    }

    
    public function create()
    {
        $thesis = new Thesis;
        return view('admin.thesis.create-edit', compact('thesis'));
    }

    
    public function store(ThesisFormStore $request)
    {
        $path = "/public/pdf";
        $file = $request->file;
        $thesis = $request->all();
        $thesis['file'] = $file->getClientOriginalName();

        Thesis::create($thesis);
        UploadService::fileUpload($file, $path);
        return redirect('secureadmin/thesis');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $thesis = Thesis::findorFail($id);
        return view('admin.thesis.create-edit', compact('thesis'));
    }

    
    public function update(ThesisFormUpdate $request, $id)
    {
        $old_thesis = Thesis::findorFail($id);
        $data = $request->all();

        $data['file'] = UploadService::checkFileExist($request->file, $old_thesis['file'], '/public/pdf');
        $thesis = Thesis::find($id)->fill($data)->save();
        return redirect('secureadmin/thesis');
    }

    
    public function destroy($id)
    {
        $data = Thesis::findOrFail($id);
        Storage::delete('/public/pdf/'.$data['file']);
        $data->delete();
        return back();
    }
}
