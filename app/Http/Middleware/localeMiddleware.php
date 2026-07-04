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
        $locals = config('info.locals');
        $lang = strtolower((string) Cookie::get('lang'));

        // If no valid language cookie is set, detect it from the browser.
        if(!in_array($lang,$locals)){
            $lang = $request->getPreferredLanguage($locals);
        }

        if(in_array($lang,$locals)){
            App::setLocale($lang);
        }
        return $next($request);
    }
}
