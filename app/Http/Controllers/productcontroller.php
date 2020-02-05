<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productcontroller extends Controller
{
    public function produk()
    {
    	$data = Product::all();
    	return view('Product.product', compact('data'));
    }
    public function create()
    {
    	return view('Product.create');
    }
    public function store(Request $request)
    {
    	Product::create($request->all());
    	return redirect('Product');
    }
    public function edit($id)
    {
    	$product = Product::findOrFail($id);
    	return view('Product.edit', compact('product'));
    }
    public function update($id, Request $request)
    {
    	$product = Product::findOrFail($id);
    	$product->name=$request->name;
    	$product->stok=$request->stok;
    	$product->harga=$request->harga;
    	$product->save();
    	return redirect('Product');
    }
    public function delete($id)
    {
    	$product = Product::findOrFail($id);
    	$product->delete();
    	return redirect('Product');
    }
}
