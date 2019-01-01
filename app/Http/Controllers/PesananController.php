<?php

namespace App\Http\Controllers;

use Alert;
use App\Produk;
use App\Pesanan;
use Carbon\Carbon;
use App\Size;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesans = Pesanan::where('Status','Belum Dikembalikan')->get();
        $produks = Produk::all();
        return view('pesan.index',compact('pesans','produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = Produk::findOrFail($id);
        return view('pesan.tambah',compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Save', 'Good Job!')->autoclose('1700');

        $pesanans = new Pesanan;

        $pesanans->id_produk = $request->id_produk;
        $pesanans->No_Identitas = $request->No_Identitas;
        $pesanans->Nama_Pemesan = $request->Nama_Pemesan;
        $pesanans->Jenis_Kelamin = $request->Jenis_Kelamin;
        $pesanans->Alamat = $request->Alamat;
        $pesanans->No_Hp = $request->No_Hp;
        $pesanans->Tgl_Sewa = $request->Tgl_Sewa;
        $pesanans->Tgl_Haruskembali = $request->Tgl_Haruskembali;

        $date1 = new Carbon($request->Tgl_Sewa);
        $date2 = new Carbon($request->Tgl_Haruskembali);
        $hasil = "{$date1->diffInDays($date2)}";

        $produk = Produk::where('id', $pesanans->id_produk)->first();
        $produk->Status = "Disewa";
        $pesanans->Total_Sewa = $produk->Harga_Sewa;
        $produk->save();

        $size = Size::where('id',$pesanans->id_produk)->first();
        $size->Stok = $size->Stok - 1;
        $size->save();

        $pesanans->Jumlah_Hari = $hasil;
        $pesanans->Status = "Belum Dikembalikan";
        $pesanans->save();

        return redirect()->route('pesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }
}
