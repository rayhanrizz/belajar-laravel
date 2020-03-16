<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;

use PDF;

class kategoricontroller extends Controller
{
    public function index(Request $request)
    {
    	$data = kategori::when($request->search, function($query) use($request){
            $query->where('nama_kategori', 'LIKE', '%'.$request->search.'%');
        })->paginate(10);
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
    public function edit($id_kategori)
    {
    	$kategori = kategori::findOrFail($id_kategori);
    	return view('Category.edit', compact('kategori'));
    }
    public function update($id, Request $request)
    {
		$kategori= kategori::findOrFail($id);
		$kategori->nama_kategori = $request->nama_kategori;
		$kategori->save();
    	return redirect('Category');
    }
    public function delete($id_kategori)
    {
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->delete();
    	return redirect('Category');
    }
    public function export_excel()
    {
        return Excel::download(new KategoriExport, 'kategori.xlsx');
    }
    public function cetak_pdf(){
        $data=kategori::all();
 
        $pdf = PDF::loadview('Category.kat_pdf', compact('data'));
        return $pdf->download('Laporan Kategori'.date('d-m-Y ').'on'.date(' h-ia').'.pdf');
    }
}
