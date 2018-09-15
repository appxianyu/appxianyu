<?php

namespace App\Http\Middleware;

use App\Http\Middleware\HomeMiddleware;
use Closure;
use Illuminate\Contracts\Session\Session;

class HomeMiddleware
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
        if(\Session::has('id')){
            return $next($request);
        }else{
            return redirect('/login')->with('error','您还没有登录');
        }
        
    }
}
