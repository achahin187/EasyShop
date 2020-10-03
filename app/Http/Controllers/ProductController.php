<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
return view('admin.products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form
$request->validate([
    'name' => 'required',
    'price' => 'required',
    'desc' => 'required',
    'image' => 'image|required',
]);
        //upload the image
if($request->hasFile('image')){
    $image=$request->image;
    $image->move('uploades',$image->getClientOriginalName());

}
        //save data into dataBase
Product::create([
'name' =>$request->name,
'price' =>$request->price,
'desc' =>$request->desc ,
'image' =>$request->image->getClientOriginalName()

]);

        //store a message to session
$request->session()->flash('msg','New Product Has Been Added');
        //redirect
        return redirect('admin/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        Product::find($product);
return view('admin.products.details',compact('product',$product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        Product::find($product);
        return view('admin.products.edit',compact('product',$product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
////find the product
        Product::find($product);

        /////validate
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'image' => 'image|required',
        ]);
////check if there in any image
if($request->hasFile('image')){

    if(file_exists(public_path('uploades/').$product->image)){
        unlink(public_path('uploades/').$product->image);
    }
}
////uploda new image
$image=$request->image;
$image->move('uploades',$image->getClientOriginalName());
$product->image=$request->image->getClientOriginalName();

//////updating the product
$product->update([
'name'=>$request->name,
'price'=>$request->price,
'desc'=>$request->desc,
'image'=>$product->image,
]);
///////////msg
session()->flash('msg','The Product Has Been Edited Successfullt !');
/////////redirect
return redirect('admin/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //delete the product
        $product->delete();
        //store session message
        session()->flash('msg','Product Deleted Successfully !');
        //redirect..->
return redirect('admin/products');
    }
}