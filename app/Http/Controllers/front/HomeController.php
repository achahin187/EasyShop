<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index(){
        
  $products=Product::inRandomOrder()->get();
return view('front.home', compact('products'));

    }

 
}
