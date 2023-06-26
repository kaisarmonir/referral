<?php

namespace App\Http\Controllers;

use App\Models\academic;
use Illuminate\Http\Request;
use App\Models\paymentInfo;
use Illuminate\Support\Facades\Auth;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=academic::all();
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

       academic::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('academic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function show(academic $academic)
    {

        $course=$academic;
        return view('livewire.academicEdit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function edit(academic $academic)
    {
        if (Auth::check()){
        $course=$academic;
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
    public function update(Request $request, academic $academic)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $academic->name = $request->name;
            $academic->title = $request->title;
            $academic->price = $request->price;
            $academic->description = $request->description;
            $academic->save();


        return redirect('academic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\face  $face
     * @return \Illuminate\Http\Response
     */
    public function destroy(academic $academic)
    {
        $academic->delete();
        return redirect('academic');
    }
}
