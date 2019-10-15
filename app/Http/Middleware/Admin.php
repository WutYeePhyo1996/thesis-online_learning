<?php namespace App\Http\Middleware;

use Closure;

class Admin {

    public function handle($request, Closure $next)
    {

        if(auth()->user()->isAdmin() || auth()->user()->isTeacher() || auth()->user()->isStudent()) {
            return $next($request);
        }
        return redirect('secureadmin/login');

    }

}