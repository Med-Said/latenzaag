<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if(Auth::check()){//if user is authenticated
            if(!Auth::user()->isAdmin){//and if he is not  an  admin ?
                return redirect('denied');
            }
        }
        else{//he is not even authenticated.
            return redirect('denied');
        }
        return $next($request);
    }
}
