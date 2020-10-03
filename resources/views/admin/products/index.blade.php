@extends('admin.layouts.master')
@section('page')
    View Products
@endsection
@section('content')
              
  <div class="row">
                            @include('admin.layouts.meassage')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Products</h4>
                                <p class="category">List of all stock</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Desc</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @php
                                        $nom='';
                                    @endphp
                              @foreach($products as $product)
@php
    $nom++
@endphp
                                             <tr>
                                        <td>@php  echo$nom @endphp </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->desc}}</td>
                                        <td><img src="/uploades/{{ $product->image}}" alt="" class="img-thumbnail"
                                                 style="width: 70px"></td>
                                        <td>
                                        
                      <form method="POST" action="{{route('products.destroy',$product->id)}}" >
                       @csrf
                       @method('DELETE')
                  <button class="btn btn-sm btn-danger ti-trash" title="Delete"  type="submit" onclick="return confirm('are you sure Delete?')" ></button>
                          
                  <a class="btn btn-sm btn-info ti-pencil-alt" href="{{ route('products.edit', $product->id) }}" type="submit" title="Edit"></a>
                
              <a class="btn btn-sm btn-primary ti-view-list-alt"title="Details"  href="{{route('products.show',$product->id)}}"></a>
 </form>
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

