<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['admin', 'isAdmin'],['except'=>['login','postLogin']]);
    }

    public function index()
    {
        return view('admin.home');
    }

    public function login() 
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required', 
            'password' => 'required'
        ]);

        $attributes = $request->all();

        if (Auth::attempt(['email' => $attributes['email'], 'password' => $attributes['password']])) {
            // Success

            return redirect('/secureadmin/home');
        } else {
            // Go back on error (or do what you want)
            return redirect()->back();
        }
        return 'work';
    }
}
