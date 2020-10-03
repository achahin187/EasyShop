@extends('admin.layouts.master')
@section('page')
    Orders
@endsection
@section('content')
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
                                    
                                    @foreach($orders as  $order)
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
                                      @if($order->status)
                                        <a href="{{ route('order.pending',$order->id) }}" class="btn btn-sm btn-warning" > Pending</a>
                                      @else
                                    <a href="{{ route('order.confirm',$order->id) }}" class="btn btn-sm btn-success" >  Confirm</a>

                                      @endif
                                            <a class="btn btn-sm btn-primary ti-view-list-alt" href="{{route('orders.show',$order->id)}}"
                                                    title="Details"></a>
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

