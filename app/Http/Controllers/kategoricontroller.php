<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class kategoricontroller extends Controller
{
    public function index()
    {
    	$data = kategori::paginate(10);
        return view('Category.kategori', compact('data'));
    }
    public function create()
    {
    	return view('Category.create');
    }
    public function store(Request $request)
    {
     	kategori::create($request->all());
    	return redirect('Category');
    }
    public function edit($id)
    {
    	$kategori = kategori::findOrFail($id);
    	return view('Category.edit', compact('kategori'));
    }
    public function update($id, Request $request)
    {
		$kategori= kategori::findOrFail($id);
		$kategori->nama_kategori = $request->nama_kategori;
		$kategori->product_id = $request->product_id;
		$kategori->save();
    	return redirect('Category');
    }
    public function delete($id)
    {
    	$kategori = kategori::findOrFail($id);
    	$kategori->delete();
    	return redirect('Category');
    }
}
