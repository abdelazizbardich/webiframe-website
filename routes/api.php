<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('domain-name/check/{domaine}', function (Request $request,$domain) {
    try {
        if(count(explode('.',$domain)) > 2 || !preg_match('/^(?:[-A-Za-z0-9]+\.)+[A-Za-z]{2,6}$/',$domain)){
            $data = (object)[];
            $data->success = true;
            $data->available = false;
            $data->valide = false;
            $data->message = __('front.Domain name is invalid');
            return response()->json($data, 200,$request->header());
        }
        if(checkdnsrr($domain,'ANY')){
            throw new Exception(__('front.Domain name is not available')." <strong>".__('front.try another name')."</strong>");
        }
        else {
            $data = (object)[];
            $data->success = true;
            $data->available = true;
            $data->price = 12;
            $data->message = __('front.Domain name is available').", <strong class=\"text-danger\">".__('front.for')." ".$data->price."$/".__('front.year')."</strong> <small class=\"text-success\">(".__('front.free for first year').")</small>";
            return response()->json($data, 200,$request->header());
        }

    } catch (Exception $err) {
        $data = (object)[];
        $data->success = false;
        $data->available = false;
        $data->message = $err->getMessage();
        return response()->json($data, 200,$request->header());
    }
});
