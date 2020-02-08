<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;	
    protected $table = 'produk';

    protected $fillable = ['id', 'name','stock','harga','gambar'];

    public function kategori(){
    	return $this->hasOne('App\kategori');
    }
}
