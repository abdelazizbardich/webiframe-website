<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Cookie;
use Crypt;

class apiLocaleMiddleware
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
        $lang = explode('|',strtolower(Crypt::decrypt(Cookie::get('lang'), false)))[1];
        if(in_array($lang,config('info.locals'))){
            App::setLocale($lang);
        }
        return $next($request);
    }
}
