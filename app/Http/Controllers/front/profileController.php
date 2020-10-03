<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\order;

class profileController extends Controller
{
    public function index(){
        //dd(auth()->user()->id);
        $id=auth()->user()->id;
       $user=User::where('id',$id)->first();
     

        return view('front.profile.index',compact('user'));
    }
    ///////////////////////
    public function show($id)
    {
        $order=order::find($id);
    return view('front.profile.details',compact('order'));
    }
}
