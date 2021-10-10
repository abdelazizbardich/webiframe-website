<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "demo_id" => "required|exists:demos,id",
            "full_domain" => "required",
            "seo" => "required",
            "lang" => "required",
            "s_lang" => "required",
            "newsletter" => "required"
        ]);
        $order = Order::create([
            "demo_id" => $request->demo_id,
            "full_domain" => $request->full_domain,
            "seo" => $request->seo,
            "f_lang" => $request->lang,
            "s_lang" => $request->s_lang,
            "newsletter" => $request->newsletter,
        ]);
        $order = $order->where('id',$order->id)->with(['demo'])->first();
        if($order){
            return view('front.finish-order',compact('order'));
        }else{
            return redirect()->back()->with(["orderError" => __('front.cannot send order')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request  $request,Order $order){
        $request->validate([
            "first_last_name" => "required",
            "who_you_are" => "required",
            "email" => "required",
            "phone" => "required|min:9",
            "approximate_budget" => "required",
            "due_date" => "required",
            "message" => "required"
        ]);
        $order->update([
            "first_last_name" => $request->first_last_name,
            "who_you_are" => $request->who_you_are,
            "email" => $request->email,
            "phone" => $request->phone,
            "approximate_budget" => $request->approximate_budget,
            "due_date" => $request->due_date,
            "message" => $request->message,
        ]);
        return view('front.order-confirmed',$order);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
