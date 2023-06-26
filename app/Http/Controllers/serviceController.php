<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\paymentInfo;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=service::all();
        $course=$service;
        return view('livewire.course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



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

       service::create([
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,

        ]);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serveice  $serveice
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {


        return view('livewire.serviceEdit', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serveice  $serveice
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        if (Auth::check()){
            $course=$service;
            $paymentInfo=paymentInfo::find(1)->first();
            return view('livewire.courseorder', compact('course', 'paymentInfo'));
        }
      return redirect('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serveice  $serveice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'title' => ['required', 'string'],
            'price' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);


            $service->name = $request->name;
            $service->title = $request->title;
            $service->price = $request->price;
            $service->description = $request->description;
            $service->save();


        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serveice  $serveice
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();
        return redirect('service');
    }
}
