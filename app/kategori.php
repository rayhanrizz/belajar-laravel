<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ['id', 'nama_kategori','product_id'];

    public function produk() { 
      return $this->belongsTo('App\Product'); 
	}
}
