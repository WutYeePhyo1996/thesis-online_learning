<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Thesis;

class ThesisController extends Controller
{
    public function index()
    {
        $theses = \App\Thesis::all();
        return view('client.thesis.index',compact('theses'));
    }

    public function search(Request $request) 
    {
        $thesis = Thesis::where('title','like','%'.$request->keyword.'%')
        ->orWhere('author','like','%'.$request->keyword.'%')
        ->get();
        return view('client.thesis.index',compact('thesis'));
    }
}
