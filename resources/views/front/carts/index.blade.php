@extends('front.layouts.master')

@section('title')
        <title>Shopping Cart</title>

@endsection
@section('content')
   

    <h2 class="mt-5"><i class="fa fa-shopping-cart"></i> Shooping Cart</h2>
    <hr>
@if(Cart::instance('default')->count()>0)
    <h4 class="mt-5">{{Cart::instance('default')->count()}} items(s) in Shopping Cart</h4>
                                 @include('admin.layouts.meassage')

    <div class="cart-items">
        
        <div class="row">
            
            <div class="col-md-12">
                
                <table class="table">
                    
                    <tbody>
                        @foreach(Cart::instance('default')->content() as $item) 
                                    <tr>
                            <td><img src="/uploades/{{$item->model->image}}" style="width: 5em"></td>
                            <td>
                                <strong>{{$item->model->name}}</strong><br> {{$item->model->desc}}
                            </td>
                            
                            <td>
        <form action="{{route('shoppingCart.destroy',$item->rowId)}}" method="POST">
        @csrf
          @method('DELETE')
        <button class="btn btn-sm btn-link-dark"  type="submit" >Remove</button>
        </form>
                     <br>


                            </td>
                            
                            <td>
                                <select name="" id="" class="form-control" style="width: 4.7em">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                            
                            <td>${{$item->total()}}</td>
                        </tr>
                        @endforeach
                

                    </tbody>

                </table>

            </div>   
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Price Details</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>Subtotal </td>
                                        <td>${{Cart::subtotal()}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <td>${{Cart::tax()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <th>${{Cart::total()}}</th>
                                    </tr>
                             </table>           
                         </div>
                    </div>
                <!-- Save for later  -->
                <div class="col-md-12">
                    <a class="btn btn-outline-dark" href="/home">Continue Shopping</a>
                    <a class="btn btn-outline-info" href="{{route('checkOut.index')}}">Proceed to checkout</a>
                <hr>

                </div>

         
     </div>


  </div>
  @endif

@if(!Cart::instance('default')->count()>0)
<div class="alert alert-warning">No Products IN Shopping Cart !</div>
<hr>
   <div class="col-md-12">
                    <a class="btn btn-outline-dark" href="/home">Start Shopping</a>
                <hr>
@endif

@endsection