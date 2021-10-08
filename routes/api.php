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
    sleep(3);
    try {
        if(count(explode('.',$domain)) > 2){
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
            $data->message = __('front.Domain name is available');
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
