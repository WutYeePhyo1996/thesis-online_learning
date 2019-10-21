<?php

namespace App\Http\Controllers;
use App\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    
    public function index()
    {
        $classes = Classes::all();
        return view('admin.class.index', compact('classes'));
    }

    public function create()
    {
        $class = new Classes();
        return view('admin.class.create', compact('class'));
    }

   
    public function store(Request $request)
    {
        Classes::create($request->all());
        return redirect('secureadmin/class');
    }

    
    public function show($id)
    {
        //
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
