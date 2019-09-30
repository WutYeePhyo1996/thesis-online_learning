<?php
namespace App\Service;
namespace App\Http\Controllers;
use App\{Event, EventImage};
use Illuminate\Http\Request;
// use Illuminate\Http\UploadService\Controller;
use App\Service\UploadService;
use Storage,Service;


class EventImageController extends Controller
{
  
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
        $event = Event::where('id',$id)->first();
        $event_images = EventImage::where('event_id', $id)->get();
        return view('admin/event_image/create_edit', compact('id', 'event','event_images'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = "/public/event_image";
        $file = $request->file;
        $data = $request->all();
        $data['file'] = $file->getClientOriginalName();

        EventImage::create($data);
        UploadService::fileUpload($file, $path);
        return redirect('secureadmin/event_images/'. $request->event_id);
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
