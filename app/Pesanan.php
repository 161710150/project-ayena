<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = ['id_produk','No_Identitas','Nama_Pemesan','Jenis_Kelamin','Alamat','No_Hp','Tgl_Sewa','Tgl_Haruskembali','Tgl_kembali','Jumlah_Hari','Telat','Denda','Total_Sewa','Status'];

    public $timestamp = true;

    public function produk(){
    	return $this->belongsTo('App\Produk','id_produk');
    }
}
