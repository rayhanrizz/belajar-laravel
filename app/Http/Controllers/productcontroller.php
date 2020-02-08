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
    	$this->validate($request, [
			'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
		]);
	 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('gambar');
	 
		$nama_file = time()."_".$file->getClientOriginalName();
	 
	    // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'image';
		$file->move($tujuan_upload,$nama_file);
	 
	 
		Product::create([
			'name' => $request->name,
			'stock' => $request->stock,
			'harga' => $request->harga,
			'gambar' => $nama_file,
		]);

    	// Product::create($request->all());
    	return redirect('Product');
    }
    public function edit($id)
    {
    	$product = Product::findOrFail($id);
    	return view('Product.edit', compact('product'));
    }
    public function update($id, Request $request)
    {
    	$nama_file = $request->hidden_image;
    	$file = $request->file('gambar');

    	if ($file !='') {
	    		$this->validate($request, [
				'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
			]);
	    		$nama_file = time()."_".$file->getClientOriginalName();
	    		$tujuan_upload = 'image';
				$file->move($tujuan_upload,$nama_file);
    	}else{
    		$request->validate([
    			'name' => 'required',
    			'stock' => 'required',
    			'harga' => 'required'
    		]);
    	}
		

		Product::whereId($id)->update([
			'name' => $request->name,
			'stock' => $request->stock,
			'harga' => $request->harga,
			'gambar' => $nama_file,
		]);
    	return redirect('Product');
    }
    public function delete($id)
    {
    	$product = Product::findOrFail($id);
    	$product->delete();
    	return redirect('Product');
    }
}
