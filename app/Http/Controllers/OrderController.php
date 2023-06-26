<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\total;
use App\Models\faq;
use App\Models\review;
use App\Models\message;
use App\Models\earning;
use App\Models\bonus;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t=earning::sum('firstGen')+earning::sum('secondGen')+earning::sum('thirdGen');
        $w=earning::sum('withdraw');
        $total=total::find(1)->first();
        $faq=faq::latest()->paginate(3);
        $review=message::latest()->paginate(5);
        $orde=order::latest()->paginate(10);

        return view('admin', compact('faq', 'review', 'orde', 'total', 't', 'w'));
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
            'tran' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'price' => ['required', 'string'],
            'method' => ['required', 'string'],
        ]);

       order::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'price' => $request->price,
            'tran' => $request->tran,
            'method' => $request->method,
            'user_id' => Auth::id(),
            'status' => 'pending',
            'notice' => 'Thanks for your order, You will be notified about your order here',

        ]);
        return redirect('service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return view('livewire.notice', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {

        $faq=faq::latest()->paginate(3);
        $review=review::latest()->paginate(3);
        $list=order::all();

        return view('admin', compact('faq', 'review', 'order', 'list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {

        if ($request->notice){
            $order->notice = $request->notice;

            $order->save();
            return redirect('admin');
        }

        $total=total::find(1)->first();
        $total->total=$order->price+$total->total;
        $total->save();
        $bonus=bonus::find(1)->first();

        $first=earning::where('user_id' ,$request->user()->ref_id)->first();
        $first->firstGen=round($first->firstGen+$order->price*($bonus->f/100));
        $first->save();

        $s=User::findOrFail($request->user()->ref_id)->first()->ref_id;
        if ($s){
            $second=earning::where('user_id' ,$s)->first();
            $second->secondGen=round($second->secondGen+$order->price*($bonus->s/100));
            $second->save();

        }

        $t=User::findOrFail($s)->ref_id;
        if ($t){
            $third=earning::where('user_id' ,$t)->first();
            $third->thirdGen=round($third->thirdGen+$order->price*($bonus->t/100));
            $third->save();



        }

        $order->status = 'Approved';

            $order->save();


        return redirect('admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        $order->delete();
        return redirect('admin');
    }
}
