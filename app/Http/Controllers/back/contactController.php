<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    public function index(){
        $data = [
            "contacts" => Contact::get()
        ];
        return view('back.contacts',$data);
    }
}
