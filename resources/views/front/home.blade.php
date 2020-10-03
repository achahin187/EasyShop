@extends('front.layouts.master')

@section('title')
        <title>Home</title>

@endsection

@section('content')


    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h5 class="display-3"><strong>Welcome,</strong></h5>
        <p class="display-4"><strong>SALE UPTO 50%</strong></p>
        <p class="display-4">&nbsp;</p>
        <a href="#" class="btn btn-warning btn-lg float-right">SHOP NOW!</a>
    </header>
                                 @include('admin.layouts.meassage')

    <!-- Page Features -->
     <div class="row text-center">

    @foreach($products as $product)
         
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="uploades/{{$product->image}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">
                       {{$product->desc}}
                    </p>
                </div>
                <div class="card-footer"> 
                    <strong>${{$product->price}}</strong> &nbsp;
                    @if(Auth::check())
                    <form   method="POST"  action="{{route('shoppingCart.store')}}" > 
                           @csrf
                           <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                           <input type="hidden" name="price" value="{{$product->price}}">
                              <button  type="submit" class="btn btn-primary btn-outline-dark">
                    <i class="fa fa-cart-plus "></i> Add ToCart    </button>
              
                        </form>
                     @else
           <button  type="submit" class="btn btn-primary btn-outline-dark"  onclick="return confirm('Login Now')">
                    <i class="fa fa-cart-plus "></i> Add ToCart    </button>
                     @endif
                   
                </div>
            </div>
        </div>
    @endforeach
        </div>

  


@endsection