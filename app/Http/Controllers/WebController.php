<?php

namespace App\Http\Controllers;

use App\Models\web;
use Illuminate\Http\Request;
use App\Models\paymentInfo;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=web::all();
        $course=$service;
        return view('livewire.course', compact('course'));
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
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

       web::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('web');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(web $web)
    {

        $course=$web;
        return view('livewire.webEdit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(web $web)
    {
        if (Auth::check()){
        $course=$web;
        $paymentInfo=paymentInfo::find(1)->first();
        return view('livewire.courseorder', compact('course', 'paymentInfo'));
        }
        return redirect('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, web $web)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $web->name = $request->name;
            $web->title = $request->title;
            $web->price = $request->price;
            $web->description = $request->description;
            $web->save();


        return redirect('web');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function destroy(web $web)
    {
        $web->delete();
        return redirect('web');
    }
}
