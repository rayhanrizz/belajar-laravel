<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\kategori;
use App\User;

class welcomecontroller extends Controller
{
    public function index()
    {
    	$data = Product::limit(3)->get();
        return view('index', compact('data'));
    }
    public function product_list()
    {
    	$data = Product::all();
        return view('product_list', compact('data'));
    }
    public function countbrg()
    {
        $count = Product::count();
        $hitkat = kategori::count();
        $hitad = User::count();
        $data = Product::all()->where('product_kategori', '2');
        $shoes = Product::all()->where('product_kategori', '1');
        $pants = Product::all()->where('product_kategori', '5');
        $t = Product::all()->where('product_kategori', '3');
        $zh = Product::all()->where('product_kategori', '4');
        $hat = Product::all()->where('product_kategori', '6');
        return view('Dashboard.dashboard', compact('count','hitkat','hitad','data','shoes','pants','t','zh','hat'));
    }
}
