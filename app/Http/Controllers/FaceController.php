<?php

namespace App\Http\Controllers;

use App\Models\face;
use Illuminate\Http\Request;
use App\Models\paymentInfo;
use Illuminate\Support\Facades\Auth;

class FaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=face::all();
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

       face::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('face');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(face $face)
    {

        $course=$face;
        return view('livewire.faceEdit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(face $face)
    {
         if (Auth::check()){
        $course=$face;
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
    public function update(Request $request, face $face)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $face->name = $request->name;
            $face->title = $request->title;
            $face->price = $request->price;
            $face->description = $request->description;
            $face->save();


        return redirect('face');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function destroy(face $face)
    {
        $face->delete();
        return redirect('face');
    }
}
