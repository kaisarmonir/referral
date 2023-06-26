<?php

namespace App\Http\Controllers;

use App\Models\paymentInfo;
use Illuminate\Http\Request;

class PaymentInfoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function show(paymentInfo $paymentInfo)
    {
        return view('livewire.paymentedit', compact('paymentInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(paymentInfo $paymentInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paymentInfo $paymentInfo)
    {
        $request->validate([
            'method' => ['required', 'string'],
            'number' => ['required', 'string'],

        ]);


            $paymentInfo->method = $request->method;
            $paymentInfo->number = $request->number;

            $paymentInfo->save();


        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paymentInfo  $paymentInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymentInfo $paymentInfo)
    {
        //
    }
}
