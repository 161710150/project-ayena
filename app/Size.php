<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['Nama','Stok','id_produk'];

    public $timestamp = true;

    public function produk(){
    	return $this->belongsTo('App\Produk','id_produk');
    }
}
