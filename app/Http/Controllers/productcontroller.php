<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\kategori;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use PDF;

class productcontroller extends Controller
{
    public function produk(Request $request)
    {
    	$data = Product::when($request->search, function($query) use($request){
            $query->where('name', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('stock', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('harga', 'LIKE', '%'.$request->search.'%')
                  ->orWhere('product_kategori', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);
        return view('Product.product', compact('data'));
    }
    public function create()
    {
        $data = kategori::all();
    	return view('Product.create', compact('data'));
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
            'product_kategori'=>$request->product_kategori,
		]);

    	// Product::create($request->all());
    	return redirect('Product');
    }
    public function edit($id)
    {
        $kategoris = kategori::all();
    	$product = Product::findOrFail($id);
    	return view('Product.edit', compact('product'))->with('kategoris', $kategoris);
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
    			'harga' => 'required',
                'product_kategori' => 'required'
    		]);
    	}
		

		Product::whereId($id)->update([
			'name' => $request->name,
			'stock' => $request->stock,
			'harga' => $request->harga,
			'gambar' => $nama_file,
            'product_kategori'=>$request->product_kategori,
		]);
    	return redirect('Product');
    }
    public function delete($id)
    {
    	$product = Product::findOrFail($id);
    	$product->delete();
    	return redirect('Product');
    }

    public function export_excel()
    {
        return Excel::download(new ProductExport, 'product.xlsx');
    }
    public function cetak_pdf(){
        $data=Product::all();
 
        $pdf = PDF::loadview('Product.product_pdf', compact('data'));
        return $pdf->download('Laporan Product'.date('d-m-Y ').'on'.date(' h-ia').'.pdf');
    }
}
