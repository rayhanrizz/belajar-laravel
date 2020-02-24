<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class welcomecontroller extends Controller
{
    public function index()
    {
    	$data = Product::all();
        return view('index', compact('data'));
    }
}
