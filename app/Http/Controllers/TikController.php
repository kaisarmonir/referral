<?php

namespace App\Http\Controllers;

use App\Models\tik;
use Illuminate\Http\Request;
use App\Models\paymentInfo;
use Illuminate\Support\Facades\Auth;

class TikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=tik::all();
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

       tik::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('tik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(tik $tik)
    {

        $course=$tik;
        return view('livewire.tikEdit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(tik $tik)
    {
        if (Auth::check()){
        $course=$tik;
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
    public function update(Request $request, tik $tik)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $tik->name = $request->name;
            $tik->title = $request->title;
            $tik->price = $request->price;
            $tik->description = $request->description;
            $tik->save();


        return redirect('tik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function destroy(tik $tik)
    {
        $tik->delete();
        return redirect('tik');
    }
}
