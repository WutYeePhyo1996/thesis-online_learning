<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\RegisterFormStore;
use Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('admin.register');
    }
    public function create(RegisterFormStore $request) 
    {
        $user = $request->all();
        $user['password'] = Hash::make($user['password']);
        $user['type'] = 'student';
        $user = User::create($user);
        Auth::login($user);
        return redirect('/secureadmin');
    }
}
