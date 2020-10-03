@extends('admin.layouts.master')
@section('page')
    Add Product
@endsection
@section('content')
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                            </div>
                            <div class="content">
                            @include('admin.layouts.meassage')
                                <form   enctype="multipart/form-data" action="{{route('products.store')}}" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group {{$errors->has('name')? 'has-error' : ''}}">
                                                <label>Product Name:</label>
                                             <input type="text" class="form-control border-input" placeholder="Macbook pro" name="name">
                                             <span class="text-danger" >
                                             {{$errors->has('name')?$errors->first('name'): ''}}
                                             </span>

                                            </div>

                                            <div class="form-group  {{$errors->has('price')? 'has-error' : ''}}">
                                                <label>Product Price:</label>
                                             
                               <input type="text" class="form-control border-input" placeholder="$2500" name="price">
                                 <span class="text-danger" >
                                             {{$errors->has('price')?$errors->first('price'): ''}}
                                             </span>
                                           
 </div>
                                            <div class="form-group {{$errors->has('desc')? 'has-error' : ''}}">
                                                <label>Product Description:</label>
                                                <textarea   cols="30" rows="10" name="desc"
                                                          class="form-control border-input" placeholder="Product Description"></textarea>
                                                            <span class="text-danger" >
                                             {{$errors->has('desc')?$errors->first('desc'): ''}}
                                             </span>
                                            </div>

                                            <div class="form-group {{$errors->has('image')? 'has-error' : ''}}">
                                                <label>Product Image:</label>
                                                <input type="file" class="form-control border-input" name="image" id="image">
                                                <div id="thumb-output"></div>
                                                               <span class="text-danger" >
                                             {{$errors->has('image')?$errors->first('image'): ''}}
                                             </span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="submit">Add Product</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

