<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\paymentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=course::all();

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

       course::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        return view('livewire.courseEdit', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
         if (Auth::check()){
        $paymentInfo=paymentInfo::find(1)->first();
        return view('livewire.courseorder', compact('course', 'paymentInfo'));
         }
          return redirect('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $course->name = $request->name;
            $course->title = $request->title;
            $course->price = $request->price;
            $course->description = $request->description;
            $course->save();


        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        $course->delete();
        return redirect('course');
    }
}
