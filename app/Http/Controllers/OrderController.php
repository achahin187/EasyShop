<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $orders=Order::all();
        return view('admin.orders.index',compact('orders'));
    }

  
    public function confirm($id){
        //find order
$order=Order::find($id);
        //update order
        $order->update([
            'status' => 1
        ]);

        //session msg
session()->flash('msg','order is now confirmed');
        //redirect
        return redirect('/admin/orders');

    }

  public function pending($id){
                //find order
$order=Order::find($id);
//update order
$order->update([
    'status' => 0
]);

//session msg
session()->flash('msg','order is now pending');
//redirect
return redirect('/admin/orders');
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
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        Order::find($order);
        return view('admin.orders.order_details',compact('order',$order));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}