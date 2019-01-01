<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['Nama_Pakaian','Spesifikasi_Pakaian','Harga_Sewa','Foto','Status','id_kategori','Size','Stok'];

    public $timestamp = true;

    public function kategori(){
    	return $this->belongsTo('App\Kategori','id_kategori');
    }
    public function size(){
    	return $this->hasMany('App\Size','id_produk');
    }
}
