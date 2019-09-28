<?php

namespace App\Http\Controllers;
use App\{Event, EventImage};
use Illuminate\Http\Request;

class EventImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_images =EventImage::all();
        $event =Event::all();
        return view('admin.event-images.index', compact('event_images', 'event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function create_file($id)
    {
        $event = Event::findOrFail($id);
         $event =Event::all();
        return view('admin/event_image/create_edit', compact('id', 'event'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $files = $request->file;
        $path = '/public/event_image';
        foreach($files as $file){
            $data = new EventImage;
            $data->event_id = $request->event_id;
            $data->file_name = $file->getClientOriginalName();
            $data->save();
            UploadService::fileUpload($file, $path);
    }
        return redirect('e-admin/event_images/'. $request->event_id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event_images = EventImage::where('event_id', $id)->get();
        return view('admin.event_image.index', compact('event_images', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
