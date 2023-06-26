<?php

namespace App\Http\Controllers;

use App\Models\earning;
use App\Models\User;
use Illuminate\Http\Request;

class EarningController extends Controller
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
     * @param  \App\Models\earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function show(earning $earning)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function edit(earning $earning)
    {


        $user=User::where('id',$earning->user_id)->first();
        return view('livewire.earning' , compact('earning', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, earning $earning)
    {
        $earning->withdraw=$request->withdraw+$earning->withdraw;
        $earning->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\earning  $earning
     * @return \Illuminate\Http\Response
     */
    public function destroy(earning $earning)
    {
        //
    }
}
