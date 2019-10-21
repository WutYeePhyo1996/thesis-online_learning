<?php

namespace App\Http\Controllers;
use App\{Feedback};

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin']);
    }
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }

  
    public function create()
    { 
      
    }

   
    public function store(Request $request)
    {
        $feedback = new Feedback;
        $data = $request->all();
        $feedback->create($data);
        return back()->with('success-msg', 'Task was successful!');
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
