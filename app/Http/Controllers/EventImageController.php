<?php
namespace App\Service;
namespace App\Http\Controllers;
use App\{Event, EventImage};
use Illuminate\Http\Request;
use App\Service\UploadService;
use Storage,Service;


class EventImageController extends Controller
{

    public function index()
    {
        $event_images =EventImage::all();
        $event =Event::all();
        return view('admin.event_image.index', compact('event_images', 'event'));
    }


    public function create()
    {

    }

    public function create_file($id)
    {
        $event = Event::where('id',$id)->first();
        $event_images = EventImage::where('event_id', $id)->get();
        return view('admin/event_image/create_edit', compact('id', 'event','event_images'));
    }


    public function store(Request $request)
    {
        // $path = "/public/event_image";
        // $file = $request->file;
        // $data = $request->all();
        // $data['file'] = $file->getClientOriginalName();
        parent::upload_document($request->file,
        ['name'=>rand(),
        'id'=>'event_id',
        'data_id'=> $request->event_id,
        'path'=>'/public/event_image/',
        'obj'=>'App\EventImage',
        'file'=>'file']);
        return redirect('secureadmin/event_images/'. $request->event_id);
    }


    public function show($id)
    {
        $event_images = EventImage::where('event_id', $id)->get();
        return view('admin.event_image.index', compact('event_images', 'id'));
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
