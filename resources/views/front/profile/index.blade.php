@extends('front.layouts.master')

@section('title')
        <title>Profile</title>

@endsection
@section('content')
    
<h2>User Profile</h2>

<table class="table table-bordered">
<thed>
<tr>
<th colspan="2">User Details
<a href="#"class="pull-right">
<i class="fa fa-cogs"></i>
Edit Profile </a>
</th>

</tr>
</thed>
        <tr>
            <th>ID</th>
            <td>{{$user->id}}</td>
        </tr>
         <tr>
            <th>Name</th>
            <td>{{$user->name}}</td>
        </tr>
         <tr>
            <th>Email</th>
            <td>{{$user->email}}</td>
        </tr>
         <tr>
            <th>Registered At</th>
            <td>{{$user->created_at}}</td>
        </tr>
</table>
    <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                                <p class="category">List of all orders</p>
                                                            @include('admin.layouts.meassage')

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                       <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($user->order as  $order)
                                       <tr> 

                                       <td>{{$order->id}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td>
                                        @foreach($order->products as  $item)
                                            
                                       <li>      {{$item->name}}</li>
                                        @endforeach
                                        
                                        
                                        </td>
                                        <td>
                                        @foreach($order->orderitems as  $item)
                                            <li>{{$item->quantity}}</li>
                                        @endforeach
                                        
                                        </td>
                                        <td>{{$order->address}}</td>
                                        <td>
                                        @if($order->status)
                                    <span class="label label-success">Confirmed</span>
                                        @else
                                 <span class="label label-warning">pending</span>
                                       @endif

                                        </td>
                                        <td>
                              <a  class="btn btn-primary" href="{{url('/user/order'.'/'.$order->id)}}" role="button">Details</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


  </div>
@endsection