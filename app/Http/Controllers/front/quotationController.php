<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use Illuminate\Http\Request;

class quotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.quotation');
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
            "first_last_name" => "required",
            "who_you_are" => "required",
            "email" => "required",
            "phone" => "required",
            "your_need" => "required",
            "due_date" => "required",
            "approximate_budget" => "required",
            "message" => "required"
        ]);
        $quotation = Quotation::create([
            "first_last_name" => $request->first_last_name,
            "who_you_are" => $request->who_you_are,
            "email" => $request->email,
            "phone" => $request->phone,
            "your_need" => $request->your_need,
            "due_date" => $request->due_date,
            "approximate_budget" => $request->approximate_budget,
            "message" => $request->message
        ]);
        if($quotation){
            return view('front.quotation')->with(["success" => __('front.Request successfully received, we will contact you as soon as possible')]);
        }else{
            return view('front.quotation')->with(["error" => __('front.cannot send the request')]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
