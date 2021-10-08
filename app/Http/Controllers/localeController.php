<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Cookie;

class localeController extends Controller
{
    //

    public function setLocalse($lang,Request $request){

        $lang = strtolower($lang);
        if(in_array($lang,config('info.locals'))){
            Cookie::queue('lang', $lang);
            App::setLocale(Cookie::queue('lang', $lang));
            return redirect($request->header('referer', '/'));
        }
        else{
            // return redirect()->back();
        }
    }
}
