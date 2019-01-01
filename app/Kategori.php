<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['Nama'];

    public $timestamp = true;

    public function produk(){
    	return $this->hasMany('App\Produk','id_kategori');
    }
}
