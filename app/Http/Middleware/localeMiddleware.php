<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Cookie;

class localeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = strtolower(Cookie::get('lang'));
        if(in_array($lang,config('info.locals'))){
            App::setLocale($lang);
        }
        return $next($request);
    }
}
