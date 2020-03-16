<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id', 'name','stock','harga','gambar','product_kategori'];

    public function kategori(){
    	return $this->belongsTo('App\kategori','product_kategori','id_kategori');
    }
}
