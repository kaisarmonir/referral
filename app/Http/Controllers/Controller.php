<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\review;
use App\Models\User;
use App\Models\earning;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $notice=order::where('user_id', auth()->user()->id)->latest()->first();
        $m=User::where('ref_id' , auth()->user()->id)->count();
        $earning=earning::where('user_id', auth()->user()->id)->first();
        $faq=faq::latest()->paginate(3);
        $review=review::latest()->paginate(3);

        return view('dashboard', compact('faq', 'review', 'earning', 'm', 'notice'));
    }

    public function admin()
    {
        $faq=faq::latest()->paginate(3);
        $review=review::latest()->paginate(3);

        return view('admin', compact('faq', 'review'));
    }




}
