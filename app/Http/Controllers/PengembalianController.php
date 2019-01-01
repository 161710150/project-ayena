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
class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kembali = Pesanan::where('Status','Sudah Dikembalikan')->get();
        $produkkembali = Produk::all();
        return view('pengembalian.index',compact('kembali','produkkembali'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesan = Pesanan::findOrFail($id);
        $produkkembali = Produk::all();
        return view('pengembalian.edit',compact('produkkembali','pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data Successfully Save', 'Good Job!')->autoclose('1700');
        $this->validate($request,[
            'Tgl_kembali' => 'required',
        ]);

        $kembali = Pesanan::findOrFail($id);

        $kembali->Tgl_kembali = $request->Tgl_kembali;

        $date1 = new Carbon($kembali->Tgl_Haruskembali);
        $date2 = new Carbon($request->Tgl_kembali);
        $hasil = "{$date1->diffInDays($date2)}";

        $produk = Produk::where('id', $kembali->id_produk)->first();
        $produk->Status = "Tidak";
        $produk->save();

        if ($date2 <= $date1) {
            $kembali->Telat = "Tepat Waktu";
        }
        elseif ($date2 > $date1)
        {
            $kembali->Telat = $hasil;
        }

        if ($date2 <= $date1) {
            $kembali->Denda = $hasil*0;
        }
        elseif ($date2 > $date1)
        {
            $kembali->Denda = $hasil*20000;
        }
        $kembali->Total_Sewa = $kembali->Denda + $kembali->Total_Sewa;
        $kembali->Status = "Sudah Dikembalikan";
        $kembali->save();

        $size = Size::where('id',$kembali->id_produk)->first();
        $size->Stok = $size->Stok + 1;
        $size->save();

        return redirect()->route('kembali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
