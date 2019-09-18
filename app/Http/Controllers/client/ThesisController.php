<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThesisController extends Controller
{
    public function index()
    {
        $theses = \App\Thesis::all();
        return view('client.thesis.index',compact('theses'));
    }
}
