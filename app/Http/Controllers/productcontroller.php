<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productcontroller extends Controller
{
    public function produk(Request $request)
    {
    	$data = Product::when($request->search, function($query) use($request){
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);
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
 //    public function cari(Request $request){
 //   		$cari = $request->cari;
 
 //    	// mengambil data dari table pegawai sesuai pencarian data
	// 	$data = Product::where('name','LIKE',"%".$cari."%")
	// 	->paginate(5);
 
 //    	// mengirim data pegawai ke view index
	// 	return view('Product.product',compact('data'));
	// }
}
