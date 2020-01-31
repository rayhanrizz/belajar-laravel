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
}
