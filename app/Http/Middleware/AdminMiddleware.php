<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //ddd(Auth::user()->role);

        if (Auth::user()->role == 'admin') {
            ddd('admin, ritorna vista per admin');
            
        }
        if (Auth::user()->role == 'user') {
            ddd('user, ritorna vista per user');
            
        }
        if (Auth::user()->role == 'ristoratore') {
            ddd('ristoratore, ritorna vista per ristoratore');
            
        }

        //ddd('no admin');
        return redirect('/');
    }
}