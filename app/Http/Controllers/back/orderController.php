<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class orderController extends Controller
{
    public function index(){
        $data = [
            "orders" => Order::with(['demo'])->get()
        ];
        return view('back.orders',$data);
    }
}
