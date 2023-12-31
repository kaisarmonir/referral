<?php

namespace App\Http\Controllers;

use App\Models\bonus;
use Illuminate\Http\Request;

class BonusController extends Controller
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
     * @param  \App\Models\bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function show(bonus $bonus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function edit(bonus $bonus)
    {
        $bonus=bonus::find(1)->first();
        return view('livewire.pay' , compact('bonus'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bonus $bonus)
    {
        $bonus=bonus::find(1)->first();
        $request->validate([
            'f' => ['required', 'integer'],
            's' => ['required', 'integer'],
            't' => ['required', 'integer'],

        ]);

        $bonus->f=$request->f;
        $bonus->s=$request->s;
        $bonus->t=$request->t;
        $bonus->save();

        return redirect('bonus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bonus  $bonus
     * @return \Illuminate\Http\Response
     */
    public function destroy(bonus $bonus)
    {
        //
    }
}
