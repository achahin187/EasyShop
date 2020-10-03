@extends('front.layouts.master')

@section('title')
        <title>Profile Details</title>

@endsection
@section('page')
    Order Details
@endsection
@section('content')
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Order Details</h4>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$order->id}}</td>
                                                    <td>{{$order->address}}</td>

                                                    <td>
                                                      @if($order->status)
                                                   <span class="label label-success">Confirmed</span>

                                                      @else
                                                        <span class="label label-warning">pending</span>

                                                      @endif
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">User Details</h4>
                                        <p class="category">User Details</p>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{$order->user->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$order->user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$order->user->email}}</td>
                                            </tr>
                                               <tr>
            <th>Registered At</th>
            <td>{{$order->user->created_at}}</td>
        </tr>
                                         
                        
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Product Details</h4>
                                        <p class="category">Product Details</p>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Image</th>
                                            </tr>
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>
                                                
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                @foreach($order->products as  $item)
                                                                    <li>{{$item->name}}</li>
                                                                @endforeach
                                                                
                                                                </td>
                                                            </tr>
                                                        </table>
                                                 
                                                </td>
                        
                                                <td>
                                                    
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    @foreach($order->products as  $item)
                                                                    <li>{{$item->price}}</li>
                                                                @endforeach
                                                                
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    
                                                </td>
                                                <td>
                                                    
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    @foreach($order->orderitems as  $item)
                                                                    <li>{{$item->quantity}}</li>
                                                                @endforeach
                                                                
                                                                </td>
                                                            </tr>
                                                        </table>

                                                </td>
                                                <td>
                                                    
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                
                                                             @foreach($order->products as  $item)
                                                        <li>    <img src="/uploades/{{$item->image}}" alt="" style="width: 3em"></li>
             
                                                                @endforeach

                                                                
                                                                
                                                                </td>
                                                            </tr>
                                                        </table>
                                                
                                                </td>
                                            </tr>
                        
                                        </table>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
            
@endsection

