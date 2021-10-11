<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quotation;
class quotationController extends Controller
{
    public function index(){
        $data = [
            "quotations" => Quotation::get()
        ];
        return view('back.quotations',$data);
    }
}
