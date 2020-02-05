<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;	
    protected $table = 'product';

    protected $fillable = ['id', 'name','stok','harga'];
}
